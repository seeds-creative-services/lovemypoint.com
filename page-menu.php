<?php /* Template Name: Menu Page */

$evergreen = array(
  "central-point" => "https://www.taphunter.com/widgets/location/v3/5025877471264768.json",
  "medford" => "https://www.taphunter.com/widgets/location/v3/5026409107685376.json",
  "bend" => "https://www.taphunter.com/widgets/location/v3/4632843144265728.json"
);

$menus = array();

foreach($evergreen as $location => $url) {

  $curl_session = curl_init($url);
  curl_setopt($curl_session, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl_session, CURLOPT_CONNECTTIMEOUT, 4);
  curl_setopt($curl_session, CURLOPT_TIMEOUT, 10);
  $menus[$location] = curl_exec($curl_session);
  curl_close($curl_session);

}

get_header('light'); ?>

<section class="sc block-splash">
  <div class="block-splash-content">
    <div class="container">
      <h1 class="lg:max-w-5xl mx-auto pb-4">Our Menu</h1>
      <h3 class="lg:max-w-4xl mx-auto">Meet new friends, enjoy the company of family, or host your next best party!</h3>
      <a class="btn btn-lg btn-primary hidden lg:inline-flex" href="https://www.toasttab.com/locations/f25e4c72-013e-4056-9824-9f7ab9f53a24" target="_blank">Order Online</a>
    </div>
  </div>
  <figure class="block-splash-image" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');"></figure>
</section>

<section class="sc sc-light text-center">

  <ul id="menu-quicklinks" class="flex flex-row -mx-6 align-middle justify-center flex-wrap z-10 px-2 lg:px-0">
    <li>
      <select class="h-12 rounded border-brand-anvil border-solid border-2" id="select-location" onchange="SEEDS.SetLocation(this.value)">
        <option value="" selected disabled>Select your location:</option>
        <option value="central-point">Central Point, OR</option>
        <option value="medford">Medford, OR</option>
        <option value="bend">Bend, OR</option>
      </select>
    </li>
    <li data-locations='["central-point", "medford", "bend"]'><button class="inline-flex py-3 px-4 lg:px-6" onclick="SEEDS.ScrollToElement('#starters');"><h6>Starters</h6></button></li>
    <li data-locations='["central-point", "medford", "bend"]'><button class="inline-flex py-3 px-4 lg:px-6" onclick="SEEDS.ScrollToElement('#sandwiches');"><h6>Sandwiches</h6></button></li>
    <li data-locations='["central-point", "medford", "bend"]'><button class="inline-flex py-3 px-4 lg:px-6" onclick="SEEDS.ScrollToElement('#burgers');"><h6>Burgers</h6></button></li>
    <li data-locations='["central-point", "medford", "bend"]'><button class="inline-flex py-3 px-4 lg:px-6" onclick="SEEDS.ScrollToElement('#favorites');"><h6>Favorites</h6></button></li>
    <li data-locations='["central-point", "medford", "bend"]'><button class="inline-flex py-3 px-4 lg:px-6" onclick="SEEDS.ScrollToElement('#sides');"><h6>Sides</h6></button></li>
    <li data-locations='["central-point", "medford", "bend"]'><button class="inline-flex py-3 px-4 lg:px-6" onclick="SEEDS.ScrollToElement('#salads');"><h6>Salads</h6></button></li>
    <li data-locations='["central-point", "medford"]'><button class="inline-flex py-3 px-4 lg:px-6" onclick="SEEDS.ScrollToElement('#pizza');"><h6>Pizza</h6></button></li>
    <li data-locations='["bend"]'><button class="inline-flex py-3 px-4 lg:px-6" onclick="SEEDS.ScrollToElement('#vegan');"><h6>Vegan</h6></button></li>
    <li data-locations='["central-point", "medford", "bend"]'><button class="inline-flex py-3 px-4 lg:px-6" onclick="SEEDS.ScrollToElement('#desserts');"><h6>Desserts</h6></button></li>
    <li data-locations='["central-point", "medford", "bend"]'><button class="inline-flex py-3 px-4 lg:px-6" onclick="SEEDS.ScrollToElement('#cocktails');"><h6>Cocktails</h6></button></li>
    <li data-locations='["central-point", "medford", "bend"]'><button class="inline-flex py-3 px-4 lg:px-6" onclick="SEEDS.ScrollToElement('#tap');"><h6>Tap List</h6></button></li>
  </ul>

  <div class="container">

    <div class="flex flex-col lg:flex-row lg:-mx-12">

      <div class="w-full lg:w-1/2 inline-flex flex-col lg:px-12">

        <div id="starters" data-locations='["central-point", "medford", "bend"]'>

          <h2>Starters</h2>

          <div class="mt-2 border-brand-mahogany border-8 border-double p-6">
            <h4 class="pb-1">"The Point" Irish Nachos<strong class="pl-4 font-semibold text-lg">$11.00</strong></h4>
            <p>House fries topped with our cheese sauce, pico de gallo, meted cheddar cheese and wrapped in bacon.</p>
          </div>

          <div class="mt-8">
            <h4 class="pb-1">
              <sup class="text-sm inline-flex justify-center items-center pr-2 text-center font-medium">GF</sup>
              "The Point" Poppers<strong class="pl-4 font-semibold text-lg">$11.00</strong>
            </h4>
            <p>Baked jalapeño peppers stuffed with cream cheese, melted cheddar cheese and wrapped in bacon.</p>
          </div>

          <div class="mt-8">
            <h4 class="pb-1">Crispy Calamari<strong class="pl-4 font-semibold text-lg">$12.50</strong></h4>
            <p>Deep fried to perfection and served with zesty rémoulade.</p>
          </div>

          <div class="mt-8">
            <h4 class="pb-1">Chicken Wings<strong class="pl-4 font-semibold text-lg">$12.50</strong></h4>
            <p>Your choice of jalapeño, bacon barbecue, or teriyaki sauce served with celery and carrots with ranch or blue cheese dressing.</p>
          </div>

          <div class="mt-8">
            <h4 class="pb-1">Chicken Quesadilla<strong class="pl-4 font-semibold text-lg">$11.00</strong></h4>
            <p>Chicken breast, pepper jack cheese, and avocado in a flour tortilla accompanied with pico de gallo and tomatillo salsa.<br>
            <small><em>Add bacon ... <strong class="font-semibold">$1.00</strong></em><br>
            <em class="text-brand-mahogany">Make it VEGAN ... <strong class="font-semibold">$4.00</strong></em></small></p>
          </div>

          <div class="mt-8">
            <h4 class="pb-1">Onion Rings<strong class="pl-4 font-semibold text-lg">$11.00</strong></h4>
            <p>Jumbo onion rings fried to a golden brown and served with Sriracha ranch.</p>
          </div>

          <div class="mt-16 pt-12 border-t-4 border-double border-brand-anvil"></div>

        </div>

        <div id="burgers" data-locations='["central-point", "medford", "bend"]'>

          <h2>Burgers</h2>
          <p>All burgers are served with your choice of fries or house salad.<br>
            <small>
              <em>Substitute Onion Rings for 3 or Sweet Potato Fries ... <strong class="font-semibold">$1.50</strong></em><br>
              <em>Substitute Gluten Free Bun ... <strong class="font-semibold">$1.00</strong></em><br>
              <em class="text-brand-mahogany">Substitute Vegan Burger ... <strong class="font-semibold">$3.00 VEGAN</strong></em><br>
              <em class="text-brand-mahogany">Substitute Vegan Chicken ... <strong class="font-semibold">$3.00 VEGAN / GF</strong></em><br>
              <em class="text-brand-mahogany">Substitute Vegan Cheddar Cheese ... <strong class="font-semibold">$1.00 VEGAN / GF</strong></em>
            </small>
          </p>

          <div class="mt-12">
            <h4 class="pb-1">* The Point Burger<strong class="pl-4 font-semibold text-lg">$14.00</strong></h4>
            <p>Seasoned ground beef patty topped with jalapeño cream cheese, bacon, lettuce, tomato, pickles, onion and avocado.</p>
          </div>

          <div class="mt-8">
            <h4 class="pb-1">* The Classic Cheeseburger<strong class="pl-4 font-semibold text-lg">$11.50</strong></h4>
            <p>Seasoned ground beef patty served with lettuce, tomato, onions, pickles and cheddar cheese.<br>
              <small>
                <em>Add bacon ... <strong class="font-semibold">$2.00</strong></em>
              </small>
            </p>
          </div>

          <div class="mt-12">
            <h4 class="pb-1">* The Blue Burger<strong class="pl-4 font-semibold text-lg">$13.00</strong></h4>
            <p>Seasoned ground beef patty topped with blue cheese crumbles, caramelized onions and jalapeño aioli with lettuce, tomato and pickle.</p>
          </div>

          <div class="mt-8">
            <h4 class="pb-1">* The Western Burger<strong class="pl-4 font-semibold text-lg">$14.50</strong></h4>
            <p>Seasoned ground beef patty piled high with, bacon, roasted Ortega chilies, pepper jack cheese, lettuce, tomato, onion ring, and house made bacon BBQ sauce.<br>
              <small>
                <em>Add avocado ... <strong class="font-semibold">$1.00</strong></em>
              </small>
            </p>
          </div>

          <div class="mt-8">
            <h4 class="pb-1 text-brand-mahogany">
              <sup class="text-sm inline-flex justify-center items-center pr-2 text-center font-medium">VEGAN</sup>
              The Best Ever Non-Beef Burger<strong class="pl-4 font-semibold text-lg">$17.00</strong>
            </h4>
            <p>Vegan beef burger patty topped with sundried tomato, diced jalapeno, vegan cream cheese, pickle, onion, lettuce, tomato, and avocado.<br>
              <small class="text-brand-mahogany">
                <em>Ask your server about our Vegan Beef Burger</em>
              </small>
            </p>
          </div>

          <div class="mt-16 pt-12 border-t-4 border-double border-brand-anvil"></div>

        </div>

        <div id="sides" data-locations='["central-point", "medford", "bend"]'>

          <h2>Sides</h2>

          <div class="mt-2">
            <h4 class="pb-1">
              <sup class="text-sm inline-flex justify-center items-center pr-2 text-center font-medium">GF</sup>
              Side Salad<strong class="pl-4 font-semibold text-lg">$5.00</strong>
            </h4>
          </div>

          <div class="mt-8">
            <h4 class="pb-1">
              <sup class="text-sm inline-flex justify-center items-center pr-2 text-center font-medium">GF</sup>
              <sup class="text-sm text-brand-mahogany inline-flex justify-center items-center pr-2 text-center font-medium">VEGAN</sup>
              Sweet Potato Fries<strong class="pl-4 font-semibold text-lg">$6.00</strong>
            </h4>
          </div>

          <div class="mt-8">
            <h4 class="pb-1">
              <sup class="text-sm text-brand-mahogany inline-flex justify-center items-center pr-2 text-center font-medium">VEGAN</sup>
              French Fries<strong class="pl-4 font-semibold text-lg">$5.00</strong>
            </h4>
          </div>

          <div class="mt-8">
            <h4 class="pb-1">"The Point" Mac & Cheese<strong class="pl-4 font-semibold text-lg">$7.00</strong></h4>
          </div>

          <div class="mt-8">
            <h4 class="pb-1">Garlic Bread (3)<strong class="pl-4 font-semibold text-lg">$3.00</strong></h4>
          </div>

        </div>

      </div>

      <div class="w-full lg:w-1/2 inline-flex flex-col lg:px-12">

        <div class="block lg:hidden mt-16 pt-12 border-t-4 border-double border-brand-anvil"></div>

        <div id="sandwiches" data-locations='["central-point", "medford", "bend"]'>

          <h2>Sandwiches</h2>
          <p>All sandwiches are served with your choice of fries or house salad.<br>
            <small>
              <em>Substitute Onion Rings for 3 or Sweet Potato Fries ... <strong class="font-semibold">$1.50</strong></em><br>
              <em class="text-brand-mahogany">Substitute Vegan Chicken ... <strong class="font-semibold">$3.00 VEGAN</strong></em><br>
              <em class="text-brand-mahogany">Substitute Vegan Cheddar or Mozzarella Cheese ... <strong class="font-semibold">$1.00 VEGAN / GF</strong></em>
            </small>
          </p>

          <div class="mt-12 border-brand-mahogany border-8 border-double p-6">
            <h4 class="pb-1">The Mac Daddy Patty Melt<strong class="pl-4 font-semibold text-lg">$14.00</strong></h4>
            <p>Seasoned beef patty with caramelized onions, bacon, house made BBQ sauce, pepper jack cheese, and our famous macaroni and cheese on grilled sourdough.</p>
          </div>

          <div class="mt-8">
            <h4 class="pb-1">Philly Cheesesteak<strong class="pl-4 font-semibold text-lg">$13.50</strong></h4>
            <p>Sliced ribeye, sautéed onions, peppers and mushrooms with melted provolone cheese and chipotle aioli served on a toasted hoagie roll.</p>
          </div>

          <div class="mt-8">
            <h4 class="pb-1">French Dip<strong class="pl-4 font-semibold text-lg">$12.00</strong></h4>
            <p>Sliced ribeye with melted Swiss cheese on a toasted hoagie roll and served with fresh au jus.<br>
            <small><em>Horseradish available on request</em></small></p>
          </div>

          <div class="mt-8">
            <h4 class="pb-1">Caprese Ciabatta<strong class="pl-4 font-semibold text-lg">$12.00</strong></h4>
            <p>Melted mozzarella cheese, basil, and tomato, dressed with pesto and balsamic reduction on ciabatta bread.<br>
            <small><em>Add chicken ... <strong class="font-semibold">$4.00</strong></em></small></p>
          </div>

          <div class="mt-8">
            <h4 class="pb-1">Turkey Club Ciabatta<strong class="pl-4 font-semibold text-lg">$14.00</strong></h4>
            <p>Sliced turkey, cheddar cheese, bacon, avocado, caramelized onion, lettuce, and tomato with house made chipotle aioli on ciabatta bread.<br>
            <small><em>Substitute Chicken Breast on Request</em></small></p>
          </div>

          <div class="mt-8">
            <h4 class="pb-1">Crispy Chicken Wrap<strong class="pl-4 font-semibold text-lg">$13.00</strong></h4>
            <p>Crispy chicken with romaine lettuce, tomato, and cheddar cheese with bacon aioli wrapped in a flour tortilla.</p>
          </div>

          <div class="mt-8">
            <h4 class="pb-1">"The Point" Patty Melt<strong class="pl-4 font-semibold text-lg">$13.00</strong></h4>
            <p>Seasoned beef patty grilled to order, smothered with caramelized onions and 1000 island dressing with melted Swiss and provolone cheese on grilled marble rye.</p>
          </div>

          <div class="mt-8">
            <h4 class="pb-1">Reuben Sandwich<strong class="pl-4 font-semibold text-lg">$13.00</strong></h4>
            <p>Sliced corned beef with melted Swiss cheese, 1000 island, and sauerkraut on grilled marble rye.</p>
          </div>

          <div class="mt-16 pt-12 border-t-4 border-double border-brand-anvil"></div>

        </div>

        <div id="favorites" data-locations='["central-point", "medford", "bend"]'>

          <h2>Point Favorites</h2>

          <div class="mt-2 border-brand-mahogany border-8 border-double p-6">
            <h4 class="pb-1">Beer Battered Fish<strong class="pl-4 font-semibold text-lg">$13.00</strong></h4>
            <p>Cod, fried in house made beer batter with zesty rémoulade. Served with your choice of fries and either green salad or fresh coleslaw.<br>
              <small>
                <em>Add a 3<sup>rd</sup> piece of fish ... <strong class="font-semibold">$3.00</strong></em><br>
                <em>Substitute Onion Rings for 3 or Sweet Potato Fries ... <strong class="font-semibold">$1.50</strong></em><br>
                <em>Substitute Gluten Free Batter ... <strong class="font-semibold">$1.00</strong></em>
              </small>
            </p>
          </div>

          <div class="mt-8" data-locations='["central-point", "medford"]'>
            <h4 class="pb-1">Mediterranean Pesto Alfredo Pasta<strong class="pl-4 font-semibold text-lg">$13.25</strong></h4>
            <p>Creamy pesto alfredo with sautéed mushrooms, spinach, tomato, and kalamata olives. Served with garlic bread.<br>
              <small>
                <em>Add grilled chicken ... <strong class="font-semibold">$4.00</strong></em><br>
                <em>Add Sockeye salmon ... <strong class="font-semibold">$6.00</strong></em>
              </small>
            </p>
          </div>

          <div class="mt-8" data-locations='["bend"]'>
            <h4 class="pb-1">The Warf Pasta<strong class="pl-4 font-semibold text-lg">$17.00</strong></h4>
            <p>Penne pasta with our house made alfredo bur blanc, blackened salmon or sesame peppered ahi, capers, sautéed mushrooms, fresh tomatoes, and basil. Served with garlic bread.</p>
          </div>

          <div class="mt-8">
            <h4 class="pb-1">Chicken Bacon Mac & Cheese<strong class="pl-4 font-semibold text-lg">$14.50</strong></h4>
            <p>Our famous macaroni and cheese tossed with crispy bacon, grilled chicken, and seasonal vegetables.</p>
          </div>

          <div class="mt-8">
            <h4 class="pb-1">"The Point" B.L.T.<strong class="pl-4 font-semibold text-lg">$12.00</strong></h4>
            <p>Fresh lettuce and tomato with crisp bacon and mayonnaise, served on grilled sourdough with your choice of fries or salad.<br>
              <small>
                <em>Substitute Onion Rings for 3 or Sweet Potato Fries ... <strong class="font-semibold">$1.50</strong></em><br>
                <em>Add avocado ... <strong class="font-semibold">$1.00</strong></em>
              </small>
            </p>
          </div>

          <div class="mt-8">
            <h4 class="pb-1">"The Point" Chimichanga<strong class="pl-4 font-semibold text-lg">$16.00</strong></h4>
            <p>Your choice of chicken breast or ribeye steak, sautéed onions, peppers, pepper jack, and black beans. Topped with pico de gallo, tomatillo salsa, and served with fresh house made tortilla chips.<br>
              <small>
                <em class="text-brand-mahogany">Make it VEGAN ... <strong class="font-semibold">$4.00</strong></em>
              </small>
            </p>
          </div>

        </div>

      </div>

    </div>

    <div class="mt-16 pt-12 border-t-4 border-double border-brand-anvil"></div>

    <div id="salads" data-locations='["central-point", "medford", "bend"]'>

      <div class="flex flex-col lg:flex-row lg:-mx-12">

        <div class="w-full inline-flex flex-col lg:px-12">

          <h2>Salads</h2>

          <div class="flex flex-col lg:flex-row lg:-mx-12 mt-2">

            <div class="w-full lg:w-1/3 inline-flex flex-col lg:px-12">
              <div>
                <h4 class="pb-1">
                  <sup class="text-sm inline-flex justify-center items-center pr-2 text-center font-medium">GF</sup>
                  Baby Mixed Green Salad<br><strong class="font-semibold text-lg">Full $11.00 / Half $7.00</strong>
                </h4>
                <p>Mixed greens, dried cranberries, tomatoes, carrots, sliced red onion, and blue cheese crumbles with a balsamic vinaigrette dressing.<br>
                  <small>
                    <em>Add grilled chicken ... <strong class="font-semibold">$4.00</strong></em><br>
                    <em>Add grilled Sockeye Salmon ... <strong class="font-semibold">$6.00</strong></em><br>
                    <em>Add Ahi Tuna ... <strong class="font-semibold">$6.00</strong></em>
                  </small>
                </p>
              </div>
            </div>

            <div class="w-full lg:w-1/3 inline-flex flex-col lg:px-12" data-locations='["central-point", "medford"]'>
              <div class="mt-8 lg:mt-0">
                <h4 class="pb-1">
                  <sup class="text-sm inline-flex justify-center items-center pr-2 text-center font-medium">GF</sup>
                  Mediterranean Salad<strong class="pl-4 font-semibold text-lg">$13.00</strong>
                </h4>
                <p>Spinach, kalamata olives, artichokes, sun- dried tomato, red onion, and feta cheese. Topped with house made balsamic vinaigrette.<br>
                  <small>
                    <em>Add grilled chicken ... <strong class="font-semibold">$4.00</strong></em><br>
                    <em>Add grilled Sockeye salnib ... <strong class="font-semibold">$6.00</strong></em>
                  </small>
                </p>
              </div>
            </div>

            <div class="w-full lg:w-1/3 inline-flex flex-col lg:px-12" data-locations='["bend"]'>
              <div class="mt-8 lg:mt-0">
                <h4 class="pb-1">
                  Buffalo Bleu Salad<strong class="pl-4 font-semibold text-lg">$15.00</strong>
                </h4>
                <p>Romaine lettuce with carrots, tomatoes, red onion, and bleu cheese crumbles. Topped with your choice of crispy or grilled buffalo style chicken. Served with bleu cheese dressing.</p>
              </div>
            </div>

            <div class="w-full lg:w-1/3 inline-flex flex-col lg:px-12">
              <div class="mt-8 lg:mt-0">
                <h4 class="pb-1">
                  Chicken Bacon Ranch Salad<strong class="pl-4 font-semibold text-lg">$14.00</strong>
                </h4>
                <p>Romaine lettuce topped with crispy chicken, chopped bacon, shredded cheddar, black olives, and tomato. Served with ranch dressing.</p>
              </div>
            </div>

          </div>

          <div class="flex flex-col lg:flex-row lg:-mx-12 mt-8">

            <div class="w-full lg:w-1/3 inline-flex flex-col lg:px-12">
              <div>
                <h4 class="pb-1">
                  Caesar Salad<br><strong class="font-semibold text-lg">Full $11.00 / Half $6.50</strong>
                </h4>
                <p>Romaine lettuce, shredded parmesan cheese and herb croutons with classic Caesar dressing.<br>
                  <small>
                    <em>Add grilled chicken ... <strong class="font-semibold">$4.00</strong></em><br>
                    <em>Add grilled Sockeye Salmon ... <strong class="font-semibold">$6.00</strong></em><br>
                    <em>Add Ahi Tuna ... <strong class="font-semibold">$6.00</strong></em>
                  </small>
                </p>
              </div>
            </div>

            <div class="w-full lg:w-1/3 inline-flex flex-col lg:px-12 justify-center">
              <div class="border-brand-sunflower border-4 border-double p-6 mt-8 lg:mt-0">
                <h4 class="pb-1">Make any full salad a wrap!</h4>
                <p>Just add $1.00 and choose your side</p>
              </div>
            </div>

            <div class="w-full lg:w-1/3 inline-flex flex-col lg:px-12">
              <div class="mt-8 lg:mt-0">
                <h4 class="pb-1">
                  <sup class="text-sm inline-flex justify-center items-center pr-2 text-center font-medium">GF</sup>
                  Southwest Chicken Salad<strong class="pl-4 font-semibold text-lg">$14.00</strong>
                </h4>
                <p>Romaine lettuce, grilled chicken breast, tomatoes, black beans, corn, shredded pepper jack cheese, and corn tortilla strips, served with parmesan–cilantro dressing.</p>
              </div>
            </div>

          </div>

        </div>

      </div>

      <div class="mt-16 pt-12 border-t-4 border-double border-brand-anvil"></div>

    </div>

    <div id="pizza" data-locations='["central-point", "medford"]'>

      <div class="flex flex-col lg:flex-row lg:-mx-12">

        <div class="w-full inline-flex flex-col lg:px-12">

          <h2>"The Point" Pizza</h2>

          <div class="w-full lg:w-auto mx-auto inline-flex flex-col justify-center">
            <div class="border-brand-mahogany border-8 border-double p-6 lg:px-12 mt-2 mb-12">
              <h4 class="pb-1">Chicken Bacon Mac &amp; Cheese Pizza</h4>
              <p>Just like it sounds!</p>
              <h4 class="pb-0">
                <span class="w-auto text-center pt-2">
                  <span class="pr-4 font-semibold text-lg"><span>7" </span>$14.00</span>
                  <span class="pr-4 font-semibold text-lg"><span>10" </span>$18.00</span>
                  <span class="pr-4 font-semibold text-lg"><span>16" </span>$29.00</span>
                </span>
              </h4>
            </div>
          </div>

          <div class="hidden lg:flex flex-row -mx-12 mt-4">

            <div class="w-1/2 flex flex-row justify-end px-12">
              <div class="w-1/3 inline-flex text-center">
                <h4 class="w-1/3 font-semibold text-lg">7"<br>Personal</h4>
                <h4 class="w-1/3 font-semibold text-lg">10"<br>Small</h4>
                <h4 class="w-1/3 font-semibold text-lg">16"<br>Large</h4>
              </div>
            </div>

            <div class="w-1/2 flex flex-row justify-end px-12">
              <div class="w-1/3 inline-flex text-center">
                <h4 class="w-1/3 font-semibold text-lg">7"<br>Personal</h4>
                <h4 class="w-1/3 font-semibold text-lg">10"<br>Small</h4>
                <h4 class="w-1/3 font-semibold text-lg">16"<br>Large</h4>
              </div>
            </div>

          </div>

          <div class="flex flex-col lg:flex-row lg:-mx-12">
            
            <div class="w-full lg:w-1/2 lg:px-12">
              <div class="flex lg:mt-8">
                <div class="w-full flex-col text-left">
                  <h4 class="w-full pb-3 inline-flex flex-col lg:flex-row">
                    <span class="lg:w-2/3 inline-flex">Point BBQ</span>
                    <span class="lg:w-1/3 inline-flex lg:text-center pt-2">
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">7" </span>$14.00</span>
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">10" </span>$18.00</span>
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">16" </span>$29.00</span>
                    </span>
                  </h4>
                  <p>Grilled Chicken Breast, Red Onion, Pineapple, Jalapeno, and Point BBQ Sauce.</p>
                </div>
              </div>
            </div>

            <div class="w-full lg:w-1/2 lg:px-12">
              <div class="flex mt-8">
                <div class="w-full flex-col text-left">
                  <h4 class="w-full pb-3 inline-flex flex-col lg:flex-row">
                    <span class="lg:w-2/3 inline-flex">Pepperoni</span>
                    <span class="lg:w-1/3 inline-flex lg:text-center pt-2">
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">7" </span>$11.00</span>
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">10" </span>$13.00</span>
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">16" </span>$23.00</span>
                    </span>
                  </h4>
                  <p>The Classic!</p>
                </div>
              </div>
            </div>

          </div>

          <div class="flex flex-col lg:flex-row lg:-mx-12 mt-8">
            
            <div class="w-full lg:w-1/2 lg:px-12">
              <div class="flex lg:mt-8">
                <div class="w-full flex-col text-left">
                  <h4 class="w-full pb-3 inline-flex flex-col lg:flex-row">
                    <span class="lg:w-2/3 inline-flex">Buffalo Chicken Blue Cheese</span>
                    <span class="lg:w-1/3 inline-flex lg:text-center pt-2">
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">7" </span>$14.00</span>
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">10" </span>$18.00</span>
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">16" </span>$29.00</span>
                    </span>
                  </h4>
                  <p>Chicken Breast tossed in Franks Red Hot Sauce with Green Onion and Blue Cheese, and Alfredo Sauce.</p>
                </div>
              </div>
            </div>

            <div class="w-full lg:w-1/2 lg:px-12">
              <div class="flex mt-8">
                <div class="w-full flex-col text-left">
                  <h4 class="w-full pb-3 inline-flex flex-col lg:flex-row">
                    <span class="lg:w-2/3 inline-flex">Canadian Bacon & Pineapple</span>
                    <span class="lg:w-1/3 inline-flex lg:text-center pt-2">
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">7" </span>$12.00</span>
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">10" </span>$14.00</span>
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">16" </span>$24.00</span>
                    </span>
                  </h4>
                  <p>Classic Hawaiian Delight!</p>
                </div>
              </div>
            </div>

          </div>

          <div class="flex flex-col lg:flex-row lg:-mx-12 mt-8">
            
            <div class="w-full lg:w-1/2 lg:px-12">
              <div class="flex lg:mt-8">
                <div class="w-full flex-col text-left">
                  <h4 class="w-full pb-3 inline-flex flex-col lg:flex-row">
                    <span class="lg:w-2/3 inline-flex">Mediterranean</span>
                    <span class="lg:w-1/3 inline-flex lg:text-center pt-2">
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">7" </span>$14.00</span>
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">10" </span>$18.00</span>
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">16" </span>$29.00</span>
                    </span>
                  </h4>
                  <p>Pesto Sauce, Spinach, Red Onion, Artichoke Hearts, Kalamata olives, Sundried Tomatoes, and Feta Cheese.</p>
                </div>
              </div>
            </div>

            <div class="w-full lg:w-1/2 lg:px-12">
              <div class="flex mt-8">
                <div class="w-full flex-col text-left">
                  <h4 class="w-full pb-3 inline-flex flex-col lg:flex-row">
                    <span class="lg:w-2/3 inline-flex">Meat Lovers</span>
                    <span class="lg:w-1/3 inline-flex lg:text-center pt-2">
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">7" </span>$14.00</span>
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">10" </span>$18.00</span>
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">16" </span>$29.00</span>
                    </span>
                  </h4>
                  <p>Canadian Bacon, Pepperoni, Salami, Italian Sausage, and Bacon.</p>
                </div>
              </div>
            </div>

          </div>

          <div class="flex flex-col lg:flex-row lg:-mx-12 mt-8">
            
            <div class="w-full lg:w-1/2 lg:px-12">
              <div class="flex lg:mt-8">
                <div class="w-full flex-col text-left">
                  <h4 class="w-full pb-3 inline-flex flex-col lg:flex-row">
                    <span class="lg:w-2/3 inline-flex">The Central Pointer</span>
                    <span class="lg:w-1/3 inline-flex lg:text-center pt-2">
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">7" </span>$14.00</span>
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">10" </span>$18.00</span>
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">16" </span>$29.00</span>
                    </span>
                  </h4>
                  <p>Alfredo sauce, Red Onion, Jalapeno, Bacon, Pineapple, and Chipotle sauce.</p>
                </div>
              </div>
            </div>

            <div class="w-full lg:w-1/2 lg:px-12">
              <div class="flex mt-8">
                <div class="w-full flex-col text-left">
                  <h4 class="w-full pb-3 inline-flex flex-col lg:flex-row">
                    <span class="lg:w-2/3 inline-flex">Vegetarian</span>
                    <span class="lg:w-1/3 inline-flex lg:text-center pt-2">
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">7" </span>$13.00</span>
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">10" </span>$17.00</span>
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">16" </span>$27.00</span>
                    </span>
                  </h4>
                  <p>Mushrooms, Bell Peppers, Onion, Tomatoes, and Black Olives.</p>
                </div>
              </div>
            </div>

          </div>

          <div class="flex flex-col lg:flex-row lg:-mx-12 mt-8">
            
            <div class="w-full lg:w-1/2 lg:px-12">
              <div class="flex lg:mt-8">
                <div class="w-full flex-col text-left">
                  <h4 class="w-full pb-3 inline-flex flex-col lg:flex-row">
                    <span class="lg:w-2/3 inline-flex">Caprese Margherita Pizza</span>
                    <span class="lg:w-1/3 inline-flex lg:text-center pt-2">
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">7" </span>$13.00</span>
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">10" </span>$17.00</span>
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">16" </span>$27.00</span>
                    </span>
                  </h4>
                  <p>Mozzarella with fresh basil, tomato, olive oil, and balsamic reduction.</p>
                </div>
              </div>
            </div>

            <div class="w-full lg:w-1/2 lg:px-12">
              <div class="flex mt-8">
                <div class="w-full flex-col text-left">
                  <h4 class="w-full pb-3 inline-flex flex-col lg:flex-row">
                    <span class="lg:w-2/3 inline-flex">Combination</span>
                    <span class="lg:w-1/3 inline-flex lg:text-center pt-2">
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">7" </span>$14.00</span>
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">10" </span>$18.00</span>
                      <span class="pr-4 lg:pr-0 lg:w-1/3 font-semibold text-lg"><span class="lg:hidden">16" </span>$30.00</span>
                    </span>
                  </h4>
                  <p>Canadian Bacon, Salami, Pepperoni, Mushrooms, Onion, Bell Pepper, and Black Olives.</p>
                </div>
              </div>
            </div>

          </div>

          <div class="w-full lg:w-1/3 mx-auto inline-flex flex-col justify-center">
            <div class="border-brand-sunflower border-4 border-double p-6 mt-8">
              <h4 class="pb-1">Make any small pizza Gluten Free<br> for only $1.00</h4>
            </div>
          </div>

        </div>

      </div>

      <div class="mt-16 pt-12 border-t-4 border-double border-brand-anvil"></div>

    </div>

    <div id="vegan" data-locations='["bend"]'>

      <div class="flex flex-col lg:flex-row lg:-mx-12">

        <div class="w-full inline-flex flex-col lg:px-12">

          <h2>Vegan Menu</h2>

          <div class="w-full lg:w-1/2 mx-auto inline-flex flex-col justify-center">
            <div class="mt-2 border-brand-mahogany border-8 border-double p-6">
              <h4 class="pb-1">Our Famous Vegan Mac &amp; Cheese<strong class="pl-4 font-semibold text-lg">$18.00</strong></h4>
              <p>Our famous vegan macaroni and cheese tossed with vegan chicken and seasonal vegetable. Served with garlic bread.</p>
            </div>
          </div>

          <div class="flex flex-col lg:flex-row lg:-mx-12">

            <div class="w-full lg:w-1/2 inline-flex flex-col lg:px-12 mt-6 lg:mt-12">
              <div>
                <h4 class="pb-1">
                  Vegan Philly Cheesesteak<strong class="pl-4 font-semibold text-lg">$17.00</strong>
                </h4>
                <p>Thin sliced vegan beef with sautéed onions, peppers and mushrooms with melted vegan mozzarella cheese and vegan chipotle aioli on a toasted hoagie roll. Served with your choice of fries.</p>
              </div>
            </div>

            <div class="w-full lg:w-1/2 inline-flex flex-col lg:px-12 mt-4 lg:mt-8">
              <div>
                <h4 class="pb-1">
                Vegan Mac Daddy Patty Melt<strong class="pl-4 font-semibold text-lg">$18.00</strong>
                </h4>
                <p>A Beyond burger on grilled sourdough with caramelized onions, melted mozzarella, BBQ sauce and our famous vegan macaroni and cheese. Served with your choice of fries.</p>
              </div>
            </div>

          </div>

          <div class="flex flex-col lg:flex-row lg:-mx-12">

            <div class="w-full lg:w-1/2 inline-flex flex-col lg:px-12 mt-4 lg:mt-8">
              <div>
                <h4 class="pb-1">
                Stadium Style Vegan Chicken Nachos<strong class="pl-4 font-semibold text-lg">$14.00</strong>
                </h4>
                <p>House made chips topped with vegan cheddar and mozzarella cheese, vegan chicken, black beans, pico de gallo, and jalapenos.</p>
              </div>
            </div>

            <div class="w-full lg:w-1/2 inline-flex flex-col lg:px-12 mt-4 lg:mt-8">
              <div>
                <h4 class="pb-1">
                Bordertown Vegan Taco Salad<strong class="pl-4 font-semibold text-lg">$17.00</strong>
                </h4>
                <p>A tortilla bowl fried to perfection filled with chopped romaine, corn, black beans, tomatoes, fiesta tortilla strips and shredded vegan mozzarella cheese. Topped with your choice of grilled vegan chicken or seasoned vegan ground beef.</p>
              </div>
            </div>

          </div>

          <div class="flex flex-col lg:flex-row lg:-mx-12">

            <div class="w-full lg:w-1/2 inline-flex flex-col lg:px-12 mt-4 lg:mt-8">
              <div>
                <h4 class="pb-1">
                Maui Luau Vegan Chicken Sandwich<strong class="pl-4 font-semibold text-lg">$17.00</strong>
                </h4>
                <p>Savory grilled vegan chicken tossed in teriyaki sauce on a bed of lettuce, tomato, and red onion. Topped with sautéed mushrooms, pineapple, and melted mozzarella cheese on grilled sourdough bread. Served with your choice of fries.</p>
              </div>
            </div>

            <div class="w-full lg:w-1/2 inline-flex flex-col lg:px-12 mt-4 lg:mt-8">
              <div>
                <h4 class="pb-1">
                Vegan Caesar Salad<br><strong class="font-semibold text-lg">Full $12.00 / Half $8.00</strong>
                </h4>
                <p>Romaine lettuce, shredded vegan mozzarella cheese, and vegan sourdough croutons tossed in our house made vegan Caesar dressing.<br>
                  <small>
                    <em>Add vegan chicken ... <strong class="font-semibold">$4.00</strong></em><br>
                  </small>
                </p>
              </div>
            </div>

          </div>

          <div class="flex flex-col lg:flex-row lg:-mx-12">

            <div class="w-full lg:w-1/2 inline-flex flex-col lg:px-12 mt-4 lg:mt-8">
              <div>
                <h4 class="pb-1">
                Southern Style Vegan Patty Melt<strong class="pl-4 font-semibold text-lg">$16.00</strong>
                </h4>
                <p>A Beyond burger on grilled marbled rye bread with melted vegan mozzarella and cheddar cheese. Topped with BBQ sauce, jalapenos and caramelized onions. Served with your choice of fries.</p>
              </div>
            </div>

            <div class="w-full lg:w-1/2 inline-flex flex-col lg:px-12 mt-4 lg:mt-8">
              <div>
                <h4 class="pb-1">
                Blazing Buffalo Vegan Mozzarella Melt<strong class="pl-4 font-semibold text-lg">$17.00</strong>
                </h4>
                <p>Vegan chicken tossed in buffalo sauce, with melted mozzarella on grilled sourdough. Topped with lettuce, tomato, red onion and pickles. Served with your choice of fries.</p>
              </div>
            </div>

          </div>

          <div class="border-brand-sunflower border-4 border-double p-6 lg:-mx-12 mt-4 lg:mt-8">

            <h3>On Point Vegan Tacos<strong class="pl-4 font-semibold text-lg">$15.00</strong><br><p>( No mixing and matching )</p></h3>

            <div class="flex flex-col lg:flex-row">

              <div class="w-full lg:w-1/3 inline-flex flex-col lg:px-12 mt-0">
                <div>
                  <h4 class="pb-1">Kona Style Vegan Chicken</h4>
                  <p>Three tacos with grilled vegan chicken, pineapple and mushrooms. Topped with shredded cabbage, pico de gallo, and a teriyaki drizzle.</p>
                </div>
              </div>

              <div class="w-full lg:w-1/3 inline-flex flex-col lg:px-12 mt-4 lg:mt-0">
                <div>
                  <h4 class="pb-1">Buffalo Vegan Mozzarella</h4>
                  <p>Three tacos with vegan chicken tossed in buffalo sauce. Topped with vegan mozzarella, shredded cabbage and pico de gallo.</p>
                </div>
              </div>

              <div class="w-full lg:w-1/3 inline-flex flex-col lg:px-12 mt-4 lg:mt-0">
                <div>
                  <h4 class="pb-1">Vegan Chicken Fajita</h4>
                  <p>Three tacos with fajita seasoned bell peppers, onions, and vegan chicken. Topped with shredded cabbage, pico de gallo, and tomatillo salsa.</p>
                </div>
              </div>

            </div>

          </div>

        </div>

      </div>

      <div class="mt-16 pt-12 border-t-4 border-double border-brand-anvil"></div>

    </div>

    <div id="desserts" data-locations='["central-point", "medford", "bend"]'>

      <div class="flex flex-col lg:flex-row lg:-mx-12">

        <div class="w-full inline-flex flex-col lg:px-12">

          <h2>Desserts</h2>

          <div class="flex flex-col lg:flex-row lg:-mx-12 mt-2">

            <div class="w-full lg:w-1/2 inline-flex flex-col lg:px-12">
              <div class="border-brand-mahogany border-8 border-double p-6">
                <h4 class="pb-1">
                  The Point Mini Donuts<strong class="pl-4 font-semibold text-lg">$8.00</strong>
                </h4>
                <p>Freshly fried mini donuts served hot and sprinkled in cinnamon sugar. Served with your choice of chocolate or caramel sauce for dipping.</p>
              </div>
            </div>

            <div class="w-full lg:w-1/2 inline-flex flex-col lg:px-12">
              <div class="mt-8 lg:mt-0">
                <h4 class="pb-1">
                  <sup class="text-sm inline-flex justify-center items-center pr-2 text-center font-medium">GF</sup>
                  Chocolate Lava Cake<strong class="pl-4 font-semibold text-lg">$8.00</strong>
                </h4>
                <p>Decadent chocolate cake with a molten chocolate center, served with vanilla bean ice cream.</p>
              </div>
            </div>

          </div>

          <div class="flex flex-col lg:flex-row lg:-mx-12 mt-8">

            <div class="w-full lg:w-1/2 inline-flex flex-col lg:px-12">
              <div>
                <h4 class="pb-1">
                Bourbon Bundt Cake<strong class="pl-4 font-semibold text-lg">$8.00</strong>
                </h4>
                <p>Fluffy bunt cake soaked in our bourbon caramel and pecan sauce. Topped with caramel and vanilla bean ice cream.</p>
              </div>
            </div>

            <div class="w-full lg:w-1/2 inline-flex flex-col lg:px-12">
              <div class="mt-8 lg:mt-0">
                <h4 class="pb-1">
                  <sup class="text-sm inline-flex justify-center items-center pr-2 text-center font-medium">GF</sup>
                  Vanilla Ice Cream<strong class="pl-4 font-semibold text-lg">$3.50</strong>
                </h4>
                <p>A large scoop of vanilla ice cream topped with your choice of chocolate or caramel sauce.</p>
              </div>
            </div>

          </div>

        </div>

      </div>

      <div class="mt-16 pt-12 border-t-4 border-double border-brand-anvil"></div>

    </div>

    <div id="cocktails" data-locations='["central-point", "medford", "bend"]'>

      <div class="flex flex-col lg:flex-row lg:-mx-12">

        <div class="w-full inline-flex flex-col lg:px-12">

          <h2>Cocktails</h2>

          <div class="flex flex-col lg:flex-row lg:-mx-12 lg:mt-2">

            <div class="w-full lg:w-1/3 inline-flex flex-col lg:px-12">
              <div class="mt-8 lg:mt-0">
                <h4 class="pb-1">
                The French Pear<strong class="pl-4 font-semibold text-lg">$7.50</strong>
                </h4>
                <p>Wild Roots Pear Vodka, St. Germain, Lemon and Sparkling Wine.</p>
              </div>
            </div>

            <div class="w-full lg:w-1/3 inline-flex flex-col lg:px-12">
              <div class="mt-8 lg:mt-0">
                <h4 class="pb-1">
                Wild Raspberry Drop<strong class="pl-4 font-semibold text-lg">$7.50</strong>
                </h4>
                <p>Wild Roots Raspberry Vodka, 360 Lemon Vodka, fresh lemon, and a splash of sour. Served up with a sugared rim.</p>
              </div>
            </div>

            <div class="w-full lg:w-1/3 inline-flex flex-col lg:px-12">
              <div class="mt-8 lg:mt-0">
                <h4 class="pb-1">
                Lavender Blossom<strong class="pl-4 font-semibold text-lg">$7.50</strong>
                </h4>
                <p>Smirnoff Vanilla Vodka, lavender syrup, sour, and fresh lemon. Served up with a sugared rim.</p>
              </div>
            </div>

          </div>

          <div class="flex flex-col lg:flex-row lg:-mx-12 lg:mt-8">

            <div class="w-full lg:w-1/3 inline-flex flex-col lg:px-12">
              <div class="mt-8 lg:mt-0">
                <h4 class="pb-1">
                Rich Gulch Mule<strong class="pl-4 font-semibold text-lg">$7.50</strong>
                </h4>
                <p>Monopolowa Vodka, fresh lime, and ginger Beer. Served in a copper mug.</p>
              </div>
            </div>

            <div class="w-full lg:w-1/3 inline-flex flex-col lg:px-12">
              <div class="mt-8 lg:mt-0">
                <h4 class="pb-1">
                Oregon Cosmo<strong class="pl-4 font-semibold text-lg">$7.50</strong>
                </h4>
                <p>Wild Roots Marionberry Vodka, Orange Liquor, Cranberry and Lime. Served with a sugar rim.</p>
              </div>
            </div>

            <div class="w-full lg:w-1/3 inline-flex flex-col lg:px-12">
              <div class="mt-8 lg:mt-0">
                <h4 class="pb-1">
                Rojo Rogue<strong class="pl-4 font-semibold text-lg">$7.50</strong>
                </h4>
                <p>Peligroso Blanco Tequila, Pomegranate Liqueur, Fresh Grapefruit, Fresh Lime, Ginger Beer.</p>
              </div>
            </div>

          </div>

          <div class="flex flex-col lg:flex-row lg:-mx-12 lg:mt-8">

            <div class="w-full lg:w-1/3 inline-flex flex-col lg:px-12">
              <div class="mt-8 lg:mt-0">
                <h4 class="pb-1">
                Jackson Julep<strong class="pl-4 font-semibold text-lg">$7.50</strong>
                </h4>
                <p>Bulleit Rye, Fresh Mint, Simple Syrup, Soda.</p>
              </div>
            </div>

            <div class="w-full lg:w-1/3 inline-flex flex-col lg:px-12">
              <div class="mt-8 lg:mt-0">
                <h4 class="pb-1">
                Prairie Mary<strong class="pl-4 font-semibold text-lg">$7.50</strong>
                </h4>
                <p>Prairie Cucumber Vodka and our House Bloody Mary Mix. Served in a Pint Glass with Salt.</p>
              </div>
            </div>

            <div class="w-full lg:w-1/3 inline-flex flex-col lg:px-12">
              <div class="mt-8 lg:mt-0">
                <h4 class="pb-1">
                The Comet<strong class="pl-4 font-semibold text-lg">$7.50</strong>
                </h4>
                <p>Smirnoff Orange Vodka, Disaronno Amaretto, Fresh Cranberry, Fresh Grapefruit.</p>
              </div>
            </div>

          </div>

          <div class="flex flex-col lg:flex-row lg:-mx-12 lg:mt-8">

            <div class="w-full lg:w-1/3 inline-flex flex-col lg:px-12">
              <div class="mt-8 lg:mt-0">
                <h4 class="pb-1">
                Rostel's Remedy<strong class="pl-4 font-semibold text-lg">$7.50</strong>
                </h4>
                <p>South Sisters Gin, Sweet Vermouth, Grapefruit, Lemon and Sparkling Wine.</p>
              </div>
            </div>

            <div class="w-full lg:w-1/3 inline-flex flex-col lg:px-12">
              <div class="mt-8 lg:mt-0">
                <h4 class="pb-1">
                Nutty Barista<strong class="pl-4 font-semibold text-lg">$7.50</strong>
                </h4>
                <p>Grind Espresso Rum, 360 Vanilla Vodka, Grad Mariner and Frangelico.</p>
              </div>
            </div>

            <div class="w-full lg:w-1/3 inline-flex flex-col lg:px-12">
              <div class="mt-8 lg:mt-0">
                <h4 class="pb-1">
                Batten Down the Hatches<strong class="pl-4 font-semibold text-lg">$7.50</strong>
                </h4>
                <p>Crater Hatch Chili Vodka, Pama Liquor, Honey Syrup and Soda Water.</p>
              </div>
            </div>

          </div>

        </div>

      </div>

      <div class="mt-16 pt-12 border-t-4 border-double border-brand-anvil"></div>

    </div>

    <div id="tap" data-locations='["central-point", "medford", "bend"]'>

      <div class="flex flex-col lg:flex-row lg:-mx-12">

        <div class="w-full inline-flex flex-col lg:px-12">

          <h2>Tap List</h2>

          <div class="flex flex-col flex-wrap lg:flex-row lg:-mx-12 lg:mt-2 justify-center">

            <div class="flex flex-row mb-6" id="menu-locations">
              <?php foreach($menus as $location => $menu) { ?>
                <button class="menu-location-btn inline-flex py-3 px-4" show-location="<?php echo $location; ?>" onclick="SEEDS.ShowLocationMenu('<?php echo $location; ?>');">
                  <h6><?php echo str_replace('-', ' ', $location); ?></h6>
                </button>
              <?php } ?>
            </div>

            <?php

            foreach($menus as $location => $menu) { ?>
            
              <div class="hidden location-menu flex-wrap justify-center" menu-location="<?php echo $location; ?>">
          
              <?php $menu = json_decode($menu);
              $beer_list = $menu->taps;
              foreach ($beer_list as $beer) { ?>
                <div class="w-full lg:w-1/3 inline-flex flex-col lg:px-12">
                  <div class="mt-8 lg:mt-6">
                    <h4 class="pb-1">
                      <strong class="font-semibold text-lg"><?php echo $beer->beer->style; ?></strong><br>
                      <?php echo $beer->beer->name; ?><br>
                      <span>
                      <?php foreach($beer->serving_info->sized_pricing as $size) { ?>
                        <strong class="font-semibold text-lg mr-2"><?php echo $size->size;?>: <?php echo $size->price; ?></strong>
                      <?php } ?>
                      </span>
                    </h4>
                    <p><?php echo $beer->descriptions->short_description; ?><br>
                      <small><em><?php echo $beer->brewery->name; ?> - <?php echo $beer->brewery->origin; ?></em></small>
                    </p>
                    <h4>
                      <strong class="font-semibold text-lg">
                      <?php echo $beer->beer->abv; ?> ABV / ​<?php echo $beer->beer->ibu; ?> IBU
                    </strong>
                    </h4>
                  </div>
                </div>
              <?php } ?>

            </div>
              
            <?php } ?>

          </div>

        </div>

      </div>

    </div>


  </div>
</section>

<?php include_once("blocks/locations-dark.php"); ?>

<?php get_footer(); ?>