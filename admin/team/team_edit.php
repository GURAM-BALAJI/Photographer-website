<?php
include '../session.php';
include '../includes/req_start.php';
if ($req_per == 1) {
	if (isset($_POST['edit'])) {
		$id = $_POST['id'];
		$name  = $_POST['name'];
		$profession  = $_POST['profession'];
		$team_social_media1  = $_POST['team_social_media1'];
		$team_social_media1_link  = $_POST['team_social_media1_link'];
		$team_social_media2  = $_POST['team_social_media2'];
		$team_social_media2_link = $_POST['team_social_media2_link'];

		try {
			$stmt = $conn->prepare("UPDATE team SET team_name=:team_name,team_profession=:team_profession,team_social_media1=:team_social_media1,team_social_media1_link=:team_social_media1_link,team_social_media2=:team_social_media2,team_social_media2_link=:team_social_media2_link WHERE team_id=:id");
			$stmt->execute(['team_name' => $name, 'team_profession' => $profession, 'team_social_media1' => $team_social_media1, 'team_social_media1_link' => $team_social_media1_link, 'team_social_media2' => $team_social_media2, 'team_social_media2_link' => $team_social_media2_link, 'id' => $id]);
			$_SESSION['success'] = 'Team updated successfully';
		} catch (PDOException $e) {
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	} else {
		$_SESSION['error'] = 'Fill up edit team form first';
	}
}

header('location: index.php');
