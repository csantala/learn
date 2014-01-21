<?php

// remove http/s
function site_link($url) {
	$url = preg_replace('#^https?://#', '', $url);
	return rtrim($url,'/');
}

# dumps to screen objects or arrays with carriage returns.
function ds($item, $die = false) {
	echo "<pre>"; print_r($item); echo "</pre>";
	if ($die) die;
}

function check_for_user() {
	$CI =& get_instance();
	$user_data = $CI->session->userdata;
	// show 404 if not logged on
	if (! isset($user_data['user_level'])) {
		show_404();
	}
}

function check_for_admin() {
	$CI =& get_instance();
	// show 404 if non-admin users access admin section
	if ($CI->session->userdata('user_level') != 'administrator') {
		show_404();
	}
}

function is_admin() {
	$CI =& get_instance();
	if ($CI->session->userdata('user_level') == 'administrator') {
		return true;
	} else {
		return false;
	}
}

function elapsed_time($seconds) {
    $minutes = floor($seconds / 60);
    $hours = floor($minutes / 60);
    $seconds = $seconds % 60;
    $minutes = $minutes % 60;

    $format = '%u:%02u:%02u';
    $time = sprintf($format, $hours, $minutes, $seconds);
    return $time;
}

/*
 * force_ssl()
 *
 * Usage: Simply call force_ssl() from within any controller method (or the constructor).
 * The user will be redirected to https:// if needed.
 * Also, https:// will show up correctly on any of the other URL helpers used AFTER force_ssl() is called.
 */
function force_ssl()
{
    $CI =& get_instance();
    $CI->config->config['base_url'] = str_replace('http://', 'https://', $CI->config->config['base_url']);
    if ($_SERVER['SERVER_PORT'] != 443)
    {
        redirect($CI->uri->uri_string());
    }
}

function timezones() {
	$list = DateTimeZone::listAbbreviations();
    $idents = DateTimeZone::listIdentifiers();

    $data = $offset = $added = array();
    foreach ($list as $abbr => $info) {
        foreach ($info as $zone) {
            if ( ! empty($zone['timezone_id'])
                AND
                ! in_array($zone['timezone_id'], $added)
                AND
                  in_array($zone['timezone_id'], $idents)) {
                $z = new DateTimeZone($zone['timezone_id']);
                $c = new DateTime(null, $z);
                $zone['time'] = $c->format('H:i a');
                $data[] = $zone;
                $offset[] = $z->getOffset($c);
                $added[] = $zone['timezone_id'];
            }
        }
    }

    array_multisort($offset, SORT_ASC, $data);
    $options = array();
    foreach ($data as $key => $row) {
        $options[$row['timezone_id']] = $row['time'] . ' - '
                                        . formatOffset($row['offset'])
                                        . ' ' . $row['timezone_id'];
    }
	return $options;
}


function formatOffset($offset) {
        $hours = $offset / 3600;
        $remainder = $offset % 3600;
        $sign = $hours > 0 ? '+' : '-';
        $hour = (int) abs($hours);
        $minutes = (int) abs($remainder / 60);

        if ($hour == 0 AND $minutes == 0) {
            $sign = ' ';
        }
        return 'GMT' . $sign . str_pad($hour, 2, '0', STR_PAD_LEFT)
                .':'. str_pad($minutes,2, '0');
}

function pluralize($str) {
	$last = $str[strlen($str)-1];
	if ($last == 's') { $pluralize = "'"; } else { $pluralize = "'s"; }
	return $str.$pluralize;
}

function timezoner() {
	$CI =& get_instance();
	//error_log($CI->session->userdata('user_timezone'));
	date_default_timezone_set($CI->session->userdata('user_timezone'));
}

function random_string() {
	$length = 20;
	$random_string = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
	return $random_string;
}

function check_cookie($page) {
	$CI =& get_instance();
	$token = get_cookie('rmt');
	if ($token) {
		 $query = $CI->db->get_where('users', array('remember' => $token));
		$result = $query->result();
		if (! empty($result)) {
			$e = $CI->simpleloginsecure->login($result[0]->user_email,$result[0]->user_pass);
			if ($e) { redirect($page); }
		}
	}
}

function package($synopses) {
		$synopses = array();
		$synopses_index = array();
		$synopsis = array();
		foreach ($rows as $row) {
			if (! in_array($row->session, $synopses_index)) {
				$synopses_index[] = $row->session;
			}
		}
		foreach ($synopses_index as $synopsis) {
			foreach($rows as $row) {
				if ($row->session == $synopsis) {
					$synopses[$synopsis][] =  $row;
				}
			}
		}

		return $synopses;
}

function projects() {
    // populate projects portion
    $CI =& get_instance();
    $CI->load->model('Project_model');
    $projects = $CI->Project_model->projects();
    return $projects;
}
