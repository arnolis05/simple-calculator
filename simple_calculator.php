<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Tugas4_Arnolis</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			function penjumlahan($a,$b){ // merupakan prototype function dan mengambil nilai dari parameter
				return $a + $b; // megembalikan hasil dari $a + $b
			}
			function pengurangan($a,$b){ // merupakan prototype function dan mengambil nilai dari parameter
				return $a - $b; // megembalikan hasil dari $a - $b
			}
			function perkalian($a,$b){ // merupakan prototype function dan mengambil nilai dari parameter
				return $a * $b; // megembalikan hasil dari $a * $b
			}
			function pembagian($a,$b){ // merupakan prototype function dan mengambil nilai dari parameter
				return $a / $b; // megembalikan hasil dari $a / $b
			}
		?>
		<form class="box" method="POST" action="Tugas4_Arnolis.php">
			<h3>Kalkulator</h3>
			<input class = "box-sec" type="text" name="bil1" placeholder="Bilangan Pertama...">
			<br>
			<input class = "box-sec" type="text" name="bil2" placeholder="Bilangan Kedua...">
			<button class="box-button" name="proses">Hitung</button>
			<div class = "box-hasil" name="bil2">
				<?php	
					if(isset($_POST['proses'])){ // input dengan name proses ketika di klik atau di input kemudian di sesuaikan dengan method "POST" atau "GET" 
						$bil_1 = $_POST['bil1']; // mengambil dari inputtan user kemudian memberikan assigment ke dalam variabel $bil_1
						$bil_2 = $_POST['bil2']; // mengambil dari inputtan user kemudian memberikan assigment ke dalam variabel $bil_2
					
						echo "bilangan 1 : ".$bil_1."<br>"; // menampilkan hasil inputtan user dan <br> berfungsi untuk enter
						echo "bilangan 2 : ".$bil_2; // menampilkan hasil inputtan user 
						echo "<hr><hr>"; // <hr> merupakan garis
						echo "hasil penjumlahan adalah : ".penjumlahan($bil_1,$bil_2)."<br>"; //mengirimkan nilai ke dalam parameter function dan menampilkan hasil dari function
						echo "hasil pengurangan adalah : ".pengurangan($bil_1,$bil_2)."<br>"; //mengirimkan nilai ke dalam parameter function dan menampilkan hasil dari function
						echo "hasil perkalian adalah : ".perkalian($bil_1,$bil_2)."<br>"; //mengirimkan nilai ke dalam parameter function dan menampilkan hasil dari function
						echo "hasil pembagian adalah : ".pembagian($bil_1,$bil_2)."<br>"; //mengirimkan nilai ke dalam parameter function dan menampilkan hasil dari function
					}
					else{
						echo "0"; // menampilkan kata dengan php
					}
				?>
			</div>
		</form>
		<style>
			*{
				margin: 0px auto;
				padding: 0px;
			}
			.box{
				width: 400px;
				height: 600px;
				background-color: #306AD0;
				position: relative;
				top: 30px;
				border-radius: 20px;
				box-shadow: 4px 6px 6px rgba(96, 89, 89, 0.61);
			}
			h3{
				text-align: center;
				position: relative;
				top: 20px;
				text-transform: uppercase;
				font-family: sans-serif,arial;
				color: #FFF;
			}
			.box-sec{
				width: 340px;
				height: 40px;
				margin: 10px;
				position: relative;
				left: 13px;
				top: 45px;
				padding-left : 10px;
				padding-right : 5px;
				border-radius: 10px;
				border: none;
			}
			.box-button{
				width: 355px;
				height: 40px;
				margin: 10px;
				position: relative;
				left: 13px;
				top: 45px;
				padding-left : 10px;
				padding-right : 5px;
				border-radius: 10px;
				border: none;
				background-color: #18d547;
				color: #FFF;
				text-transform: uppercase;
				font-family: sans-serif,arial;
				font-size: 18px;
				cursor: pointer;
			}
			.box-hasil{
				width: 340px;
				height: 250px;
				margin: 10px;
				position: relative;
				left: 13px;
				top: 45px;
				padding-left: 10px;
				padding-right: 5px;
				padding-top: 15px;
				border-radius: 10px;
				border: none;
				background-color: #FFF;
				font-family: sans-serif,arial;
				font-size: 18px;
			}
			hr{
				margin-top: 5px;
				margin-bottom: 10px;
			}
		</style>
	</body>
</html>