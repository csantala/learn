<?php  date_default_timezone_set($timezone); ?>
<div style="font-weight:bold; font-size:12px;">STUDENT: <?php echo strtoupper($report->student_name);?></div><br>

<div style="font-size:12px;"><b>Objective:</b> <?php echo $objective?></div><br>
<div style="font-size:12px;"><b>Steps:</b><br> <?php echo nl2br($assignment->steps);?></div><br>
<div style="font-style:italic;"><?php echo $date?>&nbsp;&bull;&nbsp;elapsed time: <?php echo $elapsed_time?></div><br>
<hr/>
<table>
    <thead>
        <th style="text-align:left;">clock</th>
        <th style="text-align:left; padding-left: 10px;">task</th>
    </thead>
    <tbody>
        <?php
            foreach ($synopsis as $task) {
        ?>
        <tr>
            <td><?php echo date("g:i:a", $task->time);?></td>
            <td style="padding-left: 10px;"><?php echo $task->task?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<hr>
<div>Comment on this report here: <?php echo site_url() . 'report/' . $hash;?></div>
<hr>
<div>
	<div style="font-size:10px">&copy; 2013 - <a href="http://synopsis.ablitica.com" target="_blank">synopsis.ablitica.com</a> - All Rights Reserved. Powered by <a href="http://ablitica.com" target="_blank">Ablitica</a></div>
</div>