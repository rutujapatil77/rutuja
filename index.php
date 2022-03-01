<?php 

if (isset($_POST['calculate'])) {
	# code...
	$degree = $_POST['degree'];
	$result = ($degree * 1.8) + 32;
	// add
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Convertor | Index</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/index.css">
  <style>
    *
{
	margin: 0;
	padding: 0;
}
:root{
	--primary:coral;
	--button:dodgerblue;
	--background-color: whitesmoke;
}
body
{
	background-color: var(--whitesmoke);
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50% , -50%);

}
.calculate
{
	background-color: var(--button)!important;
	color: white;
}
form
{
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	width: 500px;
	height:200px;
	background-color: var(--primary);
	border-radius: 10px;
	padding: 20px;
	box-shadow: 3px 5px 15px #000;
}
input[type=number]
{
	width: 100%;
	margin:10px;
	height:60px;
	border-radius: 8px!important;
	outline: none;
	border: none;
}
input[type=number]
{
	outline: none;
}
  </style>
</head>
<body>
	<div class="convert">
		<h4 class="text-center mb-5">Convert Degrees To Ferhanhite</h4>
	</div>
	<form action="" method="post" >
		<input type="number" name="degree" placeholder="Degree">
		<input type="number" name="fr" placeholder="<?php echo $result ?>" readonly="readonly" >
		<input type="submit" name="calculate" name="calculate" value="calculate" class="btn calculate" onclick="calculate()">
	</form>

</body>
</html>
