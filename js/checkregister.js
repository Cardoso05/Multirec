function validaRegister(register) {

    var anUpperCase = /[A-Z]/;
    var aLowerCase = /[a-z]/;
    var numbers = /[0-9]/;
    var aSpecial = /[!|@|#|$|%|^|&|*|(|)|-|_]/;
    var name = register.c_name.value;
    var email = register.c_email.value;
    var pass = register.c_pass.value;
    var country = register.c_country.value;
    var city = register.c_city.value;
    var contact = register.c_contact.value;
    var address = register.c_address.value;

    if (
        pass == "" ||
        pass == null ||
        pass.length < 7
    ) {
        alert("Preencha um senha correta");
        return false;
    }
    if (
        pass.search(anUpperCase) == -1 ||
        pass.search(aLowerCase) == -1 ||
        pass.search(aSpecial) == -1 ||
        pass.search(numbers) == -1 ||
        pass.indexOf("select") > -1 ||
        pass.indexOf("delete") > -1 ||
        pass.indexOf("insert") > -1 ||
        pass.indexOf("drop") > -1 ||
        pass.indexOf("=") > -1 ||
        pass.indexOf("select") > -1

    ) {
        alert("Preencha uma senha correta");
        return false;

    }

    if (
        name == "" ||
        name == null ||
        name.length < 3
    ) {
        alert("Preencha um nome correto");
        return false;
    }
    if (
        name.indexOf("select") > -1 ||
        name.indexOf("delete") > -1 ||
        name.indexOf("insert") > -1 ||
        name.indexOf("drop") > -1 ||
        name.indexOf("=") > -1 ||
        name.indexOf("select") > -1

    ) {
        alert("Preencha um nome correto");
        return false;

    }
    if (
        email == "" ||
        email == null ||
        email.length < 3
    ) {
        alert("Preencha um email correto");
        return false;
    }
    if (
        email.indexOf("select") > -1 ||
        email.indexOf("delete") > -1 ||
        email.indexOf("insert") > -1 ||
        email.indexOf("drop") > -1 ||
        email.indexOf("=") > -1 ||
        email.indexOf("select") > -1

    ) {
        alert("Preencha um email correto");
        return false;

    }
    if (
        country == "" ||
        country == null ||
        country.length < 3
    ) {
        alert("Preencha um pais correto");
        return false;
    }
    if (
        country.indexOf("select") > -1 ||
        country.indexOf("delete") > -1 ||
        country.indexOf("insert") > -1 ||
        country.indexOf("drop") > -1 ||
        country.indexOf("=") > -1 ||
        country.indexOf("select") > -1

    ) {
        alert("Preencha um pais correto");
        return false;

    }
    if (
        city == "" ||
        city == null ||
        city.length < 3
    ) {
        alert("Preencha um cidade correto");
        return false;
    }
    if (
        city.indexOf("select") > -1 ||
        city.indexOf("delete") > -1 ||
        city.indexOf("insert") > -1 ||
        city.indexOf("drop") > -1 ||
        city.indexOf("=") > -1 ||
        city.indexOf("select") > -1

    ) {
        alert("Preencha um cidade correta");
        return false;

    }
    if (
        contact == "" ||
        contact == null ||
        contact.length < 8
    ) {
        alert("Preencha um nome correto");
        return false;
    }
    if (
        contact.indexOf("select") > -1 ||
        contact.indexOf("delete") > -1 ||
        contact.indexOf("insert") > -1 ||
        contact.indexOf("drop") > -1 ||
        contact.indexOf("=") > -1 ||
        contact.indexOf("select") > -1

    ) {
        alert("Preencha um contato correto");
        return false;

    }
    if (
        address == "" ||
        address == null ||
        address.length < 10
    ) {
        alert("Preencha um nome correto");
        return false;
    }
    if (
        address.indexOf("select") > -1 ||
        address.indexOf("delete") > -1 ||
        address.indexOf("insert") > -1 ||
        address.indexOf("drop") > -1 ||
        address.indexOf("=") > -1 ||
        address.indexOf("select") > -1

    ) {
        alert("Preencha um endereço correto");
        return false;

    }



}