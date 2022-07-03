
<?php
	include '../session.php';
	include '../includes/req_start.php';
	if($req_per==1){
	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM works WHERE works_name=:name");
		$stmt->execute(['name'=>$name]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Works already exist';
		}
		else{
			try{
				$stmt = $conn->prepare("INSERT INTO works (works_name) VALUES (:name)");
				$stmt->execute(['name'=>$name]);
				$_SESSION['success'] = 'Works added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up works form first';
	}
}

	header('location: index.php');

?>