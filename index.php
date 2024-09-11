<?php
/*
Template Name:~トップページ~
*/

// 関数の定義をここに追加
function render_home_section($section_data) {
    ?>
    <section class="homeClossLy_sec scrollFadeBottom">
        <div class="homeClossLy_sec_inner">
            <figure class="homeClossLy_image">
                <picture>
                    <source media="(max-width:767px)" srcset="">
                    <img src="<?php echo $section_data['image']; ?>" alt="">
                </picture>
            </figure>
            <div class="homeClossLy_contBox">
                <h2 class="secTtl vertical">
                    <?php echo $section_data['title']; ?>
                    <span><?php echo $section_data['title_en']; ?></span>
                </h2>
                <div class="homeClossLy_textBox <?php echo $section_data['content_class']; ?> vertical">
                    <?php echo $section_data['content']; ?>
                </div>
            </div>
        </div>
        <p class="viewBtn <?php echo $section_data['btn_class']; ?> sp">
            <a href="#">View More</a>
        </p>
    </section>
    <?php
}

?>

<!-- ヘッダー -->
<?php get_header(); ?>

<!-- メニュー -->
<?php get_template_part('content', 'menu'); ?>

<!-- メインコンテンツ -->
<main class="home">

    <!-- mainvisual -->
    <div class="homeMv lyMv scrollFade">
        <div class="homeMv_textBox homeMovetext wrapper">
            <p class="font_kosakigake homeMovetext_jp">
                <?php echo get_post_meta($post->ID, 'homeMv_ja', true); ?>
            </p>
            <p class="font_garamond pc homeMovetext_en">
                <?php echo get_post_meta($post->ID, 'homeMv_en', true); ?>
            </p>
        </div>
        <video class="homeMv_video" src="<?php echo get_post_meta($post->ID, 'homeMv', true); ?>" playsinline loop autoplay muted></video>
    </div>

    <!-- point -->
    <section class="ly_verticalBox scrollFade">
        <div class="ly_verticalBox_container wrapper vertical">
            <div class="ly_verticalBox_ttlBox">
                <h2 class="ly_verticalBox_ttl font_kosakigake">
                    <?php echo get_post_meta($post->ID, 'top_title1', true); ?>
                </h2>
                <p class="ly_verticalBox_subTtl font_garamond">
                    <?php echo get_post_meta($post->ID, 'top_title1_en', true); ?>
                </p>
            </div>
            <div class="ly_verticalBox_textBox">
                <?php echo get_post_meta($post->ID, 'top_about1', true); ?>
            </div>
        </div>
    </section>

    <!-- 背景 -->
    <div class="homeBg01 scrollFadeBottom02"></div>

    <!-- 特徴 -->
    <div class="homeClossLy wrapper">
        <?php
        // セクション1のデータ
        render_home_section([
            'image' => get_post_meta($post->ID, 'top_img2', true),
            'title' => get_post_meta($post->ID, 'top_title2', true),
            'title_en' => get_post_meta($post->ID, 'top_title2_en', true),
            'content' => get_post_meta($post->ID, 'top_about2', true),
            'content_class' => 'first_content',
            'btn_class' => 'contentBtn1'
        ]);

        // セクション2のデータ
        render_home_section([
            'image' => get_post_meta($post->ID, 'top_img3', true),
            'title' => get_post_meta($post->ID, 'top_title3', true),
            'title_en' => get_post_meta($post->ID, 'top_title3_en', true),
            'content' => get_post_meta($post->ID, 'top_about3', true),
            'content_class' => 'second_content',
            'btn_class' => 'contentBtn2'
        ]);

        // セクション3のデータ
        render_home_section([
            'image' => get_post_meta($post->ID, 'top_img4', true),
            'title' => get_post_meta($post->ID, 'top_title4', true),
            'title_en' => get_post_meta($post->ID, 'top_title4_en', true),
            'content' => get_post_meta($post->ID, 'top_about4', true),
            'content_class' => 'third_content',
            'btn_class' => 'contentBtn3'
        ]);
        ?>
    </div>

    <!-- 背景 -->
    <div class="homeBg02 scrollFadeBottom02"></div>

    <!-- 実例紹介 -->
    <div class="homeWorksWrap">
        <section class="homeWorks wrapper">
            <h2 class="homeWorks_ttl secTtl vertical scrollFade">実例紹介<span>Works</span></h2>
            <ul class="homeWorks_list homeWorks_slider scrollFadeBottom">
                <?php
                $args = array(
                    'posts_per_page' => 4,
                    'order' => 'DESC',
                    'post_type' => 'works',
                );
                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <figure>
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                </figure>
                                <p class="homeWorks_contTtl font_kosakigake"><?php the_title(); ?></p>
                                <p class="homeWorks_day font_garamond"><?php the_time('Y.m.d'); ?></p>
                            </a>
                        </li>
                    <?php
                    endwhile;
                else : ?>
                    <h2>投稿はありません。</h2>
                <?php
                endif;
                wp_reset_postdata();
                ?>
            </ul>
            <p class="viewBtn scrollFade">
                <a href="/works/">View All</a>
            </p>
        </section>
    </div>

    <!-- ブログ -->
    <section class="homeBlog wrapper">
        <h2 class="homeBlog_ttl secTtl vertical scrollFade">ヘアスタイル<span>Hairstyle</span></h2>
        <ul class="homeBlog_list scrollFadeBottom">
            <?php
            $args = array(
                'posts_per_page' => 6,
                'order' => 'DESC',
                'post_type' => 'hair',
            );
            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <figure>
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </figure>
                            <p class="homeBlog_contTtl font_kosakigake"><?php the_title(); ?></p>
                            <time class="homeBlog_day font_garamond"><?php the_time('Y.m.d'); ?></time>
                        </a>
                    </li>
                <?php
                endwhile;
            else : ?>
                <h2>投稿はありません。</h2>
            <?php
            endif;
            wp_reset_postdata();
            ?>
        </ul>
        <p class="viewBtn scrollFade">
            <a href="/hair/">View All</a>
        </p>
    </section>

</main>

<!-- フッター -->
<?php get_footer(); ?>
