function validateEmail(email) {
    var regExp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regExp.test(email);
}

const connexionForm = document.getElementsByClassName("mail");
const emailBox = document.getElementsByClassName("id_mail");

connexionForm.addEventListener('input',function (e) {
   var value = e.target.value;
   alert(value);
   if (!validateEmail(value) && value!=null){

       emailBox.style.border = ("2px solid red");

    }
    
})

function checkForm() {
    return  window.confirm('Cette opération est irréversible...')

}
