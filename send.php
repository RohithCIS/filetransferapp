<!DOCTYPE html>
<html>
<head>
	<title>Send : Kilobyte File Transfer</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script type="text/javascript" src="script.js"></script>

</head>
<body>
<div class="heading">
<img src="logo.png">
	<h1>Kilobyte File Transfer</h1>
</div>
<form action="upload.php" method="post" enctype="multipart/form-data" id="myForm">

    <input type="file" name="fileToUpload" id="fileToUpload" class="display-none">
    <input type="submit" value="Send File" name="submit">
</form>
<div class="pbar">
	<canvas width="256" height="256"></canvas>
	<!-- <canvas width="256" height="256"></canvas> -->
	<pre></pre>
</div>


</script>
</body>
</html>