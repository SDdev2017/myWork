<html>
    <head>
        <meta charset="UTF-8">       
        <title>SD Development</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc="
  crossorigin="anonymous"></script>
         
        <style>
           #navbar i
           {
               margin-right: 4px;
           }
           
           .outer
           {
               width: 100%;
               /*outline: 1px solid #bfbfbf;*/
               background-color: #e6e6e6;
           }

        </style>
    </head>
    <body>
        <!-- Header section -->
        <div id="wallpaper">
            <div class="mob-menu-icon"><i class="fas fa-bars"></i></div>
            <div id="navbar">
                <i class="fas fa-times"></i>
                <a href="#wallpaper"><i class="fas fa-home"></i>HOME</a>
                <a href="javascript:void(0)" data-target="#about"><i class='fa fa-user' style='font-size:15px'></i>ABOUT ME</a>
                <a href="javascript:void(0)" data-target="#projects"><i class='fas fa-desktop' style='font-size:15px'></i>PROJECTS</a>
                <a href="javascript:void(0)" data-target="#contacts"><i class="fas fa-paper-plane" style="font-size: 15px"></i>CONTACTS</a>
                
            </div>
            <div id="container">
                <div id="label">STEFAN DOYKIN</div>
                <div id="sub-label">Front-End Developer</div>
            </div>
        </div>
        <!-- About section -->
        <div id="about">
            <h1>ABOUT ME</h1>
            <div id="about-container">
                <div id="about-text">Hello, my name is Stefan Doykin. I am 20 years old and I am from Bulgaria. I am a web developer and that was my dream job since I was 
                12 years old. I love playing football, listen to music, chat with friends and travel all over the world. In my job I am very pedenthetic and ambious. My goal
                is to create beautiful, well-looking web sites for my clients. Down the page you could see my projects and skills. It will be pleasure to work with you!
                </div>
                <img src="profilna.jpg" width="30%">
                <div id="about-skills">
                    <h2>My Skills</h2>
                    <div id="progress-container">
                        <p><i class="fab fa-js" style="margin-right: 5px;"></i>JavaScript/jQuery</p>
                        <div class="outer">
                            <div class="progress-bar" style="width: 90%">90%</div>                                
                        </div>
                        <p><i class="fab fa-css3" style="margin-right: 5px;"></i>CSS3/SASS</p>
                        <div class="progress-bar" style="width: 100%">100%</div>
                        <p><i class="fab fa-html5" style="margin-right: 5px;"></i>HTML5</p>
                        <div class="progress-bar" style="width: 100%">100%</div>
                        <p><i class="fab fa-php" style="margin-right: 5px;"></i>PHP</p>
                        <div class="outer">
                            <div class="progress-bar" style="width: 50%">50%</div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <!-- Projects section -->
        <div id="projects">
            <div id="poster">
                <div class="poster-item">
                    <h3 class="counter" data-value="25">0</h3>
                    <p>Partners</p>
                </div>
                <div class="poster-item">
                    <h3 class="counter" data-value="55">0</h3>
                    <p>Projects Done</p>
                </div>
                <div class="poster-item">
                    <h3 class="counter" data-value="89">0</h3>
                    <p>Happy Clients</p>
                </div>
                <div class="poster-item">
                    <h3 class="counter" data-value="150">0</h3>
                    <p>Meetings</p>
                </div>
            </div>
            <div id="project-wallpaper">
                <div>
                    <h1>SOME OF MY PROJECTS</h1>
                </div>
            </div>
            <div class="project-site">
                <h3>Absolute Plumbing</h3>
                <div class="overlay-img">                   
                    <img src="website.jpg" width="100%">
                </div>
                <h4><i class="fas fa-cogs" style="margin-right: 8px;"></i>Used technologies in the project</h4>
                <p><i class="fas fa-check"></i>JavaScript</p>
                <p><i class="fas fa-check"></i>jQuery</p>
                <p><i class="fas fa-check"></i>PHP</p>
                <p><i class="fas fa-check"></i>HTML</p>
                <p><i class="fas fa-check"></i>CSS</p>
            </div>
             <div class="project-site">
                <h3>Absolute Plumbing</h3>
                <div class="overlay-img">                   
                    <img src="website.jpg" width="100%">
                </div>
                <h4><i class="fas fa-cogs" style="margin-right: 8px;"></i>Used technologies in the project</h4>
                <p><i class="fas fa-check"></i>JavaScript</p>
                <p><i class="fas fa-check"></i>jQuery</p>
                <p><i class="fas fa-check"></i>PHP</p>
                <p><i class="fas fa-check"></i>HTML</p>
                <p><i class="fas fa-check"></i>CSS</p>
            </div>
             <div class="project-site">
                <h3>Absolute Plumbing</h3>
                <div class="overlay-img">                   
                    <img src="website.jpg" width="100%">
                </div>
                <h4><i class="fas fa-cogs" style="margin-right: 8px;"></i>Used technologies in the project</h4>
                <p><i class="fas fa-check"></i>JavaScript</p>
                <p><i class="fas fa-check"></i>jQuery</p>
                <p><i class="fas fa-check"></i>PHP</p>
                <p><i class="fas fa-check"></i>HTML</p>
                <p><i class="fas fa-check"></i>CSS</p>
            </div>
        </div>
        <!-- Contacts section -->
        
        <div id="contacts">
            <h1>CONTACTS</h1>
            <div id="contacts-outer">
                <div id="location">
                    <p><i class="fa fa-map-marker"></i>Kazanlak, Bulgaria</p>
                    <p><i class="far fa-envelope"></i>sdoykin223@gmail.com</p>
                    <p><i class="fa fa-phone"></i>+359 877 683 664</p>
                </div>
                <div id="form-feedback">
                    <p>Email</p>
                    <input type="text" placeholder="Enter your e-mail">
                    <p>Name</p>
                    <input type="text" placeholder="Enter your name">
                    <p>Message</p>
                    <input type="text" placeholder="Enter your message"><br><br>
                    <button><i class="far fa-paper-plane" style="margin-right: 5px;"></i>SEND MESSAGE</button>
                </div>
            </div>
        </div>
        <!-- Footer section -->
        <footer>
            <a href="" class="tooltip">
                <i class="fab fa-facebook-square"></i>   
            </a>
            <span class="tooltip-text">Visit my facebook profile.</span>
            <a href=""><i class="fab fa-git-square"></i></a>
            <span class="tooltip-text">Visit my github profile.</span>
            <a href=""><i class="fab fa-google-plus-square"></i></a>
            <span class="tooltip-text">Visit my Google+ profile.</span>
            <a href=""><i class="fab fa-instagram"></i></a>
            <span class="tooltip-text">Visit my instagram profile.</span>
            <div style="width: 100%; text-align: center; background-color: rgba(0,0,26,0.9);margin-top: 30px;">Powered by Stefan Doykin</div>
        </footer>
        
        
        
        
    <script> 
    $(document).ready(function()
    {
        $("#container").animate({"opacity" : "1"}, 2000); 
    });
                
            
    var flag = true;
// When the user scrolls the page, execute myFunction
window.onscroll = function() 
{
    myFunction();
    
    var start = document.getElementById("about").offsetTop;
    if ((window.pageYOffset >= start + 50) && (flag === true)) 
    {
        counterAnimation();
        flag = false;
    }
                
};

function counterAnimation()
{
    $(".counter").each(function(){
        var $this = $(this);
       
        $({Counter:0}).animate({Counter: $this.data('value')}, {
            duration: 1900,
            easing: 'swing',
            step: function(){
                $this.text("+" + (Math.ceil(this.Counter)));
            }
        });
        });
}

// Get the navbar
var offset = document.getElementById("about");
var navbar = document.getElementById("navbar");
// Get the offset position of the navbar
var sticky = offset.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    if (window.pageYOffset >= sticky) {
         navbar.classList.add("sticky");               
    } else {
         navbar.classList.remove("sticky");
    }
}

var scrollToElement = function(el,ms){
    var speed = (ms) ? ms : 600;
    $("html,body").animate({
        scrollTop: $(el).offset().top
    },speed);
};


$(".mob-menu-icon").click(function(){
   $("#navbar").show(); 
});
 
$(".fa-times").click(function(){
   $("#navbar").hide();
});

var mq = window.matchMedia("(max-width: 495px)");


    $("#wallpaper #navbar a").on("click", function(){
        scrollToElement($(this).data("target"), 1400);
        if(mq.matches)
        { 
            $("#navbar").hide();
            $(this).attr("href", $(this).data("target"));
        }     
    });
        </script>
    </body>
</html>
