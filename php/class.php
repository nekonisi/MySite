<?php include(__DIR__.'/../include/FileReader.php');
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
// Class
class MyClass
{

	// property
	private $name;
	private $age;

	// static property
	public static $introName='My Name is ';
	public static $introAge='My age is ';

	//setter
	public function setName($val){
		$this->name=$val;
	}
	public function setAge($val){
		$this->age=$val;
	}

	//getter
	public function getName($val){
		return $this->name=$val;
	}

	public function getAge($val){
		return $this->age=$val;
	}

	// method
	public function introduce(){
		echo &#039;&lt;p&gt;&#039;.MyClass::$introName.$this-&gt;name.&#039;&lt;/p&gt;&lt;br&gt;&#039;;
		echo &#039;&lt;p&gt;&#039;.MyClass::$introAge.(String)$this-&gt;age.&#039;&lt;/p&gt;&lt;br&gt;&#039;;
		   }

	}

	/* コンストラクタ */
	public function __construct($name,$age){
		$this->name=$name;
		$this->age=$age;
	}
}

$class = new MyClass("nekonisi",26);
$class->introduce();
$class->setName("hoge");
$class->setAge(27);
$class->introduce();
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
// Class
class MyClass
{

	// property
	private $name;
	private $age;

	// static property
	public static $introName='My Name is ';
	public static $introAge='My age is ';

	//setter
	public function setName($val){
		$this->name=$val;
	}
	public function setAge($val){
		$this->age=$val;
	}

	//getter
	public function getName($val){
		return $this->name=$val;
	}

	public function getAge($val){
		return $this->age=$val;
	}

	// method
	public function introduce(){
		echo '<p>'.MyClass::$introName.$this->name.'</p><br>';
		echo '<p>'.MyClass::$introAge.(String)$this->age.'</p><br>';
	}

	/* コンストラクタ */
	public function __construct($name,$age){
		$this->name=$name;
		$this->age=$age;
	}
}

$class = new MyClass("nekonisi",26);
$class->introduce();
$class->setName("hoge");
$class->setAge(27);
$class->introduce();
?>
<!--PHPのコード-->
	</div>
</div>
<!--出力結果-->
</div>

<?php $footer = new FileReader(FileReader::$footer);
$footer->outputFile();?>

