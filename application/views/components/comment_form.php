<script type="text/javascript">
$(document).ready(function () {
	$('.comment_name_field').focus();
    $('.comments_form').submit(function(e) {
    var comment_name_field = $('.comment_name_field').val();
    var comment_text_field = $('.comment_text_field').val();
    if (comment_name_field == '') { alert('Comment name cannot be blank.'); $('.comment_name_field').focus(); return false; }
    if (comment_text_field == '') { alert('Comment cannot be blank.'); $('.comment_name_field').focus(); return false; }
});

});
</script>
<form action="/comment/add_or_update" method="post" class="comments_form">
	<input type="hidden" name="comments_container_id" value="<?php echo $comments_container_id ;?>" />
	<label>Name</label>
	<p><input class="comment_name_field" type="text" name="user" /></p>
	<label>Comment</label>
	<p><textarea class="comment_text_field" name="comment"></textarea></p>
	<p><input class="btn primary confirm" type="submit" value="   add comment   " /></p>
</form>