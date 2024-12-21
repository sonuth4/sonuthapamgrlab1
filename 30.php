<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Profile Image</title>
</head>
<body>
    <h2>Upload Profile Image</h2>
    <form action="upload1.php" method="post" enctype="multipart/form-data">
        <label for="profile_image">Choose Profile Image (PNG or JPEG):</label>
        <input type="file" name="profile_image" id="profile_image" required>
        <br><br>
        <button type="submit" name="submit">Upload Image</button>
    </form>
</body>
</html>