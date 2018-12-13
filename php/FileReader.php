<?php
$header = new FileReader(FileReader::$header);
$header->outputFile();?>

<div class="contaigner">
<!--概要説明-->
<div class="panel panel-default">
<div class="panel-heading">
概要
</div>
<div class="panel-body">
ファイルの読み込み(ヘッダの読み込みとかもこれでしてる。)
</div>
</div>
<!--概要説明-->

<!--サンプルコード-->
<div class="panel panel-default">
<div class="panel-heading">
サンプルコード
</div>
<div class="panel-body">
<code>
<pre>
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
$fileReader = new FileReader("file.txt");
$fileReader->outputFile();
</pre>
</code>
</div>
</div>

<!--出力結果-->
<div class="panel panel-default">
<div class="panel-heading">
出力結果
</div>
<div class="panel-body">
<!--PHPの実コード-->

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
$fileReader = new FileReader("file.txt");
$fileReader->outputFile();
?>
<!--PHPのコード-->
</div>
</div>
<!--出力結果-->
</div>

<?php $footer = new FileReader(FileReader::$footer);
$footer->outputFile();?>

