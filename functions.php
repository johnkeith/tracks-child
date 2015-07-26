<?php 

function jk_number_of_posts_on_archive($query){
  if ($query->is_archive){
    $query->set('posts_per_page', 30);
	}
  return $query;
}
 
add_filter('pre_get_posts', 'jk_number_of_posts_on_archive');

// custom excerpt handling
if( ! function_exists( 'jk_tracks_excerpt' ) ) {
    function jk_tracks_excerpt() {
        global $post;

        the_excerpt();
    }
}

function custom_excerpt_length($length) {
	return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 99999 ); // the last argument is an indicator of priority

function ct_tracks_excerpt_read_more_link( $output ) {
    global $post;

    return $output . "<p><a class='more-link' href='" . get_permalink() . "'>" . __( 'Read More', 'tracks' ) . "<span class='screen-reader-text'>" . get_the_title() . "</span></a></p>";
}
add_filter('the_excerpt', 'ct_tracks_excerpt_read_more_link');

// function new_excerpt_more($more)
//   {
//   // Use .read-more to style the link
//     return '<span class="continue-reading"> <a href="' . get_permalink() . '">Continue Reading &raquo;</a></span>';
//   }
// add_filter('excerpt_more', 'new_excerpt_more', 99999);

