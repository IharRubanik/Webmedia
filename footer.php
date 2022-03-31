<footer class="footer" id="footer">
            <div class="footer-container container">
                <div class="footer__title">
                    <h2>Оставить<br>
                        заявку</h2>
                </div>
                <form class="footer__application-form">
                    <div class="input-container">
                        <span>Имя</span>
                        <input maxlength="25" name="name"  autocomplete="new-text" type="text" required >
                    </div>
                    <div class="input-container">
                        <span>Телефон</span>
                        <input type="tel" autocomplete="new-text"  maxlength="15" name="phone" required >
                    </div>
                    <div class="input-container">
                        <span>Email</span>
                        <input type="email"  maxlength="25" name="mail" >
                    </div>
                    <div class="input-container">
                        <span>Комментарий</span>
                        <input type="text"  maxlength="50" name="coment">
                    </div>
                    <div class="footer__button-orange">
                        <div class="footer__button-green">
                            <div class="footer__button-blur">
                              <input class="form__input btn" type="submit" value="Go">
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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2NWKXPNZ38"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2NWKXPNZ38');
</script>


  <?php wp_footer(); ?>
</body>
</html>