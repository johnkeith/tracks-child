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

        // make post variable available
        global $post;

        // check for the more tag
        $ismore = strpos( $post->post_content, '<!--more-->' );

        // if ( $ismore ) {
        //     the_content( __( 'Read More', 'tracks' ) . "<span class='screen-reader-text'>" . get_the_title() . "</span>" );
        // } // otherwise the excerpt is automatic, so output it
        // else {
        //     the_excerpt();
        // }
        the_excerpt();
    }
}

