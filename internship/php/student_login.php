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

if (isset($_POST['login']))
{
	echo 'here';
    // retrieve the username and password sent from login form
    // First we remove all HTML-tags and PHP-tags, then we create a md5-hash
    // This step will make sure the script is not vurnable to sql injections.
    $u = strip_tags($_POST['roll_no']);
    $p = strip_tags($_POST['password']);

    echo $u;
    echo $p;

    //Now let us look for the user in the database.
    $query = sprintf("SELECT * FROM student WHERE roll_no = '%s' AND password = '%s' LIMIT 1;",
        mysql_real_escape_string($u), mysql_real_escape_string($p));
    $result = mysql_query($query);
    // If the database returns a 0 as result we know the login information is incorrect.
    // If the database returns a 1 as result we know  the login was correct and we proceed.
    // If the database returns a result > 1 there are multple users
    // with the same username and password, so the login will fail.
    if (mysql_num_rows($result) != 1)
    {
        // invalid login information
        echo "Wrong username or password!";
        header("Location: ../wrong_login.html");
        //show the loginform again.
  //      include "../html/company_login.html";
    } else {
        // Login was successfull
        error_log('something');
        $row = mysql_fetch_array($result);
        // Save the user ID for use later
        $_SESSION['name'] = $row['name'];
          // Save the username for use later
        $_SESSION['roll_no'] = $u;
        $_SESSION['email'] = $row['email'];
        $_SESSION['department'] = $row['department'];
        $_SESSION['mob'] = $row['mob'];
        $_SESSION['profile_pic'] = $row['profile_pic'];
        $_SESSION['cgpa'] = $row['cgpa'];
        $_SESSION['surname'] = $row['surname'];
        $_SESSION['facebook'] = $row['facebook'];
        $_SESSION['twitter'] = $row['twitter'];
        $_SESSION['linkedin'] = $row['linkedin'];
        $_SESSION['github'] = $row['github'];
        $_SESSION['about_me'] = $row['about_me'];
          // Now we show the userbox
		 if(isset($_SESSION["name"])) {
          echo "Under Construction";
          header("Location: ../../student/dist/user_profile.php");
    	}
    }
} else {
	 // User is not logged in and has not pressed the login button
	 // so we show him the loginform
//       include "../html/company_login.html";
	echo 'kuch nhi';
}
/*
if($_POST['email'] && $_POST['password']) {
	echo "Shrukul";
}*/

?>
