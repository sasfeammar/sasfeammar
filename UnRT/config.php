<?php
	require "twitteroauth/autoload.php";
	use Abraham\TwitterOAuth\TwitterOAuth;
	$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
?>