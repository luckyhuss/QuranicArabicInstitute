<?php

  class Document {
    # properties
    private $name;
    private $description;
    private $file;
	
	# store the cipher method 
	private $ciphering = "AES-128-CTR"; 
	  
	# use OpenSSl Encryption method 
	#private $iv_length = openssl_cipher_iv_length($ciphering); 
	private $options = 0;
	  
	# Non-NULL Initialization Vector for encryption/decryption 
	private $cryption_iv = '1234567891011121'; 
	  
	# store the encryption/decryption key 
	private $cryption_key = "QuranicArabicInstitute";
	
    # Methods
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
		
		if ($bytes >= 1073741824) {
            $value = number_format($bytes / 1073741824, 0) . ' GB';
        }
        elseif ($bytes >= 1048576) {
            $value = number_format($bytes / 1048576, 0) . ' MB';
        }
        elseif ($bytes >= 1024) {
            $value = number_format($bytes / 1024, 0) . ' KB';
        }
        elseif ($bytes > 1) {
            $value = $bytes . ' bytes';
        }
        elseif ($bytes == 1) {
            $value = $bytes . ' byte';
        }
        else {
            $value = '0 bytes';
        }
		
		return $value;
    }
	
	function encryptFile(){
		
		# Use openssl_encrypt() function to encrypt the data 
		$encryptedFile = openssl_encrypt($this->file, $this->ciphering, $this->cryption_key, $this->options, $this->cryption_iv); 		
				
		return $encryptedFile;
		
	}
	
	function decryptFile($encryptedFile){		
		# Use openssl_decrypt() function to decrypt the data 
		$decryptedFile = openssl_decrypt ($encryptedFile, $this->ciphering, $this->cryption_key, $this->options, $this->cryption_iv); 
		
		return $decryptedFile;
	}

    function strClean($value) {
		  $value = str_replace("\n", '', $value); # remove new lines
		  $value = str_replace("\r", '', $value); # remove carriage returns
		  return $value;
    }   

  }

?>