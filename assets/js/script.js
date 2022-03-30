// анимация старт
// ждем полной загрузки страницы
window.onload = () => {
// preloader

  setTimeout(function() {
    let body = document.querySelector("body")
    let preloader = document.getElementById('page-preloader');
    if( !preloader.classList.contains('done') )
    {
      preloader.classList.add('done'),
      body.style.overflow = "auto";
    }
  }, 2000);
  // устанавливаем настройки
  const options = {
    // родитель целевого элемента - область просмотра
    root: null,
    // отступ снизу
    rootMargin: "20%",
    // процент пересечения - половина изображения
    threshold: 1,
  };
  // создаем наблюдатель
  const observer = new IntersectionObserver((entries, observer) => {
    // для каждой записи-целевого элемента
    entries.forEach((entry) => {
      // если элемент является наблюдаемым
      if (entry.isIntersecting) {
        //       // добавить ему CSS-класс
        entry.target.classList.add("anime-active");
      }
    });
  }, options);
  // выбираем обьект слежения по классу
  observer.observe(document.querySelector(".services__ads-circl"));
  observer.observe(document.querySelector(".services__sites-circl"));
  observer.observe(document.querySelector(".services__audit-circl"));
  observer.observe(document.querySelector(".services__seo-circl"));
  observer.observe(document.querySelector(".services__smm-circl"));
};

// burger menu
document.querySelector(".burger-menu").onclick = function () {
  document.querySelector("#burger-menu__span1").classList.toggle("active"),
    document.querySelector("#burger-menu__span2").classList.toggle("active"),
    document.querySelector("#burger-menu__span3").classList.toggle("active"),
    document.querySelector(".menu").classList.toggle("active"),
    document.querySelector("body").classList.toggle("active");
};
// слайдер
const swiper = new Swiper(".swiper", {
  autoplay: {
    delay: 1800,
  },
  speed: 400,
  spaceBetween: 100,
  loop: true,
});
const swiper2 = new Swiper(".swiper2", {
  autoplay: {
    delay: 1800,
  },
  speed: 400,
  spaceBetween: 300,
  loop: true,
});
// google pixel
window.dataLayer = window.dataLayer || [];
function gtag() {
  dataLayer.push(arguments);
}
gtag("js", new Date());
gtag("config", "G-2NWKXPNZ38");
// meta pixel
!(function (f, b, e, v, n, t, s) {
  if (f.fbq) return;
  n = f.fbq = function () {
    n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
  };
  if (!f._fbq) f._fbq = n;
  n.push = n;
  n.loaded = !0;
  n.version = "2.0";
  n.queue = [];
  t = b.createElement(e);
  t.async = !0;
  t.src = v;
  s = b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t, s);
})(
  window,
  document,
  "script",
  "https://connect.facebook.net/en_US/fbevents.js"
);
fbq("init", "1425426281239758");
fbq("track", "PageView");

// meta messanger
var chatbox = document.getElementById("fb-customer-chat");
chatbox.setAttribute("page_id", "109574278342460");
chatbox.setAttribute("attribution", "biz_inbox");

window.fbAsyncInit = function () {
  FB.init({
    xfbml: true,
    version: "v13.0",
  });
};
(function (d, s, id) {
  var js,
    fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://connect.facebook.net/ru_RU/sdk/xfbml.customerchat.js";
  fjs.parentNode.insertBefore(js, fjs);
})(document, "script", "facebook-jssdk");










