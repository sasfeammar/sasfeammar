<?php

require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

echo 'Username: ';
$username = trim(fgets(STDIN));

if($username == "@ammarssf") {

$consumer_key = 'YoKO9xS2PgFwOsHEU1K96xbKO';
$consumer_secret = '7DfcBU39wa3edqW8LPcZ8evl7KqTTknVNA11jcHz2vIyWjUHUG';
$access_token = '1481992005303812097-6kfILnlYdCTNZkhnc7raawgizo54sD';
$access_token_secret = 'O531qHOCOGGUh26Mq1djJt9NlK9baN1q8i8AQxQMs4LxN';
$screenName = '@ammarssf';

} elseif ($username == "@sasfee2") {

$consumer_key = 'YoKO9xS2PgFwOsHEU1K96xbKO';
$consumer_secret = '7DfcBU39wa3edqW8LPcZ8evl7KqTTknVNA11jcHz2vIyWjUHUG';
$access_token = '1486751212896587776-x3jjKoBx7Dx00bFEkjkWyaPwDxdwNb';
$access_token_secret = 'qm988W1plW6g42K5kmC17ewtG7rZsQ7KwI5S2zja0RNOm';
$screenName = '@ammarssf';

} else {
echo 'username tidak ada di database';
}

$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);

function clearRTs($connection, $screenName) {
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
	return $lastTweet;
}

if(clearRTs($connection, $screenName)) {
	echo '<p style="color:green">berhasil menghapus :</p> [<p style="color:syan"> '.$lastTweet.' ]</p>';
} else {
	echo '<p style="color:green">oops.. ada yang error</p>';
}


?>
