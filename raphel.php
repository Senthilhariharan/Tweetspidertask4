<?php include "twitteroauth/twitteroauth.php"; ?>
<?php
// Turn off all error reporting
error_reporting(0);
?>
<?php
$consumer = "yaabrMzig0spRpUHySamRl77w";
$consumersecret ="MpGwpxuAB6Fqdbjz4Bx1VoIUS7zz4KsWjtPs1DzbQf519mctyp";
$accesstoken ="2602792340-iHrEyDieEEVEc9Bux9ZrUpjloAUhd6XSzZ1sawt";
$accesstokensecret ="FswUuccVFMZ3ckq1AmQIyeBzIqmQMgVTYwjEwCLq0iyG3";
$twitter = new TwitterOAuth($consumer,$consumersecret,$accesstoken,$accesstokensecret);
$BRA=0;
$COL=0;
$CRO=0;
$MEX=0;
$CMR=0;
$ESP=0;
$NED=0;
$CHI=0;
$AUS=0;
$GRE=0;
$CIV=0;
$JPN=0;
$URU=0;
$CRC=0;
$ENG=0;
$ITA=0;
$SUI=0;
$ECU=0;
$FRA=0;
$HON=0;
$ARG=0;
$BIH=0;
$IRN=0;
$NGA=0;
$GER=0;
$POR=0;
$GHA=0;
$USA=0;
$BEL=0;
$ALG=0;
$RUS=0;
$KOR=0;
?>
<?php 

$tweets = $twitter -> get('https://api.twitter.com/1.1/search/tweets.json?q=FIFA&lang=en&result_type=recent&count=50');
foreach($tweets as $tweet){
foreach($tweet as $t)
{

if (@strpos($t->text,'#BRA') !== false) {
    $BRA++;
}
if (@strpos($t->text,'#CRO') !== false) {
    $CRO++;
}
if (@strpos($t->text,'#MEX') !== false) {
    $MEX++;
}
if (@strpos($t->text,'#CMR') !== false) {
    $CMR++;
}
if (@strpos($t->text,'#ESP') !== false) {
    $ESP++;
}
if (@strpos($t->text,'#NED') !== false) {
    $NED++;
}
if (@strpos($t->text,'#CHI') !== false) {
    $CHI++;
}
if (@strpos($t->text,'#AUS') !== false) {
    $AUS++;
}
if (@strpos($t->text,'#COL') !== false) {
    $COL++;
}
if (@strpos($t->text,'#GRE') !== false) {
    $GRE++;
}
if (@strpos($t->text,'#CIV') !== false) {
    $CIV++;
}
if (@strpos($t->text,'#JPN') !== false) {
    $JPN++;
}
if (@strpos($t->text,'#URU') !== false) {
    $URU++;
}
if (@strpos($t->text,'#CRC') !== false) {
    $CRC++;
}
if (@strpos($t->text,'#ENG') !== false) {
    $ENG++;
}
if (@strpos($t->text,'#ITA') !== false) {
    $ITA++;
}
if (@strpos($t->text,'#SUI') !== false) {
    $SUI++;
}
if (@strpos($t->text,'#ECU') !== false) {
    $ECU++;
}
if (@strpos($t->text,'#FRA') !== false) {
    $FRA++;
}
if (@strpos($t->text,'#HON') !== false) {
    $HON++;
}
if (@strpos($t->text,'#ARG') !== false) {
    $ARG++;
}
if (@strpos($t->text,'#BIH') !== false) {
    $BIH++;
}
if (@strpos($t->text,'#IRN') !== false) {
    $IRN++;
}
if (@strpos($t->text,'#NGA') !== false) {
    $NGA++;
}
if (@strpos($t->text,'#GER') !== false) {
    $GER++;
}
if (@strpos($t->text,'#POR') !== false) {
    $POR++;
}
if (@strpos($t->text,'#GHA') !== false) {
    $GHA++;
}
if (@strpos($t->text,'#USA') !== false) {
    $USA++;
}
if (@strpos($t->text,'#BEL') !== false) {
    $BEL++;
}
if (@strpos($t->text,'#ALG') !== false) {
    $ALG++;
}
if (@strpos($t->text,'#RUS') !== false) {
    $RUS++;
}
if (@strpos($t->text,'#KOR') !== false) {
    $KOR++;
}



}
}
?>
<?php
$total=$BRA+$COL+$CRO+$MEX+$CMR+$ESP+$NED+$CHI+$AUS+$GRE+$CIV+$JPN+$URU+$CRC+$ENG+$ITA+$SUI+$ECU+$FRA+$HON+$ARG+
$BIH+$IRN+$NGA+$GER+$POR+$GHA+$USA+$BEL+$ALG+$RUS+$KOR;
$BRAP=($BRA/$total)*100;
$COLP=($COL/$total)*100;
$CROP=($CRO/$total)*100;
$MEXP=($MEX/$total)*100;
$CMRP=($CMR/$total)*100;
$ESPP=($ESP/$total)*100;
$NEDP=($NED/$total)*100;
$CHIP=($CHI/$total)*100;
$AUSP=($AUS/$total)*100;
$GREP=($GRE/$total)*100;
$CIVP=($CIV/$total)*100;
$JPNP=($JPN/$total)*100;
$URUP=($URU/$total)*100;
$CRCP=($CRC/$total)*100;
$ENGP=($ENG/$total)*100;
$ITAP=($ITA/$total)*100;
$SUIP=($SUI/$total)*100;
$ECUP=($ECU/$total)*100;
$FRAP=($FRA/$total)*100;
$HONP=($HON/$total)*100;
$ARGP=($ARG/$total)*100;
$BIHP=($BIH/$total)*100;
$IRNP=($IRN/$total)*100;
$NGAP=($NGA/$total)*100;
$GERP=($GER/$total)*100;
$PORP=($POR/$total)*100;
$GHAP=($GHA/$total)*100;
$USAP=($USA/$total)*100;
$BELP=($BEL/$total)*100;
$ALGP=($ALG/$total)*100;
$RUSP=($RUS/$total)*100;
$KORP=($KOR/$total)*100;


?>

<html lang="en">



    <head>
        <meta charset="utf-8">
        <title>Raphaël · Pie Chart</title>
        <link rel="stylesheet" href="demo.css"media="screen">
        <link rel="stylesheet" href="demo-print.css"media="print">
        <script src="raphael.js"></script>
        <script src="jquery.js"></script>
        <script src="pie.js"></script>
        <style media="screen">
            #holder {
                margin: -350px 0 0 -350px;
                width: 700px;
                height: 700px;
            }
			#wrapper {
  margin: 10px;
}


.menu,
.sub-menu {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  background-color: #3E454D;
  cursor: pointer;
  position: relative;
  transition: background-color .5s;
  -moz-transition: background-color .5s;
  -o-transition: background-color .5s;
  -webkit-transition: background-color .5s;
  
}

.menu li:hover {
  background-color: #353B41 ;
  }

.menu a {
  color: #FFF;
  display: block;
  font-family: 'Open Sans', sans-serif;
  font-size: 14px;
  height: 100%;
  margin: 0 5px;
  overflow: hidden;
  position: relative;
  text-align: center;
  text-decoration: none;
  text-transform: uppercase;
  word-wrap: break-word;
}

.menu a:hover {
 
  color: #FFF;
}

.menu {
  
  height: 90px;
}

.menu > li {
  float: left;
  height: 100%;
  width: 15%; 
  width: calc((100% - 90px) / 2);
  width: -moz-calc((100% - 90px) / 2);
  width: -webkit-calc((100% - 90px) / 2);
  
}

.menu > li.home {
  background: #3E454D url(http://icons.iconarchive.com/icons/visualpharm/icons8-metro-style/48/Very-Basic-Home-icon.png) center no-repeat ;
  
  width: 90px;
}

.menu > li.current {
  background-color: #F2762E ; 
 
  
  
}

.menu > li.home > a {
  color: transparent ;
}

.menu > li > a > span {
  left: 0; 
  position: absolute;
  right: 0;
  top: 50%;
  
  
}
        </style>
    </head>
    <body>
	<div id="wrapper">
      <nav>
        <ul class="menu">
          <li class="home current"><a href="about.html"><span>Home</span></a></li>
          
          <li><a href="twitter_login.php"><span>FIFA TWEETS</span></a>
          
             
          </li>
          
          <li><a href="raphel.php"><span>TWEET STATS</span></a></li>
        </ul>
      </nav>
    </div>
	<h2>Twitter Team Battle</p>
	
        <table>
            <tbody>
                <tr>
                    <th scope="row">Brazil</th>
                    <td><?=$BRAP?></td>
                </tr>
                <tr>
                    <th scope="row">COLUMBIA</th>
                    <td><?=$COLP?></td>
                </tr>
                <tr>
                    <th scope="row">Croatia</th>
                    <td><?=$CROP?></td>
                </tr>
                <tr>
                    <th scope="row">Mexico</th>
                    <td><?=$MEXP?></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?=$CMRP?></td>
                </tr>
                <tr>
                    <th scope="row">Spain</th>
                    <td><?=$ESPP?></td>
                </tr>
                <tr>
                    <th scope="row">Netherlands</th>
                    <td><?=$NEDP?></td>
                </tr>
                <tr>
                    <th scope="row">China</th>
                    <td><?=$CHIP?></td>
                </tr>
                <tr>
                    <th scope="row">Australia</th>
                    <td><?=$AUSP?></td>
                </tr>
                <tr>
                    <th scope="row">Greece</th>
                    <td><?=$GREP?></td>
                </tr>
				<tr>
                    <th scope="row"></th>
                    <td><?=$CIVP?></td>
                </tr>
				<tr>
                    <th scope="row">Japan</th>
                    <td><?=$JPNP?></td>
                </tr>
				<tr>
                    <th scope="row">Uruguay</th>
                    <td><?=$URUP?></td>
                </tr>
				<tr>
                    <th scope="row"></th>
                    <td><?=$CRCP?></td>
                </tr>
				<tr>
                    <th scope="row">England</th>
                    <td><?=$ENGP?></td>
                </tr>
				<tr>
                    <th scope="row">Italy</th>
                    <td><?=$ITAP?></td>
                </tr>
				<tr>
                    <th scope="row"></th>
                    <td><?=$SUIP?></td>
                </tr>
				<tr>
                    <th scope="row"></th>
                    <td><?=$ECUP?></td>
                </tr>
				<tr>
                    <th scope="row">France</th>
                    <td><?=$FRAP?></td>
                </tr>
				<tr>
                    <th scope="row"></th>
                    <td><?=$HONP?></td>
                </tr>
				<tr>
                    <th scope="row">Argentina</th>
                    <td><?=$ARGP?></td>
                </tr>
				<tr>
                    <th scope="row"></th>
                    <td><?=$BIHP?></td>
                </tr>
				<tr>
                    <th scope="row"></th>
                    <td><?=$IRNP?></td>
                </tr>
				<tr>
                    <th scope="row">Nigeria</th>
                    <td><?=$NGAP?></td>
                </tr>
				<tr>
                    <th scope="row">Germany</th>
                    <td><?=$GERP?></td>
                </tr>
				<tr>
                    <th scope="row"></th>
                    <td><?=$PORP?></td>
                </tr>
				<tr>
                    <th scope="row">Ghana</th>
                    <td><?=$GHAP?></td>
                </tr>
				<tr>
                    <th scope="row">USA</th>
                    <td><?=$USAP?></td>
                </tr>
				<tr>
                    <th scope="row">Belgium</th>
                    <td><?=$BELP?></td>
                </tr>
				<tr>
                    <th scope="row"></th>
                    <td><?=$ALGP?></td>
                </tr>
				<tr>
                    <th scope="row"></th>
                    <td><?=$RUSP?></td>
                </tr>
				<tr>
                    <th scope="row">Korea</th>
                    <td><?=$KORP?></td>
                </tr>
            </tbody>
        </table>
        <div id="holder">
		
		</div>
        
    </body>
</html>
