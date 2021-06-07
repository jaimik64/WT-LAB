$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})
function validateForm()
{
  var fn = document.getElementById("fname").value;
  var ln = document.getElementById("lname").value;
  // alert(fn.length)
  if(fn.length != 0 && ln.length != 0){
      var mail = document.getElementById("mail").value;
      var x = mail.split("@");
      
      if(x[1] == 'nirmauni.ac.in' && x[0].length == 8){

          var id = x[0].split("");
          if( (id[0] >= '0' && id[0] <= '9') && (id[1] >= '0' && id[1] <= '9') && (id[5] >= '0' && id[5] <= '9') && (id[6] >= '0' && id[6] <= '9') && (id[7] >= '1' && id[7] <= '9')){
              if( (id[2] >= '0' && id[2] >= '9' || id[2] >= 'a' && id[2] <= 'z' || id[2] >= 'A' && id[2] <= 'Z') && (id[3] >= '0' && id[3] >= '9' || id[3] >= 'a' && id[3] <= 'z' || id[3] >= 'A' && id[3] <= 'Z') && (id[4] >= '0' && id[4] >= '9' || id[4] >= 'a' && id[4] <= 'z' || id[4] >= 'A' && id[4] <= 'Z') ){
                  
                  var password = document.getElementById("pas").value;
                  var repass = document.getElementById("repas").value;
              
                  if(password.length >= 8 && repass.length >= 8){
                      var result = password.match(/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,20}/);
                      if (password == repass) {
                        if (password == result) {
                            alert("registration Successfulll"); 
                        }else{
                            alert("Your password must contain atleast One Uppercase letter, One Lowercase letter And One Digit Only.");
                        }
                      } else {
                          alert("Both Passwords Must be Same.");
                      }
                      
                  }else{
                      alert("Password Length Must be More than 8");
                  }
              }
          }

      }else{
          alert("Enter Nirmauni Email-id Only Or Enter Correct Email-Id");
      }
  }else{
      alert("Enter Name");
  }
}
// ∙ First Name and Last Name should not be empty.
// ∙ Name fields should accept letters only.
// ∙ Email should be in the form of DDCCCDDD@nirmauni.ac.in , where D
// and C represent any digit and letter, respectively.
// ∙ Password must be a minimum of eight characters long consisting of
// a combination of uppercase letter, lowercase letter, and digits. ∙
// Password and re-type password must be the same.