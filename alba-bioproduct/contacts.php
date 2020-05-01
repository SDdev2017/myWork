<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="main.css" type="text/css">
        <title></title>
        <style>
            #content
            {
               width: 70%;
               padding: 30px;
               background-color:rgba(255, 255, 255,0.6);
               margin-top: 100px;
               margin-left: 10%;
               margin-right: 10%;
               box-shadow: 0px 5px 15px 0px rgba(0,0,0,0.15);
               display: inline-block;
            }
            
            .contacts
            {
                width: 45%;
                margin-left: 3%;
                height: 400px;
                float: left;
               
            }
            
            .cmn
            {
                width: 46%;
                height: 50%;
                float: left;
            }
            
            .button
            {
                cursor: pointer;
                background-color:rgba(255, 255, 255,0.6);
                padding: 20px;
                width: 80%;
                border-radius: 8px;
                border: 1px solid black;
                color: #333333;
                margin-left: 10%;
                margin-top: 120px;
                font-size: 16px;
                font-weight: bold;
            }
            
            .button:hover
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
           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1918.7166632872572!2d25.216060482421472!3d42.6441854802789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sbg!2sbg!4v1482799525913" 
                   width="50%" style="float:left" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                   <div class="contacts">
                       <div class="cmn">
                           <h3 align="center"><?php echo $contacts[1]; ?></h3>
                           <p>с.Скобелево, община Павел Баня, Област Стара Загора</p>
                       </div>
                       <div class="cmn">
                           <h3 align="center"><?php echo $contacts[2]; ?></h3> 
                           <p align="center"><?php echo $contacts[3]; ?><br>
                           <?php echo $contacts[4]; ?></p>
                           <h3 align="center">E-mail:</h3> 
                           <p align="center"><a href="mailto:alba_bioproduct2013@abv.bg" style="a:hover{text-decoration: underline;}">alba_bioproduct2013@abv.bg</a></p>
                           <div class="contact_box">
                               
                           </div>
                       </div> 
                       <button class="button" align="center" onclick="window.location = 'send_question.php'"><?php echo $contacts[5]; ?></button>
                   </div>
        </div>
        <?php
        require_once 'footer.php';
        ?>
    </body>
</html>
