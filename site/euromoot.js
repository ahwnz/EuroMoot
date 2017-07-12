$(function() {

  // Make sure the display is visible
  if(!window.noScroll) {
    var displayY = $("#display").offset().top;
    if(displayY > $(window).height()) $(window).scrollTop(displayY-15);
  }

  // Tours Sorting
  $("select#tours-sort").change(function() {
    var sort = $("select#tours-sort option:selected").val();
    if(sort.length == 0) return;

    var tours = $("#tour-list > .tour").toArray()
    tours.sort(function(a,b) {
      return $(a).attr("data-"+sort) > $(b).attr("data-"+sort);
    });
    tours.forEach(function(t) {
      $("#tour-list").append(t);
    });
  });

});
