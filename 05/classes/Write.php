<?php 
class Write
{

	public $fp; //указатель на открытый файл
	public $file; // путь для файла


	public function __construct($file) {
		$this->file = $file;

		if ( !is_writable($this->file) ) {
			echo "Файл {$this->file} не доступен для записи";
			exit;
		} 
		$this->fp = fopen($this->file, 'a');
	}

	public function __destruct() {
		fclose($this->fp);
	}

	public function writeToFile($text) {
		if (fwrite($this->fp, $text . PHP_EOL) === FALSE) {
	        echo "Не могу произвести запись в файл ($this->file)";
	        exit;
	    }
	}
}