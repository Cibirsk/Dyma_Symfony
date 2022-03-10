<?php

class Reader {

  public function __construct(public $filename) {
    if (file_exists($filename)) {
      $this->handle = fopen($filename, 'r');
    } else {
      echo "Le fichier n'existe pas";
    }
  }


  public function read() {
    echo fread($this->handle, 10);
  }

  function __destruct() {
    fclose($this->handle);
  }

}

$reader = new Reader(__DIR__ . '/test.txt');
$reader->read();