<?php /* Template Name: Home Page */

get_header("light"); ?>

<section class="sc block-splash">
  <div class="block-splash-content">
    <div class="container">
      <h1 class="lg:max-w-5xl mx-auto">Your neighborhood's favorite pub and grill</h1>
      <a class="btn btn-lg btn-primary hidden lg:inline-flex" href="https://www.toasttab.com/locations/f25e4c72-013e-4056-9824-9f7ab9f53a24" target="_blank">Order Online</a>
    </div>
  </div>
  <figure class="block-splash-image" style="background-image:url('/wp-content/uploads/splash-background.jpg');"></figure>
</section>

<section class="sc sc-light">
  <div class="container">

    <div class="flex flex-wrap -mx-2 -mt-20 lg:-mt-24 lg:mb-20 relative z-20">
      
      <div class="px-2 w-full mb-12 lg:mb-0 lg:w-1/3 text-center">
        <div class="px-4 py-8 flex flex-col items-center">
          <div class="rounded-full bg-brand-mahogany text-white w-20 h-20 flex items-center justify-center -mt-20 mb-6">
            <i class="text-2xl fas fa-utensils"></i>
          </div>
          <h5 class="pb-4">Order Online</h5>
          <p>Place an order to go and have fresh food ready for you to pick up! Our full-service menu gives you a wide range of delicious options. Place your order now!</p>
          <p><a class="font-semibold text-brand-sunflower" href="https://www.toasttab.com/locations/f25e4c72-013e-4056-9824-9f7ab9f53a24" target="_blank">Place an Order</a></p>
        </div>
      </div>

      <div class="px-2 w-full mb-12 lg:mb-0 lg:w-1/3 text-center">
        <div class="px-4 py-8 flex flex-col items-center">
          <div class="rounded-full bg-brand-mahogany text-white w-20 h-20 flex items-center justify-center -mt-20 mb-6">
            <i class="text-2xl fas fa-credit-card"></i>
          </div>
          <h5 class="pb-4">Gift Cards</h5>
          <p>Give somebody the gift of the best restaurant in Central Point Oregon! The Point Pub & Grill offers gift cards for you to purchase. Order one today!</p>
          <p><a class="font-semibold text-brand-sunflower" href="https://www.toasttab.com/the-point-pub-and-grill/giftcards" target="_blank">Purchase Gift Cards</a></p>
        </div>
      </div>

      <div class="px-2 w-full mb-12 lg:mb-0 lg:w-1/3 text-center">
        <div class="px-4 py-8 flex flex-col items-center">
          <div class="rounded-full bg-brand-mahogany text-white w-20 h-20 flex items-center justify-center -mt-20 mb-6">
            <i class="text-2xl fas fa-concierge-bell"></i>
          </div>
          <h5 class="pb-4">Banquets</h5>
          <p>Host your next event with us! Planning your event is as easy as 1, 2, 3 and we have some great options for you to choose from.</p>
          <p><a class="font-semibold text-brand-sunflower" href="/banquets/">Schedule an Event</a></p>
        </div>
      </div>

    </div>

    <div class="divider"></div>

    <h2 class="text-center">Tradition &amp; Passion</h2>
    <p class="lg:max-w-6xl mx-auto text-center">It all started in 2013 when a group of friends in the restaurant industry decided to open a neighborhood pub and grill by purchasing the historic Rostel Building in downtown Central Point, Oregon. After much success, the group has since opened additional locations in Medford and Bend. The Point’s mission is to be the world’s best neighborhood pub and grill experience. Being the best means providing outstanding quality, service, cleanliness, and value, so that we make every customer smile and say “I’ll be back!”.</p>

  </div>
</section>

<?php include_once("blocks/locations-dark.php"); ?>

<section class="sc block-splash">
  <figure class="block-splash-image bg-fixed" style="background-image:url('/wp-content/uploads/IMG_3641-Edit.jpg');"></figure>
</section>

<?php get_footer(); ?>