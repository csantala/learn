<!DOCTYPE html>
<script src="/js/jstz.min.js"></script>
<script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/js/jquery.cookie.js"></script>
<script>
	$(document).ready(function() {
		var timezone = jstz.determine();
		$.cookie('timezone', timezone.name()); alert(timezone.name());
		window.location.href = 'http://' + window.location.hostname + '/<?php echo $assignment_hash?>';
	});
</script>