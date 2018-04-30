jQuery(document).ready(function() {
  const travelButton = $(".gototravel");
  const partyButton = $(".gotoparty");
  const travelColumn = $(".column1");
  const partyColumn = $(".column2");
  const columnsContainer = $(".columns");

  var triggeredOnce = false;

  function travelZoom() {
    partyColumn.find("h2").removeClass("zoomIn");
    partyColumn.find("h2").addClass("zoomOut");
    travelColumn.find("h2").removeClass("zoomOut");
    travelColumn.find("h2").addClass("zoomIn");
  }
  function partyZoom() {
    partyColumn.find("h2").removeClass("zoomOut");
    partyColumn.find("h2").addClass("zoomIn");
    travelColumn.find("h2").removeClass("zoomIn");
    travelColumn.find("h2").addClass("zoomOut");
  }

  function showTravelButton() {
    travelButton.removeClass("hide");

    travelButton.addClass("show");
    partyButton.removeClass("show");
    partyButton.addClass("hide");
  }
  function showPartyButton() {
    partyButton.removeClass("hide");

    partyButton.addClass("show");
    travelButton.removeClass("show");
    travelButton.addClass("hide");
  }
  function homeAnimations() {
    columnsContainer.click(function() {
      columnsContainer.addClass("clicked");
    });

    travelColumn.click(function() {
      travelColumn.removeClass("close");
      travelColumn.addClass("open");
      partyColumn.addClass("close");
      partyColumn.removeClass("open");
      showTravelButton();
      travelZoom();
    });

    partyColumn.click(function() {
      travelColumn.removeClass("open");
      travelColumn.addClass("close");
      partyColumn.addClass("open");
      partyColumn.removeClass("close");
      showPartyButton();
      partyZoom();
    });
  }

  homeAnimations();
});
