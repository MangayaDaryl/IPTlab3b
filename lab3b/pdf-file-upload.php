<?php
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


echo '<h4>Debug Information:</h4>';
echo '<pre>';
var_dump($_FILES);
echo '</pre>';

?>