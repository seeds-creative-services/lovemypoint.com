<?php /* Template Name: About Page */

get_header(); ?>

<section class="sc sc-light text-center">
  <div class="container">

    <h1>Contact Us</h1>

    <div class="flex flex-col mt-6">

      <div class="w-full lg:w-2/5 mx-auto">
        <form>

          <div class="flex flex-wrap justify-center">
            <div class="w-full text-left">
              <div class="flex flex-col">
                <label class="pb-2 border-gray-400" for="name">Your Name</label>
                <input class="h-12 px-4 rounded border-brand-anvil border-solid border-2" id="name" name="name" type="text" required>
              </div>
            </div>
          </div>

          <div class="mx-auto flex flex-wrap justify-center mt-6 lg:mt-6">
            <div class="w-full text-left">
              <div class="flex flex-col">
                <label class="pb-2 border-gray-400" for="email">Your Email Address</label>
                <input class="h-12 px-4 rounded border-brand-anvil border-solid border-2" id="name" name="email" type="email" required>
              </div>
            </div>
          </div>

          <div class="mx-auto flex flex-wrap justify-center mt-6 lg:mt-6">
            <div class="w-full text-left">
              <div class="flex flex-col">
                <label class="pb-2 border-gray-400" for="phone">Your Phone Number</label>
                <input class="h-12 px-4 rounded border-brand-anvil border-solid border-2" id="name" name="phone" type="tel" required>
              </div>
            </div>
          </div>

          <div class="mx-auto flex flex-wrap justify-center mt-6 lg:mt-6">
            <div class="w-full text-left">
              <div class="flex flex-col">
                <label class="pb-2 border-gray-400" for="message">Your Message</label>
                <textarea class="h-12 p-4 h-32 rounded border-brand-anvil border-solid border-2" id="message" name="message"></textarea>
              </div>
            </div>

            <button class="btn btn-primary float-left text-white mt-8" type="submit">Send Message</button>

          </div>

        </form>
      </div>

    </div>

    <div class="w-full lg:w-3/5 mx-auto mt-24">
      <h4>Employment Opportunities</h4>
      <p>Would you like to be a part of a great team and well established business in the Rogue Valley?<br>
      Please <a class="text-brand-sunflower" href="/wp-content/uploads/employment-application.pdf" target="_blank">click here</a> to download our Employment Application and return it along with a resume to one of our locations.</p>
    </div>

  </div>
</section>

<?php include_once("blocks/locations-dark.php"); ?>

<?php get_footer(); ?>