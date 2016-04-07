<?php

define("HOST", "localhost");
define("DBUSER", "root");
define("PASS", "manshoon");
define("DB", "internship_portal");

echo "hello";

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

    if (isset($_POST['signup']))
    {
        echo 'here';
        // retrieve the username and password sent from login form
        // First we remove all HTML-tags and PHP-tags, then we create a md5-hash
        // This step will make sure the script is not vurnable to sql injections.
        $username = $_POST['username'];
        $company_name = $_POST['company_name'];
        $password = md5($_POST['password']);
        $cgpa = $_POST['cgpa'];
        $location_name = $_POST['location_name'];
        $visiting_date = $_POST['visiting_date'];
        $email = $_POST['email'];

        if(!isset($_FILES['logo'])){
            echo 'not getting';
            echo 'error - '.$_FILES['uploadedfile']['error'].' see';
        }
        $logo =file_get_contents($_FILES['logo']['tmp_name']);
        echo "here - ".$_FILES['logo']['name']."Lol!!";
        $logo = base64_encode($logo);
        $logo = mysql_real_escape_string($logo);

        //Now let us look for the user in the database.
        $query = "INSERT INTO company(company_name,email,username,password,location_name,cgpa,visiting_date,logo) VALUES('$company_name','$email','$username','$password','$location_name','$cgpa','$visiting_date','$logo')";
        $result = mysql_query($query, $conn);
        echo $result;
        // If the database returns a 0 as result we know the login information is incorrect.
        // If the database returns a 1 as result we know  the login was correct and we proceed.
        // If the database returns a result > 1 there are multple users
        // with the same username and password, so the login will fail.
        if (!$result)
        {
            // invalid login information
            echo "Wrong username or password!";
            //show the loginform again.
      //      include "../html/company_login.html";
        } else {
            // Login was successfull
/*            $row = mysql_fetch_array($result);
            // Save the user ID for use later
            $_SESSION['name'] = $row['name'];
              // Save the username for use later
            $_SESSION['username'] = $u;
              // Now we show the userbox
            show_userbox();*/

            echo "success";
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