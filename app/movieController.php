<?php
if (!isset($_SESSION)) {
	session_start();
}

include "connectionCtrl.php";

if (isset($_POST['action'])) {
	$movieController = new movieController;

	switch ($_POST['action']) {
				case 'store':
			
			$title = strip_tags($_POST['title']);
			$description=strip_tags($_POST['description']);
			$minutes=strip_tags($_POST['minutes']);

			$classification = strip_tags($_POST['classification']);
			$category_id = strip_tags($_POST['category_id']);

			$categoryController->store($title,$description,$minutes,$classification,$category_id);

			break;
/*/
		case 'update':
			$id=strip_tags($_POST['id']);
			$name = strip_tags($_POST['name']);
			$description=strip_tags($_POST['description']);
			$status=strip_tags($_POST['status']);
			$categoryController->update($id,$name,$description,$status);
			
		break;
/*/	
}
}


class MovieController{
	public function get()
	{
/*/
		$conn= connect();
		if ($conn->connect_error==false) {
			if ($title!=""&& $description!=""&& $minutes&&$classification!=""&&$categoryid!="") {
				# subir archivo cover
				$target_path = "../assets/img/movies/"
				$new_file_name = $target_path.basename($_FILES['cover']['name']);
				if (move_uploaded_file($_FILES['cover']['tmp_name'],$new_file_name)) {
									$query = "insert into categories (
				name,description,status) values(?,?,?)";
				$prepared_query = $conn->prepare($query);

				$prepared_query->bind_param('sss', $name, $description, $status);
				if ($prepared_query->execute()) {
					header("Location:". $_SERVER['HTTP_REFERER'] );
				}else{
					header("Location:". $_SERVER['HTTP_REFERER'] );
				}
			}else{
				header("Location:". $_SERVER['HTTP_REFERER'] );
			}
		}else{
			header("Location:". $_SERVER['HTTP_REFERER'] );
		}
				}
				
			}
		}
	/*/	

	}

	public function store($title,$description,$minutes,$classification,$category_id)
	{

		$conn= connect();
		if ($conn->connect_error==false) {
			if ($title!="" && $description!="" && $minutes!="" && $classification!="" && $category_id!="") {
				
				//SUBIR ARCHIVO COVER
				$target_path = "../assets/img/movies/";
				$new_file_name =$target_path.basename($_FILES['cover']['name']);

			 
				echo $new_file_name;
				
				
				$query = "insert into categories (
				name,description,status) values(?,?,?)";
				$prepared_query = $conn->prepare($query);

				$prepared_query->bind_param('sss', $name, $description, $status);
				if ($prepared_query->execute()) {
					header("Location:". $_SERVER['HTTP_REFERER'] );
				}else{

					header("Location:". $_SERVER['HTTP_REFERER'] );
				}
				/*/
			}else{
				$_SESSION['error']= 'verifique la informacion del formulario';

				header("Location:". $_SERVER['HTTP_REFERER'] );
			}
		}else{
			$_SESSION['error']= 'verifique la conexion a la base de datos';
			header("Location:". $_SERVER['HTTP_REFERER'] );
		}/*/
	}
}
}
}

