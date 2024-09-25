<?php



if (!empty($_FILES['video_file']['tmp_name']) && $_FILES['video_file']['error'] === UPLOAD_ERR_OK) {
    $video_file_type = $_FILES['video_file']['type'];

    if (in_array($video_file_type, ['video/mp4', 'video/avi', 'video/quicktime'])) {
        $uploaded_video_file = $upload_directory . basename($_FILES['video_file']['name']);
        $temporary_video_file = $_FILES['video_file']['tmp_name'];

        if (move_uploaded_file($temporary_video_file, $uploaded_video_file)) {
            echo '<h4>Video File Display:</h4>';
            echo '<video controls width="600">';
            echo '<source src="' . $relative_path . basename($_FILES['video_file']['name']) . '" type="' . $video_file_type . '">';
            echo 'Your browser does not support the video tag.';
            echo '</video>';
        } else {
            echo 'Failed to upload video file';
        }
    } else {
        echo 'Only video files (.mp4, .avi, .mov) are allowed!';
    }
}


echo '<h4>Debug Information:</h4>';
echo '<pre>';
var_dump($_FILES);
echo '</pre>';

?>

