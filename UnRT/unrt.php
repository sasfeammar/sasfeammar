<?php
require "config.php";

function clearRTs($connection, $screenName)
{
	$statuses = $connection->get("statuses/user_timeline", ["screen_ name" => $screenName, "count" => 200, "exclude_replies" => true]);
	
	foreach ($statuses as $tweet) {
		if (substr($tweet->text, 0, 2) == "RT")
			$unRT = $connection->post("statuses/unretweet/".$tweet->id);
		$lastTweet = $tweet->id;
	}
	
	while ($lastTweet != $statuses[0]->id) {
		$statuses = $connection->get("statuses/user_timeline", ["screen_ name" => $screenName, "count" => 200, "max_id" => $lastTweet, "exclude_replies" => true]);
		foreach ($statuses as $tweet) {
			if (substr($tweet->text, 0, 2) == "RT")
				$unRT = $connection->post("statuses/unretweet/".$tweet->id);
			$lastTweet = $tweet->id;
		}
	}
}
?>