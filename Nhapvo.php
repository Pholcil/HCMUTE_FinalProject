<?php
session_start();
if( isset($_SESSION['email'])){
    header('location: trangchu.php');
}
if(isset($_POST['dangnhap'])) {
    $email=$_POST['email'];
    $email=$_POST['email'];
    $password = $_POST['password'];
    
    if($email == 'HCMUTE' && $password == '123456')
    {
        $_SESSION['email'] = $email;
        header("location:trangchu.php");
    }else{
        header("location:Nhapvo.php");
        echo "Sai ROi";
       
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BlockChain</title>
    <link rel="stylesheet" href="style.css">
    

</head>
<body>
   
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo"> Electric Payment</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SERVICE</a></li>
                    
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>
            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To Text">
                <a href="#"><button class="btn">Search</button></a>
            </div>
            
        </div>
        <div class="content">
            <h1><br><span>HCMUTE</span>  <br>BLOCKCHAIN</h1>
            <p class="par">Nhanh chóng - Tiện lợi - An Toàn</p>
            <button class="cn"><a href="#">JOIN US</a></button>
            <div class="form" >
                <h2>Login Here</h2>
                <form action="Nhapvo.php" method="POST">
                <input type="text" name="email" placeholder="Enter Username Here" >
                <input type="password" name="password" placeholder="Enter Password Here">
                <button class="btnn" type="submit" name="dangnhap">Login</button> 
                
                </form>
                
            </div>
        </div>
    </div>
</body>  
</html>