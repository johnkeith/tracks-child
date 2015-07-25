<?php
// TODO: clean this up. better naming, better functionality
	if(is_home()){
		get_template_part('content-archive-home');
	} else {
		get_template_part('content-archive-archive');
	}
?>

