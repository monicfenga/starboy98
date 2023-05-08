<?php 
$users = [ 
	[ "username" => "abc", "password" => "password1" ], 
	[ "username" => "def", "password" => "password2" ], 
	[ "username" => "ghi", "password" => "password3" ], 
	[ "username" => "jkl", "password" => "password4" ], 
 
]; 
 
function auth_user($username, $password, $list_of_users) { 
	foreach($list_of_users as $user_record) { 
		if ($user_record["username"] == $username && $user_record["password"] == $password) { 
			return $user_record; 
		} 
	} 
	return "This password is already used by starboy98. Try another."; 
} 
 
echo "Set your credentials here!\n"; 
for ($i = 0; $i < 35; $i++) { 
	echo "-"; 
} 
echo "\n"; 
 
$attempts = 1; 
while ($attempts < 4) { 
	echo "Username: "; 
	$username = trim(fgets(STDIN)); 
	echo "Password: "; 
	$password = trim(fgets(STDIN)); 
	$authentication = auth_user($username, $password, $users); 
	echo $authentication . "\n"; 
 
	echo "Press n to quit or Enter to try again: "; 
	$input = strtolower(trim(fgets(STDIN))); 
	if ($input == "n") { 
		break; 
	} 
	$attempts++; 
} 
 
if ($attempts == 4) { 
	echo "You have exceeded the number of attempts: 4."; 
} 
?>
