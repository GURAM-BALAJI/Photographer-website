<?php
	include '../session.php';
	include '../includes/req_start.php';
	if($req_per==1){
	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$conn = $pdo->open();
		try{
			$stmt = $conn->prepare("SELECT team_photo FROM team WHERE team_id=:id");
			$stmt->execute(['id' => $id]);
			foreach ($stmt as $row)
				unlink('../../images/team/' . $row['team_photo']);
			$stmt = $conn->prepare("DELETE from team WHERE team_id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'team deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select team to delete first';
	}
}

	header('location: index.php');
