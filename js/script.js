$(document).ready(function() {

    // inline edit objective ajax
    $(".task").click(function(){
        var task_id = $(this).data("task_id");
        $(".comment"+task_id).load("/comment/add_comment",{
                task_id: task_id
        });
    });

    // submit comment
    $(".comment").keydown(function(e) {
        var task_id = $(this).data("task_id");
        var comment = $('#comment' + task_id).val();
        if (e.keyCode == 13) {
             e.preventDefault();
             $(".comment" + task_id).load("/comment/update_comment",{
                task_id:task_id,
                comment:comment
             });
        }
    });

    // hide footer on usage
     $('#contentx').click(function(){
	   $('#getlost').fadeOut("42");
	});

    //
    $("#begin").submit(function(e) {
        var student_name = $('#student_name').val();
        if (student_name == '') { alert('please enter student name'); return false; }
    });

    $('.confirm').click(function(){
         var name = confirm('Submit this to your instructor?');
         if (name == false) { return false; }
    });

    // send
    $('.confirm_').click(function(){
        var validated = false;
//        $('#synopsis input').each(function(n, e){
 //           if($(this).val() != '' && n != 0) { validated = true; }
 //           if(n > 0) { validated = true; }
  //      });
       //if(! validated) { alert('Please do not submit a blank synopsis.'); $('.task').focus(); return false;}
 //      var name = confirm('Submit this synopsis to your instructor?');
  //     if (name == false) { return false; }
  //      else {
            var hash = $('#done').data("pid");
             $.ajax({
                    type: "POST",
                    url: '/report/tag_student',
                    data: {
                        name: name,
                        hash: hash,
                    }
                }).done(function( msg ) {
                    console.log(msg);
                });
            return true;
       // }
    });

    // focus on first task at synopsis view
    $(".task").focus();

    // session identifier
    session = $('.rows').data("session");

    // render elapsed time upon new synopsis
    last_time = $('.rowx').last().find('span').data("time");

    elapsed_time(last_time, session);

    // navigation and row generation
    $(".rows").on('keydown', '.rowx', (function(e) {
            $('#getlost').fadeOut("42");

        // project identifier
        assignment_id = $('.rows').data("step_id");

        // current row
        i = $(this).find('input:text').data("i");
        // keypress handling
        switch(e.which) {

            // cursor down, create new row or nav to next row
            case 40:
                var task = $(this).find('input:text').val();
                var time = $(this).find('span').data("time");
                write_task('/synopsis/update_task', i, assignment_id, session, task, time);
                $(this).next('tr').find('input:text').focus();
            break;
            // cursor up, nav up
            case 38:
                var task = $(this).find('input:text').val();
                var time = $(this).find('span').data("time");
                write_task('/synopsis/update_task', i, assignment_id, session, task, time);
                $(this).prev('tr').find('input:text').focus();
            break;
            // insert
            // deactivated
            case 000192:
                e.preventDefault();
                $('<tr class="rowx"><td class="start"><span data-time="'+ moment().format('X') + '">' + moment().format('h:mm') + '</span>:</td><td><input maxlength="300" class="task span6" type="text" /></td></tr>').insertBefore($(this));
                update_inputs();
                var time = $(this).find('span').data("time");
                write_task('/synopsis/insert_task', i, assignment_id, session, '', time);
                $(this).prev('div').find('input:text').focus();
                elapsed_time(moment().format('X'), session);
            break;
            // delete
            // deactivated
            case 0000220:
                e.preventDefault();
                // suppress deletion of first row
                if (i == 1) {
                    break;
                }

                if ($(this).next('div').find('input:text').length != 0) {
                    $(this).next('div').find('input:text').focus();
                } else {
                    $(this).prev('div').find('input:text').focus();
                }
                $(this).remove();
                update_inputs();
                write_task('/synopsis/delete_task', i, assignment_id, session, null);
                elapsed_time(moment().format('X'), session);
            break;
            // enter key handling
            case 13:
                e.preventDefault();
                var next = i + 1;
                if ($(this).next('tr').find('input:text').length == 0) {
                    $('<tr class="rowx"><td class="start"><span data-time="'+ moment().format('X') + '">' + moment().format('h:mm') + '</span>:</td><td><input maxlength="300" class="task span6" type="text" data-i="' + next + '" /></td></tr>').insertAfter($(this));
                }
                var task = $(this).find('input:text').val();
                var time = moment().format('X');
                var et = elapsed_time(moment().format('X'), session);
                // save position (i) and task
                write_task('/synopsis/task', i, assignment_id, session, task, time, et);
                $(this).next('tr').find('input:text').focus();
                elapsed_time(moment().format('X'), session);
            break;
        }
    }));

    // inline edit objective ajax
    $("#set_objective").click(function(){;
        var assignment_id = $(this).data("assignment_id");
        var objective = $(this).data("objective");
        $(".edit_objective").load("/home/edit_objective",{
                assignment_id: assignment_id,
                objective: objective
        });
    });

    // submit
    $(".inline_edit").focusout(function(e) {
        var objective = $(".input_edit").val();
        var assignment_id =  $(".assignment_id").val();
         $(".edit_objective").load("/home/update_objective",{
            objective:objective,
            assignment_id: assignment_id
        });
    });

    // submit
    $(".inline_edit").keydown(function(e) {
        var objective = $("input").val();
        var assignment_id =  $(this).find('input[type="hidden"][name="assignment_id"]').val();
        if (e.keyCode == 13) {
             e.preventDefault();
             $(".edit_objective").load("/home/update_objective",{
                objective:objective,
                assignment_id: assignment_id
             });
        }
    });

    $("#email_report").submit(function(e) {
            e.preventDefault();

           // security
           confirm("Email report.  Are you sure?");

           var hash = $("#email_report_val").data("hash");
           var address = $("#email_report_val").val();

           $.ajax({
            type: "POST",
            url: '/email/email_report',
            data: {
                hash: hash,
                address: address
            }
        }).done(function( msg ) {
            //$('.r' + hash).hide();
            $('#email_report').html('sent!');
        });
    });

    // clear email field onclick
    $('.email_report').focus(function() {
            $(this).val('');
        }).blur(function() {
            var el = $(this);
            if(el.val() == '') {
               $('.email_report').val(' email address');
            }
    });
});




// reorder all ids upon insert or del
function update_inputs() {
    "use strict";
    var update = 1;
    $( "input" ).each(function() {
//  $(this).attr('id', 'task' + update)
    $(this).attr('data-i', update);
    $(this).data('i', update);
        update++;
    });
}

function write_task(url, i, assignment_id, session, task, time, elapsed_time) {
    var assignment_id = $('.rows').data("assignment_id");
    var step_id = $('.rows').data("step_id");
    $.ajax({
        type: "POST",
        url: url,
        data: {
            position : i,
            step_id: step_id,
            session: session,
            task: task,
            time: time,
            elapsed_time: elapsed_time,
            assignment_id: assignment_id
        }
    }).done(function( msg ) {
       // console.log(elapsed_time);
    });
}

function elapsed_time(time, session) {
    var ms = time - session;
    var secs = ms;
    ms = Math.floor(ms % 1000);
    var minutes = secs / 60;
    secs = Math.floor(secs % 60);
    var hours = minutes / 60;
    minutes = Math.floor(minutes % 60);
    hours = Math.floor(hours % 24);
    var elapsed_time = hours + ":" + minutes + ":" + secs;
    $("#elapsed_time").text(elapsed_time);
    return elapsed_time;
}
