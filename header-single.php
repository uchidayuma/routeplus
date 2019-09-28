<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<?php //Google Analytics（gtag.js）
get_template_part('head-alalytics'); ?>
<?php
//////////////////////////////////
//ウェブマスターツール用のID表示
//////////////////////////////////
if ( get_webmaster_tool_id() ): ?>
<meta name="google-site-verification" content="<?php echo get_webmaster_tool_id() ?>" />
<?php endif;//ウェブマスターツールID終了 ?>
<meta charset="<?php bloginfo('charset'); ?>">
<?php //ビューポート
//モバイルもしくはページキャシュモードの時
if ( is_mobile() || is_responsive_enable() || is_page_cache_enable() ): ?>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php else: ?>
  <meta name="viewport" content="width=1280, maximum-scale=1, user-scalable=yes">
<?php endif ?>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php //AMPの案内タグを出力
if ( has_amp_page() ): ?>
<link rel="amphtml" href="<?php echo get_amp_permalink(); ?>">
<?php endif ?>
<?php //Wordpressのバージョンが4.1以下のとき
if ( get_wordpress_version() < 4.1 ):
  get_template_part('header-title-tag');
endif; ?>
<?php get_template_part('header-seo');//SEOの設定テンプレート?>
<?php wp_enqueue_script('jquery');//jQueryの読み込み?>
<?php the_apple_touch_icon_tag();//Appleタッチアイコンの呼び出し ?>
<?php if ( is_facebook_ogp_enable() ) //Facebook OGPタグ挿入がオンのとき
  get_template_part('header-ogp');//Facebook OGP用のタグテンプレート?>
<?php if ( is_twitter_cards_enable() ) //Twitterカードタグ挿入がオンのとき
  get_template_part('header-twitter-card');//Twitterカード用のタグテンプレート?>
<?php get_template_part('header-insert');//ユーザーが子テーマからヘッダーに何か記述したい時に利用するテンプレート?>
<?php get_template_part('head-custom-field');//カスタムフィールドの挿入（カスタムフィールド名：head_custom）?>
<?php wp_head(); ?>
</head>

  <body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">
    <div id="container">

      <!-- header -->
      <header itemscope itemtype="https://schema.org/WPHeader">
        <div class="header" class="clearfix">
          <div id="header-in">

            <?php //カスタムヘッダーがある場合
            // $h_top_style = '';
            // if (get_header_image()){
            //   $h_top_style = ' style="background-image:url('.get_header_image().')"';
            // } ?>
            <div <?php //echo $h_top_style; ?>>

              <div class="h_Top_margin">
                
                <?php //get_template_part('button-menu'); //モバイルメニューボタンの呼び出し?>

                <div class="alignleft top-title-catchphrase header_logo_flex">
                

                <?php get_template_part('header-logo');?>
                
                </div>
                
              </div>

            </div><!-- /#h-top -->
          </div><!-- /#header-in -->
          
        </div><!-- /#header -->
        
      </header>

      <!-- 本体部分 -->
      <hr class="single-page-header-border">
      <div id="body">
        <div id="body-in" class="cf">

          

          <!-- main -->
          <main itemscope itemprop="mainContentOfPage">
            <div class="singleSidebar">
              <div id="main" itemscope itemtype="https://schema.org/Blog">