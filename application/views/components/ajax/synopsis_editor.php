	<script type="text/javascript" src="/js/script.js"></script>
				<form class="synopsis">
		                <div class="rows" data-assignment_id="<?php echo $assignment_id?>"  data-step_id="<?php echo $step_id?>" data-session="0">
		                    <table class="ExcelTable2013">
		                        <tr style="color:#bbb">
		                            <th></th>
		                            <th></th>
		                            <th>task
		                            <span class="details pull-right">elapsed time: <span id="elapsed_time"></span>&nbsp;</span></th>
		                        </tr>
		                            <?php
		                                $i = 1;
		                                foreach ($rows as $row) { ?>
		                                    <tr class="rowx">

		                                        <td class="start">
		                                            <span data-time="<?php echo $row->time ?>"><?php echo date('g:i a', $row->time);?></span>
		                                        </td>
		                                        <td>
		                                            <input maxlength="300" class="task" type="text" data-i="<?php echo $row->position; ?>" <?php if ($row->task != '') { ?> value="<?php echo $row->task; ?>"<?php } ?>/>
		                                        </td>
		                                    </tr>
		                            <?php } ?>
		                            <?php
		                            //	if (count($rows) < 8) { ?>
		                        		<?php // for ($x = count($rows); $x<9; $x++) { ?>
		                            	     <!--tr class="rowx">
		                                        <td class="heading"><?php echo $i; $i++; ?></td>
		                                        <td class="start">
		                                            <span data-time="<?php echo $row->time ?>"></span>
		                                        </td>
		                                        <td>
		                                            <input class="task" type="text" data-i="<?php echo $row->position; ?>" <?php if ($row->task != '') { ?> value="<?php echo $row->task; ?>"<?php } ?>/>
		                                        </td>
		                                    </tr>

		                                    <?php //} ?>
		                            <?php //} ?> -->
		                    </table>
		                </div>
		            </form>

        		<div id="done">
        			<a class="btn primary confirm" href="/generate/generate_report/<?php echo $step_id?>/<?php echo $assignment_id?>">SUBMIT SYNOPSIS</a>
        		</div>