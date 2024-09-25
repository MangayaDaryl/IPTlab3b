<?php


$upload_directory = getcwd() . '/uploads/';
$relative_path = '/uploads/';

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



echo '<h4>Debug Information:</h4>';
echo '<pre>';
var_dump($_FILES);
echo '</pre>';

?>