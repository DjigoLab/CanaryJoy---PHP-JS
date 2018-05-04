jQuery(document).ready(function() {
  const userButton = $(".user");
  const form = $(".user-form");
  const parentDisable = $(".parentDisable");
  var triggered = false;
  const inputs = $(".field");

  inputs.click(function() {
    $(this)
      .find(".label-wrapper")
      .find("label")
      .addClass("focus");
  });

  function switchForm() {
    if (!triggered) {
      setTimeout(function() {
        parentDisable.css("opacity", "0.8");
      }, 100);
      parentDisable.css("display", "block");

      parentDisable.removeClass("fadeOut");
      form.css("opacity", "1");
      form.css("display", "block");
      form.removeClass("fadeOut");
      form.addClass("fadeIn");

      triggered = true;
    } else {
      parentDisable.removeClass("fadeIn");

      parentDisable.css("opacity", "0");
      form.addClass("fadeOut");
      form.removeClass("fadeIn");
      setTimeout(function() {
        parentDisable.css("display", "none");

        form.css("display", "none");
      }, 700);

      triggered = false;
    }
  }
  userButton.click(function() {
    switchForm();
  });

  parentDisable.click(function() {
    switchForm();
  });
});
