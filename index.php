<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="shortcut icon" href="ico/favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Study Page</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<header class="page-header text-center">
		<h1>Study Page <small>By nekonisi</small></h1>

		<!-- ナビゲーションバーここから-->

		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarEexample7">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">
						トップ
					</a>
				</div>

				<div class="collapse navbar-collapse" id="navbarEexample7">
					<ul class="nav navbar-nav">
						<li><a href="/php/">PHPに関して</a></li>
						<li class="active"><a href="/designPattern/">デザインパターンに関して</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- ナビゲーションバーここまで-->
	</header>
	<body>

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
	</body>
	<footer class="text-center container-fluid bFoot" style="margin:10vh;">
		<div class="container">
			<span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span> 2018 <a href="http://nekonisi.com">nekonisi</a><br class="visible-xs-inline">
			</p>
		</div>
	</footer>
	<!-- bootstrap js ここから-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<!-- bootstrap js ここまで-->
</html>
