<?php get_header(); ?>
<main class="container-lg py-5">
	<div class="row justify-content-center">
		<div class="col-md-9">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : ?>
					<?php the_post(); ?>
					<article>
						<header class="mb-5 text-center">
							<?php get_template_part('template-parts/partials/article/header/header'); ?>
						</header>
						<?php echo get_the_post_thumbnail(null, 'large', array('class' => 'img-fluid aspect-ratio-widescreen w-100 object-fit-cover rounded')); ?>
						<?php get_template_part('template-parts/partials/article/body/body', ''); ?>
						<?php get_template_part('template-parts/partials/article/footer/footer', ''); ?>
					</article>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>
