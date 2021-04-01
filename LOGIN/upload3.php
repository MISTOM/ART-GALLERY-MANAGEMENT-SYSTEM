<!--?php 
	if (isset($_POST['submit'])) {
		$file= $_FILES['file'];

		$fileName= $_FILES['file'] ['name'];
		$fileTmpName= $_FILES['file'] ['tmp_name'];
		$fileSize= $_FILES['file'] ['size'];
		$fileError= $_FILES['file'] ['error'];
		$fileType= $_FILES['file'] ['type'];

		$fileExt= explode('.', $fileName);
		$fileActualExt= strtolower(end($fileExt));

		$allowed= array('jpg', 'jpeg', 'png');

		if (in_array($fileActualExt, $allowed)) {
			if ($fileError === 0) {
				if ($fileSize < 50000) {
					$fileNameNew= uniqid('', true). '.'.$fileActualExt;
					$fileDestination= 
				}else{
					echo "file too big";
				}
			} else{
				echo "There was an error uploading this file";
			}
		} else{
			echo "You cannot upload this file type!";
		}


	}

 ?-->

<!--?php
if(isset($_POST['submit_art'])){
		$name = $_POST['name'];
		$description = $_POST['description'];
		$category = $_POST['cartegory'];
		$images = $_FILES['file']['name'];
        $target_dir = "uploads/";
        $upload_dir =  "uploads/";
        $target_file =$target_dir. basename($_FILES["file"]["name"]);

        //name of the file 
        $target=basename($_FILES["file"]["name"]);

        $conn=odbc_connect("artom_art_gallery","", "");
	$sql= 'INSERT into ART_TABLE (Item_name, Category, Description ) VALUES ("$name", "$category", "$description")';
	$result=odbc_exec($conn, $sql);
	$count=mysqli_fetch_row($result);
        var_dump($target);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $uploadOk = 1;
        var_dump($uploadOk);
        if ($uploadOk == 0) {
            $alert= '<div class="alert">Sorry, your file was not uploaded.<div>';
        var_dump($alert);
        } else {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                $alert= "The file ". basename( $_FILES["file"]["name"]). " has been uploaded to ".$target_file."";
            var_dump($alert);
            } else {
                $alert= 'Sorry, there was an error uploading your image.';
                var_dump($alert);
                
            }
        }
}

?-->

<?php 
	if (isset($_POST['submit_art']))
	{

		$newfilename = $_POST['name'];
		if (empty($newfilename)) {
			$newfilename = "gallery";
		}else{
			$newfilename = strtolower(str_replace(" ","-", $newfilename));
		}
		$imagetitle = $_POST['imageTitle'];
		$imagedesc = $_POST['description'];

		$file = $_FILES['file'];

		$filename = $file["name"];
		$filetype = $file["type"];
		$filetempnname = $file["tmp_name"];
		$filerror = $file["error"];
		$filesize = $file["size"];

		$fileExt = explode(".", $filename);

		$fileactualextenstion = strtolower(end($fileExt));

		$allowed = array("jpeg", "jpg", "png");

		if (in_array($fileactualextenstion, $allowed)) {
			if ($filerror === 0) {
				if ($filesize < 3000000) {
					$imagefullname = $newfilename . "." . uniqid("", true) . "." . $fileactualextenstion;
					$fileDestination= "uploads/" . $imagefullname;

					$conn=odbc_connect("artom_art_gallery","", ""); 
					if (empty($imagetitle) || empty($imagedesc)) {
						header("Location:artistpage.php?upload=empty");
						exit();
					}else{
						$sqlcount="SELECT * FROM ART_TABLE;";
						$exect= odbc_exec($conn, $sqlcount);
						if (!$exect) {
							echo "sql error!";
						}else {
							$Artid= uniqid("", false);
							$sql= "INSERT into ART_TABLE (art_id, ART_TITLE, Item_name, Category, Description, Purchase_Price, GalleryName) VALUES ('".$Artid."','".$_POST["imageTitle"]."','".$_POST["name"]."','".$_POST["category"]."','".$_POST["description"]."','".$_POST["price"]."', '".$fileDestination."')";
							$result=odbc_exec($conn, $sql);
							if ($result) {
								move_uploaded_file($filetempnname, $fileDestination );
							}else{
								echo "file not uploaded";
							}
							
						}

					}

				}else{
					echo "file too big!";
					exit();
				}
			}else{
				echo "there was an error";
				exit();
			}
		}else{
			echo "upload proper file type";
			exit();
		}
		echo "uploaded";
		header("refresh:1; url=gallery.php");
	}

?> 