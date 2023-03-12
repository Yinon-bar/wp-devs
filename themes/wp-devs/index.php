<?php get_header(); ?>
<img src="<?php header_image() ?>" height="<?php echo get_custom_header()->height
                                            ?>" width="<?php echo get_custom_header()->width ?>">
<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <h1>Blog</h1>
      <div class="container">
        <div class="blog-items">
          <?php
          if (have_posts()) :
            while (have_posts()) :
              the_post();
          ?>
              <article>
                <?php the_post_thumbnail('medium') ?>
                <h2><?php the_title(); ?></h2>
                <div class="meta-info">
                  <p>פורסם בתאריך: <?php echo get_the_date(); ?> ע"י <?php the_author_posts_link(); ?></p>
                  <p>קטגוריות: <?php the_category(' '); ?></p>
                  <p>תגיות: <?php the_tags('', ', '); ?></p>
                </div>
                <?php the_content(); ?>
              </article>
            <?php
            endwhile;
          else : ?>
            <p>Nothing yet to be displayed!</p>
          <?php endif; ?>
        </div>
      </div>

    </main>
  </div>
</div>
<?php get_footer(); ?>