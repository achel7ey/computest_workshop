<?php

$safety_key="ZWNobyAiVGhpcyBlcnJvciBzaG91bGQgbm90IGJlIHNob3duIjs=";
$users=array("jaap" => "jaap1", "marie" => "marie1", "arno" => "arno1", "bart" => "bart1");

$username=$_POST["username"];
$password=$_POST["password"];

if($_GET["logout"]){
  setcookie('logged_in', '', time()-3600, '/');
  header('Location: /login.php');
}

if($_POST && $safety_key){
// check post values
  if(array_key_exists($username, $users) &&  $users["$username"] == $password){
    setcookie ("logged_in","$username", time()+60*60*24*30, '/');
    //redirect to index
    header('Location: /index.php');
    exit();
  }else{
    echo "Go back and try again!";
  }
}

// check auth
elseif(!$_COOKIE["logged_in"]){

  //redirect to login form
  header('Location: login.php');
  exit();

}

else{
// do nothing at all.
}

?>
