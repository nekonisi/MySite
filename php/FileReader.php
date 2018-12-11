<?php
class FileReader
{
	private $fileContent = '';
	private $filePointer;

	/* 定数扱い */
	public static $header="templates/header.html";
	public static $footer="templates/footer.html";

	public function outputFile(){
		echo $this->fileContent;
	}

	/* コンストラクタ */
	public function __construct($filePath){
		$this->filePointer = fopen($filePath, "r");
		while(!feof($this->filePointer)){
			$this->fileContent .=fgets($this->filePointer);
		}
		fclose($this->filePointer);
	}
}
?>
