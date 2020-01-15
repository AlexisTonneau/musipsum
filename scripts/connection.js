$(document).ready(function () {
    $("#form_mail").submit(function (e) {
        e.preventDefault();
        console.log($("#id_mail").val());
        $.post(
            'http://127.0.0.1/musipsum/fr/ajax/connection',
            {
                mail : $("#id_mail").val(),
                mdp : $("#id_mdp").val()
            },
            function (data) {
                console.log(data);
                if(data == 0){
                    console.log('failed');
                    $(".status").html("Mail ou mot de passe incorrect").show();
                    $(".id_mail").css('border','1px solid red');
                    $("#id_mdp").css('border','1px solid red');
                    $(".id_mail:focus,.id_mail:hover").css('border','1px solid red');
                    $("#id_mdp:focus").css('border','1px solid red');

                }
                else {
                    window.location.href = ("http://127.0.0.1/musipsum/fr/account");
                }

            }
        )
    })
});
console.log("Connection");
