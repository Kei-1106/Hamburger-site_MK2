<!DOCTYPE html>
<html lang = "<?php language_attributes(); ?>"><!--言語設定を自動的に出力-->
<head>
    <meta charset = "UTF-8">
    <meta name = "format-detection" content = "telephone=no">
    <meta name = "description" content = "ハンバーガーサイト">
    <meta name = "viewport" content = "width=device-width, initial-scale">
    <link rel = "shortcut icon" href = "<?php echo esc_url( get_template_directory_uri()); ?>/img/icon/favicon.png">
    <link rel = "stylesheet" href = "https://ajax.googleapis.com">
    <link rel = "preconnect" href = "https://fonts.googleapis.com">
    <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
    <?php if( is_singular() )wp_enqueue_script( "comment-reply" ); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div class = "u-display__flex u-position">
        <div class = "u-display">
            <header class = "l-header c-background-color__orange-light">
                    <h1 class = "c-logo u-align">
                        <a href = "<?php echo esc_url(home_url( '/' )); ?>"><?php bloginfo( 'name' ); ?></a><!--サイトのタイトルを取得-->
                    </h1>
                    <div class = "u-display__flex--center"></div>
                    <?php get_search_form(); ?>
                <div class = "l-header__hamburger c-button__hamburger js-hamburger">
                    <span></span>
                    <span>Menu</span>
                    <span></span>
                </div>
            </header>