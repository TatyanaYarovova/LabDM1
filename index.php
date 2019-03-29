<html>
	<head>
		<title>Лабораторная работа №1</title>
		<meta charset =  "utf-8">
		<link rel="stylesheet" href="/styles.css">
	</head>
	<body>
		<div class="w50">
		
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


							/*******************************************************/
							if($mass1[0] % 2 != 0){
								echo "Первый элемент в массиве 1 должен быть четным";
								echo'<br>';
							}
							if($mass1[1] % 2 == 0){
								echo "Второй элемент в массиве 1 должен быть нечетным";
								echo'<br>';
							}
							if($mass1[2] % 2 == 0){
								echo "Третий элемент в массиве 1 должен быть нечетным ";
								echo'<br>';
							}
							if($mass1[3] % 2 != 0){
								echo "Четвертый элемент в массиве 1 должен быть четным";
								echo'<br>';
							}
							
							if($mass2[0] % 2 != 0){
								echo "Первый элемент  массиве 2 должен быть четным";
								echo'<br>';
							}
							if($mass2[1] % 2 == 0){
								echo "Второй элемент в массиве 2 должен быть нечетным";
								echo'<br>';
							}
							if($mass2[2] % 2 == 0){
								echo "Третий элемент в массиве 2 должен быть нечетным ";
								echo'<br>';
							}
							if($mass2[3] % 2 != 0){
								echo "Четвертый элемент в массиве 2 должен быть четным";
								echo'<br>';
							}
							
							/*******************************************************/
							
							
							echo "Объединение:";
							echo '<br>';
							function MergerMass($mass1, $mass2)
							{
								$k = 0;
								for($i = 0; $i < count($mass1); $i++)
								{
									$result[$k++] = $mass1[$i]; 
								}
								for($i = 0; $i < count($mass2); $i++)
								{
									$result[$k++] = $mass2[$i]; 
								}
								for($k = 0;$k < count($result); $k++)
								{
									echo $result[$k];
								}
								
							
							}
													 
							echo '<br>';
							
							
							
							
							
							echo "Пересечение:";
							echo '<br>';
							function PerMass($mass1, $mass2)
							{
								for($i = 0; $i < count($mass1); $i++)
								{
									if($mass1[$i] == $mass2[$i])
										echo $mass1[$i];
								}
								
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

