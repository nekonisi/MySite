<?php
class FileReader
{
	// ファイルのコンテンツ
	private $fileContent = '';

	// オープンするファイルのポインタ
	private $filePointer;

	public static $header="templates/header.html";
	public static $footer="templates/footer.html";

	public function outputFile(){
		echo $this->fileContent;
	}

	/* コンストラクタ */
	public function __construct($filePath){

		// 読み込み専用でファイルをオープン
		$this->filePointer = fopen($filePath, "r");

		// 内部変数にに書き込んでいく
		while(!feof($this->filePointer)){
			$this->fileContent .=fgets($this->filePointer);
		}
		fclose($this->filePointer);
	}
}
?>
