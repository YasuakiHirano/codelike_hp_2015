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
            <div class="head_title">Contact</div>
				<div class="main_text">
					<div id="mail_top">
						メール(各SNS)またはフォームから、お気軽にご相談ください。
					</div>
					<div style="height:70px;width:100%;padding:20px 0px;clear:both;margin-left:30px;">
						<div id="mail_left">
							<img src="./images/icon_mail.png" width="70" height="70" alt="メールアドレス" />
						</div>
						<div id="mail_right">
							<a href="mailto:hirano@codelike.info?subject=【問い合わせ】&amp;body=下記にご記入ください。">hirano@codelike.info</a>
						</div>
						<div id="sns_line">
							<a href="https://www.facebook.com/yasuaki0206" target="_blank"><img src="./images/facebook.png" width="70" height="70" alt="facebook" /></a>
							<a href="https://twitter.com/include777" target="_blank"><img src="./images/twitter.png" width="70" height="70" alt="twitter" /></a>
						</div>
					</div>
					<form action="codelikemail.php" method="post" name="message_form" >
						<table id="form_table" name="form_table">
							<tr><td>件名</td><td><input type="text" name="subject" id="subject" size="42" value="" /></td></tr>
							<tr><td>氏名</td><td><input type="text" name="name" id="name" size="42" value="" /></td></tr>
							<tr><td>メールアドレス</td><td><input type="text" name="mail" id="mail" size="42" value="" /></td></tr>
							<tr><td>本文</td><td><textarea name="message" id="message" cols="50" rows="5"></textarea></td></tr>
							<tr><td colspan="2" align="center"><input type="submit" value="送信する" /></td></tr>
						</table>
					</form>
				</div>
            </div>
        </div>
    </body>
</html>
