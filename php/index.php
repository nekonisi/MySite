<?php include(__DIR__.'/../include/FileReader.php');

$header = new FileReader(FileReader::$header);
$header->outputFile();?>

<div class="panel panel-default">
<div class="panel-heading">
<h1 class="panel-title">
<span class="glyphicon glyphicon-link" aria-hidden="true"></span>
内容　　<small>Components</small>
</h1>
</div>
<div class="list-group">
<a class="list-group-item" href="calculate.php"> 変数の宣言</a>
<a class="list-group-item" href="class.php">クラス</a>
<a class="list-group-item" href="FileReader.php">ファイル読み込み(自前クラス)</a>
</div>
</div>

<?php $footer = new FileReader(FileReader::$footer);
$footer->outputFile();?>
