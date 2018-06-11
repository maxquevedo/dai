$(document).ready(ini);

function ini(){
    $("#btnEmpresa").click(enviarDatos);
    $("#btnParticular").click(enviarDatos);
    $("#singin").click(validarSesion);
}
function enviarDatos(){
    var usuario = $("#usuario").val();
    var pass = $("#pass").val();

    $.ajax({
          url:"listaUsuarios.php",
        success:function(result){
            if(result =="true"){
                $("#resultado").html("se ha registrado el usuario correctamente");
            }else{
                $("#resultado").html("no se ha podido registrar el usuario correctamente");
            }
        },
        data:{
            usuario:usuario,
            pass:pass
        },
        type:"GET"
    });
}
function verificaLogin1(){

    var usuario = $("#usuario").val();
    var pass = $("#pass").val();

    $.ajax({
        url:"validarLogin1.php",
        success:function(result){
            if(result =="true"){
               document.location.href="admin.php";
            }else{
                $("#resultado").html("<div class='alert alert-danger' role='alert'><b>acceso denegado, </b>no se pudo comprobar el usuario</div>");
            }
        },
        data:{
            usuario:usuario,
            pass:pass
        },
        type:"POST"
    });

}
