<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body class="bg-secondary text-white">

<div class="container mt-5">
    <h2>File Upload</h2>
    <form id="uploadForm" enctype="multipart/form-data" class="mb-3">
        <div class="mb-3">
            <label for="fileToUpload" class="form-label">Select file to upload:</label>
            <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
        </div>
        <input type="submit" class="btn btn-primary" id="submitBtn" value="Upload File"/>
    </form>
</div>

<div class="container">
    <h2>Uploaded Image</h2>
    <img id="uploadedImage" src="" alt="Uploaded Image" style="cursor: pointer;">
</div>

<div class="container p-5">
    <form id="addForm">
        <div class="row">
            <div class="col-2">
                <div class="mb-3">
                    <label for="num1" class="form-label">Num 1</label>
                    <input type="number" class="form-control" id="num1">
                </div>
            </div>
            <div class="col-2">
                <div class="mb-3">
                    <label for="num2" class="form-label">Num 2</label>
                    <input type="number" class="form-control" id="num2">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" id="add">Add</button>
    </form>
    <div class="container mt-3">
        <h5>The sum is: <span id="sumResult"></span></h>
    </div>
</div>

<hr>

<div class="container text-center m-5">
    <div class="row justify-content-start shadow p-3">
        <div class="col-md-4">
            <div id="blur" class="mt-5 p-5 shadow">
                <h1>on blur</h1>
            </div>
        </div>
        <div class="col-md-4">
            <div id="mouseover" class="mt-5 p-5 shadow">
                <h1>on mouseover</h1>
            </div>
        </div>
        <div class="col-md-4">
            <div id="out" class="mt-5 p-5 shadow bg-danger">
                <h1>on mouse out</h1>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <div class="container shadow p-5">
            <input class="form-control" id="myInput" type="text" onkeypress="myFunction()">
            <h5>The key was pressed: <span id="keyPressed"></span></h5>
        </div>
    </div>
</div>

<hr>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="upload.js"></script>
<script src="add.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
