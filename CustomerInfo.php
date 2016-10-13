<html xmlns = "http://www.w3.org/1999/xhtml">
    <head>
        <title>Customer Information</title>
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <meta http-equiv="x-ua-compatible" content="ie=edge"/>
            <link rel="stylesheet" href="./Lab4Contents/css/bootstrap.min.css"/>
            <link rel="stylesheet" href="./Lab4Contents/fonts/"/> 
            <link rel="stylesheet" href="./Lab4Contents/AlgCss/Site.css"/>
    </head>
    <body>
        <?php include("./Lab4Common/Header.php"); ?>
        <?php
        session_start();
        if (isset($_SESSION["terms"])) {
            
        } else {
            header("Location: Disclaimer.php");
        }
        ?>
        <div class="container">
            <div class="content-center"><h2 class="content-center">Customer Information</h2></div>
            <br/>
            <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Name:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="name" name="name" 
                               value="<?php print $name ?>"/><span style="color:red"><?php print $nameValidateError ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="postCode">Postal Code:</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" id="postCode" name="postCode" 
                               value="<?php print $postCode ?>"/><span style="color:red"><?php print $postalCodeValidateError ?></span>
                    </div>

                </div>
                <div class="form-group" >
                    <label class="control-label col-sm-2" for="phone">Phone Number: </label>
                    <div class="col-sm-4">
                        <input class="form-control col-sm-4" type="text" id="phone" name="phone" 
                               value="<?php print $phone ?>"/><span style="color:red"><?php print $phoneValidateError ?></span>
                    </div>

                </div>
                <div class="form-group" >
                    <label class="control-label col-sm-2" for="email" >Email Address: </label>  
                    <div class="col-sm-4">
                        <input class="form-control col-sm-4" type="text" id="email" name="email" value="<?php print $email ?>"><span style="color:red"><?php print $emailValidateError ?></span>  
                    </div> 

                </div>
                <br/>
                <div class="col-sm-4">
                    <p >Preferred contact Method: <span style="color:red"><?php print $prefmethodError ?></span></p>                                                </p>

                </div>
               

                <div class="radio-inline " >
                    <label><input type="radio" name="prefMethod" value="phone" <?php print (isset($prefMethod) && $prefMethod == "phone") ? "checked" : ""; ?>/>Phone</label>
                </div>
                <div class="radio-inline">
                    <label><input type="radio" name="prefMethod" value="email" <?php print (isset($prefMethod) && $prefMethod == "email") ? "checked" : ""; ?>/> Email</label>  
                </div>
                   <br/> <br/>
                <div class="col-sm-12">
                    <p>If phone is selected, when can we contact you?<span style="color:red"><?php print $contactMethodError ?></span><br/>
                    (check all applicable)
                </p>
                </div>

                
                <div class="checkbox-inline col-sm-12">
                    <label class="col-sm-2"><input name="contactTime[]" type="checkbox" value="morning" <?php print(isset($contactTime) && in_array("morning", $contactTime)) ? "checked" : ""; ?>>Morning</label>
                    <label class="col-sm-2"><input name="contactTime[]" type="checkbox" value="afternoon" <?php print(isset($contactTime) && in_array("afternoon", $contactTime)) ? "checked" : ""; ?>>Afternoon</label>
                    <label class="col-sm-2"><input name="contactTime[]" type="checkbox" value="evening" <?php print(isset($contactTime) && in_array("evening", $contactTime)) ? "checked" : ""; ?>>Evening</label>
                </div><div><span style="color:red"><?php print($timeError); ?></span></div>
                <br/>
              
                <div class="col-sm-6">
                    <input class="btn btn-primary" type = "submit" name="submit" value = "Calculate" class="button" />
                    <button class="btn btn-primary" type="reset" value="Reset" class="button">Clear</button>
                </div>

            </form>




        </div>




        <?php include("./Lab4Common/Footer.php"); ?>
    </body>














