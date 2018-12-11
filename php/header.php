<?php
class fileReader
{
	private $fileContent = '';
	private $filePointer;

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
