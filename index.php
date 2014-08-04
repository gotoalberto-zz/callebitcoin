<?php
$lc = "";
if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
    $lc = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}
if($lc == "es"){
    header("location: spanish.html?p=" . rand());
} else {
    header("location: english.html?p=" . rand());
}
exit();
?>