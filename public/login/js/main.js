$(function() {
    // Muestra formulario Registro y oculta el de Login al dar click en botón Registro
    $("#singnin a.signup-image-link").click(function(){   // Detectar evento click en el botón Crea una cuenta nueva
        // Ocultar formulario Iniciar sesión
        $("section#singnin").hide();

        // Mostrar formulario Registro
        $("section#singnup").show();
    });

    // Muestra formulario Registro y oculta el de Login al dar click en botón Registro
    $("#singnup a.signup-image-link").click(function(){   // Detectar evento click en el botón Ya soy miembro
        // Mostrar formulario Iniciar sesión
        $("section#singnin").show();

        // Ocultar formulario Registro
        $("section#singnup").hide();
    });

});
