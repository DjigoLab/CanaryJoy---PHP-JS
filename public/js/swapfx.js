jQuery(document).ready(function() {
  const switchBtn = $(".swap");
  const splash = $(".swap-splash");
  const splashTitles = splash.find('.titles');

  if (
    $(".menu")
      .find("h3")
      .text() === "Travel"
  ) {
    splash.addClass("light");
    splash.removeClass("dark");
    $("html, body").animate({ scrollTop: "0px" }, 100);

    splash.show();

  } else {
    splash.removeClass("light");
    splash.addClass("dark");
    $("html, body").animate({ scrollTop: "0px" }, 100);

    splash.show();

  }
  setTimeout(() => {
   

    splash.addClass("fadeOut");
  }, 300);

  setTimeout(function() {
    splash.hide();
  }, 1200);
});
