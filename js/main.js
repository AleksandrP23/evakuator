if (!sessionStorage.getItem("loaded")) {
  $(".modal-overlay-loading").fadeIn();
  let counter = 2;
  const loader = setInterval(() => {
    if (counter === 100) {
      clearInterval(loader);
      $(".modal-overlay-loading").fadeOut();
    }
    $(".modal__load-num").text(counter);
    counter++;
  }, 25);

  sessionStorage.setItem("loaded", true);
}

$(function () {	
  // Slider rewiews

  const swiper = new Swiper(".swiper-rewiews", {
    direction: "vertical",
    loop: true,
    slidesPerView: 5,
    centeredSlides: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  // Tabs
  $(".tab").on("click", function () {
    $(this)
      .addClass("tab--active")
      .siblings()
      .removeClass("tab--active")
      .closest(".tabs-wrapper")
      .find(".tab-content")
      .removeClass("tab-content--active")
      .eq($(this).index())
      .addClass("tab-content--active");
  });

  // Validation

  // $(".form").on("submit", function (e) {
  //   e.preventDefault();
  //   $.ajax({
  //     type: "POST",
  //     url: "mailer/smart.php",
  //     data: $(this).serialize(),
  //   }).done(function () {
  //     $(this).find("input").val("");
  //     $(".form").trigger("reset");
  //     $(".form-block-3").fadeOut();
  //     $(".form-block-1").fadeIn();
  //     $(".modal-overlay-thanks").fadeIn();
  //     setTimeout($(".modal-overlay-thanks").fadeOut(), 3000);
  //     return false;
  //   });
  // });

  //Accordion
  $(".accordion__text").hide();
  $(".accordion__title").on("click", function () {
    if ($(this).hasClass("accordion__title--active")) {
      $(".accordion__title")
        .removeClass("accordion__title--active")
        .next()
        .slideUp();
    } else {
      $(".accordion__title")
        .removeClass("accordion__title--active")
        .next()
        .slideUp();
      $(this).addClass("accordion__title--active").next().slideDown();
    }
  });

  // Forms

  $(".form-block-2, .form-block-3").hide();

  $(".form__btn-1").on("click", function () {
    if ($(".form__input-1").val() !== "" && $(".form__input-2").val() !== "") {
      $(".form-block-1").fadeOut();
      $(".form-block-2").fadeIn();
    }
  });

  $(".form__left-radio").on("click", function () {
    $(".form__left-radio").removeAttr("checked");
  });

  $(".form__right-radio").on("click", function () {
    $(".form__right-radio").removeAttr("checked");
  });

  function calculateForm(){
    
    let price = 0;
    let wheelsBlock = $(`.form input[name='block']:checked`).val() == 1;
    let transportType = Number($(`.form input[name='transportType']:checked`).val());
    console.log([0, 1].indexOf(transportType), transportType);
    if([0, 1].indexOf(transportType) !== -1){
      price += 3500;
      price += (wheelsBlock) ? 500 : 0;
    } else {
      price += 4000;
      price += (wheelsBlock) ? 1000 : 0;
    }

    $('#calculatedPrice').text(new Intl.NumberFormat('ru-RU').format(price));
  }

  $(".form__btn-2").on("click", function () {
    calculateForm();
    $(".form-block-2").fadeOut();
    $(".form-block-3").fadeIn();
  });

  $("#calcForm").on("submit", function (e) {

    e.preventDefault();
    
    const data = $(this).serialize();

    $(".form-block-3").fadeOut();
    $(".form-block-1").fadeIn();
    $(".modal-overlay-thanks").fadeIn();
    $(".form").trigger("reset");
    
    gtag('event', 'conversion', {'send_to': 'AW-756961269/3URGCJGj-vwCEPWf-egC'});

    $.ajax({
      url:     "/ajax.php", 
      type:     "POST", 
      dataType: "json",
      data: data,  

      success: function(response) { //Данные отправлены успешно
        console.log(response);
      },

      error: function(response) { // Данные не отправлены
        console.error(response);
      },

      complete: () => {
        setTimeout(() => {
          $(".modal-overlay-thanks").fadeOut();
        }, 3000);
      }
    });

  });

  // Gallery more

  $(".gallery__item:nth-child(n+8)").hide();
  $(".gallery__more").on("click", function () {
    $(".gallery__item:nth-child(n+8)").slideDown();
    $(this).hide();
  });

  if ($(window).outerWidth() <= 768) {
    $(".gallery__item:nth-child(n+4)").hide();
    $(".gallery__more").on("click", function () {
      $(".gallery__item:nth-child(n+4)").slideDown();
      $(this).hide();
    });
  }

  // Tabs scroll

  if ($(window).outerWidth() <= 600) {
    $(".tab").on("click", function () {
      let anchor = $(this).attr("data-anchor");

      $("html, body").animate({
        scrollTop: $(anchor).offset().top - 75,
      }, {
        duration: 370, // по умолчанию «400»
        easing: "linear", // по умолчанию «swing»
      });

      return false;
    });
  }

  // Masked

  $.fn.setCursorPosition = function (pos) {
    if ($(this).get(0).setSelectionRange) {
      $(this).get(0).setSelectionRange(pos, pos);
    } else if ($(this).get(0).createTextRange) {
      var range = $(this).get(0).createTextRange();
      range.collapse(true);
      range.moveEnd("character", pos);
      range.moveStart("character", pos);
      range.select();
    }
  };

  $(".masked")
    .on("click", function () {
      $(this).setCursorPosition(3);
    })
    .mask("+7(999) 999-9999");

  $(".masked").mask("+7(999) 999-9999");
});


// ymaps.ready(mapInit);
// var myMap;
// var center = [56.32648029902668, 44.00422903761169];

// function mapInit() {

//   myMap = new ymaps.Map('yMap', {
//     // При инициализации карты обязательно нужно указать
//     // её центр и коэффициент масштабирования.
//     center: center,
//     zoom: 8.2,
//     controls: []
//   }, {
//     searchControlProvider: 'yandex#search'
//   });


//   $(".form__input-1").on('change', e => {
//     initRoute($(e.currentTarget).val(), null);
//   });

//   var prevFrom = '';
//   var prevTo = '';

//   function initRoute(from, to){

//     to = to == null ?  prevTo : to;
//     from = from == null ?  prevFrom : from;

//     ymaps.route([
//       from, 
//       to
//       ]).then(function (route) {
//         myMap.geoObjects.add(route);
//       });
//   }
// }

document.addEventListener("DOMContentLoaded", function() {
  const callbackForm = document.querySelector('.section-card-form');

  if (callbackForm) {
    callbackForm.addEventListener('submit', function (e) {
      e.preventDefault();

      const formData = new FormData(callbackForm);

      fetch('/ajax.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(result => {
        if (result.type === 'ok') {
          alert('Спасибо! Мы скоро вам перезвоним.');
          callbackForm.reset();
        } else {
          alert('Ошибка при отправке. Попробуйте позже.');
        }
      })
      .catch(() => {
        alert('Ошибка соединения с сервером.');
      });
    });
  }
});