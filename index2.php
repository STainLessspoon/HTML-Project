<!doctype html>
<html>
<head>
	<title>Example PHP Page</title>
<style>
.myDiv2 {
	border 2px solid black;
	background-color: lightcoral;
	padding-left: 40px
	width 350px;
}

.myDiv {
	margin-top: 2em
	margin-bottom: 6em
	border: 2px solid black;
	background-color: lightgray;
	padding-left: 40px;
	width: 350px;
}
.aqua {
	color: aqua;
}
.xsmallfont {
	font-size: x-small;
}
.cursive {
	font-family: "Lucida Handwriting", Cursive , serif;
}
</style>

</head>
<body>
<div class = "myDiv2">
<h1>PHP Sample</h1>
</div>

<?php if (isset($_POST['username'])) { ?>


Hello <?php echo htmlspecialchars($_POST['username']); ?>

<?php } else { ?>
<div class = "cursive">
Hello, <br>
<p>Please enter your name below.</p>
</div>
<?php } ?>
<div class = "myDiv">

<form action = "index2.php" method = "post">
<p>Name: <input type = "text" id = "name" name = "username" /></p>
<input type = "submit" value = "Submit" />
</form>
</div>

<div class = "aqua xsmallfont">
<p>Terms of Service</p>
</div>
</body>
</html>

