
<?php include('FileReader.php') ?>
<?php $header = new FileReader(FileReader::$header);
$header->outputFile();?>

<div class="contaigner">
<!--概要説明-->
<div class="panel panel-default">
	<div class="panel-heading">
		概要
	</div>
	<div class="panel-body">
		変数を使って，PHPによる変数の出力テストを行う。
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
$price = 12300;
$total = $price * 1.05;
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

