<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload CV</title>
</head>
<body>
    <h2>Upload Your CV</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="cv">Choose CV (PDF or DOCX):</label>
        <input type="file" name="cv" id="cv" required>
        <br><br>
        <button type="submit" name="submit">Upload CV</button>
    </form>
</body>
</html>