<?php

	$username="Xruta888";
	$pass="passW0rd=";
	
	$uppercase = preg_match('@[A-Z]@', $username);
	$lowercase = preg_match('@[a-z]@', $username);
	$number    = preg_match('@[0-9]@', $username);
	$start     = preg_match('@^[A-Za-z]@', $username);
	$uppercasea = preg_match('@[A-Z]@', $pass);
	$lowercasea = preg_match('@[a-z]@', $pass);
	$numbera    = preg_match('@[0-9]@', $pass);
	$equals	   = preg_match('@[=]@', $pass);
	$specialChars = preg_match('@[^\w]@', $pass);

	if(!$uppercase || !$lowercase || !$number || !$start || strlen($username) < 5 || strlen($username) > 9) 
	{
	    echo "Username berjumlah 5 - 9 karaker, mengandung huruf BESAR, huruf kecil, dan angka. Dimulai dengan huruf. ";
	}
	else{
	    echo "Username memenuhi kriteria. ";
	}

	if(!$uppercasea || !$lowercasea || !$numbera || !$specialChars || !$equals || strlen($pass) < 8) 
	{
	    echo "Password harus lebih dari 8 karakter, mengandung karakter '=', huruf BESAR, huruf kecil, angka dan spesial karakter";
	}
	else{
	    echo "Password memenuhi kriteria";
	}

?>