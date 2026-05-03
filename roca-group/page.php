<?php get_header(); ?>

<main id="main-content" class="pt-20">
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="max-w-7xl mx-auto px-6 py-24">
                <h1 class="text-4xl md:text-5xl font-bold mb-8 leading-tight">
                    <?php the_title(); ?>
                </h1>
                <div class="prose prose-invert max-w-none text-white/80">
                    <?php the_content(); ?>
                </div>
            </div>
        </article>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
