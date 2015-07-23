<?php 

function number_of_posts_on_archive($query){
  if ($query->is_archive){
    $query->set('posts_per_page', 15);
	}
  return $query;
}
 
add_filter('pre_get_posts', 'number_of_posts_on_archive');