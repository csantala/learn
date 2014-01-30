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
          var step_id = $(this).data('step_id');
          $(this).toggleClass('unchecked check');
          if($(this).is('.check')) {
             status = 'closed';
           // $('.note'+s).attr('disabled', true);
          } else {
            status = 'open';
           // $('.note'+s).attr('readonly', false);
          } console.log(step_id);
          $('.step_panel'+step_id).toggleClass('step_panel_sel step_panel_unsel');
          //$('<span>DONE</span>').insertAfter($(this));

         var aid = $('#begin').data('aid');
         var sid = $('#begin').data('sid');

             $.ajax({
                    type: "POST",
                    url: '/home/write_note',
                    data: {
                        status: status,
                        assignment_id: aid,
                        synopsis_id: sid,
                        step_id: step_id
                    }
                }).done(function( msg ) {
                    $('.c' +step_id).effect('bounce');
                });
            return true;
    });

     $(".notes").click(function(e) {
        e.preventDefault();
         $(this).attr('notes', '');
         var s = $(this).data("s");
         var notes = $(this).data("note");
        // $('.step_panel'+s).css("background","#fff");

         $(this).html('<textarea class="span6 note'+s+'" data-step_id="'+s+'" data-note="'+s+'" name="'+s+'" placeholder="notes">'+notes+'</textarea>');
         $('.note'+s).focus();
         $(this).unbind('click');
    });

 $("#upd_obj").click(function(e) {
       var dashboard_id = $('body').data('dashboard_id');
       var objective = $('.objective').val();
        $.ajax({
            type: "POST",
            url: '/create/update_objective',
            data: {
                dashboard_id: dashboard_id,
                objective: objective,
            }
        }).done(function( msg ) {
            $('.objective').fadeOut("fast");
            $('.objective').fadeIn("fast");
        });
        return true;
    });

     $(".upd_step").click(function(e){
       var dashboard_id = $('body').data('dashboard_id');
       var step_id = $(this).data('step');
       var step_txt = $('.step'+step_id).val();
        $.ajax({
            type: "POST",
            url: '/create/update_step',
            data: {
                dashboard_id: dashboard_id,
                step_id: step_id,
                step: step_txt
            }
        }).done(function( msg ) {
            $('.step'+step_id).fadeOut("fast");
            $('.step'+step_id).fadeIn("fast");
        });
        return true;
    });

    // inline synopsis editor
    $(".synopsis").click(function(){
        $(this).unbind('click');
        var assignment_id = $(this).data("assignment_id");
        var step_id = $(this).data("step_id");
        $(this).load("/home/load_editor",{
            assignment_id: assignment_id,
            step_id: step_id
        });
    });

/*
   $(document).on('blur', '.editobj__', function () {
     var objective = $(this).val();
     var dashboard_id = $(this).data('dashboard_id');
                 $.ajax({
                        type: "POST",
                        url: '/create/update_objective',
                        data: {
                            dashboard_id: dashboard_id,
                            objective: objective,
                        }
                    }).done(function( msg ) {
                      $('.editobj').attr('disabled', true);
                    });
                return true;
        });
  */
    });
