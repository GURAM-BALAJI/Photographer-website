<?php
	include '../session.php';
	include '../includes/req_start.php';
	if($req_per==1){
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];

		try{
			$stmt = $conn->prepare("UPDATE works SET works_name=:name WHERE works_id=:id");
			$stmt->execute(['name'=>$name, 'id'=>$id]);
			$_SESSION['success'] = 'Works updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit works form first';
	}
}

	header('location: index.php');

?>