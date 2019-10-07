<?php 
    include_once ("conexao.php");

    $barbeiro = $_POST['barbeiro'];
    $valor = $_POST['valor'];
    $dia = $_POST['dia'];
    $cliente = $_POST['cliente'];
    
    $sql = "INSERT INTO funcionarios (barbeiro, valor, dia, cliente) VALUES ('$barbeiro','$valor','$dia','$cliente')";
    $salvar = mysqli_query($conexao, $sql);
    echo "<script language='javascript'> window.location='index.php'; </script>";
    mysqli_close($conexao);
?>
    
    
    
    
    