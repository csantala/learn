$(document).ready(function() {
// add steps
    $(".add_button").click(function(e) {
        e.preventDefault();
        var i = $('.rowx').last().data("i");
        var x = i + 1;
        $('<p>' + x + ': <input data-i="' + x + '" class="span8 rowx" id="obj_row"' + x + '"" name="step' + x + '" type="text"></p>').insertBefore($(this));
    });

      $(".begin").click(function(e) {
        e.preventDefault();
          var s = $(this).data("s");
          $(this).toggleClass('unchecked check');
    });

       $(".notes").click(function(e) {
        e.preventDefault();
          var n = $(this).data("n");
         $('<p><textarea name="note'+n+'" placeholder="notes"></textarea>').insertAfter($(this));
    });

});