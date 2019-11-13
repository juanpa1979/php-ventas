function salir_admin(){
    location.href="./";
}

function ingresar(){
    // var datos = $('.form-admin').serialize();
    var usuario_usuario = $('#usuario_usuario').val();
    var clave_usuario = $('#clave_usuario').val();
    console.log(usuario_usuario + " - " + clave_usuario);
    if(usuario_usuario.trim() === ''){
        alert('Usuario vacio');
        $('#usuario_usuario').select();
    } else if(clave_usuario.trim() === ''){
        alert('Clave vacia');
        $('#clave_usuario').select();
    } else {
        // validar en el servidor con la base datos
        location.href="./menu";
    }
    
}