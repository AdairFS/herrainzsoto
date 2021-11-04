<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Herrainz_Soto
 * Template Name: home
 */
get_header();
?>

<div class="primary">
	<main id="main" class="site-main" role="main">
		<section class="bloque1" id="company">
			<div class="wrap1">
				<div class="box1">
					<h1>
						<?php echo the_field('titulo'); ?>
					</h1>
				</div><!-- .box1 -->
			</div> <!-- .wrap1 -->
			<div class="wrap">
				<div class="box2 video">
					<img id="play" src="<?php echo get_theme_file_uri('/assets/media/play.png')?>"/>
					<img src="<?php echo the_field('imagen_del_video'); ?>"/>


					
				</div> <!-- .box2 video -->
			</div> <!-- .wrap -->


		
		</section><!-- .bloque1  -->

		<section class="bloque2" id="products">
			<div class="column">
				<div class="box1">
					<img src="<?php echo get_theme_file_uri('/assets/media/mancha.png')?>"/>
					<h2>
						<?php echo the_field('titulo_bloque_2'); ?>
					</h2>
				</div><!-- .box1 -->
			</div> <!-- .column -->
			<div class="column">
				<div class="box2">
					<div class="texto1">
						<?php echo the_field('texto1_del_bloque_2'); ?>
					</div>
					<div class="texto2">
						<?php echo the_field('texto_2_del_bloque_2'); ?>
					</div><!-- .texto2  -->
				</div> <!-- .box2  -->
			</div> <!-- .column -->


		
		</section><!-- .bloque2  -->

		<section class="bloque3" id="contact-us">
			<div class="column">
				<div class="box1">
					<div class="display">
						<div class="fila-img">
							<img id="img1" src="<?php echo get_theme_file_uri('/assets/media/Ellipse24.png')?>"/>
							<img id="img2" src="<?php echo get_theme_file_uri('/assets/media/cardamomo1.png')?>"/>
						</div>
						<div class="fila-img">
							<img id="img3" src="<?php echo get_theme_file_uri('/assets/media/bamboo1.png')?>"/>
							<img id="img4" src="<?php echo get_theme_file_uri('/assets/media/cranberry2.png')?>"/>
						</div>
						<div class="fila-img">
							<img id="img5" src="<?php echo get_theme_file_uri('/assets/media/hoja-grande-5.png')?>"/>
							<img id="img6" src="<?php echo get_theme_file_uri('/assets/media/flor-roja.1.png')?>"/>
						</div>
					</div>
				</div><!-- .box1 -->
			</div><!-- .column -->
			<div class="column">
				<div class="box2">
					
						<h2><?php echo the_field('titulo_del_bloque_3'); ?></h2>
					
					<div class="texto1">
						<?php echo the_field('texto1_del_bloque_3'); ?>
					</div><!-- .texto1  -->
					<div class="texto2">
						<?php echo the_field('texto2_del_bloque_3'); ?>

						

					</div><!-- .texto2  -->
					
				</div> <!-- .box2  -->
				<div>
						<p class="boton"><?php echo the_field('boton_cta'); ?></p>
					</div><!-- div  -->
			</div><!-- .column -->

		</section>
		
	</main>
</div>
<?php 
get_footer();
?>
