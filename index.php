<?php include(__DIR__.'/include/FileReader.php');
$header = new FileReader(FileReader::$header);
$header->outputFile();?>

<div class="panel panel-default">
	<div class="panel-heading">
		概要
	</div>
	<div class="panel-body">
		PHPの実行環境。<br>
		書いたコードを掲載していく。<br>
		PHPでデザパタの勉強もする。
	</div>
</div>
<!--概要説明-->

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

<?php
$footer = new FileReader(FileReader::$footer);
$footer->outputFile();?>

