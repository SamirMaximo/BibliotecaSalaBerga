<?php
    include_once("Autenticacao.class.php");
    
    $con = mysqli_connect("localhost", "root", "");
    $bd = mysqli_select_db($con, "projeto_biblioteca");

    if(isset($_GET["btn"])){
        $cpf = $_GET["cpf"];
        $senha = $_GET["senha"];
        $rg = $_GET["rg"];
        $email = $_GET["email"];
    }
    
    $consulta = "SELECT * from usuario where email = '$email';";
    $consultar = mysqli_query($con, $consulta);

    $resultado = mysqli_num_rows($consultar);
    if($resultado > 0 ){
        echo "<script> alert('JÁ FOI CADASTRADO, VÁ PARA A TELA DE LOGIN')</script>";
        echo "<button><a href='../login/login.php'>Fazer login</a></button>";
    }else{
        $registro = "INSERT into usuario (id,email,senha,cpf,rg) VALUES(null,'$email',$senha,$rg,'$cpf');";
        $registrar = mysqli_query($con, $registro);
        echo "<script> alert('CADASTRO CONCLUIDO COM SUCESSO')</script>";
        echo "<button><a href='../projeto_biblioteca/form.php'>HOME</a></button>";
    }

?>