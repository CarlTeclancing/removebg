<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Background Remover</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #F4F7FE;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #006EFF;
        }
        form {
            margin-top: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        input[type="file"] {
            display: none;
        }
        label {
            background-color: white;
            border:  1px solid #006EFF;
            color: #006EFF;
            border-radius: 4px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-around;
            width: 300px;
            height: 48px;
        }
        input[type="submit"] {
            background-color: #006EFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            width: 300px;
            height: 58px;

        }
        .bi{
            font-size: 24px;
            margin-right: 10px;
        }
        input[type="submit"]:hover {
            background-color: #0056cc;
            width: 300px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Upload Image to Remove Background</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="fileToUpload"><i class="bi bi-cloud-upload"></i>Select image to upload</label>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Remove Background" name="submit">
        </form>
    </div>
</body>
</html>
