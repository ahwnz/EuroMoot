$(function() {

  // Make sure the display is visible
  if(!window.noScroll) {
    var displayY = $("#display").offset().top;
    $(window).scrollTop(displayY-15);
  }

  $("#toggle-menu").click(function() {
    $("#menu-dropdown").slideToggle();
    $("#mobile-menu").toggleClass("open");
  });

  // Tours Sorting
  $("select#tours-sort").change(function() {
    var sort = $("select#tours-sort option:selected").val();
    if(sort.length == 0) return;

    var tours = $("#tour-list > .tour").toArray()
    tours.sort(function(a,b) {
      var av = $(a).attr("data-"+sort)
      var bv = $(b).attr("data-"+sort);
      return (av<bv?-1:(av>bv?1:0));
    });
    tours.forEach(function(t) {
      $("#tour-list").append(t);
    });
  });

  
});
