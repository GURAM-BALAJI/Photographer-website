<?php
	include '../session.php';
	include '../includes/req_start.php';
	if($req_per==1){
	if(isset($_POST['upload'])){
		$image_name = $_POST['image_name'];
		$title_name = $image_name.'_name';
		$title_name_value=$_POST['name'];
		$filename = $_FILES['image']['name'];
		$conn = $pdo->open();
		if(!empty($filename)){
			$stmt = $conn->prepare("SELECT $image_name FROM home_images WHERE home_images_id=:id");
			$stmt->execute(['id' =>1]);
			foreach ($stmt as $row)
				unlink('../../images/home_images/' . $row[$image_name]);
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
                $filename=date('Y-m-d').'_'.time().'.'.$ext;
			move_uploaded_file($_FILES['image']['tmp_name'], '../../images/home_images/'.$filename);
		}
		
		try{
			$stmt = $conn->prepare("UPDATE home_images SET $image_name=:photo,$title_name=:name  WHERE home_images_id=:id");
			$stmt->execute(['photo'=>$filename, 'name'=> $title_name_value, 'id'=>1]);
			$_SESSION['success'] = $image_name.' image updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Select invitation to update image first';
	}
}

	header('location: index.php');
