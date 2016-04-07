<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION["roll_no"]);
header("Location:../../internship/index-home-b.html");
?>