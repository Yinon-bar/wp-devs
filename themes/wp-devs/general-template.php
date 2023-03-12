<?php
/*
    Template Name: General template
*/
?>
<?php get_header(); ?>
<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <div class="container">
        <div class="general-template">
          <?php
          if (have_posts()) :
            while (have_posts()) :
              the_post();
          ?>
              <article>
                <h1><?php the_title(); ?></h1>
                <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                <p>Categories: <?php the_category(' '); ?></p>
                <p>Tags: <?php the_tags('', ', '); ?></p>
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