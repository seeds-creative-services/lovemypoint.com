<?php /* Template Name: 404 Page */

get_header(); ?>

<section class="sc sc-light text-center">
  <div class="container">

    <h1>Whoops!</h1>
    <p class="lg:max-w-4xl mx-auto">The page you requested has either been moved or does not exist. As we make changes to our website, sometimes pages will get moved around or be renamed, causing this error. We do our best to redirect old pages to the new ones, but we may have missed this one. If you think you've reached this page in error, please get in touch with us and explain where you clicked or how you landed on this page so we can fix it. In the meantime, checkout our menu or one of our locations!</p>

    <a class="btn btn-lg btn-primary text-white mt-12" href="/menu/">View Our Menu</a>

  </div>
</section>

<?php include_once("blocks/locations-dark.php"); ?>

<?php get_footer(); ?>