<?php
require_once'./dbcon.php';
session_start();

 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="../js/jquery-3.5.1.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/dataTables.bootstrap4.min.js"></script>
<script src="../js/script.js"></script>



</head>

<body>
 

    <div class="container-fluid" style="margin-top:100px; min-height:590px;">
        <div class="row">
            <div class="col-sm-3">
                <div class="list-group">
                    <a href="index.php?page=dashborde" class="list-group-item active"> <i class="fa fa-dashboard"> </i> Dashboard</a>
                    <a href="index.php?page=add-student" class="list-group-item"> <i class="fa fa-user-plus"></i> Add product</a>
                    <a href=" index.php?page=all-student" class="list-group-item"> <i class="fa fa-user"></i> All product</a>
                 </div>
            </div>
            <div class="col-sm-9">
                <div class="content">
                  
                   <?php 
                     
                    if(isset($_GET['page'])){
                        $page = $_GET['page'].'.php';
                    }else{
                        $page = "dashborde.php";
                    }
                    
                    if(file_exists($page)){
                        require_once $page;
                    }else{
                        require_once '404.php';
                    }
                    
                    ?>
                   
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-area text-center bg-primary" style="height:55px;">
        <p class="py-3"> copy right @2024 student managment system All right Are Reserved! </p>
    </footer>

    <script src="../js/bootstrap.min.js"></script>


</body>

</html>