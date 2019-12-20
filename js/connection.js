$(document).ready(function () {
    $("#form_mail").submit(function (e) {
        e.preventDefault();
        console.log($("#id_mail").val());
        $.post(
            'http://127.0.0.1/musipsum/ajax/connection',
            {
                mail : $("#id_mail").val(),
                mdp : $("#id_mdp").val()
            },
            function (data) {
                console.log(data);
                if(data == 0){
                    console.log('failed');
                    $(".status").html("Mail ou mot de passe incorrect");
                    $(".status").show();
                }
                else {
                    window.location.href = ("http://127.0.0.1/musipsum/account");
                }

            }
        )
    })
})