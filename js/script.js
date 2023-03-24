if (document.getElementById("total_pr") != null) {
  document.getElementById("total_price").innerHTML =
    document.getElementById("total_pr").innerHTML;
}

var getLast = localStorage.getItem("currency");
var select = document.querySelector("#currency_atual");
select.value = getLast;

select.onchange = function () {
  lastSelected = select.options[select.selectedIndex].value;
  localStorage.setItem("currency", lastSelected);
  location.href = "product_page.php?currency=" + lastSelected;
};

function addCart(id) {
  var total_price = document.getElementById("total_pr").innerHTML;
  var display = document.getElementById("display_total").innerHTML;

  var total_price_split = total_price.split(" ");

  if (get_Url() == "EUR") {
    var value = parseFloat(total_price_split[0].replace(",", "."));
  } else {
    var value = parseFloat(total_price_split[1].replace(",", "."));
  }

  var n_display = parseInt(display);

  if (id == "plus_prod") {
    var new_display = n_display + 1;
  } else {
    if (n_display > 1) {
      var new_display = n_display - 1;
    } else {
      return;
    }
  }
  var value_final = (value * new_display).toFixed(2).toString();

  if (get_Url() == "BRL") {
    result_Val = "R$ " + value_final.replace(".", ",");
  } else if (get_Url() == "USD") {
    result_Val = "$ " + value_final;
  } else if (get_Url() == "EUR") {
    result_Val = value_final.replace(".", ",") + " €";
  }

  document.getElementById("total_price").innerHTML = result_Val;

  document.getElementById("display_total").innerHTML = new_display;
}

function get_Url() {
  var queryString = window.location.search;
  urlParams = new URLSearchParams(queryString);
  return urlParams.get("currency");
}
