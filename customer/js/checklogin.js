function validaLogin(login) {

    if (login.c_email.value.indexOf("@") == -1 || login.c_email.value == "" || login.c_email.value == "null" || login.c_email.value == null) {
        login.c_email.focus();
        alert("Preencha o email corretamente");
        return false;
    }
    if (login.c_pass.value == "null") {
        login.c_pass.focus();
        alert("Preencha a senha corretamente");
        return false;
    }
}