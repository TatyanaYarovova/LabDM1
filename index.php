<html>
	<head>
		<title>Лабораторная работа №1</title>
		<meta charset =  "utf-8">
		<link rel="stylesheet" href="/styles/styles.css">
	</head>
	<body>
		<div class="w50 d">
		
				<form align = center action="" method="post">
					Массив 1:<input type="text" name="mass1" value="<?=$_POST['mass1']?>"> </br>
					Массив 2:<input type="text" name="mass2" value="<?=$_POST['mass2']?>"><br>
					<input type="submit" name="sub" value="Отправить">
					
				</form>
				<?php
						if(isset($_POST["sub"]))
						{
							echo '<br>';
							
							$mass1 = split(" ", $_POST["mass1"]);
							
							$mass2 = split(" ", $_POST["mass2"]);
							$result = array_merge($mass1, $mass2);
							//print_r($result);
							foreach($result as $value){
								echo $value, " ";
							}
							
						}
				?>
		</div>
	</body>
</html>

