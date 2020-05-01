<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="main.css">
        <script src="jquery-3.1.1.js" type="text/javascript"></script>
        <title></title>
        <style>         
           #content
           {
               width: 60%;
               height: 450px;
               background-color:rgba(255, 255, 255,0.6);
               margin-top: 100px;
               margin-left: 6%;
               box-shadow: 0px 5px 15px 0px rgba(0,0,0,0.15);
               display: inline-block;
           }
           
           #content_box
           {
               width: 100%;
               height: 100%;
           }
           
           .mySlides 
          {
              display:none;
              margin-left: 2%;
              margin-top: 1%;
          }
          
          #message_box
          {
              width: 250px;
              height: 200px;
              background-color: white;
              z-index: 1;
              position: absolute;
              top: 70%;
              right: 83%;
              border-radius: 10px;
              box-shadow: 0px 5px 15px 0px rgba(0,0,0,0.15);
              border: 1px solid bisque;
          }
        </style>
    </head>
    <body>
       <?php
       //set and include header
       $set = 1;
       require_once 'header.php';
       ?>
<!------------------------------------CONTENT---------------------------------->        
<div id="content_box">
    <div id="content" style="padding: 2% 0%;">
            <img class="mySlides" src="home_photo.jpg" width="96%" height="95%">
            <img class="mySlides" src="home_photo2.jpg" width="96%" height="95%">
            <img class="mySlides" src="home_photo3.jpg" width="96%" height="95%">
<!--Home page image slider-->
                <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 9000);//<=== To change the interval between every image (1000=1sec.)    
}
                </script>
        </div>
</div>
<!----------------------------------END---------------------------------------->
      <?php
      //include footer
       require_once 'footer.php';
      ?>
    </body>
</html>
