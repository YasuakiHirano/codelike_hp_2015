<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="./css/tooltipster.css" />
        <link rel="stylesheet" type="text/css" href="./css/main.css" />
    	<link rel="icon" href="favicon.ico">
        <script src="./js/jquery-2.1.4.min.js"></script>
        <script src="./js/jQueryRotate.js"></script>
        <script src="./js/jquery.jrumble.1.3.min.js"></script>
        <script src="./js/jquery.tooltipster.js"></script>
        <script src="./js/main.js"></script>
        <title>CodeLike | Web・ソフトウェア・モバイルアプリ開発 / 個人事業・フリーランス</title>
    </head>
    <body>
       <?php require 'menu_area.php'; ?>
       <div id="main_area">
            <div id="codelike_other_area">
                <img src="./images/codelike_logo.png" width="125" />
            </div>
            <div class="head_title">Profile</div>
				<div class="main_text">
					<div class="text_block">
						<div class="text_type">Info Table</div>
						<div class="text_item">
							<table id="profile_table">
								<tr>
									<td>名前</td><td>平野靖朗</td>
								</tr>
								<tr>
									<td>出身地</td><td>長崎県長崎市</td>
								</tr>
								<tr>
									<td>経歴</td>
									<td>
										<div id="scroll_box">
											>2007年<br />
											長崎の専門学校に入学。C言語やJava、PHPを習う。<br />
											>2009年<br />
											専門学校卒業、福岡にて就職。いろいろと学ばせてもらいながら業務をこなす。<br />
											>2012年<br />
											長崎にて仕事を始める。<br />
											>2013年<br />
											福岡でフリーランスとして独立。
										</div>
									</td>
								</tr>
							</table>
						</div>
						<div class="text_type">Twitter</div>
						<div class="text_item">
							※くだらないことをつぶやいています・・・。<br />
							<a class="twitter-timeline" href="https://twitter.com/include777" data-widget-id="597373863157112832">@include777さんのツイート</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div>
						<div class="text_type">Blog</div>
						<div class="text_item">
							<div><a href="http://blog.codelike.info">パンでもやけば？？</a>(代表によるパン焼き…ではなく！開発＆日常系ブログ)</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </body>
</html>
