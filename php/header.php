<?php

class HeaderCreater
{
	/* ヘッダ文字列を格納する。*/
	private $header = '';
	private $filePointer;

	public function getHeader(){
		echo "IN getHeader";
		echo $this->$header;
		echo "IN getHeader()";
	}

	/* コンストラクタ */
	function __construct(){
		echo "IN __construct()";
		$this->$filePointer = @fopen("header.html",'r');
		while(!feof($this->$filePointer)){
			$this->$header .=fgets($filePointer);
		}
		fclose($filePointer);
		echo "OUT __construct()";
	}
}

echo "test";
//echo "create Instance";
//$instance = new HeaderCreater();
//echo "execute getHeader";
//$instance->getHeader();
?>
