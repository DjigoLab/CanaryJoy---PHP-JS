jQuery(document).ready(function() {
  const searchInput = $(".search-container").find("input");
  const cards = $(".list-wrapper").find(".card");
  var i = 0;

  /*DELETE WHAT YOU WRITE
   searchInput.change(function(){
      $(".card").each(function(){
        if($(this).find('h4').text() == searchInput.val()){
            $(this).css("display","none");
            console.log($(this).find('h4').text());
        }
      })
  })*/


  //Not lower case sensitive contains
  jQuery.expr[':'].contains = function(a, i, m) {
    return jQuery(a).text().toUpperCase()
        .indexOf(m[3].toUpperCase()) >= 0;
  };


  searchInput.keyup(function(){
      var text = searchInput.val()
      $(".card").each(function(){
        if($(this).find('h4').is(":contains('" + text + "')")) {
            $(this).css("display","flex");
            console.log($(this).find('h4').text());
        }else{
            $(this).css("display","none");

        }
      })
  })
});
