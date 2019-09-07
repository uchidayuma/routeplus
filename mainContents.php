<?php
//メインページ
?>

<main>
  <div id="service">
    <h2 class="mainTitle redFont">Service</h2>
    <hr width="100%">
    <p class="mainTitlemassage">ルートプラスは4つの事業を行なっております</p>
  </div>
    
  <div class="mainService">
    <div class="mainServiceContent">
      <h2 class="subTitle">就職活動時保証付きプログラミング教育</h2>
      <p class="whiteFont">就職が決まらなければ全額返金！
        <br/> 結果にコミットするプログラミングレッスン 30歳前後のフリーターが 
        <br/> 多数ITエンジニアとして就職しています。
      </p>
      <a href="https://se-shine.net/post_lp/lessons/promise-lesson/">詳細はこちら</a>
    </div>
    <div class="mainServiceContent">
      <h4>エンジニア志願者向けサービス</h4>
      <h2 class="mainServiceContentNotMargin">ココカラエンジニア</h2>
      <p class="whiteFont">エンジニアを目指したい全ての人へ
        <br/>技術・マインド・人生戦略の全てが揃っている
        <br/>メディアです。エンジニアになりたい人は
        <br/>まずアクセス！
      </p>
      <a href="https://se-shine.net/">詳細はこちら</a>
    </div>
  
    <div class="mainServiceContent">
      <h2 class="subTitle">Webアプリケーション開発</h2>
      <p class="whiteFont">Webアプリケーションを作りたい方へ
        <br/>弊社はPHPを使ったマッチングアプリや
        <br/>業務管理アプリを得意としています。
        <br/>まずはお問い合わせください。
      </p>
      <a href="#">詳細はこちら</a>
    </div>
    <div class="mainServiceContent">
      <h2 class="subTitle">法人向け並走型アプリ開発</h2>
      <p class="whiteFont">貴社の社員様をITエンジニアへ育成
        <br/>ITエンジニアが採用できないなら育てればいい。
        <br/>そんな経営者様におすすめのサービスになります。
        <br/>貴社で使えるアプリを開発しながら育成を承ります。
      </p>
      <a href="ここにURL">詳細はこちら</a>
    </div>
  </div>
  
  <div id="news">
    <h2 class="redFont">News</h2>
    <hr width="100%">
  </div>

  <div class="newsContent">
    <?php
      $args = array(
      'posts_per_page' => 6 // 表示件数の指定
      );
      $posts = get_posts( $args );
      foreach ( $posts as $post ): // ループの開始
      setup_postdata( $post ); // 記事データの取得
    ?>
    <div class="mainNewsDeta"><!-- ループ内容-->
      <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumb320'); ?></a>
        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
      <?php else : ?>
        <a href="<?php the_permalink(); ?>"><img src="wp-content/themes/simplicity2_child/images/newsImg.png" width="320" height="200" alt="デフォルト画像" /></a>
        <p><a href="<?php the_permalink(); ?>">><?php the_title(); ?></a></p>
      <?php endif ; ?>
    </div>
    <?php
    endforeach; // ループの終了
    wp_reset_postdata(); // 直前のクエリを復元する
  ?>
  </div>
  

  <div id="menber">
    <h2 class="redFont">Menber</h2>
    <hr width="100%">
  </div>
  <div class="menberList">
    <div>
      <img src="wp-content/themes/simplicity2_child/images/uchida.png" alt="#">
      <h4>代表取締役　社長</h4>
      <p>打田　裕馬</p>
    </div>
    <div>
      <img src="wp-content/themes/simplicity2_child/images/hara.png" alt="#">
      <h4>Webサービス責任者</h4>
      <p>原　真梨</p>
    </div>
  </div>
  <div id="mission">
    <h2 class="redFont">Mission</h2>
    <hr width="100%">
  </div>

  <div class="missionList">
    <div class="missionListMain">
      <h3>人生の選択肢を増やす</h3>
      <p>現代人の大多数が高校、大学への進学からの新卒就職で働いています。</p>
    <p>人生のレールと呼ばれるルート以外の人生を歩む事はまだまだ難しい社会です</p>
    <p>我々は人生の選択肢を増やすサービスを提供する事で、
        社会の空気を明るくしていきます。</p>
    </div>

    <div class="missionListMain">
      <h3>代表挨拶</h3>
      <p>こんにちは。株式会社ルートプラス代表取締役の打田裕馬です。
        <br/>ここでは弊社の理念について、私の思いをみなさんにお伝えします。</p>

    <p>私は大学を卒業し、企業に就職するというレールに乗って生きてきました。
          <br/>私はそのレールに乗ってうまく人生を送る事ができましたが、
          学校生活に馴染めない人・・・</p>
      </div>
    </div>
    <div id="aboutUs">
      <h2 class="redFont">AboutUs</h2>
      <hr width="100%">
    </div>
    <div class="aboutUsMain">
      <div class="aboutUsMainListLeft">
      <table class="table table-striped">
    <tr>
      <td>社名</td>
      <td>株式会社ルートプラス</td>
    </tr>
      <tr>
      <td>事業内容</td>
      <td>Webアプリケーション開発<br>プログラミング教育</td>
    </tr>
    <tr>
      <td>代表者</td>
      <td>代表取締役　社長　打田 裕馬</td>
    </tr>
    <tr>
      <td>所在地</td>
      <td>東京都新宿区新宿7丁目26-7ピクセル新宿1F
        <br>熊本県人吉市駒井田町216-12ヒトヨシラボ</td>
      </tr>
      <tr>
        <td>設立年月日</td>
        <td>2016年9月</td>
      </tr>
      <tr>
        <td>資本金</td>
        <td>300万円</td>
      </tr>
    </table>
  </div>
  <div class="aboutUsMainListLight">
    <ul class="typeSquare">
    <!--ココらへんのコードはもうちょっときれいに書き直します。(後で修正予定)-->
    <li>2016年 
    <table>
    <tr>
      <td>9 月 ----</td>
      <td>静岡県御殿場市に株式会社ルートプラスを設立</td>
    </tr>
    <tr>
      <td></td>
      <td>学生発信型インターンシップサービス開始</td>
    </tr>
  </table></li>
  <li>2017年
    <table>
      <tr>
        <td>4 月 ----</td>
        <td>東京都新宿区に転移</td>
      </tr>
      <tr>
        <td></td>
        <td>学生発信型インターンシップサイトサービス終了</td>
      </tr>
    </table>
    <table>
      <tr>
        <td>5 月 ----</td>
        <td>Webアプリケーション開発事業をスタート</td>
      </tr>
    </table>
    <table>
      <tr>
        <td>6 月 ----</td>
        <td>自社メディア：ここからエンジニアをスタート</td>
      </tr>
      <tr>
        <td></td>
        <td>プログラミング教育事業スタート</td>
      </tr>
    </table>
    </li>
    <li>2018
      <table>
    <tr>
      <td>11月----</td>
      <td>熊本県人吉市の吸収技術専門学校と業務提携</td>
    </tr>
    <tr>
      <td></td>
      <td>ヒトヨシラボへサテライトオフィスを開設</td>
    </tr>
  </table>
</li>
</ul>
    <!--==========================-->
    </div>
    </div>
      <div id="recruite">
        <h2 class="redFont">Recruite</h2>
        <hr width="100%">
      </div>
        <div class="recruiteMain">
          <p>現在、正社員・インターンの募集は行っておりません。</p>
        </div>
        <div id="contact">
          <h2 class="redFont">Contact</h2>
          <hr width="100%">
        </div>
        <div class="layoutAdjustment">
          <!-- プラグインでお問い合わせフォームは実装 --> 
        </div>
        <ul>

</main>