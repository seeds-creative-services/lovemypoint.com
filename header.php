<?php global $wp;

$page_meta = get_post_meta(get_the_ID(), "seeds_seo", true);
$page_url = home_url(add_query_arg(array(), $wp->request)); ?>

<!DOCTYPE html>
<html lang="en-US">
<head>

<meta charset="utf-8">
<meta name="language" content="EN">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="<?php echo $page_meta['indexing']; ?>, <?php echo $page_meta['crawling']; ?>">

<!-- Favicons -->
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicons/favicon.ico">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicons/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicons/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- Basic meta content. -->
<title><?php echo $page_meta['title']; ?></title>
<meta name="description" content="<?php echo $page_meta['description']; ?>">
<meta name="author" content="Seeds Creative Services">
<meta name="url" content="<?php echo $page_url; ?>">

<!-- Page post & revision dates. -->
<meta name="date" content="<?php echo get_the_date("l, F jS Y, h:iA"); ?>">
<meta name="revised" content="<?php the_modified_date("l, F jS Y, h:iA"); ?>">

<!-- Open Graph meta content. -->
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo $page_url; ?>">
<meta property="og:title" content="<?php echo $page_meta['title']; ?>">
<meta property="og:description" content="<?php echo $page_meta['description']; ?>">

<!-- Apple device meta content. -->
<meta name="apple-mobile-web-app-capable" content="yes">

<!-- Windows & IE meta content. -->
<meta http-equiv="cleartype" content="on">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="mssmarttagspreventparsing" content="true">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-51486505-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-51486505-1');
</script>

<!-- Import Font Awesome icons. -->
<script src="https://kit.fontawesome.com/29f0ff1eb5.js" crossorigin="anonymous"></script>

<!-- Load the child theme stylesheet. -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . "/assets/dist/css/styles.css" ?>">

<!--<!-- Global site tag (gtag.js) - Google Analytics -->-->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-51486505-1"></script>-->
<!--<script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}-->
<!--gtag('js', new Date());gtag('config', 'UA-51486505-1');</script>-->

<!-- Define custom CSS theme variables. -->
<style>:root {<?php foreach(get_theme_mods() as $key => $value) {
if(strpos($key, "theme_colors_") === 0) { ?> --<?php echo $key; ?>: <?php echo "{$value} !important;"; }}?> }</style>

</head>
<body onload="SEEDS.Ready(event);">

  <header class="light" role="banner" id="page-header">
    <div class="container">
      <nav role="navigation" id="primary-navigation">
        <a id="mobile-logo" href="/" class="lg:hidden">
          <img alt="<?php echo $page_meta['title']; ?>" src="/wp-content/uploads/logo.png" class="h-16">
        </a>
        <input type="checkbox" id="mobile-menu-checkbox" class="hidden">
        <label id="mobile-menu-toggle" for="mobile-menu-checkbox">
          <span class="hamburger"></span>
          <span class="hamburger"></span>
          <span class="hamburger"></span>
        </label>
        <ul>
          <li><a class="nav-link" href="/locations/">Locations</a></li>
          <li class="hidden lg:inline-flex"><a class="nav-link" href="/menu/">Menu</a></li>
          <li><a class="nav-link" href="/banquets/">Banquets</a></li>
          <li id="desktop-logo">
            <a class="nav-link" href="/">
              <img alt="<?php echo $page_meta['title']; ?>" src="/wp-content/uploads/logo-dark.png">
            </a>
          </li>
          <li><a class="nav-link" href="https://www.toasttab.com/the-point-pub-and-grill/giftcards" target="_blank">Gift Cards</a></li>
          <li><a class="nav-link" href="/about/">About</a></li>
          <li><a class="nav-link" href="/contact/">Contact</a></li>
          
          <div class="text-center w-2/3 border-dashed border-t-2 border-brand-mahogany pt-8 mt-8 block lg:hidden">

            <strong>Central Point</strong>
            <p class="font-semibold">
              <a href="tel:5416659015">
                <i class="fas fa-phone mr-2"></i>541-665-9015
              </a>
            </p>

            <strong class="block mt-4">Medford</strong>
            <p class="font-semibold">
              <a href="tel:5418164395">
                <i class="fas fa-phone mr-2"></i>541-816-4395
              </a>
            </p>

            <strong class="block mt-4">Bend</strong>
            <p class="font-semibold">
              <a href="tel:5417976828">
                <i class="fas fa-phone mr-2"></i>541-797-6828
              </a>
            </p>

          </div>

        </ul>
      </nav>
    </div>
  </header>