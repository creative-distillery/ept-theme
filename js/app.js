(function($) {

    $(document).ready(function() {
        var a = 2;

        $(document).tooltip({
            tooltipClass: "tooltip-new"
        });

        function next_section() {
            $('.sections-contain .active').next().addClass('active');
            $('.sections-contain .active').prev().removeClass('active');
        }

        function displaypart(a) {
            $(".part-contain").fadeOut().promise().done(function() {
                $("#part-" + a).stop().fadeIn('fast');
            });
        }

        function displaySuccess(){

	        $('.sections-contain').hide();

	        $(".part-contain").fadeOut().promise().done(function() {
						$('.success-contain').fadeIn();
            });

        }

        $('.sections-contain li').on('click', function() {



            var part = $(this).attr("data-part");


            var current = parseInt(part.match(/[0-9]+/)[0], 10);
            $(".part-contain").fadeOut().promise().done(function() {
                $("#" + part).stop().fadeIn('fast');
                console.log(a);
                a = current + 1;

            });

            $('.sections-contain .active').removeClass('active');
            $(this).addClass('active');
        });


        $('.radio-custom.option').click(function() {
            if ($(this).is(':checked')) {
                $('.question-contain').removeClass('chosen');
                $(this).parent().addClass('chosen');
                console.log($(this).parent());
                $('.option-contain').children().not('.option').prop('disabled', true);
                $('.radio-custom.option').parent().children().not('.option, .option-title').addClass('disabled');

                /* $('.question-contain').not('.chosen').children();*/

                $(this).parent().children().removeClass('disabled');
                $(this).parent().children().prop('disabled', false);
            }

        });




        $('.next-btn').on('click', function() {

            var radioCheck = 0;
            var textCheck = 0;
            var optionCheck = 1;
            var optionText = 0;
            var selectCheck = 1;


if(!$(this).parent().hasClass('optional'))
{
            $(this).parent().find('.question-contain').not('.option-contain').has('.radio-custom').each(function() {
                if ($(this).find('.radio-custom').not('.optional').is(':checked')) {
                    radioCheck = 0;
                    console.log('CHECKED');
                }
                 else {
                    radioCheck = 1;
                    console.log('UNCHECKED');
                }

            });
          }

            $(this).parent().find('.question-contain').not('.option-contain').has('.answer-input').each(function() {
 if (!$(this).find('.answer-input').hasClass('optional'))

 {
                if ($(this).find('.answer-input').val().length <= 0 ) {
	                console.log($(this).hasClass('.optional'));
                    textCheck = 1;
                    console.log('empty');
                } else {
                    textCheck = 0;
                    console.log('full');
                }

}
            });


            if ($(this).parent().find('.chosen').length) {

                console.log($(this).parent().find('.chosen').find('.answer-input'));

                selectCheck = 0;
                console.log(selectCheck);

                console.log($(this).parent().find('.option-contain').hasClass('chosen'));
                $(this).parent().find('.chosen').find('.answer-input').not('.answer-input.optional').each(function() {

                    console.log('here ' + $(this));

                    if ($(this).val().length <= 0) {
                        optionText = 1;
                        console.log('empty OPTION text');
                    }


                });

                console.log($(this).parent().find('.chosen').find('.sub-option'));
                $(this).parent().find('.chosen').find('.sub-option').not('.optional').each(function() {

                    if ($(this).is(':checked')) {
                        optionCheck = 0;
                        console.log('OPTION CHECKED');
                    }



                });
            } else {

                selectCheck = 1;
            }

            if ($(this).parent().find('.option-contain').length) {
                if (radioCheck != 1 && textCheck != 1 && optionCheck != 1 && optionText != 1 && selectCheck != 1) {

                    if(a != 7)
					{
					$('.error').fadeOut();
					displaypart(a);
                    next_section();
                    }
                    a = a + 1;
                }
                else{
	                $('.error').fadeIn();
                }
            } else {
                if (radioCheck != 1 && textCheck != 1) {
                    console.log(a);
                    if(a != 7)
					{
						$('.error').fadeOut();
					displaypart(a);
                    next_section();
                    }
                    a = a + 1;
                }
else{
	$('.error').fadeIn();

}

            }


        });
/*
$('form').submit(function(event) {
	console.log($('form').serialize());
$.ajax({
    type: "POST",
    url: "http://creativedistillery.com/clients/EPT/wp-content/themes/ept/submit.php",
    data: $('form').serialize(),
    success: function(data) {
        displaySuccess();
    },
    error: function(data){
        alert("fail");
    }
});
event.preventDefault();
});*/

        $('.test').hover(function() {

            console.log('aaa');
        });




        $("#spin").hover(function() {
            $('.spin-1').addClass("animated");
        });




        $(".spin-1, .spin-2, .spin-3").bind("webkitAnimationEnd mozAnimationEnd animationEnd", function() {
            $(this).removeClass("animated");
        });



        $("#spin-2").hover(function() {
            $('.spin-2').addClass("animated");
        });

        $("#spin-3").hover(function() {
            $('.spin-3').addClass("animated");
        });

        $('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function() {
            $(this).toggleClass('open');
            $(this).addClass('slide');
            if ($(this).hasClass('open')) {
                $('.mobile').addClass('open');
                $('body').css('overflow', 'hidden');
            } else {
                $('.mobile').removeClass('open');
                $('body').css('overflow', 'visible')
            }
        });
        $(document).on('click', '.nav-drop', function() {
            console.log('asdfsf');
            if ($('.nav-dropdown').hasClass('slide-down')) {
                $('.nav-dropdown').removeClass('slide-down');
            } else
                $('.nav-dropdown').addClass('slide-down');

        });


Stripe.setPublishableKey(' pk_live_oiR9BNudsXAyLouYN1XgYMUm');

function stripeResponseHandler(status, response) {
  // Grab the form:
  var $form = $('#payment-form');

  if (response.error) { // Problem!

    // Show the errors on the form:
    $form.find('.payment-errors').text(response.error.message);
    $form.find('.submit').prop('disabled', false); // Re-enable submission

  } else { // Token was created!

    // Get the token ID:
    var token = response.id;

    // Insert the token ID into the form so it gets submitted to the server:
    $form.append($('<input type="hidden" name="stripeToken">').val(token));
console.log(token);
    // Submit the form:
    $form.get(0).submit();
  }
};


$(function() {
  var $form = $('#payment-form');
  $form.submit(function(event) {
    // Disable the submit button to prevent repeated clicks:
    $form.find('.submit').prop('disabled', true);

    // Request a token from Stripe:
    Stripe.card.createToken($form, stripeResponseHandler);

    // Prevent the form from being submitted:
    return false;
  });
});



    })

})(jQuery);
