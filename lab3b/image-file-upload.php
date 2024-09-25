
<?php  




if (!empty($_FILES['image_file']) && $_FILES['image_file']['error'] === UPLOAD_ERR_OK) {

    $image_file_type = $_FILES['image_file']['type'];

    if (in_array($image_file_type, ['image/jpeg', 'image/jpg', 'image/png'])) {
        $uploaded_image_file = $upload_directory . basename($_FILES['image_file']['name']);
        $temporary_image_file = $_FILES['image_file']['tmp_name'];

        if (move_uploaded_file($temporary_image_file, $uploaded_image_file)) {
            echo '<h4>Image File Display:</h4>';
            echo '<img src="' . $relative_path . basename($_FILES['image_file']['name']) . '" alt="Uploaded Image" width="400">';
        } else {
            echo 'Failed to upload image file';
        }
    } else {
        echo 'Only image files (.jpg, .jpeg, .png) are allowed!';
    }
}

echo '<h4>Debug Information:</h4>';
echo '<pre>';
var_dump($_FILES);
echo '</pre>';

?>




