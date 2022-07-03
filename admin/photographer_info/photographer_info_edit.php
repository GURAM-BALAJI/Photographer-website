<?php
include '../session.php';
include '../includes/req_start.php';
if ($req_per == 1) {
	if (isset($_POST['edit'])) {
		$photographer_info_name = $_POST['photographer_info_name'];
		$photographer_info_phone = $_POST['photographer_info_phone'];
		$photographer_info_email = $_POST['photographer_info_email'];
		$photographer_info_address = $_POST['photographer_info_address'];
		$photographer_info_address_map = $_POST['photographer_info_address_map'];
		$photographer_info_social_media1_type = $_POST['photographer_info_social_media1_type'];
		$photographer_info_social_media1 = $_POST['photographer_info_social_media1'];
		$photographer_info_social_media2_type = $_POST['photographer_info_social_media2_type'];
		$photographer_info_social_media2 = $_POST['photographer_info_social_media2'];
		$photographer_info_social_media3_type = $_POST['photographer_info_social_media3_type'];
		$photographer_info_social_media3 = $_POST['photographer_info_social_media3'];
		$photographer_info_welcome_p1 = $_POST['photographer_info_welcome_p1'];
		$photographer_info_welcome_p2 = $_POST['photographer_info_welcome_p2'];
		$photographer_info_about = $_POST['photographer_info_about'];
		try {
			$stmt = $conn->prepare("UPDATE photographer_info SET 
			photographer_info_welcome_p1=:photographer_info_welcome_p1,
photographer_info_welcome_p2=:photographer_info_welcome_p2,
			photographer_info_name=:photographer_info_name,
			photographer_info_phone=:photographer_info_phone,
			photographer_info_email=:photographer_info_email,
			photographer_info_address=:photographer_info_address,
			photographer_info_address_map=:photographer_info_address_map,
			photographer_info_social_media1_type=:photographer_info_social_media1_type,
			photographer_info_social_media1=:photographer_info_social_media1,
			photographer_info_social_media2_type=:photographer_info_social_media2_type,
			photographer_info_social_media2=:photographer_info_social_media2,
			photographer_info_social_media3_type=:photographer_info_social_media3_type,
			photographer_info_social_media3=:photographer_info_social_media3,
			photographer_info_about=:photographer_info_about
 			WHERE photographer_info_id=:id");
			$stmt->execute([
				'photographer_info_welcome_p1' => $photographer_info_welcome_p1,
				'photographer_info_welcome_p2' => $photographer_info_welcome_p2,
				'photographer_info_name' => $photographer_info_name,
				'photographer_info_phone' => $photographer_info_phone,
				'photographer_info_email' => $photographer_info_email,
				'photographer_info_address' => $photographer_info_address,
				'photographer_info_address_map' => $photographer_info_address_map,
				'photographer_info_social_media1_type' => $photographer_info_social_media1_type,
				'photographer_info_social_media1' => $photographer_info_social_media1,
				'photographer_info_social_media2_type' => $photographer_info_social_media2_type,
				'photographer_info_social_media2' => $photographer_info_social_media2,
				'photographer_info_social_media3_type' => $photographer_info_social_media3_type,
				'photographer_info_social_media3' => $photographer_info_social_media3,
				'photographer_info_about' => $photographer_info_about,
				'id' => '1'
			]);
			$_SESSION['success'] = 'Photographer info updated successfully';
		} catch (PDOException $e) {
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	} else {
		$_SESSION['error'] = 'Fill up edit photographer info form first';
	}
}

header('location: index.php');
