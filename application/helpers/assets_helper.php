<?php

if (!function_exists('assets')) {
	function assets($url)
	{
		return base_url("assets" . '/' . $url);
	}
}


if (!function_exists('css')) {
	function css($url)
	{
		return strpos($url, '.css?v')  ? assets("$url") : assets("$url.css");
	}
}

if (!function_exists('js')) {
	function js($url)
	{
		return strpos($url, '.js?v')  ? assets("$url") : assets("$url.js");
	}
}

if (!function_exists('img')) {
	function img($url)
	{
		return assets("$url");
	}
}


if (!function_exists('font')) {
	function font($url)
	{
		return assets("font/$url");
	}
}

if ( ! function_exists('theme_css')) {
	function theme_css($nom) {
		return assets('theme/css/' . $nom .'.css');
	}
}


