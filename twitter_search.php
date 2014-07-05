<?php
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "2602792340-iHrEyDieEEVEc9Bux9ZrUpjloAUhd6XSzZ1sawt",
    'oauth_access_token_secret' => "FswUuccVFMZ3ckq1AmQIyeBzIqmQMgVTYwjEwCLq0iyG3",
    'consumer_key' => "yaabrMzig0spRpUHySamRl77w",
    'consumer_secret' => "MpGwpxuAB6Fqdbjz4Bx1VoIUS7zz4KsWjtPs1DzbQf519mctyp"
);

/** Note: Set the GET field BEFORE calling buildOauth(); **/
$url = 'https://api.twitter.com/1.1/search/tweets.json';
$requestMethod = 'GET';
$hashtag = '#senthil';
$getfield = '?q=%23'.$hashtag.'&result_type=recent&include_entities=true&count=100';

// Perform the request
$twitter = new TwitterAPIExchange($settings);


$json_output = $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();

// Let's calculate how many results we got
$json = json_decode($json_output);
$n = count($json->statuses);
echo $n;
?>