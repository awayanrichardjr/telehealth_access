<?php

if (isset($_POST['submit'])) {
    # code...
    $file = $_FILES['docQualify'];
    // print_r($file);

    // extract the type of the file k
    $fileName = basename($file['name']);
    $fileType = $file['type'];
    $fileTmpName = $file['tmp_name'];
    $fileError = $file['error'];
    $fileSize = $file['size'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileActualExt, $allowed)) {
        # code...
        if ($fileError === 0) {
            # code...
            if ($fileSize < 1000000) {
                # code...
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = '../img/uploaded/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);

                header("location: index.php?FileUploaded!");
            } else {
                echo "Your file is too big";
            }
        } else {
            echo "There was an error uploading your file";
        }
    } elseif (empty($fileActualExt)) {
        # code...
        echo "No file to updload!";
    } else {
        echo "You cannot upload file of this type";
    }
}
