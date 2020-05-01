<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="main.css" type="text/css">
        <title></title>
        <style>
            #content
            {
                width: 32%;
                height: 450px;
                margin-left: 28%;
                margin-right: 20%;
                background-color:rgba(255, 255, 255,0.6);
                margin-top: 100px;
                padding: 30px 40px;
                box-shadow: 0px 5px 15px 0px rgba(0,0,0,0.15);
            }
            
            h2
            {
                color: #333333; 
            }
            
            .form
            {
                width: 100%;
            }
            
            input[type=text], label
            {
                height: 25px;
                border: 0px;
            }
            
            input[type=text], textarea
            {
                width: 80%;
                float: right;
                border-radius: 4px;
                border: 1px solid black;
                padding-left: 5px;
            }
            
            input, textarea:focus
            {
                outline: 0px;
            }
            
            input, textarea, label
            {
                margin-top: 30px;
            }
            
            label
            {
                float: left;
                color: #333333;
                
               
            }
            textarea
            {
                height: 80px;
            }
            
            input[type=submit]
            {
                cursor: pointer;
                background-color:rgba(255, 255, 255,0.6);
                padding: 10px;
                width: 80%;
                border-radius: 8px;
                border: 1px solid black;
                color: #333333;
                margin-left: 10%;       
                font-size: 16px;
                font-weight: bold;
            }
            
            input[type=submit]:hover
            {
                 background-color:rgba(255, 255, 255,0.9);
            }
        </style>
    </head>
    <body>
       <?php
       $set = 5;
       require_once 'header.php';
       
       ?>
        <div id="content">
            <h2><?php echo $form[5]; ?></h2>
            <div class="form">
                <form action="sendemail.php" method="post">
                <label><?php echo $form[1]; ?></label><input type="text" class="form_element" name="name"><br>
                <label><?php echo $form[3]; ?></label><input type="text" class="form_element" name="email"><Br>
                <label><?php echo $form[2]; ?></label><input type="text" class="form_element" name="phone"><br>
                <label style="margin-top: 40px;"><?php echo $form[4]; ?></label><textarea class="form_element" name="message"></textarea><br>
                <input type="submit" name="Submit" value="<?php echo $contacts[5]; ?>">
                </form>
            </div>
                 
        </div>
       <?php
       require_once 'footer.php';
        ?>
    </body>
</html>
