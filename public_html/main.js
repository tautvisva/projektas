$(document).ready(function() {
  $(".navigator").on("click", function() {
    $("header nav ul").toggleClass("open");
  });
});
$(document).ready(function() {
  $(".navigator").on("click", function() {
    $("footer nav ul").toggleClass("open");
  });
});
$(function() {

  var width = 1920;
  var animationSpeed = 3000;
  var pause = 6000;
  var currentSlide = 1;

  var $slider = $('#slider');
  var $slidecarouselSlide = $slider.find('.slides');
  var $slides = $slidecarouselSlide.find('.slide');

  var interval = 2000;

  function startSlider() {
    interval = setInterval(function() {
      $slidecarouselSlide.animate({
        'margin-left': '-='+width}, animationSpeed, function() {
        currentSlide++;
        if (currentSlide === $slides.length) {
          currentSlide = 1;
          $slidecarouselSlide.css('margin-left', 0);
        }
      });
    }, pause);
  }

  function stopSlider() {
    clearInterval(interval);
  }
  $slider.on('mouseenter', stopSlider).on('mouseleave', startSlider);


  startSlider();
});
// send forma
$(function()
{
    function after_form_submitted(data)
    {
        if(data.result == 'success')
        {
            $('form#reused_form').hide();
            $('#success_message').show();
            $('#error_message').hide();
        }
        else
        {
            $('#error_message').append('<ul></ul>');

            jQuery.each(data.errors,function(key,val)
            {
                $('#error_message ul').append('<li>'+key+':'+val+'</li>');
            });
            $('#success_message').hide();
            $('#error_message').show();

            //reverse the response on the button
            $('button[type="button"]', $form).each(function()
            {
                $btn = $(this);
                label = $btn.prop('orig_label');
                if(label)
                {
                    $btn.prop('type','submit' );
                    $btn.text(label);
                    $btn.prop('orig_label','');
                }
            });

        }//else
    }

	$('#reused_form').submit(function(e)
      {
        e.preventDefault();

        $form = $(this);
        //show some response on the button
        $('button[type="submit"]', $form).each(function()
        {
            $btn = $(this);
            $btn.prop('type','button' );
            $btn.prop('orig_label',$btn.text());
            $btn.text('Siunciama ...');
        });


                    $.ajax({
                type: "POST",
                data: $form.serialize(),
                success: after_form_submitted,
                dataType: 'json'
            });

      });
});
//send formos pabaiga