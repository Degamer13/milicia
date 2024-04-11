function validarContraseña() {
    var contraseña = document.getElementById("contraseña").value;
    var mayuscula = /[A-Z]/;
    var minuscula = /[a-z]/;
    var numero = /[0-9]/;
    var caracter = /[$@$!%*?&._,]/;

    if (contraseña.length < 8 || contraseña.length > 15) {
        alert("La contraseña debe tener entre 8 y 15 caracteres");
        return false;
    }
    if (!mayuscula.test(contraseña)) {
        alert("La contraseña debe tener al menos una letra mayúscula");
        return false;
    }
    if (!minuscula.test(contraseña)) {
        alert("La contraseña debe tener al menos una letra minúscula");
        return false;
    }
    if (!numero.test(contraseña)) {
        alert("La contraseña debe tener al menos un número");
        return false;
    }
    if (!caracter.test(contraseña)) {
        alert("La contraseña debe tener al menos un caracter especial ($@$!%*?&)");
        return false;
    }
    return true;
}