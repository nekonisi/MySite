
<?php include(__DIR__.'/../include/FileReader.php')
$header = new FileReader(FileReader::$header);
$header->outputFile();?>

<div class="contaigner">
<!--概要説明-->
<div class="panel panel-default">
	<div class="panel-heading">
		概要
	</div>
	<div class="panel-body">
		クラスとインスタンス化について
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
<?php

// Class
class MyClass
{

	// property
	private String $name;
	private int $age;

	// static property
	public static $introName='My Name is ';
	public static $introAge='My age is ';

	//setter
	public set_name(String val){
	$this->name=val;
	}
	public set_age(int val){
	$this->age=val;
	}

	//getter
	public get_name(String val){
	$this->name=val;
	}

	public get_age(int val){
	$this->age=val;
	}

	// method
	public function introduce(){
		echo '<p>'.MyClass::$introName.$this->name.'</p><br>';
		echo '<p>'.MyClass::$introAge.(String)$this->age.'</p><br>';
	}

	/* コンストラクタ */
	public function __construct(String name, int age){
		$this->name=name;
		$this->age=age;
	}
}

MyClass class = new MyClass("nekonisi",26);
$class->introduce();

?>
</pre>
</code>
	</div>
</div>
<!--サンプルコード-->

<!--PHPの実コード-->
<?php
$price = 12300;
$total = $price * 1.05;
?>
<!--PHPのコード-->

<!--出力結果-->
<div class="panel panel-default">
	<div class="panel-heading">
		出力結果
	</div>
	<div class="panel-body">
	<p><?php echo '$price = '.$price; ?></p>
	<p><?php echo '$total = '.$total; ?></p>
	</div>
</div>
<!--出力結果-->
</div>

<?php $footer = new FileReader(FileReader::$footer);
$footer->outputFile();?>

