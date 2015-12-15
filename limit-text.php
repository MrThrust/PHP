<?php
//limit the output of a text string
function limitText($x, $length)
{
  if(strlen($x)<=$length)
  {
    return $x;
  }
  else
  {
    $y=substr($x,0,$length) . '...';
    return $y;
  }
}

$string = 'long string text long string text long string text long string text long string text long string text long string text ';
$limitString = limitText($string , 20);

echo $limitString; // output = long string text lon...
?>
