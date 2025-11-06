$(function () {
  $(".js-open-policy").on("click", function (e) {
    e.preventDefault();
    $(".modal-overlay-policy").fadeIn();
  });

  $(".js-close-policy").on("click", function (e) {
    e.preventDefault();
    $(".modal-overlay-policy").fadeOut();
  });

  $(".modal-overlay-policy").on("click", function (e) {
    if ($(e.target).hasClass("modal-overlay-policy")) {
      $(this).fadeOut();
    }
  });
});

$("#closePolicyBanner").on("click", function () {
  $("#policyBanner").slideUp();
});

$(function () {
  const $form = $("#calcForm");
  const $checkbox = $(".input-policy-js");
  const $error = $(".form__policy-error");

  // Скрыть ошибку при изменении состояния чекбокса
  $checkbox.on("change", function () {
    if ($(this).is(":checked")) {
      $error.fadeOut();
    }
  });

  // Проверка при отправке формы
  $form.on("submit", function (e) {
    if (!$checkbox.is(":checked")) {
      e.preventDefault();
      $error.fadeIn();
    }
  });
});

$(function () {
  // Закрытие модального окна "Спасибо!!!"
  $(".js-close-thanks").on("click", function (e) {
    e.preventDefault();
    $(".modal-overlay-thanks").fadeOut();
  });

  // Закрытие модального окна при клике вне его
  $(".modal-overlay-thanks").on("click", function (e) {
    if ($(e.target).hasClass("modal-overlay-thanks")) {
      $(this).fadeOut();
    }
  });
});
