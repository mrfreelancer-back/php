<?php
$target_dir = "uploads";
$target_file = $target_dir.basename($_FILES["file_upload"]["name"]);
$upload_ok = 1;
$file_type = strtolower(pathinfo($target_file, flags: PATHINFO_EXTENSION));

if (isset($_POST["submit"])){
    $check = getimagesize($_FILES["file_upload"]["tmp_name"]);

    if ($check != false){
        echo "Uploaded file is an image - ".$checkp["mime"];
    }
    else{
        echo "file is not an image!";
        $upload_ok = 0;
    }
}

if (file_exists($target_file)){
    echo "Sorry file already exists!";
    $upload_ok = 0;
}

if ($_FILES["file_upload"]["size"] > 500000){
    echo "Sorry the file size is too large!";
    $upload_ok = 0;
}

if ($file_type != "jpg" && $file_type != "jpeg" && $file_type != "png" && $file_type != "gif"){
    echo "Sorry only allowed types are: PNG, JPG, JPEG, GIF";
    $upload_ok = 0;
}

if ($upload_ok == 0){
    echo "Sorry! the file didn't upload!";
}
else{
    if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $target_file)){
        echo "File ".htmlspecialchars(basename($_FILES["file_upload"]["name"]))." has been uploaded successfully!";
    }
    else{
        echo "Sorry! there was a problem with uploading!";
    }
}