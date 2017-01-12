<?php
require('./includes/init.inc.php');

// START compiling actual content
$output='
<!DOCTYPE html>
<html>
<head>
  <title>SCRUM workshop - part 1</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
';

require('./includes/header.inc.php');

$output.='<div id="flex-container">';
  require('./includes/navigation.inc.php');
  require('./includes/content.inc.php');
$output.='</div>';

require('./includes/footer.inc.php');

$output.='</body></html>';
// END compiling actual content

echo "$output";

//USED to clean up
require('./includes/end.inc.php');
?>
