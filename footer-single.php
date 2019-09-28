            </div><!-- /#main -->
            <?php get_sidebar(); ?>
          </main>
         
        </div><!-- /#body-in -->
      </div><!-- /#body -->

      <!-- footer -->
    
      <hr class="footerBorder">
      <div class="footerSingleLogoImg">
        <a href="<?php echo esc_url( home_url( '/') ); ?>"><img src="/wp-content/themes/simplicity2_child/images/logo.png" class="routePlusfooter" alt="#"></a>
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
