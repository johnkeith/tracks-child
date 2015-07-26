<div <?php post_class(); ?>>
	<?php
	// output Featured Image if first post
	// if($wp_query -> current_post == 0 && !is_paged()){
			echo '<a class="featured-image-link" href="' . get_permalink() . '">';
				ct_tracks_featured_image();
			echo '</a>';
		// }
	?>
	<div class="excerpt-container">
		<div class="excerpt-meta">
			<?php get_template_part('content/post-meta'); ?>
		</div>
		<div class='excerpt-header'>
			<h1 class='excerpt-title'>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h1>
		</div>
		<div class='excerpt-content'>
			<article>
				<?php 
					if($wp_query -> current_post == 0 && !is_paged()){
						ct_tracks_excerpt();
					} else {
						jk_tracks_excerpt();
					} 
				?>
			</article>
		</div>
	</div>
</div>