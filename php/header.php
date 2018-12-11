<?php
class HeaderCreater
{
	/* ヘッダ文字列を格納する。*/
	private $header = '';
	private $filePointer;

	public function getHeader(){
		echo "IN getHeader"
		echo $this->$header;
		echo "IN getHeader()"
	}

	/* コンストラクタ */
	function __construct(){
		echo "IN __construct()"
		$this->$filePointer = @fopen("header.html",r) or echo "ヘッダの読み込みに失敗しました。";
		while(!feof($this->$filePointer)){
			$header .=fgets($filePointer)
		echo "OUT __construct()"
		}
	}
}

echo "create Instance";
$instance = new HeaderCreater();
echo "execute getHeader";
$instance->getHeader();
?>
