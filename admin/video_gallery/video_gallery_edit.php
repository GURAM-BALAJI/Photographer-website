<?php
	include '../session.php';
	include '../includes/req_start.php';
	if($req_per==1){
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$link = $_POST['link'];
		$video_gallery_name = $_POST['video_gallery_name'];
		try{
			$stmt = $conn->prepare("UPDATE video_gallery SET video_gallery_link=:link,video_gallery_name=:video_gallery_name WHERE video_gallery_id=:id");
			$stmt->execute(['link'=>$link,'video_gallery_name'=>$video_gallery_name, 'id'=>$id]);
			$_SESSION['success'] = 'video updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit video gallery form first';
	}
}

	header('location: index.php');

?>