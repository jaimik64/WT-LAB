$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

function place()
{
  var fn = document.getElementById("name").value;
    var tel = document.getElementById("mobile").value;
    var add = document.getElementById("address").value;

  if(fn.length != 0 && tel.length == 10 && add.length != 0){
      alert("Your Order Placed. You Shortly Receive Payment Link.");
      redirect();
  }else{
      alert("Enter Correct User Details.");
  }
}

function redirect() {
    window.location.assign("index.html");
}