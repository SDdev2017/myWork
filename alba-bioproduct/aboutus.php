<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="main.css" type="text/css">
        <style>
            #content
            {
               width: 70%;
               height: 450px;
               background-color:rgba(255, 255, 255,0.6);
               margin-top: 100px;
               margin-left: 15%;
               box-shadow: 0px 5px 15px 0px rgba(0,0,0,0.15);
               display: inline-block;
               padding: 25px;
            }
            
            .about_us
            {
                width: 45%;
                margin-left: 3%;
                height: 100%;
               
                float: left;
            }
        </style>
    </head>
    <body>
        <?php
        $set = 4;
        require_once 'header.php';
        $aboutus_query = mysql_query("SELECT * FROM aboutus");
        $result = mysql_fetch_array($aboutus_query);
        ?>
        <div id="content">
            <img src="<?php echo $result['image']; ?>" width="50%" height="100%" style="float: left;">
            
            <div class="about_us">
                <h1 align="center" style="margin: 0px;color: #333333"><?php echo $pages[3]; ?></h1>
                <p style="font-size: 21px; line-height: 2.0; margin-top: 35px; text-indent: 50px;"><?php echo $result['description']; ?></p>
            </div>
        </div>
        
        <?php
        require_once 'footer.php';
        ?>      
    </body>
</html>
