<?php
/**
 * Template part for displaying posts
 */

?>

<article id="post-<?php the_ID(); ?>" >
	<header style="color: blue;">
		<h1 class="blog-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</article>