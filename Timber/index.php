
	

<?php
/*
Template Name: Home-kk
*/
?>
	<?php wp_head(); ?>

	<main>
		<div class="blog">
			<div class="container">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
						<div class="blog__items">
							<div class="blog__title"> <?php the_title('',' 1'); ?> </div>
							<div class="blog__img"> <?php the_post_thumbnail('thumbnail'); ?></div>
							<div class="blog__text"> <?php the_excerpt('thumbnail'); ?> </div>

						</div> 
			
					<div class="blog__items">
							<div class="blog__title"> <?php the_title('',' 2'); ?> </div>
							<div class="blog__img"> <?php the_post_thumbnail('thumbnail'); ?></div>
							<div class="blog__text"> <?php the_excerpt(); ?> </div>
						</div> 
			
						<div class="blog__items">
							<div class="blog__title"> <?php the_title('',' 3'); ?> </div>
							<div class="blog__img"> <?php the_post_thumbnail('thumbnail'); ?></div>
							<div class="blog__text"> <?php the_excerpt(); ?></div>
						</div> 
			
						<div class="blog__items">
							<div class="blog__title"> <?php the_title('',' 4'); ?> </div>
							<div class="blog__img"> <?php the_post_thumbnail('thumbnail'); ?></div>
							<div class="blog__text"> <?php the_excerpt(); ?> </div>
						</div> 
			
						<div class="blog__items">
							<div class="blog__title"> <?php the_title('',' 5'); ?> </div>
							<div class="blog__img"> <?php the_post_thumbnail('thumbnail'); ?></div>
							<div class="blog__text"> <?php the_excerpt(); ?></div>
						</div> 
			
						<div class="blog__items">
							<div class="blog__title"> <?php the_title('',' 6'); ?> </div>
							<div class="blog__img"> <?php the_post_thumbnail('thumbnail'); ?></div>
							<div class="blog__text"> <?php the_excerpt(); ?> </div>
						</div> 
			
						<div class="blog__items">
							<div class="blog__title"> <?php the_title('',' 7'); ?> </div>
							<div class="blog__img"> <?php the_post_thumbnail('thumbnail'); ?></div>
							<div class="blog__text"> <?php the_excerpt(); ?> </div>
						<?php get_posts(); ?>
						</div> 

					<?php endwhile;?>
				<?php endif; ?>
				

		<div class="list__house_btn">
			<a class="blog__btn" href="<?php bloginfo ('url') ?>">На главную </a>
		</div>
		</div>		
	</main>
	
				
	
	<?php wp_footer(); ?>
</body>
</html>





