<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
	require_once '../check-login.php';
	require_once '../layout/translate.php';
	require_once __DIR__ . '/../db/connect.php';
	$exerciseId = $_GET['id'] ?? 1;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Web class</title>
		<?php require '../layout/css.php'; ?>
		<style>
			body{
				/*height: 100vh;*/
			}
			.result{
				width: 100%;
				height: calc(100vh - 55px);
			}
			.full-screen{
				position: fixed;
				z-index: 100;
				top: 0px;
				left: 0px;
				bottom: 0px;
				right: 0px;
				height: 100%;
				/*width: 10px;*/
				background: black;
			}
			#btn-fullscreen{
				position: fixed;
				z-index: 101;
				width: 30px;
				height: 30px;	
				bottom: 10px;
				right: 10px;
			}
			iframe{
				border: 0px;
				padding: 0px;
			}
		</style>
	</head>
	<body>
		<?php require '../layout/header.php'; ?>
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
			<?php foreach ($db->getListUsers() as $key => $user): ?>
			<?php $listFiles = glob("storage/{$exerciseId}_{$user['id']}_*") ?>
			<?php if (sizeof($listFiles)): ?>
			<div class="media">
				<a class="pull-left" href="#">
					<?php echo("<img class=\"media-object\" src=\"https://graph.facebook.com/{$user['id']}/picture?type=large&redirect=true&width=40&height=40\" alt=\"Image\">") ?>
				</a>
				<div class="media-body">
					<h4 class="media-heading"><?php echo$user['name'] ?></h4>
					<?php
						foreach ($listFiles as $key => $value){
							$link = "/web-class/{$value}";
							$value = explode('_', str_replace(array('storage/', '.html'), '', $value));
							$time = date("d/m/Y H:i:s A", $value[2]);
							echo"<a href=\"{$link}\" target=\"result\">bài 1 lúc {$time}</a>";
						}
					?>
				</div>
			</div>
			<?php else: ?>
			
			<?php endif ?>
			<?php endforeach ?>
			
		</div>
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" id="parent">
			<iframe name="result" class="result full-screen"></iframe>
			<img id="btn-fullscreen" src="/images/icon-fullscreen.png" alt="" />
		</div>
		<?php require '../layout/js.php'; ?>
		<script>
	$(function() {
		$("#btn-fullscreen").click(function() {
			$(".result").toggleClass("full-screen");
		});
	});
</script>
	</body>
</html>