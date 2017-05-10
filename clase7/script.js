
function send(){
    // tomo las variables con jQuery..
    var user = $('#usuario').val();
    var pass = $('#pass').val();
    // console.log(user + ": " + pass);
    //si se ejecuta el archivo index.html haciendo doble click desde el archivo
    //en el escritorio.
    //El json puede tener las propiedades con o sin comillas: {"usuario": user, "pass": pass}
    //una forma de usar el $.post
    // $.post("login.php", { usuario: user, pass: pass }, function(data){
    //     // $( "result" ).html( data );
    //     $( "#result" ).css( {"display":"block"} );
    //     $( "#result" ).val( data );
    // });


    // ESTE ES EL BUENO **********************************
    //otra forma de usar el $.post
    // var retorno = $.post("validarUsuario.php", { usuario: user, pass: pass });
    // retorno.done(
    //     function(data){
    //     console.log(data);
    //
    // });

    // ESTA ES LA FORMA DE OC **********************
    var funcionAJAX = $.ajax(
        {
            type: 'POST',
            url: 'validarUsuario.php',
            data: { usuario: user, pass: pass },
        }
    );
    funcionAJAX.then( ajaxSuccess, ajaxError); // params: donecallbak, fail callback

    function ajaxSuccess(dato){
        console.log("ajaxSuccess: " + dato);
    }
    function ajaxError(error){
        console.log("ajaxError: " + error);
    }
}


function mostrar(){
    // tomo las variables con jQuery..
    var user = $('#usuario').val();
    var pass = $('#pass').val();
    // console.log(user + ": " + pass);
    //si se ejecuta el archivo index.html haciendo doble click desde el archivo
    //en el escritorio.
    //El json puede tener las propiedades con o sin comillas: {"usuario": user, "pass": pass}
    //una forma de usar el $.post
    // $.post("login.php", { usuario: user, pass: pass }, function(data){
    //     // $( "result" ).html( data );
    //     $( "#result" ).css( {"display":"block"} );
    //     $( "#result" ).val( data );
    // });


    // ESTE ES EL BUENO **********************************
    //otra forma de usar el $.post
    // var retorno = $.post("validarUsuario.php", { usuario: user, pass: pass });
    // retorno.done(
    //     function(data){
    //     console.log(data);
    //
    // });

    // ESTA ES LA FORMA DE OC **********************
    var funcionAJAX = $.ajax(
        {
            type: 'POST',
            url: 'mostrar.php',
            data: { usuario: user, pass: pass },
        }
    );
    funcionAJAX.then( ajaxSuccess, ajaxError); // params: donecallbak, fail callback

    function ajaxSuccess( dato ){
        $("#mostrar").html( dato );
        // $('#usuario').val("sarasa");
        console.log("ajaxSucces: " + dato);
    }
    function ajaxError( error ){
        console.log("ajaxError: " + error);
    }
}

function logout(){
    // tomo las variables con jQuery..
    var user = $('#usuario').val();
    var pass = $('#pass').val();
    // console.log(user + ": " + pass);
    //si se ejecuta el archivo index.html haciendo doble click desde el archivo
    //en el escritorio.
    //El json puede tener las propiedades con o sin comillas: {"usuario": user, "pass": pass}
    //una forma de usar el $.post
    // $.post("login.php", { usuario: user, pass: pass }, function(data){
    //     // $( "result" ).html( data );
    //     $( "#result" ).css( {"display":"block"} );
    //     $( "#result" ).val( data );
    // });


    // ESTE ES EL BUENO **********************************
    //otra forma de usar el $.post
    // var retorno = $.post("validarUsuario.php", { usuario: user, pass: pass });
    // retorno.done(
    //     function(data){
    //     console.log(data);
    //
    // });

    // ESTA ES LA FORMA DE OC **********************
    var funcionAJAX = $.ajax(
        {
            url: 'logout.php',
        }
    );
    funcionAJAX.then( ajaxSuccess, ajaxError); // params: donecallbak, fail callback

    function ajaxSuccess(dato){
        console.log("ajaxSuccess: " + dato);
    }
    function ajaxError(error){
        console.log("ajaxError: " + error);
    }
}



// setTimeout(function(){
        //     if(data == "OK"){
        //         window.location.replace("ingreso.html");
        //     }
        // }, 3000);

// localStorage.setItem("usuario", user);
// window.location.replace("ingreso.html");
/*
el $.get y el $.post permite pasar los parametros como un json en lugar de pasarlo
como tipo clave valor (como url) ya sea que se envie por post o por get.
el objeto ajax no permite eso.
El objeto ajax no permite pasar parametros por json.
*/
