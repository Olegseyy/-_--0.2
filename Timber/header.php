<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title><?php bloginfo( 'description'  ); ?></title>
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
	
	<?php wp_head(); ?>

</head>

<body>

<header class=" header" style="background-image: url(<?php the_field( 'top__bg'  ); ?>);">
	<div class="header_inner" >	 
		<div class="header_logo">
			<img src="<?php bloginfo( 'template_url'  ); ?>/assets/img/Ресурс 3.jpg" class="img" alt=""> 
		</div>
		<div class="header_name">
			<?php the_field( 'header_name'  ); ?>
		</div>
		<a href="tel:<?php the_field( 'phone'  ); ?>" class="phone"><?php the_field( 'phone'  ); ?></a>
		<div class="header_title">
		<?php the_field( 'header_title'  ); ?>
		</div>
		<div class="header_sale">
			<img src="<?php the_field( 'header_sale'  ); ?>" alt="">
		</div>
	</div>
</header>