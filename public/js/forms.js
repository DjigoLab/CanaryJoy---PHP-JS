jQuery(document).ready(function() {
  const userButton = $(".user");
  const form = $(".user-form");
  const parentDisable = $(".parentDisable");
  var triggered = false;


  function switchForm(){
    if (!triggered) {
        parentDisable.css("display", "block");
        parentDisable.addClass("fadeIn");

        parentDisable.removeClass("fadeOut");
        form.css("opacity", "1");
        form.css("display", "block");
        form.removeClass("fadeOut");
        form.addClass("fadeIn");
  
        triggered = true;
      } else {
        parentDisable.removeClass("fadeIn");

        parentDisable.addClass("fadeOut");
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

  parentDisable.click(function(){
    switchForm();
  })
});
