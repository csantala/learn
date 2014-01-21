<div class="comments">
Comments
</div>
<?php
 if(! empty($comments)) {
	foreach ($comments as $comment) {?>
		<p>
		<span class="comment_name"><?php echo $comment->user ?></span>&nbsp;&bull;&nbsp;<span class="comment_date"><?php echo date("F j, Y, g:i a",$comment->date); ?></span><br>
		<p><span class="comment_comment"><?php echo $comment->comment;?></span></p>
		</p>
		<hr>
	<?php }?>
<?php } ?>