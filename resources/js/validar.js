function validar() {
    var userName, name, surName, email, password, expression;
    userName = document.getElementById("userName").value;
    name = document.getElementById("name").value;
    surName = document.getElementById("surName").value;
    email = document.getElementById("email").value;
    password = document.getElementById("password").value;
    
    expression = /\w+@[a-z]+\.+[a-z]/;

    if(userName === "" || name === "" || surName === "" || email === "" || password === ""){
        alert("Todos los campos son obligatorios");
        return false;
    }

    else if(userName.length>8){
        alert("El nombre de usuario debe tener menos de 8 caracteres");
        return false;
    }

    else if(name.length>30){
        alert("El nombre debe tener menos de 30 caracteres");
        return false;
    }
    
    else if(surName.length>20){
        alert("El apellido debe tener menos de 20 caracteres");
        return false;
    }

    else if(email.length>20){
        alert("El email debe tener menos de 30 caracteres");
        return false;
    }

    else if(password.length>15){
        alert("La contraseña debe tener menos de 15 caracteres");
        return false;
    }

    else if(!expression.test(email)){
        alert("El correo no es válido");
        return false;
    }
}