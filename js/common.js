$(function () {

  $(window).on("load scroll", function () {
    var t = $(this).scrollTop();
    if (t > 100) {
      $('#pageTop').addClass('active');
      $('header').addClass('scroll');
    } else {
      $('#pageTop').removeClass('active');
      $('header').removeClass('scroll');
    };
  });

  $('#menu-toggle').click(function () {
    $('header').toggleClass('open');
    $(this).find('.line').toggleClass('show');
    $('header nav').slideToggle();
    $('html').toggleClass('no_move');
  });


  // flag to allow clicking
  var clickAllowed = true;
  $(window).on('load resize', function () {
    var w = $(window).width();
    if (w < 900) {
      clickAllowed = true;
    }
    else{
      clickAllowed = false;
      $('#sub_menu').removeAttr('style');
      $('#head_sub_menu').removeAttr('style');
      $('a img').removeClass('active');
    }
  })

  $('[data-target="sub_menu"]').click(function(){
    if(clickAllowed){
      if($('[data-target="sub_menu"] a img').hasClass('active')){
        $('[data-target="sub_menu"] a img').removeClass('active');
        $('#sub_menu').slideDown();
        return false;
      }else{
        $('[data-target="sub_menu"] a img').addClass('active');
        $('#sub_menu').slideUp();
        return false;
      }
    }
  })

  $('[data-target="big_sub_menu"]').click(function(){
    if(clickAllowed){
      if($('[data-target="big_sub_menu"] a img').hasClass('active')){
        $('[data-target="big_sub_menu"] a img').removeClass('active');
        $('#head_sub_menu').slideDown();
        return false;
      }else{
        $('[data-target="big_sub_menu"] a img').addClass('active');
        $('#head_sub_menu').slideUp();
        return false;
      }
    }
  })

  $('#header_menu').click(function(){
    $('.line-t').toggleClass("show");
    $('.line-b').toggleClass("show");
    $('.big_menu_cont').toggleClass("open");
    $('.header_inner').toggleClass("open");
    if($('.header_inner').hasClass('open')){
      $(".logo a img").attr("src","/images/common/header_logo_wh.svg").fadeIn(5000);
    }else{
      $(".logo a img").attr("src","/images/common/header_logo.svg").fadeIn(5000);
    }
    // if ($('.menu').hasClass("active")) {
    //   $('.menu').removeClass("active");
    //   $('.big_menu').removeClass("active");
    // } else {
    //   $('.menu').addClass("active");
    //   $('.big_menu').addClass("active");
    // }
  })

  $(".s_3_li").each(function(index) {
      $(this).hover(function(){
          var key = $(this).attr("data-target"); 
          // if($('.s_3_li').hasClass('show')){
          //   $('.s_3_li').removeClass('show');
          //   $('.'+key).toggleClass('show');
          // }
          if(key !== "img_1"){
            $('.img_1').toggleClass('show');
            $('.'+key).toggleClass('show');
          }
      });
  });

  
});



// シンプルローディング
const spinner = document.querySelector('#loading');
window.addEventListener('load', function() {
  spinner.classList.add('loaded');
});
setTimeout( function () {
  spinner.classList.add('loaded');
}, 2000);


// スクロールアニメーション
var callback = function callback(entries, observer) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > 0) {
      entry.target.classList.add('move');
      observer.unobserve(entry.target);
    }
  });
};
var items_list = document.querySelectorAll('.c-anim-up');
var items = Array.prototype.slice.call(items_list, 0);
var observer = new IntersectionObserver(callback, {
  // 出現タイミングの調整はrootMarginを調整
  rootMargin: '-15%',
  threshold: [0, .1, .2, .3, .4, .5, .6, .7, .8, .9, 1]
});
items.forEach(function (item) {
  return observer.observe(item);
});


// [画面に入る前に画像を遅延読み込み]
// タグの記述例 classに[lazy-load]をつけ[data-src]に画像のパスを指定する
// <img class="lazy-load" src="" data-src="images/example.jpg" alt="">
document.addEventListener("DOMContentLoaded", function () {
  let lazyImages = [].slice.call(document.querySelectorAll(".lazy-load"));
  var imgObserver = new IntersectionObserver(callback, {
    rootMargin: '100%',
  });
  let lazyImageObserver = new IntersectionObserver(function (entries, imgObserver) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        let lazyImage = entry.target;
        if (lazyImage.dataset.hasOwnProperty('src')) {
          lazyImage.src = lazyImage.dataset.src;
          lazyImage.dataset.src = '';
          delete lazyImage.dataset.src;
        }
        if (lazyImage.dataset.hasOwnProperty('srcset')) {
          lazyImage.srcset = lazyImage.dataset.srcset;
          lazyImage.dataset.srcset = '';
          delete lazyImage.dataset.srcset;
        }
        lazyImage.classList.remove("lazy-load");
        lazyImageObserver.unobserve(lazyImage);
      }
    });
  });
  lazyImages.forEach(function (lazyImage) {
    lazyImageObserver.observe(lazyImage);
  });
});


// Webfont読込
window.WebFontConfig = {
  google: {
    families: ['Barlow+Condensed:500','Oswald:400,600', 'Poppins:300,400,500,700', 'Noto+Sans+JP:300,400,500&subset=japanese']
  },
  active: function () {
    sessionStorage.fonts = true;
  }
};

(function () {
  var wf = document.createElement('script');
  wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
})();
