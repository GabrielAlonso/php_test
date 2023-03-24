var getLast = localStorage.getItem('currency');
var select = document.querySelector('#currency_atual');
select.value = getLast;

select.onchange = function () {
   lastSelected = select.options[select.selectedIndex].value;
   localStorage.setItem('currency', lastSelected);
 };