// This is a boilerplate created by Sebastian Inman
// to help streamline the process of setting up an object-oriented
// standalone Javascript plugin.

// wrap the entire plugin in an anonymous function
// that with three parameters passed into it:
// 1. the name of the plugin / function you want to use as the namespace
// 2. $ (or jQuery) for the use of jQuery inside the plugin
// 3. undefined

(function(SEEDS, $, undefined) {

  "use strict";


  $(window).on('load', function(event) {

    // Show the Central Point menus by default.
    SEEDS.ShowLocationMenu('central-point')

    if(window.location.hash) {

      SEEDS.ScrollToElement(window.location.hash)

    }

  })


  /**
   * @function SubmitForm
   * @param {object} event
   */

  SEEDS.SubmitForm = function(event) {

    event.preventDefault()

    var element = $(event.target)

    var method = element.attr("method")
    var data = element.serializeArray()
    var url = element.attr("action")

    $.ajax({

      url, method, data, cache: false,

      success: function(response) {

        if (response === "success") {

          alert("Your message was sent successfully!")

        } else {

          alert("There was an error, please try again soon.")
          console.error(response)

        }

      },

      error: function(response) {

        console.error(response)

      }

    });

  };


  SEEDS.ScrollToElement = function(element) {

    if($(element).length) {

      var elementY = $(element).offset().top
      var scrollY = $(document).scrollTop()
      var offset = 0

      var scrollSpeed = Math.round(scrollY - elementY)
      scrollSpeed = scrollSpeed < 0 ? scrollSpeed * -1 : scrollSpeed
      scrollSpeed = scrollSpeed > 1500 ? 1500 : scrollSpeed
      scrollSpeed = scrollSpeed < 300 ? 300 : scrollSpeed

      if($(window).width() <= 600) {

        offset += $('#page-header').height()

      }

      if($('#menu-quicklinks').length) {

        offset += $('#menu-quicklinks').outerHeight()

      }

      $([document.documentElement, document.body]).animate({

        scrollTop: elementY - offset - 59

      }, scrollSpeed)

    }

  };


  SEEDS.ShowLocationMenu = function(location) {

    // Turn off active states.
    $('.menu-location-btn').removeClass('active')
    $('.location-menu').removeClass('active flex').addClass('hidden')

    // Turn on new active states.
    $('.menu-location-btn[show-location="' + location + '"]').addClass('active')
    $('.location-menu[menu-location="' + location + '"]').removeClass('hidden').addClass('active flex')

  };


})((window.SEEDS = window.SEEDS || {}), jQuery)
