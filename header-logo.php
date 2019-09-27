<?php //サイトのタイトル（タイトルをロゴ画像に変更するカスタマイズなど） ?>
<!-- サイトのタイトル -->
<?php if ( get_header_logo_url() )://ヘッダーロゴを画像が設定されている場合
    $logo_url = ( get_header_logo_url() ? get_header_logo_url() : get_stylesheet_directory_uri().'/images/logo.png' );//ロゴ画像の取得
    $site_title = '<a href="'.home_url('/').'"><img src="'.$logo_url.'" alt="'.get_bloginfo('name').'" class="site-title-img" /></a>';
  else://ロゴがテキストの場合（デフォルト）
    $site_title = '<a href="'.home_url('/').'">'.get_bloginfo('name').'</a>';
  endif;
?>
<?php if ( is_page() ): ?>
  <div class="headerTitle">
    <h1 class="site-title" itemscope itemtype="https://schema.org/Organization">
    <a href="<?php echo esc_url( home_url( '/') ); ?>"><img class="header_logo" src="/wp-content/themes/simplicity2_child/images/logo.png" /></a>
    </h1>
    <!-- ハンバーガー -->
    <div id="nav-drawer">
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
      <div id="nav-content">
        <!-- ここに中身を入れる -->
        <ul id="nav">
          <li><a href="#service">Service</a></li>
          <li><a href="#news">News</a></li>
          <li><a href="#mission">Mission</a></li>
          <li><a href="#aboutUs">About Us</a></li>
          <li><a href="#recruite">Recruite</a></li>
        </ul>
      </div>
    </div>
  </div>
<?php else: ?>
  <div class="headerTitle">
    <h1 class="site-title" itemscope itemtype="https://schema.org/Organization">
    <a href="<?php echo esc_url( home_url( '/') ); ?>"><img class="header_logo" src="/wp-content/themes/simplicity2_child/images/logo.png" /></a>
    </h1>
  </div>
<?php endif ?>
<!-- サイトの概要 -->
<?php //サイトの概要 ?>
<?php $site_description = get_bloginfo('description'); ?>
<?php if ( is_home() ): ?>
<h2 class="site-description">
<?php echo $site_title ?>
  <?php echo $site_description ?>
</h2>
<?php else: ?>
<p class="site-description">
  <?php echo $site_title ?>
  <?php echo $site_description ?>
</p>
<?php endif ?>