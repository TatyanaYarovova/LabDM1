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



							if($mass1[1] % 2 != 0){
								echo "Первый элемент  массиве 1 должен быть четным";
								echo'<br>';
							}
							if($mass1[2] % 2 == 0){
								echo "Второй элемент в массиве 1 должен быть нечетным";
								echo'<br>';
							}
							if($mass1[3] % 2 == 0){
								echo "Третий элемент в массиве 1 должен быть нечетным ";
								echo'<br>';
							}
							if($mass1[4] % 2 != 0){
								echo "Четвертый элемент в массиве 1 должен быть четным";
								echo'<br>';
							}
							
							if($mass2[1] % 2 != 0){
								echo "Первый элемент  массиве 2 должен быть четным";
								echo'<br>';
							}
							if($mass2[2] % 2 == 0){
								echo "Второй элемент в массиве 2 должен быть нечетным";
								echo'<br>';
							}
							if($mass2[3] % 2 == 0){
								echo "Третий элемент в массиве 2 должен быть нечетным ";
								echo'<br>';
							}
							if($mass2[4] % 2 != 0){
								echo "Четвертый элемент в массиве 2 должен быть четным";
								echo'<br>';
							}
							
							$result = $mass1 + $mass2;
							//print_r($result);
							echo "Объединение:"; 
							echo '<br>';
							foreach($result as $value){
								echo $value, " ";
							}
							echo '<br>';
							echo "Пересечение:";
							echo '<br>';
							$per = array_intersect($mass1, $mass2); 
							foreach($per as $value){
								echo $value, " ";
							} 
							echo '<br>';
							echo "Симметрическая разность:";
							echo '<br>';
							$difference = array_merge(array_diff($mass1 , $mass2) , array_diff($mass2 , $mass1));
							foreach($difference as $value){
								echo $value, " ";
							} 
						}
				?>
		</div>
	</body>
</html>

