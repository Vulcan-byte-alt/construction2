<?php get_header(); ?>

<main id="main-content" class="pt-20">
    <div class="max-w-7xl mx-auto px-6 py-24">
        <?php if ( have_posts() ) : ?>
            <div class="grid gap-8">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('border border-white/10 rounded p-6'); ?>>
                        <h2 class="text-2xl font-semibold mb-2">
                            <a href="<?php the_permalink(); ?>" class="hover:text-[#c8922a] transition-colors">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <div class="text-white/60 text-sm">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            <?php the_posts_navigation(); ?>
        <?php else : ?>
            <p class="text-white/50">No content found.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
