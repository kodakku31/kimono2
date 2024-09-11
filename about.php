<?php
/*
Template Name:~私たちについて~
*/

// スタッフメンバーを表示する関数
function render_staff_member($index) {
    $post_id = get_the_ID();
    $img = get_post_meta($post_id, "staff_img$index", true);
    $position = get_post_meta($post_id, "staff_position$index", true);
    $name = get_post_meta($post_id, "staff_name$index", true);
    $about = get_post_meta($post_id, "staff_about$index", true);
    ?>
    <li>
        <div class="aboutStaff_contBox scrollFadeBottom">
            <div class="aboutStaff_contBox_img">
                <picture>
                    <source media="" srcset="">
                    <img src="<?php echo $img; ?>" alt="">
                </picture>
                <p class="aboutStaff_position"><?php echo $position; ?></p>
                <p class="aboutStaff_name"><?php echo $name; ?></p>
            </div>
            <div class="aboutStaff_contBox_msg">
                <?php echo $about; ?>
            </div>
        </div>
    </li>
    <?php
}
?>

<!-- ヘッダー -->
<?php get_header(); ?>

<!-- メニュー -->
<?php get_template_part('content', 'menu'); ?>

<!-- メイン -->
<main class="about">
    <h1 class="ly_rightPageTtl">
        <span class="ly_rightPageTtl_ja">私たちについて</span>
        <span class="ly_rightPageTtl_en">About us</span>
    </h1>

    <div class="about_container wrapper scrollFade">
        <div class="ly_smallMv pc">
            <img src="<?php echo get_post_meta(get_the_ID(), 'about_img1', true); ?>" alt="">
        </div>
        <p class="ly_catch">
            <?php echo get_post_meta(get_the_ID(), 'about_title1', true); ?>
        </p>
        <div class="ly_readBox ly_readBox_about">
            <p>
                <?php echo get_post_meta(get_the_ID(), 'about_msg1', true); ?>
            </p>
        </div>

        <!-- スタッフセクション -->
        <section class="aboutStaff">
            <h2 class="ly_secTtl scrollFade">スタッフ<span>Staff</span></h2>
            <ul class="aboutStaff_list">
                <?php 
                for ($i = 1; $i <= 4; $i++) { 
                    render_staff_member($i);
                } 
                ?>
            </ul>
        </section>

        <!-- マップセクション -->
        <section class="map">
            <h2 class="ly_secTtl scrollFade">マップ<span>Map</span></h2>
            <div class="map_box scrollFadeBottom">
                <div class="map_img">
                    <iframe src="<?php echo get_post_meta(get_the_ID(), 'about_map', true); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="map_info">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="map_text">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; else : ?>
                        <div class="post">
                            <p>準備中</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </div>
</main>

<!-- フッター -->
<?php get_footer(); ?>
