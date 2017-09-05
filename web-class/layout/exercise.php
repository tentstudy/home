<?php
	require_once __DIR__ . '/../../db/connect.php';
	$data = $db->getExercise($_GET['id'] ?? 0);
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $error = array();
    if (!empty($_FILES["fileToUpload"])) {
        $uploadOk = 1;
    	$file = $_FILES["fileToUpload"];
    	/*kiểm tra dung lượng*/
	    if ($file["size"] > 500000) {
	       	$error[] = "Sorry, your file is too large.";
	    }
	    // $fileName = str_replace(array(
	    //     '.php', '.html', '.htm', '.phtml'
	    // ), '', basename($file["name"]));
	    $time = strtotime("now");
	    $userId = $_COOKIE['id'];
	    $fileName = "{$data['id']}_{$userId}_{$time}.html";
	    $pathFile = "storage/" . $fileName;
	    /*kiểm tra file đã tồn tại hay chưa*/
	    if (file_exists($pathFile)) {
	        $error[] =  "Sorry, file already exists.";
	    }
	    $success = array();
	    if (!sizeof($error) && move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $pathFile)) {
	            $success[] = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	        } else {
	            $error[] = "Sorry, there was an error uploading your file.";
        }
    }
?>
<script>
$(document).ready(function (){
    $('#choose-file').on('change', function(e){
        $('#choosed-file').text($(e.target).val().split("\\")[2]);
    });
});
</script>
<h2><a href="">Bài <?php echo"{$data['id']}: {$data['title']}" ?></a></h2>
<!-- <div class="thedate"><span>22</span> January 2015</div> -->
<img src="images/blog/blog3.jpg" alt="" />
<p><?php echo$data['content'] ?></p>
<?php 
	if (!empty($error)) {
		foreach ($error as $key => $value) {
			echo $value;
		}
	}
?>
<form action="" method="POST" role="form" id="socola" enctype="multipart/form-data">
	<div class="form-group">
		<label for="choose-file">
			<a type="button" class="btn btn-primary">
				<span class="glyphicon glyphicon-folder-open"></span>
				Chọn file
			</a>
		</label>
		<!--  accept=".html,.php,.zip,.rar" -->
		<input type="file" name="fileToUpload" id="choose-file" style="display: none;" />
		<span id="choosed-file">Không có file nào được chọn</span>
	</div>
	<div class="form-group">
		<button class="btn btn-primary" name="submit" type="submit" id="submit">Nộp bài</button>
	</div>
	_
</form>
<!-- <blockquote>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
</blockquote>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
<ul>
		<li>Lorem Ipsum is simply dummy text</li>
		<li>Lorem Ipsum is simply dummy text</li>
		<li>Lorem Ipsum is simply dummy text</li>
		<li>Lorem Ipsum is simply dummy text</li>
</ul>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
<div class="tagcloud">
		<a href="">Analytics</a>
		<a href="">Security</a>
		<a href="">VPS</a>
</div>
</div> -->