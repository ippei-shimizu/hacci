<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
  <title>Hair room Hacci</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
  <script>
  (function(d) {
    var config = {
      kitId: 'yoz0oyn',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
  <?php wp_head(); ?>
</head>
<body>
  <header id="Header" class="header">
    <div class="header__inner">
      <div class="header__top">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="ヘアールームハッチ" class="logo" width="233px" height="76px">
          <h1>Hair room Hacci【ヘアールームハッチ】</h1>
        </a>
      </div>
      <div class="header__bottom">
        <div class="header__web__btn">
          <a class="web__reservation" href="https://beauty.hotpepper.jp/slnH000319382/" target="_blank">WEBご予約</a>
        </div>
        <nav class="header__nav">
          <ul>
            <li class="header__nav__list">
              <a class="page-link" href="#Concept"><span>Concept</span><span>コンセプト</span></a>
            </li>
            <li class="header__nav__list">
              <a class="page-link" href="#Menu"><span>Menu</span><span>メニュー</span></a>
            </li>
            <li class="header__nav__list">
              <a class="page-link" href="#Style"><span>Style</span><span>スタイル</span></a>
            </li>
            <li class="header__nav__list">
              <a class="page-link" href="#Tokio"><span>TOKIO</span><span>トキオ</span></a>
            </li>
            <li class="header__nav__list">
              <a class="page-link" href="#Staff"><span>Staff</span><span>スタッフ</span></a>
            </li>
            <li class="header__nav__list">
              <a class="page-link" href="#Access"><span>Access</span><span>アクセス</span></a>
            </li>
          </ul>
        </nav>
        <div class="header__sns">
          <div class="header__sns__link">
            <a href="tel:055-288-0202">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-tel.svg" alt="お電話での予約" width="47px" height="47px">
            </a>
          </div>
          <div class="header__sns__link">
            <a href="https://www.instagram.com/hacci.azu/" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-instagram.svg" alt="instagram" width="47px" height="47px">
            </a>
          </div>
          <div class="header__sns__link">
            <a href="https://line.me/R/ti/p/EjBsNFYLlx" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-line.svg" alt="line" width="47px" height="47px">
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="sp__header">
    <div class="sp__header__inner">
      <div class="sp__header__flex">
        <div class="header__web__btn sp__header__web__btn">
          <a class="web__reservation" href="https://beauty.hotpepper.jp/slnH000319382/" target="_blank">WEBご予約</a>
        </div>
        <ul class="sp__header__sns">
          <li>
            <a href="https://www.instagram.com/hacci.azu/" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-instagram-white.svg" alt="instagram" width="30px" height="30px">
            </a>
          </li>
          <li>
            <a href="https://line.me/R/ti/p/EjBsNFYLlx" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-line-white.svg" alt="line" width="30px" height="30px">
            </a>            
          </li>
          <li>
            <a href="tel:055-288-0202">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-tel-white.svg" alt="お電話での予約" width="30px" height="30px">
            </a>           
          </li>
        </ul>
        <button id="hamburger" class="hamburger">
          <span class="hamburger__line"></span>
          <span class="hamburger__line"></span>
          <span class="hamburger__line"></span>
        </button>
      </div>
    </div>
  </div>

  <div id="spNav" class="sp__nav">
    <div class="sp__nav__inner">
      <div class="header__top">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="ヘアールームハッチ" class="logo" width="130px" height="43px">
        </a>
      </div>
        <nav class="sp__nav__box">
          <ul>
            <li class="sp__nav__list">
              <a class="page-link" href="#Concept">Concept</a>
            </li>
            <li class="sp__nav__list">
              <a class="page-link" href="#Menu">Menu</a>
            </li>
            <li class="sp__nav__list">
              <a class="page-link" href="#Style">Style</a>
            </li>
            <li class="sp__nav__list">
              <a class="page-link" href="#Tokio">TOKIO</a>
            </li>
            <li class="sp__nav__list">
              <a class="page-link" href="#Staff">Staff</a>
            </li>
            <li class="sp__nav__list">
              <a class="page-link" href="#Access">Access</a>
            </li>           
          </ul>
        </nav>
        <div class="header__web__btn">
          <a class="web__reservation" href="https://beauty.hotpepper.jp/slnH000319382/" target="_blank">WEBご予約</a>
        </div>
        <ul class="sp__header__sns">
          <li>
            <a href="https://www.instagram.com/hacci.azu/" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-instagram-white.svg" alt="instagram" width="30px" height="30px">
            </a>
          </li>
          <li>
            <a href="https://line.me/R/ti/p/EjBsNFYLlx" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-line-white.svg" alt="line" width="30px" height="30px">
            </a>            
          </li>
          <li>
            <a href="tel:055-288-0202">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-tel-white.svg" alt="お電話での予約" width="30px" height="30px">
            </a>           
          </li>
        </ul>       
    </div>
  </div>
