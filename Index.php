<html xmlns = "http://www.w3.org/1999/xhtml">
    <head>
        <title>Deposit Calculation Results</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="./Lab4Contents/css/bootstrap.min.css">
        <link rel="stylesheet" href="./Lab4Contents/fonts/"> 
        <link rel="stylesheet" href="./Lab4Contents/AlgCss/Site.css">
    </head>
    
    <body>
        <?php include("./Lab4Common/Header.php"); ?>
        <div class="container-fluid">
            <div class="row vertical-margin">
                <div class="col-md-12">
                    <h2>Welcome To Algonquin Bank</h2>
                </div>          
            </div>
            <div class="row vertical-margin">
                <div class="col-md-12">
                    <p>Algonquian Bank is the Algonquian College students most loved bank. We provide a set of tools for Algonquian Students to manage their finance.</p>
                </div>          
            </div>
            <div class="row vertical-margin">
                <div class="col-md-12">
                    <ul><li><a href="Disclaimer.php" >Deposit Calculator</a></li></ul>
                </div>          
            </div>
            
            <div class="row vertical-margin">
                <div class="col-md-12">
                    <p style="text-align: center; padding: 10px; color: white;">
                        &copy; Algonquin College 2010 – 
                        <?php date_default_timezone_set("America/Toronto"); print Date("Y"); ?>. 
                        All Rights Reserved
                    </p>
                </div>          
            </div>
            
            
        </div>

<?php include("./Lab4Common/Footer.php"); ?>
    </body>
</html>