<html xmlns = "http://www.w3.org/1999/xhtml">
    <head>
        <title>Customer Information</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="./Lab4Contents/css/bootstrap.min.css">
        <link rel="stylesheet" href="./Lab4Contents/fonts/"> 
        <link rel="stylesheet" href="./Lab4Contents/AlgCss/Site.css">
    </head>
    <body>
        <?php include("./Lab4Common/Header.php"); ?>
        <?php 
        session_start();
        if(isset($_SESSION["terms"])){
           
        }
        else{
            header("Location: Disclaimer.php"); 
        }
        ?>
        <div class="container-fluid">
            
        </div>
        
        
        
        
        <?php include("./Lab4Common/Footer.php"); ?>
    </body>














