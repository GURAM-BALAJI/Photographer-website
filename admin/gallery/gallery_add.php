
<?php
include '../session.php';
if (isset($_POST['add'])) {
	$conn = $pdo->open();
	$gallery_group = $_POST['image_group'];
	$image = $_FILES['image']['name'];
	if (!empty($image)) {
		$ext = pathinfo($image, PATHINFO_EXTENSION);
		$filename = time() . '.' . $ext;
		move_uploaded_file($_FILES['image']['tmp_name'], '../../images/gallery/' . $filename);
		try {
			$stmt = $conn->prepare("INSERT INTO gallery (gallery_name,gallery_group) VALUES (:name,:gallery_group)");
			$stmt->execute(['name' => $filename, 'gallery_group' => $gallery_group]);
			$_SESSION['success'] = 'Image added successfully';
		} catch (PDOException $e) {
			$_SESSION['error'] = $e->getMessage();
		}
	}

	$pdo->close();
} else {
	$_SESSION['error'] = 'Fill up Image form first';
}

header('location: index.php');

?>