<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" type="text/css" href="main.css">
        <title></title>
        <style>
            #content
           {
               width: 90%;
               height: 100%;  
               margin-right: 10%;
               margin-left: 10%;
               display: inline-block;
              
           }
            .photo_box
            {
                 background-color:rgba(255, 255, 255,0.6);
                 padding:4px 4px;
                 width: 250px;
                 border-radius: 7px;
                 box-shadow: 0px 5px 15px 0px rgba(0,0,0,0.15);
                 float: left;
                 margin-right: 25px;
                 margin-top: 25px;
            }
            
            .photo_box:hover
            {
                box-shadow: 0 25px 25px 0 rgba(51, 51, 51, 0.2), 0 25px 25px 0 rgba(51, 51, 51, 0.19);
                transition: 0.5s;
                
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
            
            .photo_box img
            {
                cursor: pointer;
            }

        </style>
    </head>
    <body>
        <?php
        //set and include header section
        $set = 2;
        require_once 'connect_to_database.php';
        require_once 'header.php';
        //query for images        
        $result_gallery = mysql_query("SELECT * FROM gallery");
        ?>
<!------------------------------CONTENT---------------------------------------->        
        <div id="content">
            <?php
                    while ($row = mysql_fetch_array($result_gallery)) 
                    {
            ?>
            <div class="photo_box">
                <img src="<?php echo $row['gallery_img']; ?>" width="250" height="250" id="<?php echo $row['gallery_id']; ?>" onclick="showmodal(this.id)">
            </div>
            <?php
                    }
            ?>
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
<!-----------------------------------END--------------------------------------->
        <?php
        require_once 'footer.php';
        ?>
    </body>
</html>
