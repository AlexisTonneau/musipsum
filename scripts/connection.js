$(document).ready(function () {
    $("#form_mail").submit(function (e) {
        var lang = $("#lang").val();
        e.preventDefault();
        console.log($("#id_mail").val());
        console.log(lang);
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
                    switch (lang) {
                        case 'fr':
                            $(".status").html("Mail ou mot de passe incorrect").show();
                            break;
                        case 'en':
                            $(".status").html("Incorrect credentials").show();
                            break;
                        case 'es':
                            $(".status").html("Credenciales incorrectas").show();
                            break;
                    }
                    $(".id_mail").css('border','1px solid red');
                    $("#id_mdp").css('border','1px solid red');
                    $(".id_mail:focus,.id_mail:hover").css('border','1px solid red');
                    $("#id_mdp:focus").css('border','1px solid red');
                }
                else {
                    switch (lang) {
                        case 'fr':
                            window.location.href = ("http://127.0.0.1/musipsum/fr/account");
                            break;
                        case 'en':
                            window.location.href = ("http://127.0.0.1/musipsum/en/account");
                            break;
                        case 'es':
                            window.location.href = ("http://127.0.0.1/musipsum/es/account");
                            break;
                    }
                    e.preventDefault();


                }

            }
        )
    })
});
console.log("Connection");
