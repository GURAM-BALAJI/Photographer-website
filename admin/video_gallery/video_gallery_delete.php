<?php
	include '../session.php';
	include '../includes/req_start.php';
	if($req_per==1){
	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM video_gallery WHERE video_gallery_id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'video deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select video gallery to delete first';
	}
}

	header('location: index.php');
	
?>