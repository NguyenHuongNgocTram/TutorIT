<!DOCTYPE html>
<html>
<head>
	<title>Bai tap mang</title>
</head>
<body>
	<?php
	//aKhai báo mảng $fruits
		$fruits = ['Apple','Banana','Orange'];
	//b
		$leng = count($fruits);
		echo $leng;
		echo "<br>";
		echo "<br>";
	//c
		echo $fruits[1];
		echo "<br>";
		echo "<br>";

	//d
		$ages = Array('An' => 27,'Binh' => 25,'Cuong' => 22);
		echo "Tuoi cua Cuong la  ";
		echo $ages['Cuong'];
		echo "<br>";
		echo "<br>";
	//e. In ra tuổi của Cuong
		foreach ($ages as $k => $v)
        echo "$k ($v)", PHP_EOL;
    	echo "<br>";
    	echo "<br>";
    //g. Khai báo mảng $colors chứa các màu red, green, blue, yellow
    	$colors =Array('0'=>'red','1'=>'green','2'=>'blue','3'=>'yellow');
    //h. Sắp xếp mảng $colors theo thứ tự alphabet
		sort($colors);
 
		foreach($colors as $K) {
		    echo "$K <br>";
		}
		echo "<br>";
		echo "<br>";
	//i. Sắp xếp mảng $colors theo thứ tự ngược alphabet
		rsort($colors);
  
		foreach( $colors as $c) {
		    echo "$c <br>";
		}
    //j. Sắp xếp mảng $ages theo số tuổi tăng dần
    	sort($ages);
 
		foreach($ages as $k => $v){
		    echo "k=".$k.",value=".$v."<br>";
		}
	/*
	k. Cho 2 mảng số tự nhiên có cùng kích thước bất kỳ [-1, 3, 8, 2, 9, 5] và [4, 1, 2, 10, 5, 20], 1 số tự nhiên làm mục tiêu: 24
Viết hàm nhận 3 thông số này và trả về các cặp giữa 2 mảng sao cho tổng của cặp này gần với số mục tiêu nhất. Trong trường hợp này sẽ là (3, 20) và (5, 20)
	*/
		$number1 = [-1, 3, 8, 2, 9, 5];
		$number2 = [4, 1, 2, 10, 5, 20];
		$a =24;
		for ($i=0; $i <count($number1) ; $i++) { 
			for ($j=0; $j <count($number2) ; $j++) { 
				if($number1[$i]+$number2[$j]){
					echo $number1[$i];
					echo $number2[$j];
				}
			}
		}
	?>
</body>
</html>
