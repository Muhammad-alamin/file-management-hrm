<?php
session_start();

# This class will create object that will 
# load page contents from 
# resource/view (Main Page Design) and 
# resource/view/include (Head, Foot, Header, Footer, Sidebar etc)

class View
{
	# This will include Headers and Footers
	public function includeView($page_name)
	{
		include("resource/view/include/".$page_name.".php");
	}
	
	# This will load Main Content Part
	public function loadContent($page_name)
	{
		include("resource/view/".$page_name.".php");
	}
}
?>