<?php
 $var1= "Subhan Allah";
?>
<html>
<head>
<title><?php echo "welcome basics"?></title>
<style>

.full{width:1850px ; background:#444; margin:0 auto }
.header,.footer{color:#fff; background:#600; padding:20px; text-align:center; margin:0 auto; }
.header h2, .footer h2{margin:0 auto;}
.main {min-height:1500px; width:700px; background:#255; color:#fff; margin:0 auto }
.head-1 {background:#444; text-align:center; color: #FB8637;}
.head-1 h2	{ margin:0 auto ;}
.head-2 {background:#444; text-align:center;color: #FB8637; }
.head-2 h2	{ margin:0 auto ;}
.head-3 {background:#444; text-align:center;color: #FB8637; }
.head-3 h2	{ margin:0 auto ;}
.head-4 {background:#444; text-align:center; color: #FB8637; }
.main-4 h2 {margin:0 auto; background:#660; }
.head-5 { text-align:center; background:#444; color:#FB8637;}
</style>

</head>
<body>
<div class="full">
	<section class="header">
	<h2><?php echo "Basic Five topics" ?></h2>
	</section>
	<section class="main">
<?php /*echo and varriable declaration :::::*/?>
		<section class="head-1">
			<h2><?php echo "echo,declaration varriable";?></h2>
		</section>
		<section class="main1">
			<h2><?php echo "Allahu Akbar"?></h2>
			<h2><?php echo $var1 ; ?></h2>
		</section>



<?php // Adding of variables as nubmer or varcher/string :::?> 
		<section class="head-2"><h2><?php echo "Adding of variables";?></h2></section>
		<section class="main-2">
			<h2><?php $var1="Faiyed"; $var2="Arnob"; $num1=7; $num2=13; 
			 echo "1st string:".$var1."<b> and</b>"."    2nd string:".$var2."</br>"." 1st number:".$num1."<b> and</b>"."    2nd number:".$num2; 
			 echo "</br>Adding of string:".$var1.$var2;
			 $sum=$num1+$num2;
			 echo "</br><b>Adding of Numbers:</b>".$sum;
			?></h2>
		</section>
		
		
<?php //difference between "echo" and "pring"?>
		<section class="head-3"><h2><?php echo "Difference between echo and print";?></h2></section>
		<section class="main-3">
			<h2><?php echo "1st string is printing by echo and 2nd string is printing by print";
			echo "</br>1st string:".$var1."   <b>and</b>"; 
			print "  2nd string:".$var2 ."</br> echo can contain 2 parameters but print can contain 1 parameter";
			echo "</br>Now if we use a function var_dump($var1) by print:";
			$a= print ($var1);
			echo "    ";
			var_dump($a);
			?></h2>
		</section>
<?php // variables of different type?>
		<section class="head-4"><h2><?php echo "variables of different type";?></h2></section>
		<section class="main-4"> 
			
			<h2><?php echo "1.Number  2.String  3.float  4.Array  5.boolean  6.null  7.object".
			"</br>for showing, here is using var_dump()";?></h2>
			<hr><?php echo "<h2>Number</h2>"?>
			$x=2 </br><b>
			<?php 
			$x=2;
			var_dump($x);
			?>
			</b><hr>
			<?php echo "<h2>String</h2>";
			?>
			$x=Faiyed</br>
			<?php
			$x="Faiyed";
			var_dump($x);
			?>
			</b><hr>
			<?php echo "<h2>float</h2>";
			?>
			$x=13.7</br>
			<?php
			$x=13.7;
			var_dump($x);
			?>
			</b><hr>
			<?php echo "<h2>Array</h2>";
			?>
			$x=array("Faiyed","Ali","Rahman")</br>
			<?php
			$x=array("Faiyed","Ali","Rahman");
			var_dump($x);
			?>
			</b><hr>
			<?php echo "<h2>boolean</h2>";
			?>
			$x=false</br>
			<?php
			$x=false;
			var_dump($x);
			?><hr>
			<?php echo "<h2>null</h2>";
			?>
			$x=null</br>
			<?php
			$x=null;
			var_dump($x);
			?><hr>
			<?php echo "<h2>Function</h2>";
			?>
			$x=new student()+$x->function()</br>
			<?php
			class student{
				function name()
					{
							return "Faiyed";
					}
				function id()
					{
						echo "id:17-34076-1";
						echo $this->name();
					}
			}
			$x=new student();
			$x->id();
			echo "</br>";
			var_dump($x);
			?>
		</section>
<?php // different building function?>
		<section class="head-5"><?php echo "<h2>Some Building Functions</h2>";?></section>
		<section class="main-5">
		<h2><?php
			echo "let a string Faiyed Ali Rahman</br>";
			echo "using some functions: strlen(),str_word_count(),strrev(),strpos(),str_replace() </br>";
			$x="Faiyed Ali Rahman";
			echo strlen($x)."</br>";
			echo str_word_count($x)."</br>";
			echo strrev($x)."</br>";
			echo strpos($x,"Rahman")."</br>";
			echo str_replace("Rahman","Arnob",$x);
			
		?></h2>



	</section>
	<section class="footer">
	 
	<h2><?php echo "Alhamdulillah" ?></h2>

	</section>

</div>
</body>
</html>