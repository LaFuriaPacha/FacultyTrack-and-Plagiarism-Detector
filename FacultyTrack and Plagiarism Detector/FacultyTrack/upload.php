<?php
if (isset($POST['submit'])) {
    $file = $_FILES['file'];

    $fileName = $_FILES['file'] ['name'];
    $fileTmpName = $_FILES['file'] ['tmp_name'];
    $fileSize = $_FILES['file'] ['size'];
    $fileError = $_FILES['file'] ['error'];
    $fileType = $_FILES['file'] ['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('txt');

    if (in_array($fileActualExt, $allowed)){
        if($fileError===0){
            if($fileSize < 100000){
               $fileNameNew = uniqid('', true). ".".$fileActualExt;
               $fileDEstination = 'uploads/'.$fileNameNew;
               move_uploaded_file($fileTmpName, $fileDEstination );
               header("Location: plagiarismcheck1.php?uploadsuccess");
            } else {
                echo "Your file is too big!";
            }
        } else {
            echo "There was an error uploading your file!";
        }    
    } else {
        echo "You cannot upload files of this type!";
    }
}