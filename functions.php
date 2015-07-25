<?php 

function jk_number_of_posts_on_archive($query){
  if ($query->is_archive){
    $query->set('posts_per_page', 30);
	}
  return $query;
}
 
add_filter('pre_get_posts', 'jk_number_of_posts_on_archive');

