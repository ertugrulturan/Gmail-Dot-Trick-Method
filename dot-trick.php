<?php 
    $v4t1 = $_GET['v4t1'];
	function add_dot($str){ 
		if ((strlen($str) > 1) && (strlen($str) < 31)) { 
			$ca = preg_split("//",$str); 
			array_shift($ca); 
			array_pop($ca); 
			$head = array_shift($ca); 
			$res = add_dot(join('',$ca)); 
			$result = array(); 
			foreach($res as $val){ 
				$result[] = $head . $val; 
				$result[] = $head . '.' .$val; 
			}
			return $result; 
		}
		return array($str); 
	}
$res = add_dot(htmlspecialchars($v4t1)); 
foreach($res as $val) echo $val,"@gmail.com
";
?>
