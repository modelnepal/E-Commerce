<?php get_header(); ?> <!-- header section -->
<main>
	<!-- Include navigation using get_template_part -->
	<?php get_template_part('template-parts/navigation'); ?>

	<!-- Include navigation using get_template_part -->
	<?php get_template_part('template-parts/hero-section'); ?>
	
	<div id="content"> <!-- main content area -->

	<?php if (have_posts()): ?> <!-- check if there are posts -->
			<?php while (have_posts()):
				the_post(); ?> <!-- start post loop -->
				<div class="product-item" id="post-<?php the_ID(); ?>"> <!-- single post container as product -->
					<div class="product-image">
						<?php if (has_post_thumbnail()): ?>
							<?php the_post_thumbnail('medium'); ?> <!-- display post thumbnail -->
						<?php else: ?>
							<img src="default-image.jpg" alt="No Image" /> <!-- default image if no thumbnail -->
						<?php endif; ?>
					</div>
					<h3>
						<a href="<?php the_permalink() ?>" rel="bookmark"
							title="Permanent Link to <?php the_title_attribute(); ?>">
							<?php the_title(); ?>
						</a>
					</h3>
					<!-- Post title with permalink -->

					<div class="product-actions">
						<?php
						// Assuming the post is treated as a WooCommerce product
						if (function_exists('woocommerce_add_to_cart_form')) {
							$product_id = get_the_ID(); // Assuming the post is a product
							echo do_shortcode('[add_to_cart id="' . $product_id . '"]');
						}
						?>
					</div>

					<div class="product-price">
						<!-- Optionally, you can display the post's price if using WooCommerce -->
						<?php
						if (function_exists('get_post_meta')) {
							$price = get_post_meta(get_the_ID(), '_price', true); // WooCommerce product price
							if ($price) {
								echo '<p>Price: ' . wc_price($price) . '</p>';
							}
						}
						?>
					</div>
				</div>
			<?php endwhile; ?> <!-- end post loop -->

			<div class="navigation"> <!-- navigation links -->
				<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
				<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
			</div>
		<?php else: ?> <!-- no posts found -->
			<h2 class="center">Not Found</h2>
			<p class="center">Sorry, but you are looking for something that isn't here.</p>
			<?php include(TEMPLATEPATH . "/searchform.php"); ?> <!-- search form -->
		<?php endif; ?>
	</div> <!-- end main content area -->

	<div class="right"> <!-- sidebar section -->
		<?php get_sidebar(); ?> <!-- Includes the sidebar template for the WordPress theme. -->
	</div>

</main>
<?php get_footer(); ?> <!-- footer section -->