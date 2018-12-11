<? include('FileReader.php') ?>

<?php $header = new FileReader("templates/header.html");
$header->outputFile();?>

<a href="calculate.php">計算</a>

<?php $footer = new FileReader("templates/footer.html");
$footer->outputFile();?>
