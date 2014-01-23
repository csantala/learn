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
          if($(this).is('.check')) {
             status = 'closed';
           // $('.note'+s).attr('disabled', true);
          } else {
            status = 'open';
           // $('.note'+s).attr('readonly', false);
          }
          $('.step_panel'+s).toggleClass('step_panel_sel step_panel_unsel');
          //$('<span>DONE</span>').insertAfter($(this));
          $('.c' +s).effect('bounce');
         var aid = $('#begin').data('aid');
         var sid = $('#begin').data('sid');
         var note = $('.note'+s).val();
         var step_id = $('.note'+s).data('step_id');
             $.ajax({
                    type: "POST",
                    url: '/home/write_note',
                    data: {
                        status: status,
                        assignment_id: aid,
                        synopsis_id: sid,
                        note: note,
                        step_id: step_id
                    }
                }).done(function( msg ) {
                 //   console.log(msg);
                });
            return true;
    });

    $(".notes_").blur(function(e) {
        e.preventDefault();
         $(this).attr('notes', '');
         var s = $(this).data("s");

         alert('update ' + s);
    });
});