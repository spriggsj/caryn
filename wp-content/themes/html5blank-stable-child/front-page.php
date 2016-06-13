<?php get_header(); ?>
	
	<header class="hero-banner">
		<div class="container intro">
			<h1>Run With Me</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod dolores harum fugiat praesentium corrupti illo ducimus, velit non! Quod dolores harum fugiat praesentium corrupti illo ducimus, velit non! Quod dolores harum fugiat praesentium corrupti illo ducimus, velit non!</p>
		</div>
	</header>
	
	<section class="recent-post">
		<?php echo do_shortcode( '[custom-loop]' ); ?>
	</section>
	<section class="code-banner">
		<div class="container intro">
			<h1>Code With Me</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod dolores harum fugiat praesentium corrupti illo ducimus, velit non! Quod dolores harum fugiat praesentium corrupti illo ducimus, velit non! Quod dolores harum fugiat praesentium corrupti illo ducimus, velit non!</p>
		</div>
	</section>
	<section class="code-post">
		<?php echo do_shortcode( '[code-loop]' ); ?>
	</section>
	<section class="life-banner">
		<div class="container intro">
			<h1>More Stuff</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod dolores harum fugiat praesentium corrupti illo ducimus, velit non! Quod dolores harum fugiat praesentium corrupti illo ducimus, velit non! Quod dolores harum fugiat praesentium corrupti illo ducimus, velit non!</p>
		</div>
	</section>
	<section class="life-post">
		<?php echo do_shortcode( '[lifestyle-loop]' ); ?>
	</section>

<?php get_footer(); ?>