<!DOCTYPE html>
<html>
<head>
	<style>
		.label {
			display: inline-block;
			min-width: 100pt;
		}
	</style>
</head>
<body>
<hr color="darkblue" size="20">
<div style="-webkit-transform: rotateZ(160deg)">
<h1 align="center" style="color:#F0F;">Welcome to UOIT</h1>
</div>
<hr color="darkblue" size="20">
</body>
</html>
<?php
$xyz = new DateTime("now", new DateTimeZone('America/Toronto'));
echo $xyz->format('m/d/Y, H:i:s');
?>

<hr color="darkblue" size="4">
<form action="datastore.php" method="post">
	<p>
		<label class="label" for="strFirstName">First Name: </label>
		<input  type="text" name="a" id="strFirstName" />
	</p>
	<p>
		<label class="label" for="strLastName">Last Name: </label>
		<input  type="text" name="b" id="strLastName" />
	</p>
	<p>
		<label class="label" for="strUsername">Username: </label>
		<input  type="text" name="c" id="strUsername" />
	</p>
	<p>
		<label class="label" for="strPassword">Password: </label>
		<input  type="text" name="d" id="strPassword" />
	</p>
	<p>
		<label class="label" for="strCellphone">Cellphone #: </label>
		<input  type="text" name="e" id="strCellphone" />
	</p>
	<p>
		<label class="label">&nbsp;
		</label>
		<input type="submit" value="Register" />
	</p>
</form>
