<!-- ループ処理(使い回し用) -->

<?php if(have_posts()): ?>
  <?php while(have_posts()) : the_post(); ?>
    <article class="blog_listCont">
      <time class="blog_time font_garamond"><?php the_time('Y.m.d'); ?></time>
      <h2 class="blog_ttl font_kosakigake">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h2>
      <?php the_content(); ?>
    </article>
  <?php endwhile; //end while have_post ?>
<?php endif; //end have_posts?>
