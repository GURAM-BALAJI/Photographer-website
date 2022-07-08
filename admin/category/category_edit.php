<?php
	include '../session.php';
	include '../includes/req_start.php';
	if($req_per==1){
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = strtoupper($_POST['name']);

		try{
			$stmt = $conn->prepare("UPDATE category SET category_name=:name WHERE category_id=:id");
			$stmt->execute(['name'=>$name, 'id'=>$id]);
			$_SESSION['success'] = 'category updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit category form first';
	}
}

	header('location: index.php');

?>