<script type="text/javascript" src="/js/script.js"></script>
<script>
$(document).ready(function() {
        $("#comment<?php echo $_POST['task_id']?>").focus();
     });
</script>

<form class="comment" method="post" data-task_id="<?php echo $_POST['task_id']?>">
	<input class="input_edit" type="text" id="comment<?php echo $_POST['task_id']?>" name="objective" value="">
	<input class="task_id" type="hidden" name="task_id" value="<?php echo $_POST['task_id']?>">
</form>
