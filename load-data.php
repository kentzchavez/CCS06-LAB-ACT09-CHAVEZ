<?php

require "config.php";

use App\Pet;

try {
	Pet::register('Max', 'Male', '2020-05-10', 'Jeorge', 'jeorge@gmail.com', 'sa Mabacalat', '099999999');
	echo "<li>Added 1 pet";

	$students = [
		[
			'name' => 'Cutie',
			'gender' => 'Female',
			'birthdate' => '2010-02-02',
			'owner' => 'Aleene',
			'email' => 'albert@einstein.com',
			'address' => 'Sa Tarlac',
			'contact_number' => '09888888888'
		],
		[
			'name' => 'Tiny',
			'gender' => 'Female',
			'birthdate' => '2017-12-25',
			'owner' => 'Aleene',
			'email' => 'alberta@einstein.com',
			'address' => 'Sa Tarlac',
			'contact_number' => '09888888888'
		]
	];
	Pet::registerMany($students);
	echo "<li>Added " . count($students) . " more students";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

