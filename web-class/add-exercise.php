<?php
	require_once '../check-login.php';
	require_once __DIR__ . '/../layout/translate.php';
	require_once __DIR__ . '/../db/connect.php';
	$exercise = array('title' => '', 'content' =>'');
	$h1= "Thêm bài tập";
	/* lưu dữ liệu*/
	if (!empty($_POST['content']) && !empty($_POST['title'])) {
		$db->addExercise($_POST['title'], $_POST['content'], $_POST['id'] ?? '');
	}

	/* lấy dữ liệu để hiển thị*/
	if(!empty($_GET['id'])){
		$exercise = $db->getExercise($_GET['id']);
		$h1 = "Chỉnh sửa nội dung bài {$_GET['id']}:";
		/* thêm thẻ input chứa id */
		$id = '<input type="text" name="id" value="' . $_GET['id'] . '" hidden="1" />';
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Web class</title>
		<?php require '../layout/css.php'; ?>
	</head>
	<body>
		<?php require '../layout/header.php'; ?>
		<?php require '../layout/js.php'; ?>
		<!-- Blog -->
		<div class="blog section_space">
			<div class="row">
				<div class="col-sm-4">
					<?php require 'layout/menu-left.php'; ?>
				</div>
				<div class="col-sm-8">
					<!-- Blog Post-->
					<article>
						<div class="post-content">
							<h2 class="title text-center"><?php echo$h1 ?></h2>
							<form action="" method="post" id="commentform" class="comment-form">
								<!-- <p class="comment-notes">Fields marked as <span class="required">*</span> are required.</p> -->
								<?php echo$id ?? '' ?>
								<p class="comment-form-author"><label for="title">Tiêu đề<span class="required">*</span></label> <input id="title" class="form-control" name="title" type="text" value="<?php echo$exercise['title'] ?>" size="30"/></p>
								<p class="comment-form-author"><label for="author">Người ra đề<span class="required">*</span></label> <input id="author" class="form-control" name="author" type="text" value="" size="30"/></p>
								<p class="comment-form-comment"><label for="content">Nội dung</label> <textarea id="comment" class="form-control" name="content" cols="45" rows="8"><?php echo$exercise['content'] ?></textarea></p>
								<button type="submit" class="btn waves-effect waves-light btn-success">Lưu</button>
							</form>
						</div>
					</article>
					<!-- End of Blog Post -->
					<!-- Author Box -->
					<div class="author-wrap">
						<div class="row">
							<div class="col-sm-2">
								<div class="author-gravatar"><img src="images/testimonial1.jpg" alt=""/></div>
							</div>
							<div class="col-sm-10">
								<div class="author-info">
									<div class="author author-title"><h6>TrewSoft</h6></div>
									<div class="author-description"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p></div>
								</div>
							</div>
						</div>
					</div>
					<!-- End of Other Box -->
					<!-- Comments -->
					<div class="comments">
						<div id="thecomments">
							<h2 class="title text-center">1 Comment</h2>
							<ol class="commentlist">
								<li class="comment">
									<div class="comment-body">
										<div class="comment-author vcard">
											<img class="avatar" src="images/testimonial2.jpg" alt="">
											<h6><a class="url" rel="external nofollow" href="">Quaron Whitherspoon</a></h6>
											<div class="comment-time"><a href="">January 9, 2017 - 04:21:11</a></div>
										</div>
										<div class="comment-meta commentmetadata">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
											<div class="reply">
												<a class="comment-reply-link" href="">Reply</a>
											</div>
										</div>
									</div>
								</li>
							</ol>
						</div>
					</div>
					<!-- End of Comments -->
					<!-- New Comment -->
					<div id="addcomments">
						<div id="respond" class="comment-respond">
							<h2 class="title text-center">Send your comments</h2>
							<form action="#" method="post" id="commentform" class="comment-form">
								<p class="comment-notes">Fields marked as <span class="required">*</span> are required.</p>
								<p class="comment-form-author"><label for="author">Your Name <span class="required">*</span></label> <input id="author" class="form-control" name="author" type="text" value="" size="30"/></p>
								<p class="comment-form-email"><label for="email">Contact Email<span class="required">*</span></label> <input id="email" class="form-control" name="email" type="email" value="" size="30"/></p>
								<p class="comment-form-url"><label for="url">Your Website</label> <input id="url" class="form-control" name="url" type="url" value="" size="30" /></p>
								<p class="comment-form-comment"><label for="comment">Description</label> <textarea id="comment" class="form-control" name="comment" cols="45" rows="8"></textarea></p>
								<a class="btn waves-effect waves-light btn-success" href="#">Submit</a>
							</form>
							</div><!-- #respond -->
						</div>
						<!-- End of New Comment -->
					</div>
				</div>
			</div>
			<!-- End of Blog -->
		</body>
	</html>