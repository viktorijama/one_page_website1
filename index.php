<!doctype html>
<html
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/libs/bootstrap4/css/bootstrap.min.css">
		<link rel="stylesheet" href="master.css">

	</head>


<body>
  <div class="container-fluid p-0 m-0" id='container'>
    <nav class="row navbar d-block d-lg-none d-xl-none navbar-light fixed-top m-0" >
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav menu">
          <?php html5blank_nav(); ?>
          <?php pll_the_languages();?>
        </div>
      </div>
      <a href="#"><img class="logo_small" src="img/logo_small.png" alt="Logotipas"></a>
    </nav>
    <div class="row home-page p-0 ">
      <div class="col-xl-6 col-lg-6 home-left p-0">
        <div class="row home-left-side m-0">
          <div class="col-12 p-0 m-0 invisible "></div>
          <div class="col-xl-6 col-lg-5 p-0"></div>
          <div class="col-xl-6 col-lg-7 text-left p-0">
            <img class="logo" src="img/logo.png" alt="Logotipas">
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 home-right p-0 m-0">
          <div class="header row m-0">
            <nav class= "col-xl-8 col-lg-11 menu">
              <?php html5blank_nav(); ?>
            </nav>
          <div class="col-xl-2 col-lg-1 lng p-0 m-0">
            <?php
              $translations = pll_the_languages(array('raw'=>1));
              $lang_url_lt = $translations['lt']['url'];
              $lang_url_en = $translations['en']['url'];
            ?>
            <ul class='p-0'>
              <li>
                  <a class="lng-en <?php if (pll_current_language() == 'lt') { ?>active<?php } ?>" href="<?php echo $lang_url_lt; ?>">LT</a>
              </li>
              <li>
                  <a class="lng-en ml-2 <?php if (pll_current_language() == 'en') { ?>active<?php } ?>" href="<?php echo $lang_url_en; ?>">EN</a>
              </li>
            </ul>
          </div>
        </div>
      <div class="row home-right-side p-0 m-0">
        <div class="d-md-block d-xl-none d-lg-none col-md-12 text-left p-0">
          <img class="logo" src="/img/logo.png" alt="Logotipas">
        </div>
        <div class="col-xl-8 col-lg-11 col-md-12 text-right p-0">
          <h1><?php echo get_post_field('prekyba', (pll_current_language() == 'lt') ? 88 : 162); ?> <br>
            <strong><?php echo get_post_field('medziaga', (pll_current_language() == 'lt') ? 88 : 162); ?></strong>
            <?php echo get_post_field('ir', (pll_current_language() == 'lt') ? 88 : 162); ?> <strong> <?php echo get_post_field('medziaga', (pll_current_language() == 'lt') ? 91 : 164); ?> </strong></h1>
        </div>

        <div class="col-xl-4 d-none d-xl-block p-0"></div>
      </div>
      </div>
      </div>
      <div class="row about " id="about">
        <div class="col-xl-2 about-headline p-0 ">
          <div class="row menu-title p-0 m-0">
            <div class="col-12 vertical-text p-0 m-0">
              <h3 class="title-text-box-1"><?php echo get_post_field('post_title', (pll_current_language() == 'lt') ? 60 : 131); ?></h3>
            </div>
            <div class="col-11 p-0 m-0 title-border title-box-border-1">
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-12 col-sm-12 col-xs-12 about-text">
          <p><?php echo get_post_field('post_content', (pll_current_language() == 'lt') ? 158 : 159); ?></p>
        </div>
        <div class="col-6 p-0 about-foto "> <?php echo has_post_thumbnail(60, 'thumbnail'); ?>
          <ul class="about-list check m-0">
            <li><?php echo get_post_field('list_1', (pll_current_language() == 'lt') ? 158 : 159); ?></li>
            <li><?php echo get_post_field('list_2', (pll_current_language() == 'lt') ? 158 : 159); ?></li>
            <li><?php echo get_post_field('list_3', (pll_current_language() == 'lt') ? 158 : 159); ?></li>
          </ul>
        </div>
      </div>

      <div class="row services-still" id="services">
        <div class="col-xl-2 services-headline p-0 m-0 ">
          <div class="row menu-title p-0 m-0">
            <div class="col-12 vertical-text p-0 m-0">
              <h3 class=" title-text-box-2"><?php echo get_post_field('post_title', (pll_current_language() == 'lt') ? 66 : 133); ?></h3>
            </div>
            <div class="col-11 p-0 m-0 title-border title-box-border-2"></div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-12 col-md-12 col-xs-12 services-foto-still p-0 ">
          <a href="<?php echo get_post_field('dokumentas', (pll_current_language() == 'lt') ? 88 : 162); ?>" class="btn-still d-none d-md-block " target= '_blank'>
            <div class="btn-content">
              <span>
                <img class= 'dowloand' src="/img/download.png" alt="Atsisiųsti">
              </span>
              <span class="btn-text"><?php echo get_post_field('atsisiusti', (pll_current_language() == 'lt') ? 88 : 162); ?></span>
            </div>
          </a>
        </div>
        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12 still-text">
          <article class="still">
            <h2><?php echo get_post_field('prekyba', (pll_current_language() == 'lt') ? 88 : 162); ?> <strong><?php echo get_post_field('medziaga', (pll_current_language() == 'lt') ? 88 : 162); ?></strong></h2>
            <ul class= 'article-list p-0'>
              <li><?php echo get_post_field('list_1', (pll_current_language() == 'lt') ? 88 : 162); ?></li>
              <li class="slash"><?php echo get_post_field('list_2', (pll_current_language() == 'lt') ? 88 : 162); ?></li>
              <li class="slash"><?php echo get_post_field('list_3', (pll_current_language() == 'lt') ? 88 : 162); ?></li>
              <li class="slash"><?php echo get_post_field('list_4', (pll_current_language() == 'lt') ? 88 : 162); ?></li>
            </ul>
            <p><?php echo get_post_field('post_content', (pll_current_language() == 'lt') ? 88 : 162); ?> </p>
          </article>
          <a href="<?php echo get_post_field('dokumentas', (pll_current_language() == 'lt') ? 88 : 162); ?>" class="btn-still-small d-block d-md-none " target='_blank'>
            <div class="btn-content-small">
              <span>
                <img class= 'dowloand' src="/img/download.png" alt="Atsisiųsti">
              </span>
            </div>
          </a>
          <div class="scroll-down">
            <a href="javascript:;" class="show-content arrow-down"></a>
          </div>
        </div>
      </div>

      <div class="row service-content" style="display:none">
        <div class="col-xl-2 p-0"></div>
        <div class="col-xl-9 col-md-12 col-sm-12 p-0 m-0">
          <p><?php echo get_post_field('post_content', (pll_current_language() == 'lt') ? 93 : 161); ?></p>
        </div>
        <div class="col-xl-1"></div>
      </div>

        <div class="row services-al">
          <div class="col-xl-2 p-0 "></div>
          <div class="col-xl-4 col-sm-12 col-md-12 col-xs-12 al-text">
            <article class="al">
              <h2><?php echo get_post_field('prekyba', (pll_current_language() == 'lt') ? 91 : 164); ?> <strong><?php echo get_post_field('medziaga', (pll_current_language() == 'lt') ? 91 : 164); ?></strong></h2>
              <ul class= 'article-list p-0'>
                <li><?php echo get_post_field('list_1', (pll_current_language() == 'lt') ? 91 : 164); ?></li>
                <li class="slash"><?php echo get_post_field('list_2', (pll_current_language() == 'lt') ? 91 : 164); ?></li>
                <li class="slash"><?php echo get_post_field('list_3', (pll_current_language() == 'lt') ? 91 : 164); ?></li>
                <li class="slash"><?php echo get_post_field('list_4', (pll_current_language() == 'lt') ? 91 : 164); ?></li>
                <li class="slash"><?php echo get_post_field('list_5', (pll_current_language() == 'lt') ? 91 : 164); ?></li>
              </ul>
              <p><?php echo get_post_field('post_content', (pll_current_language() == 'lt') ? 91 : 164); ?> </p>
            </article>
            <a href="<?php echo get_post_field('dokumentas', (pll_current_language() == 'lt') ? 91 : 164); ?>" class="btn-still-small d-block d-md-none " target="_blank">
              <div class="btn-content-small">
                <span>
                  <img class= 'dowloand' src="/img/download.png" alt="Atsisiųsti">
                </span>
              </div>
            </a>
            <div class="scroll-down">
              <a href="javascript:;" class="show-content arrow-down"></a>
            </div>
          </div>
          <div class="col-xl-5 col-sm-12 col-md-12 col-xs-12 services-foto-al p-0 ">
            <a href="<?php echo get_post_field('dokumentas', (pll_current_language() == 'lt') ? 91 : 164); ?>" class="btn-al d-none d-md-block" target="_blank">
                <div class="btn-content">
                  <span>
                    <img class= 'dowloand' src="/img/download.png" alt="Atsisiųsti">
                  </span>
                  <span class="btn-text"><?php echo get_post_field('atsisiusti', (pll_current_language() == 'lt') ? 91 : 164); ?></span>
                </div>
              </a>
            </div>
          </div>

          <div class="row service-content content-2" style="display:none">
            <div class="col-xl-2 p-0"></div>
            <div class="col-xl-9 col-md-12 col-xs-12 p-0 m-0">
              <p><?php echo get_post_field('post_content', (pll_current_language() == 'lt') ? 92 : 166); ?></p>
            </div>
            <div class="col-xl-1"></div>
          </div>

          <div class="row blueline p-0">
            <div class="col p-0 m-0"></div>
          </div>

          <div class="row contacts" id="contacts">
            <div class="col-xl-2 contacts-headline p-0 ">
              <div class="row menu-title  p-0 m-0">
                <div class="col-12 vertical-text p-0 m-0">
                  <h3 class="p-0 title-text-box-3"><?php echo get_post_field('post_title', (pll_current_language() == 'lt') ? 101 : 140); ?></h3>
                </div>
                <div class="col-11 title-border title-box-border-3"></div>
              </div>
            </div>

          <div class="row">
            <div class="col-xl-2 p-0 "></div>
            <div class="col-xl-4 col-lg-12 col-md-12 map" >
              <div id="map"></div>
            </div>

            <div class="col-xl-5 col-lg-12 col-md-12 contact-form">
              <div class=" row contact-icons ml-0 mr-0">
                <div class="tel col-xl-11 col-lg-5 col-md-7 col-sm-12 col-xs-12 p-0">
                  <span><img src="/img/tel.png" alt="Telefonas">
                  </span>
                  <span class="tel-text"><?php echo get_post_field('tel', (pll_current_language() == 'lt') ? 111 : 135); ?></span>
                </div>
                <div class="mail col-xl-11 col-lg-4 col-md-4 col-sm-12 col-xs-12 p-0">
                  <span><img src="/img/meil.png" alt="El-paštas">
                  </span>
                  <span class="mail-text"><?php echo get_post_field('email', (pll_current_language() == 'lt') ? 111 : 135); ?></span>
                </div>
              </div>
              <div class="form row m-0 ">
                <div class="form-titles col-12 p-0">
                  <h4 class="m-0"><?php echo get_post_field('turite_klausimu', (pll_current_language() == 'lt') ? 111 : 135); ?></h4>
                  <h5><?php echo get_post_field('rasykite_mums', (pll_current_language() == 'lt') ? 111 : 135); ?></h5>
                </div>
                <?php if (pll_current_language() == 'lt') {
                      echo do_shortcode('[contact-form-7 id="188" title="Užklausos forma LT" html_class="row m-0"]');
                } else {echo do_shortcode('[contact-form-7 id="190" title="Užklausos forma EN" html_class="row m-0"]');
                      } ?>
              </div>
            </div>
          </div>

          <footer class="row m-0">
          	<div class="col-2 disable"></div>
          	<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 copy-rights">
          		<span>&#169; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> </span>
          	</div>
          	<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12 solution">
          		<span><?php echo get_post_field('sprendimas', (pll_current_language() == 'lt') ? 111 : 135); ?> <a href="" target="_blank"><img src="" alt=""></a>
          		</span>
          	</div>
          	<div class="col-2 disable"></div>
          </footer>
          </div>


          </div>
          </div>
          </div>
