function logar(){

    var login = document.getElementById('email').value;
    var senha = document.getElementById('password').value;

    if(login == "admin@gmail.com" && senha == "admin"){
        alert('Sucesso');
        location.href = "catalogo.php";
    }else{
        alert('Usuario ou senha incorretos');
    }

}