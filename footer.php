            </div><!-- /#main -->
          </main>
        
        </div><!-- /#body-in -->
      </div><!-- /#body -->

      <!-- footer -->
    
      <hr class="footerBorder">
      <div class="footerMenu">
        <img src="/wp-content/themes/simplicity2_child/images/logo.png" class="routePlus" alt="#">
          <ul id="nav">
            <li><a href="#service">Service</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#mission">Mission</a></li>
            <li><a href="#aboutUs">About Us</a></li>
            <li><a href="#recruite">Recruite</a></li>
          </ul>
        </div>
        <div class="copyright">
          <p>copyright © Routeplus inc   All Rights Reserved.</p>
        </div>

        </div><!-- /#footer-in -->
        </div><!-- /#footer -->
      </footer>
      <?php get_template_part('button-go-to-top'); //トップへ戻るボタンテンプレート?>
      <?php get_template_part('buttons-footer-mobile'); //フッターモバイルボタンのテンプレート?>
    </div><!-- /#container -->
    <?php wp_footer(); ?>
    <?php get_template_part('footer-custom-field');//カスタムフィールドの挿入（カスタムフィールド名：footer_custom）?>
    <?php get_template_part('footer-slicknav'); //SlickNav用のテンプレート（ツリー式モバイル用メニュー）?>
    <?php get_template_part('footer-javascript'); //フッターで呼び出すJavaScript用のテンプレート?>
    <?php get_template_part('analytics'); //アクセス解析用テンプレート?>
    <?php get_template_part('footer-insert'); //</body>手前のフッターにタグを挿入したいとき用のテンプレート?>
  </body>
</html>
