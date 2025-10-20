<html>

<head>
    <title>Executing on the Server Side</title>
</head>

<body>
    <?php
    if (isset($_REQUEST['submit1'])) {
        print_r($_FILES);
        echo "<br>";

        $file_name = $_FILES['file1']['name'];        //get the original name of the uploaded file
        $file_source_location = $_FILES['file1']['tmp_name']; //get the temporary file path
        $file_size = $_FILES['file1']['size'];        //get the file size
        $file_target_location = "upload/" . $file_name;  //set the target location for the uploaded file
        $file_type = pathinfo($file_name, PATHINFO_EXTENSION); //get the file extension

        //file type validation
        if ($file_type != "jpg" && $file_type != "png") {
            echo "Sorry. Only image files .jpg and .png are allowed to upload";
            die();
        }
    
        //
        if ($file_size > 1048576) {
            echo "Sorry. Your file is too large. You can upload less than 1 MB.";
            die();
        }
    
        //move the file from temporary location to target location
        $file_upload_status = move_uploaded_file($file_source_location, $file_target_location);

        //check if the file was uploaded successfully
        if ($file_upload_status == true) {
            echo "Congratulations. File Uploaded to: $file_target_location";
        } else {
            echo "Sorry. File uploading failed!";
            print_r(error_get_last()); //print the last error
        }
    }
    ?>
</body>

</html>