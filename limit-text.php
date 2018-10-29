<?php
/*
* limit character output from string
*  Input: text string, Max limit 
/
function limitText($string, $length)
{
  if(strlen($string)<=$length)
  {
    return $string;
  }
  else
  {
    $y=substr($string,0,$length) . '...';
    return $y;
  }
}

// EXAMPLE 
$string = 'long string text long string text long string text long string text long string text long string text long string text ';

echo limitText($string , 20);
// output = long string text lon...
