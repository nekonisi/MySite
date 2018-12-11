<?php include('FileReader.php') ?>

<?php $header = new FileReader(FileReader::$header);
$header->outputFile();?>

<a href="calculate.php">計算</a>

<?php $footer = new FileReader(FileReader::$footer);
$footer->outputFile();?>
