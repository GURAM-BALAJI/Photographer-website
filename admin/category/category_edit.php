<?php
	include '../session.php';
	include '../includes/req_start.php';
	if($req_per==1){
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$discription = $_POST['discription'];
		$name = strtoupper($_POST['name']);

		try{
			$stmt = $conn->prepare("UPDATE category SET category_name=:name,category_discription=:category_discription WHERE category_id=:id");
			$stmt->execute(['name'=>$name,'category_discription'=>$discription,'id'=>$id]);
			$_SESSION['success'] = 'Category updated successfully';
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
