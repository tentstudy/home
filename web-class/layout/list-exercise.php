<?php
	require_once __DIR__ . '/../../db/connect.php';
	$listExercises = $db->getListExercises();
?>
<h2><a href="">Danh sách bài tập</a></h2>
<div class="thedate"><span>22</span> January 2015</div>
<img src="images/blog/blog3.jpg" alt="" />
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th></th>
			<th class="text-center">Vấn đề</th>
			<th>Độ khó</th>
			<th>Nộp</th>
			<?php if (in_array( $_COOKIE['id'], $listAdmins)): ?>
				<th>Sửa</th>
			<?php else: ?>
				
			<?php endif ?>
		</tr>
	</thead>
	<tbody>
		<?php
			if (in_array( $_COOKIE['id'], $listAdmins)){
				$index = 0;
				while ($exercise = $listExercises->fetch_assoc()){
					$index ++;
					$count = sizeof(glob("storage/{$exercise['id']}_*"));
					echo"
						<tr>
							<td>{$index}</td>
							<td><a href=\"/web-class/exercise-{$exercise['id']}\">Bài {$exercise['id']}: {$exercise['title']}</a></td>
							<td>Dễ</td>
							<td><a href=\"/web-class/view-exercise-{$exercise['id']}\">{$count}</a></td>
							<td><a href=\"/web-class/edit-exercise-{$exercise['id']}\"><i class=\"fa fa-pencil-square-o\"></i></a></td>
						</tr>
					";
				}
			} else {
				$index = 0;
				while ($exercise = $listExercises->fetch_assoc()){
					$index ++;
					$count = sizeof(glob("storage/{$exercise['id']}_*"));
					echo"
						<tr>
							<td>{$index}</td>
							<td><a href=\"/web-class/exercise-{$exercise['id']}\">Bài {$exercise['id']}: {$exercise['title']}</a></td>
							<td>Dễ</td>
							<td>{$count}</td>
						</tr>
					";
				}
			}
		?>
	</tbody>
</table>