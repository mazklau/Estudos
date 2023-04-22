<?php
session_start();
include "conexao.php";

if($_SESSION['nivel'] == "admin"){ 

    header("Location:admin/index.php");

}elseif($_SESSION['nivel'] == "usuario"){

    header("Location:usuario/index.php");

}else{
    echo "loga ai po";
}
?>