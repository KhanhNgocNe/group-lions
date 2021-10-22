<?php
$conn = pg_connect("postgres://pyrbvjruwxpqxc:b1fef120a3288ab103ee74d680ae719836e4ec20b928fbc84f6e7490e765f451@ec2-18-235-4-83.compute-1.amazonaws.com:5432/d4947qoaqcqf5l");
	echo 'Connected Successfully!!!';
	if(!$conn)
	{
		die("Could not connect to database");
	}
?>