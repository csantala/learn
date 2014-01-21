<?php  date_default_timezone_set($timezone); ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
	<title>Synopses Generator</title>
	<meta name="description" content="What is Snopzmini? How will it help me? Why would I want to record the steps I take to do something? Is this a security risk?">
	<meta name="author" content="Ablitica">
	<meta name="keywords" content="what is snopzmini.com, synopses generator, development, objectives, foo">

    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

    <!-- Excel-like css -->
    <link href="/css/excel-2013.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap -->
    <link href="/common/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="/common/bootstrap/css/responsive.css" rel="stylesheet" />

    <!-- Glyphicons Font Icons -->
    <link href="/common/theme/css/glyphicons.css" rel="stylesheet" />

    <!-- Uniform Pretty Checkboxes -->
    <link href="/common/theme/scripts/plugins/forms/pixelmatrix-uniform/css/uniform.default.css" rel="stylesheet" />

    <!-- Main Theme Stylesheet :: CSS -->
    <link href="/common/theme/css/style-light.css?1369753444" rel="stylesheet" />

    <!-- Excel-like css -->
    <link href="/css/excel-2007.css" rel="stylesheet" type="text/css" />

    <!-- General css -->
    <link href="/css/style.css" rel="stylesheet" type="text/css" />


    <!-- LESS.js Library -->
    <script src="/common/theme/scripts/plugins/system/less.min.js"></script>


</head>
<body class="">

     <!-- Content -->
    <div id="contentx">
        <div class="innerLR innerT">
	        <h4 class="heading edit_objective"><?php echo $objective; ?>&nbsp;&nbsp;&bull;&nbsp;<span><a data-project_id="<?php echo $project_id;?>" data-objective="<?php echo $objective;?>" id="set_objective">edit</a></span></h4>
	        <span class="details pull-right">
	        	<a href="/report/generate_report/<?php echo $project_id?>">report</a>
	        		&nbsp;&bull;&nbsp;
	        	<?php echo date('F j/y', $date) ?>, elapsed time: <span id="elapsed_time"></span></span>
	        <div class="row-fluid">
	            <form id="synopsis">
	                <div id="rows" style="min-height:500px;background-image:url('images/bg_3.jpg');" data-project_id="<?php echo $project_id?>" data-session="<?php echo $session?>">
	                    <table class="ExcelTable2013">
	                        <tr>
	                            <th></th>
	                            <th>start</th>
	                            <th>task</th>
	                        </tr>
	                            <?php
	                                $i = 1;
	                                foreach ($rows as $row) { ?>
	                                    <tr class="rowx">
	                                        <td class="heading"><?php echo $i; $i++; ?></td>
	                                        <td class="start">
	                                            <span data-time="<?php echo $row->time ?>"><?php echo date('g:i a', $row->time);?></span>
	                                        </td>
	                                        <td>
	                                            <input class="task" type="text" data-i="<?php echo $row->position; ?>" <?php if ($row->task != '') { ?> value="<?php echo $row->task; ?>"<?php } ?>/>
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
	        </div>
        </div>
        <!-- // Content END -->
        </div>
<div id="getlost">
        <?php // $this->load->view('/components/footer') ?>
</div>

    <?php $this->load->view('/components/themer') ?>
    <?php $this->load->view('/components/js_includes') ?>

</body>
</html>