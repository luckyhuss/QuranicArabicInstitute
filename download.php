<?php

# get file name
$filePath = htmlspecialchars($_GET["f"]);
$fileName = basename($filePath);

header("Content-type:application/pdf");

# It will be called $fileName
header("Content-Disposition:attachment;filename='$fileName'");

# The PDF source is in $fileName
readfile("$filePath");
?>
