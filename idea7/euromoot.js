$(function() {

  // Make sure the display is visible
  var displayY = $("#display").offset().top;
  if(displayY > $(window).height()) $(window).scrollTop(displayY-15);

  // Tours Sorting
  $("#tours-sort").change(function() {
    var sort = $("#tours-sort option:selected").val();

    var tours = $("#tour-list > .tour").toArray()
    tours.sort(function(a,b) {
      return $(a).attr("data-"+sort) > $(b).attr("data-"+sort);
    });
    tours.forEach(function(t) {
      $("#tour-list").append(t);
    });
  });

});
