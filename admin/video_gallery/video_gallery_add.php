
<?php
	include '../session.php';
	include '../includes/req_start.php';
	if($req_per==1){
	if(isset($_POST['add'])){
		$link = $_POST['link'];
		$video_gallery_name = $_POST['video_gallery_name'];
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM video_gallery WHERE video_gallery_link=:link");
		$stmt->execute(['link'=>$link]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Video already exist';
		}
		else{
			try{
				$stmt = $conn->prepare("INSERT INTO video_gallery (video_gallery_link,video_gallery_name) VALUES (:link,:video_gallery_name)");
				$stmt->execute(['link'=>$link,'video_gallery_name'=>$video_gallery_name]);
				$_SESSION['success'] = 'Video added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up video gallery form first';
	}
}

	header('location: index.php');

?>