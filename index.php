<?php include('/php/FileReader.php')
$header = new FileReader(FileReader::$header);
$header->outputFile();?>

<!-- hoverで動かしたかったのでCSSべた書き -->
<style type="text/css">
#GithubLogo{
	transition: 0.8s;
		width: 10vw;
}
#GithubLogo:hover{
	width: 12vw;
}
</style>
		<!-- hoverで動かしたかったのでCSSべた書き -->
		<div class="container text-center"><a href="https://github.com/nekonisi"><img id="GithubLogo" src="https://assets-cdn.github.com/images/modules/logos_page/GitHub-Mark.png"></img></a></div>

<?php include('/php/FileReader.php')
$footer = new FileReader(FileReader::$footer);
$footer->outputFile();?>

