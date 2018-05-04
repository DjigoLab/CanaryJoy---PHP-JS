jQuery(document).ready(function() {
  const place = $(".place-info");
  const arrow = $(".place-info").find(".fa-arrow-left");
  const cardImage = $(".card").find(".img-container");
  const cardDesc = $(".card").find(".container");
  const listWrapper = $(".list-wrapper");

  function cardAnimation(){
  $('.card').hover(function(){
      $(this).removeClass('flipInX')
      if($(this).hasClass('pulse')){
      $(this).removeClass('pulse')
      $(this).removeClass('hovered')
      }
      else{
      $(this).addClass('pulse')
      $(this).addClass('hovered')
  }
  })}

  
  

  if($(".menu").find("h3").text() === "Party"){
    $(".card").addClass("dark");
    place.addClass("dark");
    $(".card").find("h4").addClass("dark");
    place.find("h4").addClass("dark");


  }else{
    $(".card").addClass("light");
    place.addClass("light");
    $(".card").find("h4").addClass("light");
    place.find("h4").addClass("light");
  }
  function backToPlaces() {
    place.removeClass("bounceInLeft");
    listWrapper.css("height", "auto");
    listWrapper.css("overflow", "auto");
    place.addClass("bounceOutLeft");
    setTimeout(function() {
      place.css("display", "none");
    }, 1000);
  }

  function goToPlace(css, title, desc) {
    place.find(".img-container").attr("style", css);
    place.find("h4").text(title);
    place.find(".desc").text(desc);

    $("html, body").animate({ scrollTop: "0px" }, 100);
    place.removeClass("bounceOutLeft");
    place.addClass("bounceInLeft");
    place.css("display", "block");
    arrow.css("pointer-events", "none");
  
    setTimeout(function() {
        listWrapper.css("height", "0px");

      listWrapper.css("overflow", "hidden");
      arrow.css("pointer-events", "auto");
    }, 1000);
  }
  arrow.click(function() {
    backToPlaces();
  });

  cardImage.click(function() {
    var css = $(this).attr("style");
    var title = $(this).find("h4").text();
    var desc = $(this).parent().find(".desc").text();
    goToPlace(css, title, desc);
  });

  cardAnimation();
});
