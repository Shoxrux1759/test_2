<?php
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: *");
	$json_str = file_get_contents('php://input');
	$json_obj = json_decode($json_str);
   



	$db = new Mysqli($host, $user, $parol, $baza);
	$i=0;
	$smtur = $DB_con->prepare("SELECT * FROM `test`;");
	$smtur->execute();
 	while($rowmt2=$smtur2->fetch(PDO::FETCH_ASSOC)) {
	$update = mysqli_query($connection,"UPDATE `test` SET `name`=$name, `number`=$number WHERE `id`=$number");
		$i++;
	}
	$db->query($sql);
 
?>