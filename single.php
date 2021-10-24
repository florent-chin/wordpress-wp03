<?php get_header(); ?>
<?php if (have_posts()) : the_post(); ?> 
  <div class="single-container">
    <div class="single-header">
      <div class="single-border">
        <?php if (has_category()) : ?>
          <div class="single-category-tag"><?php echo get_the_category_list(' '); ?></div>
        <?php endif; ?>
        <!-- カテゴリーの出力 -->
        <h1 class="single-title">
          <?php the_title(); ?>
          <!-- タイトルの出力 -->
        </h1>
        <div class="single-tags">
          <div class="single-tags2">
            <p class="single-tag__chilg"><?php the_tags('', '  '); ?></p>
            <!-- タグの出力 -->
          </div>
          <p class="single-date"><?php echo get_the_date('Y-m-d'); ?></p>
          <!-- 投稿日時の出力 -->
        </div>
      </div>
    </div>
    <div class="single-img">
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
      <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
      <?php endif; ?>
    </div> 
    <div class="main-text">
      <?php the_content(); ?>
      <!-- 本文の出力 -->
    </div>
  </div>
<?php endif; ?>
<?php get_footer(); ?>