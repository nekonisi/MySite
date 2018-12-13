<?php
include('/php/FileReader.php')

$header = new FileReader(FileReader::$header);
$header->OutputFile();
?>

<!-- Contents Here -->

<?php
$footer = new FileReader(FileReader::$footer);
$footer->Outputfile();
?>
