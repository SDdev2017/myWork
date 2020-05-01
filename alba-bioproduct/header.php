<?php
/*------------------------------BG-or-EN--------------------------------------*/
if (isset($_GET['lang']))
{   
    if($_GET['lang'] === "en")
    {
    setcookie('lang', 'en', time()+86400);
    require_once 'english.php';
    }
    
    elseif ($_GET['lang'] === "bg") 
    {
    setcookie('lang', 'bg', time()+86400);
    require_once 'bulgarian.php';    
    }
}
else 
{
    require_once 'bulgarian.php';
}

/*-------------------------------END------------------------------------------*/
//query for categories list under razsad
$result_cats = mysql_query("SELECT * FROM cats");
?>
<!-------------------------------HEADER_CONTENT-------------------------------->
<div id="wrapper">
<div id="header">
    <a href="index.php?lang=<?php echo $lang;?>" title="<?php echo $home; ?>">
        <img src="logo.png" width="210" height="119" style="float: left; margin-top: -15px;">
    </a>
            <ul>
                <li>
                    <a href="index.php" class="cat" <?php if($set==1){echo "id='set'";} ?>>
                        <?php echo $pages[0]; ?>
                    </a>  
                </li>
                <li>
                    <a href="gallery.php" class="cat" <?php if($set==2){echo "id='set'";} ?>>
                        <?php echo $pages[1]; ?>
                    </a>
                </li>
                <li class="dropdown-btn">
                    <a href="javascript:void(0)" class="cat" <?php if($set==3){echo "id='set'";} ?>>
                        <?php echo $pages[2]; ?>
                    </a>
                    <div class="dropdown-box">               
                        <a href="razsad.php?cat=">
                           Рози  
                        </a>
                        <a href="razsad.php?cat=">
                            Лавандула
                        </a>
                        <a href="razsad.php?cat=">
                            Маточина
                        </a>
                         <a href="razsad.php?cat=">
                            Годжи Бери
                        </a>
                    </div>
                </li> 
                <li>
                    <a href="aboutus.php" class="cat" <?php if($set==4){echo "id='set'";} ?>>
                        <?php echo $pages[3]; ?>
                    </a>
                </li>
                <li>
                    <a href="contacts.php" class="cat" <?php if($set==5){echo "id='set'";} ?>>
                        <?php echo $pages[4]; ?>
                    </a>
                </li>
            </ul>
            <div id="lang">
                <a href="index.php?lang=en" title="British English">
                    <img src="uk.png" width="27" height="27">
                </a>
                <a href="index.php?lang=bg" title="Български език">
                    <img src="bg.png" width="27" height="27">
                </a>
            </div>
        </div>
<!-------------------------------END-OF-SECTION-------------------------------->

<!--------------------------MADE BY S.D. Development--------------------------->
<script>
    $(document).ready(function()
    {
        $('.dropdown-btn').hover(function()
        {
            $('.dropdown-box').slideToggle('slow');
        }, function()
        {
            $('.dropdown-box').hide();
        }        
        );
    }
    );
</script>