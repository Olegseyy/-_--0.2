<footer>
	<div class="container">
		<a href="tel:<?php the_field( 'phone'  ); ?>" class="phone"><?php the_field( 'phone'  ); ?></a>
		<div class="footer_email">
			<?php the_field( 'footer_email'  ); ?>
		</div>
	</div>
</footer>
	<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script >
	<script src="js/main.js"></script > -->

<?php wp_footer(); ?>

</body>
</html>