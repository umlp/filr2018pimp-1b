// <!--
$(document).ready(function () {
    
    $(".navbar-toggler").click(function (event) {
        $(".navbar-collapse").toggle(200);
    });

    $("#contenu").click(function () {
        $(".navbar-collapse").hide(200);
        $(".dropdown-menu").hide(200);
    });

    $(".dropdown-toggle").click(function () {
        if ( $(this).attr('aria-expanded') === 'true' ) {
            $(this).attr('aria-expanded','false');
        } else {
            $(this).attr('aria-expanded','true');
        }
        $(".dropdown-menu").toggle(200);
    });

});
// -->