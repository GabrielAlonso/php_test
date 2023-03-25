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

  var result_Val = convertCurrency((value * new_display).toFixed(2).toString());

  document.getElementById("total_price").innerHTML = result_Val;

  document.getElementById("display_total").innerHTML = new_display;
}

function get_Url() {
  var queryString = window.location.search;
  urlParams = new URLSearchParams(queryString);
  return urlParams.get("currency");
}


function convertCurrency(value) {
  if (get_Url() == "BRL") {
    result_Val = "R$ " + value.replace(".", ",");
  } else if (get_Url() == "USD") {
    result_Val = "$ " + value;
  } else if (get_Url() == "EUR") {
    result_Val = value.replace(".", ",") + " €";
  }
  return result_Val;
}


function convertCurrencyDB(value) {

  var value_cr = value.split(" ");

  if (get_Url() == "BRL") {
    result_Val = value_cr[1].replace(",", ".");
  } else if (get_Url() == "USD") {
    result_Val = value_cr[1];
  } else if (get_Url() == "EUR") {
    result_Val = value_cr[0].replace(",", ".");
  }
  return result_Val;
}