<?php

@$date=date('l jS \of F Y');
$username=ucfirst($_COOKIE["logged_in"]);

$output.="
<div id=\"header\">

  <div id=\"logo\"></div>

  <div id=\"user_details\">
  Logged in: $username <br/>
  $date
  </div>

  <h2>Welcome to 1998!</h2>

</div>
";

 ?>
