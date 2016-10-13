<html xmlns = "http://www.w3.org/1999/xhtml">
    <head>
        <title>Disclamer</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
            <link rel="stylesheet" href="./Lab4Contents/css/bootstrap.min.css"/>
            <link rel="stylesheet" href="./Lab4Contents/fonts/"/> 
            <link rel="stylesheet" href="./Lab4Contents/AlgCss/Site.css"/>
    </head>

    <body>
        <?php include("./Lab4Common/Header.php"); ?>
         <?php
        if (isset($_POST["submit"])) {
            $terms = $_POST["termsCheckBox"];

            if ($terms == null) {
                $error = "You must accept terms and conditions";
            } else {

                session_start();

                $_SESSION["terms"] = $_POST["termsCheckBox"];
                header("Location: CustomerInfo.php");
            }
        }
        ?>
        <div class="container">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                <div class="row vertical-margin">
                    <div class="col-md-12 text-center">
                        <h2>Terms and Conditions</h2>
                    </div>          
                </div>
                <div class="row vertical-margin">
                    <div class="col-md-12">
                        <p>I agree to abide by the Bank's Terms and Conditions and rules in force and the changes there to in Terms and Conditions from time to time relating to my account
                            as communicated and made available on the Bank's Website
                           
                        </p>
                         <span style="color:red"><?php echo $error ?></span>
                        <p> <input type="checkbox" name="termsCheckBox">  I have read and agree with the terms and conditions</p>
                        
                       
                    </div>


                    <br/>
                    <button name="submit" type="submit" class="btn btn-primary">Start</button>
                </div>

            </form>

        </div>
       



        <?php include("./Lab4Common/Footer.php"); ?>
    </body>
</html>