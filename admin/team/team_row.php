<?php
include '../session.php';

if (isset($_POST['id'])) {
	$id = $_POST['id'];

	$conn = $pdo->open();

	$stmt = $conn->prepare("SELECT * FROM team WHERE team_id=:id");
	$stmt->execute(['id' => $id]);
	$row = $stmt->fetch();
	$pdo->close();
	$sm1_t = $row['team_social_media1'];
	$team_social_media1_type = "<select name='team_social_media1' class='form-control'>";
	$team_social_media1_type .= "<option value='' >Select social media 1</option>";
	if ($sm1_t == 'facebook')
		$team_social_media1_type .= "<option value='facebook' selected>FaceBook</option>";
	else
		$team_social_media1_type .= "<option value='facebook'>FaceBook</option>";
	if ($sm1_t == 'instagram')
		$team_social_media1_type .= "<option value='instagram' selected>Instagram</option>";
	else
		$team_social_media1_type .= "<option value='instagram'>Instagram</option>";
	if ($sm1_t == 'twitter')
		$team_social_media1_type .= "<option value='twitter' selected>Twitter</option>";
	else
		$team_social_media1_type .= "<option value='twitter'>Twitter</option>";
	if ($sm1_t == 'linkedin')
		$team_social_media1_type .= "<option value='linkedin' selected>Linkedin</option>";
	else
		$team_social_media1_type .= "<option value='linkedin'>Linkedin</option>";
	$team_social_media1_type .= "</select>";

	$sm2_t = $row['team_social_media2'];
	$team_social_media2_type = "<select name='team_social_media2' class='form-control'>";
	$team_social_media2_type .= "<option value='' >Select social media 2</option>";
	if ($sm2_t == 'facebook')
		$team_social_media2_type .= "<option value='facebook' selected>FaceBook</option>";
	else
		$team_social_media2_type .= "<option value='facebook'>FaceBook</option>";
	if ($sm2_t == 'instagram')
		$team_social_media2_type .= "<option value='instagram' selected>Instagram</option>";
	else
		$team_social_media2_type .= "<option value='instagram'>Instagram</option>";
	if ($sm2_t == 'twitter')
		$team_social_media2_type .= "<option value='twitter' selected>Twitter</option>";
	else
		$team_social_media2_type .= "<option value='twitter'>Twitter</option>";
	if ($sm2_t == 'linkedin')
		$team_social_media2_type .= "<option value='linkedin' selected>Linkedin</option>";
	else
		$team_social_media2_type .= "<option value='linkedin'>Linkedin</option>";
	$team_social_media2_type .= "</select>";


	$row = array(
		'team_social_media1' => $team_social_media1_type,
		'team_social_media2' => $team_social_media2_type,
		'team_social_media1_link' => $row['team_social_media1_link'],
		'team_social_media2_link' => $row['team_social_media2_link'],
		'team_profession' => $row['team_profession'],
		'team_name' => $row['team_name'],
		'team_id'=>$row['team_id'],
	);
	echo json_encode($row);
}
