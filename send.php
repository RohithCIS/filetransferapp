<!DOCTYPE html>
<html>
<head>
	<title>Send : Kilobyte File Sharing</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script type="text/javascript" src="script.js"></script>

</head>
<body>
<div class="heading">
	<h1>Kilobyte File Sharing</h1>
</div>
<form action="upload.php" method="post" enctype="multipart/form-data" id="myForm">

    <input type="file" name="fileToUpload" id="fileToUpload" class="display-none">
    <input type="submit" value="Upload Image" name="submit">
</form>
<div class="pbar">
	<canvas width="256" height="256"></canvas>
	<!-- <canvas width="256" height="256"></canvas> -->
	<pre></pre>
</div>


</script>
</body>
</html>