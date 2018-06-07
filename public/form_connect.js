// <!--
function activConnexion() {
    if( ($('#login').hasClass("is-valid") && $('#password').hasClass("is-valid")) ){
        $('#bouton_co').removeAttr("disabled");
    } else {
        $('#bouton_co').attr('disabled', 'disabled');
    }
} ;

function verifForm(element,regex,nomErr,messageErr) {
    $(element).focusin(function () {
        $(this).keyup(function () {                        
            var pattern = regex ; // /^[a-z0-9]+$/ 
            if (pattern.test($(this).val())) {
                $(this).removeClass("is-invalid");
                $(this).addClass("is-valid");
                $("#err_login").remove();
                activConnexion() ;
            } else {
                $(this).removeClass("is-valid");
                $(this).addClass("is-invalid");
                $("#"+nomErr).remove();
                $(this).parent().append("<div id=\"" + nomErr + "\" class=\"invalid-feedback\">" + messageErr + "</div>");
                activConnexion() ;
            }
        });
    });
} ;


$(document).ready(function () {
   
    var regex = /^[a-z0-9]+$/ ;
    var message = "Le login est composé de la première lettre de votre prénom puis votre nom complet" ;
    verifForm('#login',regex,"err_login",message);

    regex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,40})$/ ;
    message = "Le mot de passe doit comporter au moins une majuscule, une minuscule et un caractère spécial et doit faire entre 8 et 40 caractères" ;
    verifForm('#password',regex,"err_pass",message);

});

// -->