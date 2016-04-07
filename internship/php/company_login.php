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
}

$db = mysql_select_db(DB);

if (!$db)
{
    // cannot connect to the database so quit the script
    die('Could not connect to database !<br />Please contact the site\'s administrator.');
}

if (isset($_POST['login']))
{
	echo 'here';
    // retrieve the username and password sent from login form
    // First we remove all HTML-tags and PHP-tags, then we create a md5-hash
    // This step will make sure the script is not vurnable to sql injections.
    $u = strip_tags($_POST['username']);
    $p = md5(strip_tags($_POST['password']));

    echo $u;
    echo $p;
    //Now let us look for the user in the database.
    $query = sprintf("SELECT company_name FROM company WHERE username = '%s' AND password = '%s' LIMIT 1;",
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
        //show the loginform again.
  //      include "../html/company_login.html";
    } else {
        // Login was successfull
        $row = mysql_fetch_array($result);
        // Save the user ID for use later
        $_SESSION['company_name'] = $row['company_name'];
          // Save the username for use later
        $_SESSION['username'] = $u;
          // Now we show the userbox
        if(isset($_SESSION["company_name"])) {
            header("Location: ../dashboard/company_dashboard.php");
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