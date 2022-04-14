

<?php get_header(); ?>



<main>
	<div class="container">	
	
		<div class="main_title">
			<?php the_field( 'main_title'  ); ?>
		</div>
	
		<div class="main_text">
			<?php the_field( 'main_text'  ); ?>
		</div>
	
		<div class="main_img">
			<img src="<?php bloginfo( 'template_url'  ); ?>/assets/img/Ресурс 4.jpg">
		</div>

		<div class="project">
			<div class="project_titlea">
				<?php the_field( 'project_titlea'  ); ?>
			</div>
				
				<?php
			$featured_posts = get_field('project_item');
					if( $featured_posts ): ?>
    					<ul>	
   						<?php foreach( $featured_posts as $post ): 
     				    setup_postdata($post); ?>
       						<li class="project_item">
           						<div class="project_name">
           							<?php the_field( 'project_name'  ); ?>
								</div>
								<div class="project_size">
									<?php the_field( 'project_size'  ); ?>
								</div>
								<div class="project_area">
									<?php the_field( 'project_area'  ); ?>
								</div>
								<div class="project_cost">
									<?php the_field( 'project_cost'  ); ?>
								</div>
								
								<div class="project_images">
									<div class="project_images-img">
										<img src="<?php the_field( 'project_images-img-1'  ); ?>" alt="">
									</div>
									<div class="project_images-img">
										<img src="<?php the_field( 'project_images-img-2'  ); ?>" alt="">
									</div>
								</div>
   						    </li>
   						<?php endforeach; ?>
   						</ul>
   						<?php    
    				wp_reset_postdata(); ?>
				<?php endif; ?>
		</div>
	</div>

	<div class="list__house">
		<a  class="list__house__btn" href="localhost/home/">Подробный список домов</a>
	</div>

	<div class="download">
		<div class="download_img">
			<img src="<?php bloginfo( 'template_url'  ); ?>/assets/img/Ресурс 13.jpg" alt="">
		</div>

			<a class="button_download"href="<?php the_field('button_download'); ?>" download >СКАЧАТЬ ВЕСЬ КАТАЛОГ ДОМОВ</a>
	</div>

	<div class="container">
		
			<div class="gallery_title">
				<?php the_field( 'gallery_title'  ); ?>
			</div>
			<div class="gallery_text">
				<?php the_field( 'gallery_text'  ); ?>
			</div>
			<div id="gallery_item">
				<?php the_field( 'gallery_item'  ); ?>
	   		</div>
		<div class="main_img">
			<img src="<?php bloginfo( 'template_url'  ); ?>/assets/img/Ресурс 4.jpg" alt="">
		</div>
	
</main>

<?php get_footer(); ?>


