<?php
    $con = mysqli_connect("localhost", "root", "");
    $bd = mysqli_select_db($con, "projeto_biblioteca");

    if(isset($_GET["btn"])){
        $email = $_GET["email"];
        $senha = $_GET["senha"]; 
    }
    $consultar = "SELECT * FROM usuario WHERE email = '$email' && senha = $senha;";
    $consulta = mysqli_query($con, $consultar);
    $resultado = mysqli_num_rows($consulta);

        if($resultado == 0){
            echo "<script> alert('VOCÊ NÃO É CADASTRADO, VÁ PARA A TELA DE CADASTRO')</script>";
            echo "<button><a href='../projeto_biblioteca/cadastro.html'>Cadastrar</a></button>";
        }else{
            echo "<button><a href='../projeto_biblioteca/form.php'>Fazer login</a></button>";
        }
?>