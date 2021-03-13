<!DOCTYPE html>
<html>
<head>
<style rel="stylesheet" type="text/css">
body
{
background-color:#d0e4fe;
}
h4
{
color:blue;
text-align:left;
}
p
{
font-family:"Verdana";
font-size:12px;
}
</style>
</head>
<body style="font-family:Verdana;">

<?php
@$news = simplexml_load_file("http://static.espncricinfo.com/rss/livescores.xml");

$i = 1; $j = 1;

echo "<h4>Running Games:</h4>";
foreach ($news->channel->item as $value) 
{
	$gotValue = $value->title;
	
	if(strpos($gotValue, '/') == true)
	{
		echo '<div>';
		if (strpos($gotValue, 'Bangladesh') !== false)
			{ echo '<p style="color:red;">Match '.$i.': '.$gotValue.'</p>'; }
		else
			{ echo '<p>Match '.$i.': '.$gotValue.'</p>'; }
		echo '</div>';
		$i++;
	}
}

echo "<br /><h4>Games Starting Soon:</h4>";
foreach ($news->channel->item as $value) 
{
	$gotValue = $value->title;
	
	if(strpos($gotValue, '/') == false)
	{
		echo '<div>';
		echo '<p>Match '.$j.': '.$gotValue.'</p>';
		echo '</div>';
		$j++;
	}
}
?> 

</body>
</html>
