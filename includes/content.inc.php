<?php

// http://php.net/manual/en/function.str-getcsv.php
$csv = array_map('str_getcsv', file("database/songs.csv"));

array_walk($csv, function(&$a) use ($csv) {
  $a = array_combine($csv[0], $a);
});
array_shift($csv); # remove column header

foreach ($csv as $row){
  $list.='<li>'. $row['ARTIST CLEAN'] . ' - ' . $row['Song Clean'] . '</li>';
}

$output.="
<div id=\"content\">
  Hi <span class=\"name\">$username</span>
  <ul>
    $list
  </ul>
</div>
";

 ?>
