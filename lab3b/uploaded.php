<?php

$upload_directory = getcwd() . '/uploads/';
$relative_path = '/uploads/';

// Handle Text File
if (!empty($_FILES['text_file']['tmp_name']) && $_FILES['text_file']['error'] === UPLOAD_ERR_OK) {
    $uploaded_text_file = $upload_directory . basename($_FILES['text_file']['name']);
    $temporary_file = $_FILES['text_file']['tmp_name'];

    if (move_uploaded_file($temporary_file, $uploaded_text_file)) {
        $text_file_content = file_get_contents($uploaded_text_file);
        echo '<h4>Text File Content:</h4>';
        echo '<textarea cols="70" rows="30">' . htmlspecialchars($text_file_content) . '</textarea>';
    } else {
        echo 'Failed to upload text file';
    }
}


if (!empty($_FILES['audio_file']['tmp_name']) && $_FILES['audio_file']['error'] === UPLOAD_ERR_OK) {
    $audio_file_type = $_FILES['audio_file']['type'];

    if (in_array($audio_file_type, ['audio/mpeg', 'audio/wav', 'audio/ogg'])) {
        $uploaded_audio_file = $upload_directory . basename($_FILES['audio_file']['name']);
        $temporary_audio_file = $_FILES['audio_file']['tmp_name'];

        if (move_uploaded_file($temporary_audio_file, $uploaded_audio_file)) {
            echo '<h4>Audio File Playback:</h4>';
            echo '<audio controls>';
            echo '<source src="' . $relative_path . basename($_FILES['audio_file']['name']) . '" type="' . $audio_file_type . '">';
            echo 'Your browser does not support the audio element.';
            echo '</audio>';
        } else {
            echo 'Failed to upload audio file';
        }
    } else {
        echo 'Only audio files (.mp3, .wav, .ogg) are allowed!';
    }
}



// Handle PDF File Upload

if (!empty($_FILES['pdf_file']) && $_FILES['pdf_file']['error'] === UPLOAD_ERR_OK) {

    $file_type = $_FILES['pdf_file']['type'];

    if ($file_type === 'application/pdf') {
        $uploaded_pdf_file = $upload_directory . basename($_FILES['pdf_file']['name']);
        $temporary_pdf_file = $_FILES['pdf_file']['tmp_name'];

        if (move_uploaded_file($temporary_pdf_file, $uploaded_pdf_file)) {
            echo '<h4>PDF File Display:</h4>';
            echo '<embed src="' . $relative_path . basename($_FILES['pdf_file']['name']) . '" type="application/pdf" width="600" height="400">';
            echo '<p><a href="' . $relative_path . basename($_FILES['pdf_file']['name']) . '">Download PDF</a></p>';
        } else {
            echo 'Failed to upload PDF file';
        }
    } else {
        echo 'Only PDF files are allowed!';
    }
}

// Handle Image File Upload

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