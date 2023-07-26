<?php

function s_alert($string){
 echo '<script>document.addEventListener("DOMContentLoaded",alert("'.$string.'"));</script>'; 
}
?>