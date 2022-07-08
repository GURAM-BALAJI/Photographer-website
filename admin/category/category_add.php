
<?php
	include '../session.php';
	include '../includes/req_start.php';
	if($req_per==1){
	if(isset($_POST['add'])){
		$name = strtoupper($_POST['name']);
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM category WHERE category_name=:name");
		$stmt->execute(['name'=>$name]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'category already exist';
		}
		else{
			try{
				$stmt = $conn->prepare("INSERT INTO category (category_name) VALUES (:name)");
				$stmt->execute(['name'=>$name]);
				$_SESSION['success'] = 'category added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up category form first';
	}
}

	header('location: index.php');

?>