$(document).ready(function() {
// add steps
    $(".add_button").click(function(e) {
        e.preventDefault();
        var i = $('.rowx').last().data("i");
        var x = i + 1;
        $('<p>' + x + ': <input tabindex="' + x + '" data-i="' + x + '" class="span8 rowx" id="obj_row' + x + '" name="step' + x + '" type="text"></p>').insertBefore($(this));
        $('#obj_row' + x).focus();
    });

      $(".begin").click(function(e) {
        e.preventDefault();
          var s = $(this).data("s");
          $(this).toggleClass('unchecked check');
          $('.step_panel'+s).toggleClass('step_panel_sel step_panel_unsel');
          //$('<span>DONE</span>').insertAfter($(this));
         // $('.c' +s).effect('bounce');
    });

       $(".notes").click(function(e) {
        e.preventDefault();
         $(this).attr('notes', '');
         var n = $(this).data("n");
         $('.step_panel'+n).css("background","#fff");

         $(this).html('<p><textarea name="note'+n+'" placeholder="notes"></textarea>');
         $(this).unbind('click');
    });
});