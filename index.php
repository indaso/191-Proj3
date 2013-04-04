<?php
// counter starts at 1
echo("The number of visitors is: ");
// gets number of visitors
system('./hitcounter.py');
// increments number of visitors
system('./upcounter.py');

print "<br>";
print "<br>";
$s = time ();
print date("m/d/y",$s) . "<br>";
print "<br>";
print "<br>";
// time based greetings
$b = time();
$hour = date("g",$b);
$m = date ("A",$b);
if ($m == "AM")
{
if ($hour == 12)
{
echo "Good Evening!";
}
elseif ($hour < 4)
{
echo "Good Evening!";
}
elseif ($hour > 3)
{
echo "Good Morning!";
}
}
elseif ($m == "PM")
{
if ($hour == 12)
{
echo "Good Afternoon!";
}
elseif ($hour < 7)
{
echo "Good Afternoon!";
}
elseif ($hour > 6)
{
echo "Good Evening!";
}
}

print "<br>";
print "<br>";
$ipaddress = getenv('REMOTE_ADDR');
echo "Here is your IP Address: ".$ipaddress."";

?>
