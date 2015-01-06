<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
                <div class="post-preview">
                    <a href="<?php the_permalink(); ?>"><h2 class="post-title"><?php the_title(); ?></h2></a>
                    <p class="post-subtitle"><?php echo get_the_excerpt(); ?></p>
                    <p class="post-meta">Posted by <?php the_author_posts_link(); ?> on <?php echo get_post_time('F j, Y'); ?> in <?php the_category(', '); ?></p>
                </div>
                <hr />
    <?php endwhile; ?>
<?php else : ?>
<?php endif; ?>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous"><?php previous_posts_link('&larr; Newer Posts'); ?></li>
                    <li class="next"><?php next_posts_link('Older Posts &rarr;'); ?></li>
                </ul>
            </div>
        </div>
    </div>

<?php get_footer(); ?>

