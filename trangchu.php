<?php
session_start();
if(!isset( $_SESSION['email'])){
    header("location:Nhapvo.php");
}

?>
?<h1>Wellcom</h1>
<a href="logout.php">
    <button type="submit" name="dangxuat"> Logout</button>
</a>