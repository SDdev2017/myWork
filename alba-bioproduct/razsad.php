<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link rel="stylesheet" type="text/css" href="main.css">
        <style>
             #content
           {
               width: 70%;
               height: 100%;
               background-color:rgba(255, 255, 255,0.6);
               margin-top: 100px;
               margin-left: 15%;
               box-shadow: 0px 5px 15px 0px rgba(0,0,0,0.15);
               display: inline-block;
               padding: 10px;
           }
           
        
           
           .period_of_seedling
           {
             
               z-index: 1;
               opacity: 0.0;
               -webkit-transition: all 500ms ease-in-out;
               -moz-transition: all 500ms ease-in-out;
               -ms-transition: all 500ms ease-in-out;
               -o-transition: all 500ms ease-in-out;
               transition: all 500ms ease-in-out;
               height: 50px;
               width: 240px;
               background-color:rgba(255, 255, 255,0.6);
               padding: 10px 5px;
              color: #333333;
             
              position: relative;
             bottom: 74px;
           }
           
           .has_description:hover + .period_of_seedling
           {
               opacity: 1.0;
               
           }
           
           h3, p
           {
               margin: 0px;
               
           }
           
           .other_imgs
           {
              
               width: 99%;
               padding-left: 33px;
               float: left;
               margin-top: 25px;
           }
           
           .description
           {
               width: 45%;
               margin-left: 3%;           
               float: left;
               height: 500px;
           }
           
           p
           {
               color: #333333;
               font-size: 18px;
               line-height: 1.5;
               text-indent: 35px;
           }
           
            .modal 
            {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                padding-top: 100px; /* Location of the box */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
               background-color:rgba(255, 255, 255,0.6); /* Black w/ opacity */
            }

            .modal-content 
            {
                margin: auto;
                display: block;
                width: 80%;
                max-width: 700px;
            }
            
            .modal-content, #caption 
            {    
                -webkit-animation-name: zoom;
                -webkit-animation-duration: 0.6s;
                animation-name: zoom;
                animation-duration: 0.6s;
            }

            @-webkit-keyframes zoom {
                from {-webkit-transform: scale(0)} 
                to {-webkit-transform: scale(1)}
            }

            @keyframes zoom {
                from {transform: scale(0.1)} 
                to {transform: scale(1)}
            }
            
            .close 
             {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
            }

            .close:hover,
            .close:focus 
            {
                color: #bbb;
                text-decoration: none;
                cursor: pointer;
            }
            
            img
            {
                cursor: pointer;
            }
            
            .main_img_box
            {
                width:50%; 
               height: 500px;
               float: left;
            }
            
            .main_img
            {
                width: 100%;
                height: 100%;
            }
        </style>
    </head>
    <body>
        <?php
        $set = 3;
        require_once 'header.php';
        $result_cats = mysql_query("SELECT * FROM cats WHERE cat_id= '" . $_GET['cat'] . "'");
        $results = mysql_fetch_array($result_cats);
        $result_imgs = mysql_query("SELECT * FROM images WHERE img_cat='" . $_GET['cat'] . "'");
        $imgs = mysql_fetch_array($result_imgs)
        
                ?>
        <div id="content"> 
            <div class="main_img_box">
                <?php 
                if ($imgs['is_major'] == "1" || $imgs['is_major'] == 1)
                {
                ?>
                    <img class="main_img has_description" src="<?php echo $imgs['img_name']; ?>" id="<?php echo $imgs['img_id']; ?>" onclick="showmodal(this.id)">
                <?php
                }    
                ?>
            <div class="period_of_seedling">
                <h3><?php echo $pages[6]; ?></h3>
                <p style="text-indent: 0px;"><?php echo $results['cat_period']; ?></p>
            </div>
            </div>
        <div class="description">
              <h1 align="center" style="margin: 0px;color: #333333"><?php echo $results['cat_name']; ?></h1>
              <p style="margin-top: 25px;"><?php echo $results['cat_description']; ?></p>   
        </div> 
            <div class="other_imgs">
        <?php
        while ($images = mysql_fetch_array($result_imgs))
        {
           if ($images['is_major'] == "0" || $images['is_major'] == 0)               
                {
        ?>
       
            <img src="<?php echo $images['img_name']; ?>" width="23%" height="90%" id="<?php echo $images['img_id']; ?>" onclick="showmodal(this.id)">
       
        <?php
                }
        }
        ?>
 </div>
        <div id="myModal" class="modal">
  <span class="close">×</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');
function showmodal(id)
{
// Get the image and insert it inside the modal - use its "alt" text as a caption
var image = document.getElementById(id);
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

    modal.style.display = "block";
    modalImg.src = image.src;
    

}
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
    </div>
        <?php
        require_once 'footer.php';
        ?>
    </body>
</html>
