<?php require_once __DIR__ .'/../../db/connect.php';?>
<div class="sidebar">
	<div class="widget">
		<h3 class="badge"><i class="fa fa-search" aria-hidden="true"></i> Search Blogs</h3>
		<form class="form-inline blogsearch" method="post" action="#">
			<input type="text" class="form-control" name="sld" placeholder="Search & Press Enter"/>
		</form>
	</div>
	<div class="widget">
		<h3 class="badge">Blog Categories</h3>
		<ul>
			<li><a href="/web-class/exercise/">Bài tập</a> <span class="badge"><?php echo$db->getCountExercise() ?></span></li>
			<?php if (in_array( $_COOKIE['id'], $listAdmins)): ?>
				<li><a href="/web-class/add-exercise/" title="">Thêm bài tập</a></li>
			<?php else: ?>
				
			<?php endif ?>
		</ul>
	</div>
	<div class="widget">
		<h3 class="badge">Tags</h3>
		<div class="tagcloud">
			<a href="">Analytics</a>
		</div>
	</div>
	<div class="widget">
		<h3 class="badge">Recent Posts</h3>
		<ul>
			<li><a href="#">Automated website Deployment</a></li>
		</ul>
	</div>
	<div class="widget">
		<h3 class="badge">Advertisement</h3>
		<a href=""><img src="images/blog/add.jpg" alt="" /></a>
	</div>
</div>