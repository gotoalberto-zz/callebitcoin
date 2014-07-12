<?php
function fetchArray($in)
{
  if(is_file($in)) 
       return include $in;
  return false
}

echo"test";
?>
