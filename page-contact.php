<?php /* Template Name: About Page */

get_header(); ?>

<section class="sc sc-light text-center">
  <div class="container">

    <h1>Contact Us</h1>

    <div class="flex flex-col lg:flex-row mt-6 justify-center">

      <div class="w-full lg:w-2/5">
        <form id="contact-form" class="disabled" method="POST" action="<?php echo get_stylesheet_directory_uri(); ?>/send-email.php" onsubmit="SEEDS.SubmitForm(event);" disabled>

          <input type="hidden" name="subject" value="New contact form submission from The Point">
          <input type="hidden" name="message" value="The contact form was submitted on The Point. Review the message below.">

          <div class="flex flex-wrap justify-center">
            <div class="w-full text-left">
              <div class="flex flex-col">
                <label class="pb-2 border-gray-400" for="input-name">Your Name</label>
                <input class="h-12 px-4 rounded border-brand-anvil border-solid border-2" id="input-name" name="form[name]" type="text" required>
              </div>
            </div>
          </div>

          <div class="mx-auto flex flex-wrap justify-center mt-6 lg:mt-6">
            <div class="w-full text-left">
              <div class="flex flex-col">
                <label class="pb-2 border-gray-400" for="input-email">Your Email Address</label>
                <input class="h-12 px-4 rounded border-brand-anvil border-solid border-2" id="input-email" name="form[email]" type="email" required>
              </div>
            </div>
          </div>

          <div class="mx-auto flex flex-wrap justify-center mt-6 lg:mt-6">
            <div class="w-full text-left">
              <div class="flex flex-col">
                <label class="pb-2 border-gray-400" for="input-phone">Your Phone Number</label>
                <input class="h-12 px-4 rounded border-brand-anvil border-solid border-2" id="input-phone" name="form[phone]" type="tel" required>
              </div>
            </div>
          </div>

          <div class="mx-auto flex flex-wrap mt-6 lg:mt-6 justify-center lg:justify-start">
            <div class="w-full text-left">
              <div class="flex flex-col">
                <label class="pb-2 border-gray-400" for="input-message">Your Message</label>
                <textarea class="h-12 p-4 h-32 rounded border-brand-anvil border-solid border-2" id="input-message" name="form[message]"></textarea>
              </div>
            </div>
          </div>

          <div class="flex flex-wrap mt-8">
            <div class="order-2 w-full md:order-1 md:w-1/4">
              <button class="btn btn-primary w-full text-white" type="submit">Submit</button>
            </div>
            <div class="order-1 w-full mb-4 md:order-2 md:w-3/4 md:mb-0">
              <small class="info">We'll get back to you as soon as possible. Please be sure to check your "Junk" folder for our response.</small>
            </div>
          </div>

        </form>
      </div>

      <div class="w-full lg:w-2/5 mt-24 lg:mt-0 text-center lg:text-left pl-0 lg:pl-24">
        <h4>Employment Opportunities</h4>
        <p>Would you like to be a part of a great team and well established business in the Rogue Valley? Please fill out our <a class="text-brand-sunflower" href="/wp-content/uploads/employment-application.pdf" target="_blank">Employment Application</a> and return it along with a resume to one of our locations.</p>

        <h4 class="mt-8">Find Us Online</h4>
        <div class="flex flex-row flex-wrap -mx-3 justify-center lg:justify-start">
          <a class="px-3" href="https://www.facebook.com/pointpubandgrill" target="_blank" rel="nofollow">
            <i class="text-3xl fab fa-facebook"></i>
          </a>
          <a class="px-3" href="https://twitter.com/ThePoint311" target="_blank" rel="nofollow">
            <i class="text-3xl fab fa-twitter"></i>
          </a>
          <a class="px-3" href="https://www.instagram.com/thepoint311/" target="_blank" rel="nofollow">
            <i class="text-3xl fab fa-instagram"></i>
          </a>
          <a class="px-3" href="https://www.yelp.com/biz/the-point-pub-and-grill-central-point" target="_blank" rel="nofollow">
            <i class="text-3xl fab fa-yelp"></i>
          </a>
          <a class="px-3" href="http://www.tripadvisor.in/Restaurant_Review-g51800-d5444631-Reviews-The_Point_Pub_and_Grill-Central_Point_Oregon.htm" target="_blank" rel="nofollow">
            <i class="text-3xl fab fa-tripadvisor"></i>
          </a>
        </div>

      </div>

    </div>

  </div>
</section>

<?php include_once("blocks/locations-dark.php"); ?>

<?php get_footer(); ?>