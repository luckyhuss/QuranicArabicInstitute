<?php

	// import Document class
	require_once('class/document.php');

	# get file name
	$encryptedFile = $_GET["file"];
	
	# create a new Document object
	$document = new Document();
	# decrypt the file using the base class
	$document->setFile($document->decryptFile($encryptedFile));
	
	# get values from the object (because properties cannot be queried below)
	$filePath = $document->getFile();
	# get only the basename from the file path
	$fileName = basename($document->getFile());
	
	header("Content-type:application/pdf");

	# It will be called $fileName
	header("Content-Disposition:attachment;filename='$fileName'");

	# The PDF source is in $filePath
	readfile("$filePath");
?>
