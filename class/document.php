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

    function strClean($value) {
      $value = str_replace("\n", '', $value); // remove new lines
      $value = str_replace("\r", '', $value); // remove carriage returns
      return $value;
    }   

  }

?>