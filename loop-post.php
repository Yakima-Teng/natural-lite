<?php
/**
 * This template displays the post loop.
 *
 * @package Natural Lite
 * @since Natural Lite 1.0
 */

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <h1 class="headline"><?php the_title(); ?></h1>

  <div class="post-author">
    <p class="align-left"><i class="fa fa-calendar"></i>
      &nbsp;<?php esc_html_e('Posted on', 'natural-lite'); ?> <?php the_time(esc_html__('F j, Y', 'natural-lite')); ?> <?php esc_html_e('by', 'natural-lite'); ?> <?php esc_url(the_author_posts_link()); ?>
    </p>
    <p class="align-right"><i class="fa fa-comment"></i> &nbsp;<a class="scroll"
                                                                  href="<?php the_permalink(); ?>#comments"><?php comments_number(esc_html__('Leave a Comment', 'natural-lite'), esc_html__('1 Comment', 'natural-lite'), '% Comments'); ?></a>
    </p>
  </div>

  <?php if (has_post_thumbnail()) { ?>
    <div class="feature-img"><?php the_post_thumbnail('natural-lite-featured-large'); ?></div>
  <?php } ?>

  <?php the_content(); ?>

  <?php wp_link_pages(array(
      'before' => '<p class="page-links"><span class="link-label">' . esc_html__('Pages:', 'natural-lite') . '</span>',
      'after' => '</p>',
      'link_before' => '<span>',
      'link_after' => '</span>',
      'next_or_number' => 'next_and_number',
      'nextpagelink' => esc_html__('Next', 'natural-lite'),
      'previouspagelink' => esc_html__('Previous', 'natural-lite'),
      'pagelink' => '%',
      'echo' => 1,
    )
  ); ?>

  <?php edit_post_link(esc_html__('(Edit)', 'natural-lite'), '', ''); ?>

  <!-- BEGIN .post-meta -->
  <div class="post-meta radius-full">
    <p><i class="fa fa-reorder"></i>
      &nbsp;<?php esc_html_e('Category:', 'natural-lite'); ?> <?php the_category(', '); ?> <?php $tag_list = get_the_tag_list(esc_html__(', ', 'natural-lite'));
      if (!empty($tag_list)) { ?> &nbsp; &nbsp; <i
          class="fa fa-tags"></i> &nbsp;<?php esc_html_e('Tags:', 'natural-lite'); ?><?php the_tags('');
      } ?></p>
    <!-- END .post-meta -->
  </div>

  <!-- BEGIN .post-navigation -->
  <div class="post-navigation">
    <div class="previous-post"><?php previous_post_link('&larr; %link'); ?></div>
    <div class="next-post"><?php next_post_link('%link &rarr;'); ?></div>
    <!-- END .post-navigation -->
  </div>

  <!-- BEGIN 添加相关文章（根据分类来判断） -->
  <div class="related-posts-wrapper">
    <header class="post-meta related-posts-title">
      <i class="fa fa-reorder"></i>
      &nbsp;Related Posts:
    </header>
    <ul class="related-posts">
      <?php
      global $post;
      $cats = wp_get_post_categories($post->ID);
      if ($cats) {
        $args = array(
          'category__in' => array($cats[0]),
          'post__not_in' => array($post->ID),
          'showposts' => 8,
          'caller_get_posts' => 1
        );
        query_posts($args);
        if (have_posts()) {
          while (have_posts()) {
            the_post();
            update_post_caches($posts); ?>
            <li>
              <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
            </li>
            <?php
          }
        } else {
          echo '<li>* 暂无相关文章</li>';
        }
        wp_reset_query();
      } else {
        echo '<li>* 暂无相关文章</li>';
      }
      ?>
    </ul>
  </div>

  <!--  END 添加相关文章 -->

  <?php if (comments_open() || '0' != get_comments_number()) {
    comments_template();
  } ?>

  <div class="clear"></div>

<?php endwhile;
else : ?>

  <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'natural-lite'); ?></p>

<?php endif; ?>
