<?php
function is_odd_post(){
	global $wp_query;
	return ((($wp_query->current_post+1) % 2) === 1);
}