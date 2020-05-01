<?php
if (isset($POST['bg']))
{    
        require_once 'connect_to_database.php';
        $lang = "bg";
}  
    
elseif(isset($_POST['en'])) 
{
        require_once 'connect_to_database_en.php';
        $lang = "en";
}


function redirect($url)
{
    if (!headers_sent())
    {
        header('Location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/' . $url);
    }
    
    else 
    {
        die("Could not redirect; Headers already sent (output).");
    }
}
$action = $_GET['action'];
switch ($action) 
{
    case "login":
    $name = $_POST['user_name'];    
    $pass = $_POST["user_pass"];
    $submit = $_POST['SUBMIT'];
    if (isset($submit))
    {
        if($name == "alba" && $pass == "alba")
        {
            session_start();
            $_SESSION['name'] = $name;
            $_SESSION['pass'] = $pass;
            $_SESSION['islogged'] = 1;
            $_SESSION["lang"] = $lang;
            redirect("controlpanel.php");
            
        }
        else 
        {
            redirect("cpanel.php?error=invalid");
            $_SESSION['islogged'] = NULL;
            session_destroy();
        }
    }
    else 
    {
        redirect("cpanel.php");
        
    }
    break;
    
    case "logout":
    $_SESSION['islogged'] = NULL;
    session_destroy();
    redirect("cpanel.php");
    break;
 
}


