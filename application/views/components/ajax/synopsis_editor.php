<?php date_default_timezone_set($timezone);?>
	<script type="text/javascript" src="/js/script.js"></script>
				<span class="synopsis">
		                <div class="rows" data-assignment_id="<?php echo $assignment_id?>" data-step_id="<?php echo $step_id?>" data-session="0">
		                    <table class="ExcelTable2013">
		                        <tr style="color:#bbb">
		                            <!--th></th>
		                            <th>task
		                            <span class="details pull-right">elapsed time: <span id="elapsed_time"></span>&nbsp;</span></th-->
		                        </tr>
		                            <?php
		                                foreach ($rows as $row) { ?>
		                                    <tr class="rowx">
		                                        <td class="start">
		                                        	<span data-time="<?php echo $row->time ?>"><?php echo date('g:i:s', $row->time);?></span>
		                                        </td>
		                                        <td>
		                                            <input data-time="<?php echo $row->time ?>" data-step_id="<?php echo $step_id?>" maxlength="300" class="task span6" type="text" data-i="<?php echo $row->position; ?>" <?php if ($row->task != '') { ?> value="<?php echo quotes_to_entities($row->task); ?>"<?php } ?>/>
		                                        </td>
		                                    </tr>
		                            <?php } ?>
		                    </table>
		                </div>
		            </span>