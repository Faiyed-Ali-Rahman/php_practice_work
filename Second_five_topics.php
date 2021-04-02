<html>
<head>
<style>
.main {min-height:1370px; width:1900px; background:#87cefa;}
.header ,.footer { color:#fff; background:#4b0082; padding:20px;  text-align:center; }
.header h2,.footer h2	{margin: 0 auto;}
.headline { background:#ffd700; marigin:0 auto; }
.headline h2{margin:0 auto;}
.content {color: ; background:#87cefa; margin:0 auto;}
.content h2 { margin:0 auto; }
</style>
</head>
<body>
<div class="main">
	<section class="header"><h2><?php echo "Second five basics";?></h2></section>

	<section class="headline"><h2><?php echo "Operators";?></section>
		<section class="content">
			<h2>
			<?php
			//Array operators:: 
				echo "1.Arithmatic 2.Assignment 3. Comparison 4.Ligical 5.Array</br>here is showing an operators by using array";
				$array1=array(
						"a"=>"Faiyed",
						"b"=>"Ali"
				);
				$array2=array(
					"c"=>"Rahman",
					"d"=>"Arnob"
				);
				print "</br>";
				var_dump($array1);
				print "</br>";
				var_dump($array2);
				echo "</br>comparing between 2 arrays:</br>Result:";
				if($array1 == $array2)
					{
						echo "same";
					}
				elseif($array1 != $array2)
					{
						echo "2 arrays are not same";
					}
				echo "</br>";
			?>
			</h2>
			<section class="headline"><h2><?php echo "Switch statement"; ?></h2></section>
				<h2>
				<section class="content">
					$x="php";</br>here is using swich statement</br>
					<?php 
						$x="php";
						switch($x)
							{
								case "java":
									echo "this is case one: java";
								break;
								case "C#":
									echo "this is case two: C#";
								break;
								case "js":
									echo "this is case three: JS";
								break;
								case "html":
									echo "this is case four: html";
								break;
								case "CSS":
									echo "this is case five: CSS";
								break;
								case "php":
									echo "this is case six: php";
								break;
								default:
									echo "this is default";
							}

					?>
				</section>
				</h2>
		</section>
		<section class="headline"><h2><?php echo "Loop"; ?></h2></section>
				
				<section class="content">
					<h2>
					$x=1,$n="3";</br>here is using initial avlue x=1 and loop n=3</br>
					<?php 
						$x=1;
						while($x<=3)
							{
								echo "while loop:".$x."</br>";
								$x++;
							}
						$x=1;
						Do
							{
								echo "Do while loop:".$x."</br>";
								$x++;
							}while($x<=3);
					
					$x=1;
					$n=3;
					
						for($i=$x;$i<=$n;$i++)
							{
								echo "for loop:".$x."</br>";
								$x++;
							}
						
					?>
				</h2>
				</section>
				<section class="headline"><h2><?php echo "Foreach and Function"; ?></h2></section>
				
				<section class="content">
					<h2>
					$name=array("Faiyed","Ali","Rahman");</br>using same array in foreach loop and function </br>
					<?php 
					//foreach
						$name=array("Faiyed","Ali","Rahman");
						foreach($name as $x)
							{
								echo $x."</br>";
							}
					//function with foreach
					
						function Student_name($name)
							{
								$s=1;
								foreach($name as $x)
									{
										echo "Number ".$s."=".$x."</br>";
										$s++;
									}
							}
						Student_name($name);	
					?>
				</h2>
				</section>
				<section class="headline"><h2><?php echo "Global,Local and Super global variable"; ?></h2></section>
				
				<section class="content">
					<h2>
					<?php 
						$f=16;
						function sum()
							{
								$a=15;
								global $f;
								echo "local variable:".$a."</br>";
								echo "Global variable:".$f."</br>";
								$GLOBALS['z']=$GLOBALS['f']+$a;
							}
							sum();
							echo "Super Global variable:".$z;
					
					?>
					</br>SOME OTHER GLOBALS VARIABLE::</br>$GLOBALS</br>$_SERVER</br>$_REQUEST</br>$_POST</br>$_GET</br>$_SESSION
					</br>$_COOKIE</br>$_FILE</br>$_ENV</br>
				</h2>
				</section>
				
		</section>







	<section class="footer"><h2><?php echo "Alhamdulillah";?></h2></section>
</div>
</body>

</html>