<?php get_header(); ?>
<main>
    <!-- footer page nav  -->
	<?php get_template_part('template-parts/navigation'); ?>



	<div id="content">
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
			<p class="metainfo">by <?php the_author() ?> on <?php the_time('F jS, Y') ?></p>
			<div class="clear"></div>
            <div class="title">
                <div class="entry">
                    <?php the_content(); ?>
                </div>
                <p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
        	</div>
		</div>
        <?php comments_template(); ?>
		<?php endwhile; ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
	<?php else : ?>
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>
	<?php endif; ?>
    </div>
</div>

<div class="right">
	<?php get_sidebar(); ?>
</div>
</main>
<?php get_footer(); ?>
