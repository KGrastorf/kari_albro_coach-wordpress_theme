<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="post-details">
			<i class="fa fa-user"></i>
			<?php the_author(); ?>
			<i class="fa fa-clock-o"></i>
			<?php the_date(); ?>
			<i class="fa fa-folder"></i>
			<?php the_category(', '); ?>
			<i class="fa fa-tags"></i>
			<?php the_tags('', ', ', ''); ?>

			<div class="post-comments-badge">
				<a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i><?php comments_number(0, 1, '%'); ?></a>
			</div><!-- post-comments-badge -->
			<div class=""><?php edit_post_link('Edit', '<div>
			<i class="fa fa-pencil"></i>', '</div>'); ?>
			</div>
		</div><!--post-details -->
			<?php karialbrocoach_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->



	<?php if ( has_post_thumbnail() ) { ?>
		<div class="post-image col-sm-8">
		<?php the_post_thumbnail(); ?>
	</div><!-- post-image -->
<?php } ?>
	<div class="post-exerpt col-sn-8">
		<?php the_excerpt(); ?>
		<?php $output = get_the_content(); echo strip_tags($output); ?>
	</div><!-- post-exerpt -->
</article><!-- #post-<?php the_ID(); ?> -->
