<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quotes {
	function randomQuote() {
		$quotes = file_get_contents(base_url() . 'quotations/quotes.txt');
		preg_match_all('/"([^"]+)"/', $quotes, $quotesArray);
		$totalQuotes = count($quotesArray[0]) -1;
		return $quotesArray[1][rand(0, $totalQuotes)];
	}
}