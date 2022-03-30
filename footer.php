<footer class="footer" id="footer">
            <div class="footer-container container">
                <div class="footer__title">
                    <h2>Оставить<br>
                        заявку</h2>
                </div>
                <form class="footer__application-form" method="post" action="./send.php">
                    <div class="input-container">
                        <span>Имя</span>
                        <input type="text" name="name" required>
                    </div>
                    <div class="input-container">
                        <span>Телефон</span>
                        <input type="text" name="phone" required>
                    </div>
                    <div class="input-container">
                        <span>Email</span>
                        <input type="text" name="email" required>
                    </div>
                    <div class="input-container">
                        <span>Комментарий</span>
                        <input type="text" name="coment" required>
                    </div>
                    <div class="footer__button-orange">
                        <div class="footer__button-green">
                            <div class="footer__button-blur">
                              <input class="form__input btn" type="submit" value="Go">
                            <input type="hidden" name="act" value="order">
                            </div>
                        </div>
                </div>
                </form>
                <div class="footer__info">
                    <div class="footer__right-block">
                        <span>«WEBMEDIA» <br>
                            2315999100</span>
                        <span>Батуми, <br>
                            Горгиладзе, 98</span>
                        <span>support@webmedia.ge <br>
                            <a href="tel:+995 599 02 19 54">+995 599 02 19 54</a></span>
                    </div>
                    <div class="footer__left-block">
                        <h3>Copyright © 2017-2021 <br>
                            Все права защищены
                        </h3>
                        <a href="#wrapper"><img src="<?php bloginfo('template_url'); ?>/assets/img/footer/footer__info-logo.svg" alt="logo"></a>
                    </div>
                </div>
        </footer>
    </main>
   <div id="fb-root"></div>
     <div id="fb-customer-chat" class="fb-customerchat">
   </div>
    <div id="fb-root"></div>
  <div id="fb-customer-chat" class="fb-customerchat">
  </div>
  <?php wp_footer(); ?>
</body>
</html>