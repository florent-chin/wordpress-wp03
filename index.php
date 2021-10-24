<?php get_header(); ?>
    <div class="main-top">
      <img src="<?php echo get_template_directory_uri(); ?>/img/media__firstview.png">
      <h3 class="top-phara">Commit to the growth for everyone</h3>
    </div>
    <div class="list">
      <p class="es1">New Post</p>
      <h5>新着記事</h5>
      <div class="flex-list">
        <div class="list-contents">
          <div class="flex-list">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>">
              <div class="contents">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png">                    
                <?php endif; ?>
                <?php if (!is_category() && has_category()) : ?>
                  <p class="category-tag">
                  <?php $postcat = get_the_category();
                  echo $postcat[0]->name;
                  ?>
                <?php endif; ?>
                <div class="contents-phara">
                <h3 class="article__title">
          <?php
          if (mb_strlen($post->post_title, 'UTF-8') > 30) {
            $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
            echo $title . '…';
          } else {
            echo $post->post_title;
          }
          ?>
　　　　　　<!-- タイトルの文字数が30文字以降は表示せずに、最後に「…」をつける -->
        </h3>
                  <h6><?php echo get_the_date('Y-m-d'); ?></h6>        
                </div>
              </div>
            </a>
            <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
    <?php get_footer(); ?>