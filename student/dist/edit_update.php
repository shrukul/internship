<?php

define("HOST", "localhost");
define("DBUSER", "root");
define("PASS", "manshoon");
define("DB", "internship_portal");

echo "hello";
session_start();

$conn = mysql_connect(HOST, DBUSER, PASS);

if (!$conn)
{
    // the connection failed so quit the script
    die('Could not connect !<br />Please contact the site\'s administrator.');
    header("Location: ../pages-404-default-image.html");
}

$db = mysql_select_db(DB);

if (!$db)
{
    // cannot connect to the database so quit the script
    die('Could not connect to database !<br />Please contact the site\'s administrator.');
    header("Location: ../pages-404-default-image.html");
}


	echo 'here';
    // retrieve the username and password sent from login form
    // First we remove all HTML-tags and PHP-tags, then we create a md5-hash
    // This step will make sure the script is not vurnable to sql injections.
    $name = strip_tags($_GET['user_edit_uname_control']);
    $surname = strip_tags($_GET['user_edit_position_control']);
    $about_me = strip_tags($_GET['user_edit_personal_info_control']);
    $email = strip_tags($_GET['user_edit_email']);
    $mob = strip_tags($_GET['user_edit_phone']);
    $fb = strip_tags($_GET['user_edit_facebook']);
    $tw = strip_tags($_GET['user_edit_twitter']);
    $git = strip_tags($_GET['user_edit_google_plus']);
    $in = strip_tags($_GET['user_edit_linkdin']);

    echo $name;
    echo $surname;
    echo $about_me;
    echo $email;
    echo $mob;
    echo $fb;
    echo $tw;
    echo $git;
    echo $in;

    $mob = (int)$mob;

    //Now let us look for the user in the database.
 /*   $query = sprintf("UPDATE student SET name='%s', surname='%s', about_me='%s', email='%s', mob='%s', fb='%s', tw='%s', git='%s', in='%s' WHERE name = '%s'",
        mysql_real_escape_string($name), mysql_real_escape_string($surname),mysql_real_escape_string($about_me), mysql_real_escape_string($email),mysql_real_escape_string($mob), mysql_real_escape_string($fb),mysql_real_escape_string($tw), mysql_real_escape_string($git),mysql_real_escape_string($in),mysql_real_escape_string($_SESSION['name']); */

    $query = "UPDATE student SET name='$name', surname='$surname', about_me='$about_me', email='$email', mob='$mob', facebook='$fb', twitter='$tw', github='$git', linkedin='$in' WHERE name = \"".$_SESSION['name']."\"";

    echo '\n'.$query;

    $result = mysql_query($query); 

    // If the database returns a 0 as result we know the login information is incorrect.
    // If the database returns a 1 as result we know  the login was correct and we proceed.
    // If the database returns a result > 1 there are multple users
    // with the same username and password, so the login will fail.

    if ($result===FALSE)
    {
        // invalid login information
        echo "Wrong username or password!";
        header("Location: ../wrong_login.html");
        //show the loginform again.
  //      include "../html/company_login.html";
    } else {
          header("Location: user_profile.php");
    	}
    echo "Ready!";
?>
