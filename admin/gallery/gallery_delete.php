<?php
include '../session.php';
include '../includes/req_start.php';
if (isset($_POST['delete'])) {
	$id = $_POST['id'];
	$conn = $pdo->open();
	try {
		$stmt = $conn->prepare("SELECT * FROM gallery WHERE gallery_id=:id");
		$stmt->execute(['id' => $id]);
		foreach ($stmt as $row)
			$file = $row['gallery_name'];
		unlink('../../images/gallery/' . $file);
		$stmt = $conn->prepare("DELETE from gallery WHERE gallery_id=:id");
		$stmt->execute(['id' => $id]);


		$_SESSION['success'] = 'Image deleted successfully';
	} catch (PDOException $e) {
		$_SESSION['error'] = $e->getMessage();
	}

	$pdo->close();
} else {
	$_SESSION['error'] = 'Select gallery to delete first';
}

header('location: index.php');
