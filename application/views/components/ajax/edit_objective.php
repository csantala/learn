<script type="text/javascript" src="/js/script.js"></script>
<script>
$(document).ready(function() {
        $(".input_edit").focus();
        $(".input_edit").select();
     });
</script>
<table>
	<tr>
	    <td style="width:300px">
	        <form class="inline_edit" method="post">
	            <input class="input_edit" type="text" name="objective" value="<?php echo $_POST['objective']?>">
	            <input class="project_id" type="hidden" name="project_id" value="<?php echo $_POST['project_id']?>">
	        </form>
	    </td>
	</tr>
</table>
