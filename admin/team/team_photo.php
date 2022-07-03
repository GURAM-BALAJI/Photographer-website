<?php
include '../session.php';
include '../includes/req_start.php';
if ($req_per == 1) {
	if (isset($_POST['upload'])) {
		$id = $_POST['id'];
		$filename = $_FILES['photo']['name'];

		$conn = $pdo->open();
		if (!empty($filename)) {
			$stmt = $conn->prepare("SELECT team_photo FROM team WHERE team_id=:id");
			$stmt->execute(['id' => $id]);
			foreach ($stmt as $row)
				unlink('../../images/team/' . $row['team_photo']);
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			$filename = date('Y-m-d') . '_' . time() . '.' . $ext;
			move_uploaded_file($_FILES['photo']['tmp_name'], '../../images/team/' . $filename);
		}
		try {
			$stmt = $conn->prepare("UPDATE team SET team_photo=:photo WHERE team_id=:id");
			$stmt->execute(['photo' => $filename, 'id' => $id]);
			$_SESSION['success'] = 'team photo updated successfully';
		} catch (PDOException $e) {
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	} else {
		$_SESSION['error'] = 'Select team to update photo first';
	}
}

header('location: index.php');
