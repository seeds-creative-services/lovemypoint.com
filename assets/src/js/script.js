(function(SEEDS, $, undefined) {

  "use strict";


  SEEDS.reCAPTCHAToken = 'null'

  SEEDS.Location = $.cookie('location') || 'central-point'

  SEEDS.LAT = $.cookie('latitude')  || undefined
  SEEDS.LON = $.cookie('longitude') || undefined


  SEEDS.Locations = {
    'central-point': {
      lat:  42.3754584,
      lon: -122.9175355
    },
    'medford': {
      lat:  42.3115587,
      lon: -122.8564846
    },
    'bend': {
      lat:  44.0570058,
      lon: -121.3161847
    }
  }


  $(window).on('load', function(event) {

    // Show the Central Point menus by default.
    SEEDS.ShowLocationMenu(SEEDS.Location)

    SEEDS.SetLocation(SEEDS.Location, false)

    if(window.location.hash) {

      SEEDS.ScrollToElement(window.location.hash)

    }

    // Load the recaptcha
    grecaptcha.ready(function() {

      ga('send', 'event', 'captcha', 'ready');

      grecaptcha.execute('6LdqXMsUAAAAAEUOxcZt2rYkV92X0RGuLIIRF0y2', {action: 'homepage'}).then(function(token) {

        SEEDS.reCAPTCHAToken = token

        $('form').removeClass('disabled').removeAttr('disabled')

      });

    });

  })


  /**
   * @function SubmitForm
   * @param {object} event
   */

  SEEDS.SubmitForm = function(event) {

    event.preventDefault()

    var element = $(event.target)

    var form = element.attr('id')
    var method = element.attr("method")
    var data = element.serializeArray()
    var url = element.attr("action")

    if(SEEDS.reCAPTCHAToken !== 'null') {

      data.push({name: 'captcha', value: SEEDS.reCAPTCHAToken})

      $.ajax({

        url, method, data, cache: false,

        success: function(response) {

          if (response === "success") {

            alert("Your message was sent successfully!")

            // Send data to GA.
            SEEDS.GA('submit', form, 'form-submitted')

            // Reset form elements.
            element.find('input textarea').val('')

          } else {

            alert("There was an error, please try again soon.")
            console.error(response)

          }

        },

        error: function(response) {

          alert("There was an error, please try again soon.")
          console.error(response)

        }

      });

    }else{

      alert("There was an error, please try again soon.")

    }

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


  SEEDS.LocationPrompt = function(callback) {

    if(navigator.geolocation) {

      function LocationSuccess(position) {

        return callback(position)

      }

      function LocationError() {

        return callback('error')

      }

      navigator.geolocation.getCurrentPosition(LocationSuccess, LocationError)

    }else{

      return callback('error')

    }

  }


  SEEDS.CalculateDistance = function(start, end, callback) {

    $.ajax({

      url: `https://router.project-osrm.org/route/v1/driving/${start[1]},${start[0]};${end[1]},${end[0]}`,

      success: function(response) {

        console.log(response)

      },

      error: function(response) {

        console.error(response)

      }

    })

  }


  SEEDS.GA = function(type, category, label) {

    gtag('event', type, {
      'event_category': category,
      'event_label': label
    });

  }


  SEEDS.SetLocation = function(location, send = true) {

    if(send) {

      // Send data to GA.
      SEEDS.GA('location', location, 'set-location')

    }

    SEEDS.Location = location

    $.cookie('location', SEEDS.Location, { expires: 7, path: '/' })

    $('#select-location').val(SEEDS.Location)

    $('.active-location').removeClass('active-location')
    $(`#location-${SEEDS.Location}`).addClass('active-location')

    SEEDS.ShowLocationMenu(location)

    $('[data-locations]').each((i) => {

      let $location = $('[data-locations]').eq(i)
      let locations = JSON.parse($location.attr('data-locations'))

      if(locations.includes(SEEDS.Location)) {

        $location.show()

      }else{

        $location.hide()

      }

    })

  }


})((window.SEEDS = window.SEEDS || {}), jQuery)
