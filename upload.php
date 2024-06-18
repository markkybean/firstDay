<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit("POST request method required");
}

if (empty($_FILES['fileToUpload'])) {
    exit("No file uploaded or there was an error during upload.");
}

if ($_FILES['fileToUpload']['error'] !== UPLOAD_ERR_OK) {
    switch ($_FILES['fileToUpload']['error']) {
        case UPLOAD_ERR_PARTIAL:
            exit("File upload was only partially completed.");
        case UPLOAD_ERR_NO_FILE:
            exit("No file was uploaded.");
        case UPLOAD_ERR_EXTENSION:
            exit("File upload stopped by extension.");
        case UPLOAD_ERR_FORM_SIZE:
            exit("File exceeds size limit.");
        case UPLOAD_ERR_INI_SIZE:
            exit("File exceeds upload size limit.");
        default:
            exit("Unknown file upload error.");
    }
}

$allowedMimeTypes = [
    'image/gif',
    'image/png',
    'image/jpeg'
];

if (!in_array($_FILES['fileToUpload']['type'], $allowedMimeTypes)) {
    exit("Invalid file type. Only GIF, PNG, and JPEG files are allowed.");
}

$pathinfo = pathinfo($_FILES["fileToUpload"]["name"]);
$base = preg_replace("/[^\w-]/", "_", $pathinfo["filename"]);
$filename = $base . "." . $pathinfo["extension"];

$destination = __DIR__ . "/uploads/" . $filename;

if (!move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $destination)) {
    exit("Cannot move uploaded file.");
}

$file_url = "uploads/" . $filename;

echo json_encode(['file_url' => $file_url]);
?>
