<?php
$firstName = $_REQUEST['firstname'];
$lastName = $_REQUEST['lastname'];

if ($firstName == 'Kevin')
	echo 'Hello, bro';
else
{
	echo 'Welcome, ' .
	  htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' ' .
	  htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '!';
}
$count = 1;
while ($count <= 10)
{
	echo "$count ";
	++$count;
}
$output = '';
for($i = 0; $i <= 10; ++$i)
{
	$output .= "$i ";
}

include 'i.html.php';