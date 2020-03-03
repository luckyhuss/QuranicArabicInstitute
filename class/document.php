<?php

  class Document {
    // Properties
    private $name;
    private $description;
    private $file;

    // Methods
    function setName($name) {
		$this->name = $this->strClean($name);
    }

    function getName() {
		return $this->name;
    }

    function setDescription($description) {
		$this->description = $this->strClean($description);
    }

    function getDescription() {
		return $this->description;
    }

    function setFile($file) {
		$this->file = $this->strClean($file);
    }

    function getFile() {
		return $this->file;
    }
	
	function getFileSize() {	
		
		$bytes = filesize($this->file);
		
		if ($bytes >= 1073741824)
        {
            $value = number_format($bytes / 1073741824, 0) . ' GB';
        }
        elseif ($bytes >= 1048576)
        {
            $value = number_format($bytes / 1048576, 0) . ' MB';
        }
        elseif ($bytes >= 1024)
        {
            $value = number_format($bytes / 1024, 0) . ' KB';
        }
        elseif ($bytes > 1)
        {
            $value = $bytes . ' bytes';
        }
        elseif ($bytes == 1)
        {
            $value = $bytes . ' byte';
        }
        else
        {
            $value = '0 bytes';
        }
		
		return $value;
    }

    function strClean($value) {
		  $value = str_replace("\n", '', $value); // remove new lines
		  $value = str_replace("\r", '', $value); // remove carriage returns
		  return $value;
    }   

  }

?>