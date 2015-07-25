<div class='archive-post pure-u-1 pure-u-sm-1-2 pure-u-md-1-3 pure-u-lg-1-4 pure-u-xl-1-5'>
	<?php
		// output Featured Image
		echo '<a class="featured-image-link" href="' . get_permalink() . '">';
			echo '<div class="archive-featured-image">';
				ct_tracks_featured_image();
			echo '</div>';
		echo '</a>';
	?>
	<div class="archive-post__info">
		<div class="archive-post__meta">
			<span class="archive-post__date">
				<?php
					echo date_i18n( get_option( 'date_format' ), strtotime( get_the_date('r') ) );
				?>
			</span>
		</div>
		<h1 class='archive-title'>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h1>
	</div>
</div>