<?php
header("Content-type:application/pdf");
header("Content-Disposition:attachment;filename='2.pdf'");
readfile("1.pdf");
?>