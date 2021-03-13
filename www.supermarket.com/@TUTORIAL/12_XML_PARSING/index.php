<?php

# Builtin Function for Handing Error Showing Method
	libxml_use_internal_errors(true);

	$xmlFile = "note.xml"; 

# This Function Loads the XML File Here...
$xml = simplexml_load_file($xmlFile);

if ($xml === false) 
{
    echo "Failed loading XML: ";
	
	# Function To Show Error Messages
    foreach( libxml_get_errors() AS $error ) 
	{
        echo "<br>", $error->message;
    }
}
else 
{
	echo $xml->heading . "<br />" . $xml->body;
}

?>