<?php

$n=$_REQUEST['na'];
header("Content-disposition:attachement;filename=$n");
readfile("upload\\$n");

?>