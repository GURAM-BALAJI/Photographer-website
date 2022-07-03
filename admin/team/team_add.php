
<?php
include '../session.php';
include '../includes/req_start.php';
if ($req_per == 1) {
	if (isset($_POST['add'])) {
		$name  = $_POST['name'];
		$profession  = $_POST['profession'];
		$team_social_media1  = $_POST['team_social_media1'];
		$team_social_media1_link  = $_POST['team_social_media1_link'];
		$team_social_media2  = $_POST['team_social_media2'];
		$team_social_media2_link = $_POST['team_social_media2_link'];

		$conn = $pdo->open();

		try {
			date_default_timezone_set('Asia/Kolkata');
			$filename = $_FILES['photo']['name'];
			if (!empty($filename)) {
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$filename = date('Y-m-d') . '_' . time() . '.' . $ext;
				move_uploaded_file($_FILES['photo']['tmp_name'], '../../images/team/' . $filename);
			}
			$today = date('d-m-Y h:i:s a');
			$stmt = $conn->prepare("INSERT INTO team (team_name,team_photo,team_profession,team_social_media1,team_social_media1_link,team_social_media2,team_social_media2_link) VALUES (:team_name,:team_photo,:team_profession,:team_social_media1,:team_social_media1_link,:team_social_media2,:team_social_media2_link)");
			$stmt->execute(['team_name' => $name, 'team_photo' => $filename, 'team_profession' => $profession, 'team_social_media1' => $team_social_media1, 'team_social_media1_link' => $team_social_media1_link, 'team_social_media2' => $team_social_media2, 'team_social_media2_link' => $team_social_media2_link]);
			$_SESSION['success'] = 'Team added successfully';
		} catch (PDOException $e) {
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	} else {
		$_SESSION['error'] = 'Fill up team form first';
	}
}

header('location: index.php');

?>