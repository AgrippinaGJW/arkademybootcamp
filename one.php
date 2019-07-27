<?php

	$myObj->name = "Agrippina GJW";
	$myObj->age = 23;
	$myObj->address = "Bangkalan, Madura";
	$myObj->hobbies	=	array("Singing","Reading","Travelling");
	$myObj->is_married = false;
	$myObj->list_school = array(
					    array(
					        "name" => "Politeknik Elektronika Negeri Surabaya", 
					        "year_in" => 2013, 
					        "year_out" => 2016, 
					        "major" => "Teknik Informatika",
					    ),
					    array(
					        "name" => "Politeknik Elektronika Negeri Surabaya", 
					        "year_in" => 2016, 
					        "year_out" => 2019, 
					        "major" => "Teknik Informatika",
					    )
	);
	$myObj->skills		=	array(
					    array(
					        "skill_name" => "HTML", 
					        "level" => "beginner", 
					    ),
					    array(
					        "skill_name" => "PHP", 
					        "level" => "beginner",
					    ),
					    array(
					        "skill_name" => "Laravel", 
					        "level" => "beginner",
					    ),
					    array(
					        "skill_name" => "Yii", 
					        "level" => "beginner",
					    ),
					    array(
					        "skill_name" => "React", 
					        "level" => "beginner",
					    )
	);
	$myObj->interest_in_coding = true;


	$myJSON = json_encode($myObj);

	echo $myJSON;
?>