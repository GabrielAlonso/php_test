async function send_shop() {

  var total_price = convertCurrencyDB($("#total_price").html());

  var sendInfo = {
    id_user: $("#id_user").val(),
    currency_type: get_Url(),
    total_price: total_price,
    id_prod: $("#id_prod").val(),
    amount: $('#display_total').html(),
  };

  await $.ajax({
    type: "POST",
    url: "app/shopping.php",
    dataType: "json",
    success: function (dt) {
      $("#confirmedPaymentModal").modal("show");
    },
    data: sendInfo,
  });
}
