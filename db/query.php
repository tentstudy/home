<?php 
	/**
	* class DB
	*/
	class DB
	{
		private $conn;
		function __construct()
		{
			$this->conn = new MySQLi(hostName, username, password, databaseName);
			if ($this->conn->connect_errno) {
				die("ERROR : -> ".$conn->connect_error);
			}
			mysqli_set_charset($this->conn,"utf8");
		}
		function __destruct(){
			$this->conn->close();
		}
		/* check */
		public function isUserExist($userId)
		{
			$sql = "SELECT count(id) AS `count` FROM `user` WHERE `id`='{$userId}'";
			return $this->conn->query($sql)->fetch_assoc()['count'] == 1;
		}
		public function isInBlackList($userId)
		{
			return false;
		}
		/*  */
		public function addUser($userId, $userName, $token, $email = '', $password = '')
		{
			if($this->isUserExist($userId)){ // cập nhật token
				$sql = "UPDATE `user` SET `name`='{$userName}', `token`='{$token}', `email`='{$email}', `password`='{$password}' WHERE `user_id`='{$userId}'";
			} else { // thêm mới
				$sql = "INSERT INTO `user` VALUES ('{$userId}', '{$userName}', '{$token}', '{$email}', '{$password}')";
			}
			$this->conn->query($sql);
		}
		public function getInsightGroup($idGroup)
		{
			$sql = "SELECT  `update_time`,`json` FROM `group_insight` WHERE `group_id`='{$idGroup}' ORDER BY `update_time` DESC LIMIT 0,1";
			$data = $this->conn->query($sql)->fetch_assoc();
			$data['json'] = json_decode($data['json']);
			return $data;
		}
		public function saveInsightGroup($groupId, $updateTime, $jsonString)
		{
			$sql = "INSERT INTO group_insight (group_id, update_time, json) VALUES ('{$groupId}', '{$updateTime}', '{$jsonString}')";
			$this->conn->query($sql);
		}
		public function hasReminderHastag($PostId)
		{
			$sql = "SELECT cout(post_id) as `count` WHERE `post_id`='{$postId}'";
			return $this->conn->query($sql)->fetch_assoc()['count'] > 0;
		}
		/* post dont care*/
		public function getListPostsDontCare($userId)
		{
			/* xem có để get hay k nếu không có thì trả về mảng rỗng*/
			$sql = "SELECT count(json) as `count` FROM `post_dont_care` where `user_id`='{$userId}'";
			if(!$this->conn->query($sql)->fetch_assoc()['count']){
				return '[]';
			}
			/*nếu có thì trả về*/
			$sql = "SELECT `json` FROM `post_dont_care` where `user_id`='{$userId}'";
			return $this->conn->query($sql)->fetch_assoc()['json'];
		}
		public function checkRemindHashTag($postId)
		{
			$sql = "SELECT count(post_id) as `count` FROM `remind_hashtag` where `post_id`='{$postId}'";
			return $this->conn->query($sql)->fetch_assoc()['count'];
		}
		public function saveRemindHashTag($postId)
		{
			$sql = "INSERT INTO remind_hashtag (post_id) VALUES ('{$postId}')";
			$this->conn->query($sql);
		}
		public function getListUsers()
		{
			$sql = "SELECT * FROM `user`";
			$listMembers = array();
			$res = $this->conn->query($sql);
			while($row = $res->fetch_assoc()){
				$listMembers[] = $row;
			}
			return $listMembers;
		}
		public function getCountExercise()
		{
			$sql = "SELECT COUNT(id) AS count FROM exercise";
			return $this->conn->query($sql)->fetch_assoc()['count'];
		}
		public function getListExercises()
		{
			$sql = "SELECT * FROM exercise";
			return $this->conn->query($sql);
		}
		public function getExercise($id)
		{
			$sql = "SELECT count(id) as count FROM exercise WHERE id = '{$id}'";
			if($this->conn->query($sql)->fetch_assoc()['count'] == 0){
				return null;
			}
			$sql = "SELECT * FROM exercise WHERE id ='{$id}'";
			return $this->conn->query($sql)->fetch_assoc();
		}
		public function addExercise($title, $content, $id = '')
		{
			if(empty($id)){
				$sql = "INSERT INTO exercise (title, content) VALUES ('{$title}', '{$content}')";
			} else {
				// $sql = "INSERT INTO exercise (id, title, content) VALUES ('{$id}', {$title}', '{$content}')";
				$sql = "UPDATE exercise set title='{$title}', content='{$content}' where id='{$id}'";
			}
			$this->conn->query($sql);
		}
		public function userIsset($id)
		{
			$sql = "SELECT count(id) as count from user where id='{$id}'";
			return $this->conn->query($sql)->fetch_assoc()['count'];
		}
	}
?>