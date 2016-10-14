jQuery(document).ready(function () {
    var tam = jQuery("#titulo").offset().top + jQuery("#titulo").height() + jQuery("#titulo").css("margin-bottom");
    jQuery("#fundo").css("height", tam);
    var style_c = {
        "border-bottom": "1px solid #FFC0CB",
        "box-shadow": "0 1px 0 0 #FFC0CB"
    };
    var style_e = {
        "border-bottom": "1px solid rgb(244, 67, 54)",
        "box-shadow": "0 1px 0 0 rgb(244, 67, 54)"
    };
    jQuery(".row .input-field input").css(style_c);
    jQuery(".input-field input + label").css("color", "#FFC0CB");
    jQuery("#email").blur(function () {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (regex.test(jQuery("#email").val()) == false || jQuery("#email").val() == "") {
            jQuery(".input-field input[type='text'] + label").css("color", "red");
            jQuery(".row .input-field input[type='text']").css(style_e);
        } else {
            jQuery(".input-field input[type='text'] + label").css("color", "#FFC0CB");
            jQuery(".row .input-field input[type='text']").css(style_c);
        }
    });
    jQuery("#password").blur(function () {
        if (jQuery("#password").val() == "") {
            jQuery(".input-field input[type='password'] + label").css("color", "red");
            jQuery(".row .input-field input[type='password']").css(style_e);
        } else {
            jQuery(".input-field input[type='password'] + label").css("color", "#FFC0CB");
            jQuery(".row .input-field input[type='password']").css(style_c);
        }
    });
    jQuery("#fLogin").submit(function (event) {
        if (jQuery("#email").val() == "" || jQuery("#password").val() == "") {
            if (jQuery("#email").val() == "" && jQuery("#password").val() == "") {
                jQuery(".input-field input + label").css("color", "red");
                jQuery(".row .input-field input").css(style_e);
            } else if (jQuery("#email").val() == "") {
                jQuery(".input-field input[type='text'] + label").css("color", "red");
                jQuery(".row .input-field input[type='text']").css(style_e);
            } else if (jQuery("#password").val() == "") {
                jQuery(".input-field input[type='password'] + label").css("color", "red");
                jQuery(".row .input-field input[type='password']").css(style_e);
            }
            event.preventDefault();
        }
    });

});


