<?php

if ($_FILES["file"]["error"] > 0) {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
} else {
	$file_extension = pathinfo ($original_filename, PATHINFO_EXTENSION);

	if ($_POST['category'] == 1) {
		$newFileName = "../../images/790x220.jpg";
	} elseif ($_POST['category'] == 2) {
		$newFileName = "../../images/380x200_1.jpg";
	} else {
		$newFileName = "../../images/380x200_2.jpg";
	}

  move_uploaded_file($_FILES["file"]["tmp_name"], $newFileName);
}