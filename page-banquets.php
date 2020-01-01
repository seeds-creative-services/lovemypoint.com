<?php /* Template Name: Banquets Page */

get_header("light"); ?>

<section class="sc block-splash">
  <div class="block-splash-content">
    <div class="container">
      <h1 class="lg:max-w-5xl mx-auto pb-4">Banquets</h1>
      <h3 class="lg:max-w-4xl mx-auto">Meet new friends, enjoy the company of family, or host your next best party!</h3>
    </div>
  </div>
  <figure class="block-splash-image" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');"></figure>
</section>

<section class="sc sc-light">
  <div class="container">

    <h2 class="text-center">Host Your Event with Us</h2>
    <p class="lg:max-w-6xl mx-auto text-center">The Point Pub and Grill is a classic family oriented Pub and Grill featuring upscale traditional cuisine with personalized flair. We offer full service dining, an extensive beer, wine, and cocktail selection, and interactive banquet facilities. Visit us to meet new friends, enjoy the company of family, or host your next best party!</p>

    <div class="flex flex-wrap -mx-2 relative mt-6 lg:mt-12">
      
      <div class="mt-6 lg:mt-12 lg:w-1/2 text-center">
        <div class="lg:px-12 py-8 flex flex-col items-center">
          <h5 class="pb-4">The Point Interactive Event Room</h5>
          <p>The room features pool tables, dart boards, shuffle board, TV’s, table games, lounge areas, and more. This relaxing atmosphere in our 130 year old brick building allows your guests to relax, mingle, interact and socialize. This room can accommodate up to 60 guests and up to 90 when combined with The Point Meeting Room. Pricing The Point Pub and Grill Interactive Event Room $250 (subject to change depending on season and availability).</p>
        </div>
      </div>

      <div class="mt-6 lg:mt-12 lg:w-1/2 text-center">
        <div class="lg:px-12 py-8 flex flex-col items-center">
          <h5 class="pb-4">The Point Meeting Room</h5>
          <p>While we love our relaxed pub atmosphere we know now and then we all need to get down and work. The Point Meeting Room is designed to accommodate up to 30 guests and offer media hook ups and displays in our historic building with our amazing food and service. Pricing The Point Meeting Room $150 (subject to change depending on season and availability).</p>
        </div>
      </div>

    </div>

  </div>
</section>

<section class="sc sc-dark">
  <div class="container">

    <h2 class="text-center">Planning Your Event</h2>
    <h4 class="text-center -mt-6">It's as easy as 1-2-3!</h4>

    <div class="flex flex-col items-center mt-12 text-center">
      <div>
        <h1 class="pb-5">1.</h1>
      </div>
      <div class="w-full lg:w-1/2">
        <p>Review our Banquet Menu, F.A.Q. and Order Guide. <a class="text-brand-sunflower" href="#make-a-reservation">Fill out the form below</a> and submit. Within 48 hours our coordinator will contact you personally to confirm, answer questions, and offer any help needed. They will then send an electronic event agreement confirming the details of your event.</p>
      </div>
    </div>

    <div class="flex flex-col items-center mt-12 text-center">
      <div>
        <h1 class="pb-5">2.</h1>
      </div>
      <div class="w-full lg:w-1/2">
        <p>Return the electronic event agreement and your officially scheduled!<br>(Please sign and return the agreement within the expiration date).</p>
      </div>
    </div>

    <div class="flex flex-col items-center mt-12 mb-12 lg:mb-8 text-center">
      <div>
        <h1 class="pb-5">3.</h1>
      </div>
      <div class="w-full lg:w-1/2">
        <h4>Show up and enjoy!</h4>
      </div>
    </div>

  </div>
</section>

<section class="sc sc-light">
  <div class="container">

    <div class="w-full lg:w-3/5 mx-auto bg-brand-mahogany -mt-40 text-white text-center px-6 lg:px-20 py-12 lg:py-12 relative z-20">
      <h6 class="pb-0">Now Accepting Reservations! Fill out the form below and submit. Within 48 hours our coordinator will contact you personally to confirm your reservation, answer questions, and offer any help needed.</h6>
    </div>

    <div class="w-full lg:w-2/5 mx-auto pt-16 lg:pt-24" id="make-a-reservation">

      <h2 class="text-center">Make a Reservation</h2>

      <form id="events-form" class="mb-8 disabled" method="POST" action="<?php echo get_stylesheet_directory_uri(); ?>/send-email.php" onsubmit="SEEDS.SubmitForm(event);" disabled>

        <input type="hidden" name="subject" value="New banquet form submission from The Point">
        <input type="hidden" name="message" value="The banquet form was submitted on The Point. Review the message below.">

        <div class="flex flex-wrap justify-center">
          <div class="w-full text-left">
            <div class="flex flex-col">
              <label class="pb-2 border-gray-400" for="name">Your Name</label>
              <input class="h-12 px-4 rounded border-brand-anvil border-solid border-2" id="name" name="form[name]" type="text" required>
            </div>
          </div>
        </div>

        <div class="mx-auto flex flex-wrap justify-center mt-6 lg:mt-6">
          <div class="w-full text-left">
            <div class="flex flex-col">
              <label class="pb-2 border-gray-400" for="email">Your Email Address</label>
              <input class="h-12 px-4 rounded border-brand-anvil border-solid border-2" id="email" name="form[email]" type="email" required>
            </div>
          </div>
        </div>

        <div class="mx-auto flex flex-wrap justify-center mt-6 lg:mt-6">
          <div class="w-full text-left">
            <div class="flex flex-col">
              <label class="pb-2 border-gray-400" for="phone">Your Phone Number</label>
              <input class="h-12 px-4 rounded border-brand-anvil border-solid border-2" id="phone" name="form[phone]" type="tel" required>
            </div>
          </div>
        </div>

        <div class="mx-auto flex flex-wrap justify-center mt-6 lg:mt-6">
          <div class="w-full text-left">
            <div class="flex flex-col">
              <label class="pb-2 border-gray-400" for="event">Type of Event</label>
              <select class="h-12 px-4 rounded bg-whitewhite border-brand-anvil border-solid border-2" id="event" name="form[event]" required>
                <option value="Birthday">Birthday</option>
                <option value="Baby Shower">Baby Shower</option>
                <option value="Anniversary">Anniversary</option>
                <option value="Rehearsal Dinner">Rehearsal Dinner</option>
                <option value="Retirement Party">Retirement Party</option>
                <option value="Company Party">Company Party</option>
                <option value="Quinceañera">Quinceañera</option>
              </select>
            </div>
          </div>
        </div>

        <div class="mx-auto flex flex-wrap justify-center mt-6 lg:mt-6">
          <div class="w-full text-left">
            <div class="flex flex-col">
              <label class="pb-2 border-gray-400" for="date">Event Date</label>
              <input class="h-12 px-4 rounded border-brand-anvil border-solid border-2" id="name" name="form[date]" type="date" required>
            </div>
          </div>
        </div>

        <div class="mx-auto flex flex-wrap justify-center mt-6 lg:mt-6">
          <div class="w-full text-left">
            <div class="flex flex-col">
              <label class="pb-2 border-gray-400" for="message">Your Message</label>
              <textarea class="h-12 p-4 h-32 rounded border-brand-anvil border-solid border-2" id="message" name="form[message]"></textarea>
            </div>
          </div>
          <button class="btn btn-primary float-left text-white mt-8" type="submit">Make Reservation</button>
        </div>

      </form>
    </div>

  </div>
</section>

<?php include_once("blocks/locations-dark.php"); ?>

<?php get_footer(); ?>