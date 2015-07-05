<?php 
    include('../m/connect.php');
    
    if(isset($_POST['submit'])){
        $user       =   $_POST['username'];
        $passwd     =   $_POST['passwd'];
        $query      =   "SELECT * FROM `dewa` WHERE `username` = '$user' and `level_user` = 1";        
        $pdo        =   $connect->prepare($query);
        $pdo->execute();
        
        $result     =   $pdo->fetch(PDO::FETCH_ASSOC);
        if($result['username'] == $user && $result['password'] == $passwd){
            session_start();
            $_SESSION['nama']   =   $result['username'];
            $_SESSION['status'] =   true;
            $_SESSION['id']     =   $result['id'];
            echo "hai";
                
        }
        else{
            echo "login gagal";
        }
    }    
    if($_SESSION['status'] = true){
        header("location:../index.php");
    }
    else{
        echo "Login Gagal";
    }
    
?>