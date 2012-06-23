<?php
echo "<title>ping test</title>";


// a ping test
function do_ping($host, $fping, $p_result) {
$fping = exec("ping $host -c1 -w2 | awk '/time/ {print $8}' | head -1 | awk -F '=' '{print $2}'");

if ($fping >= "0") {
echo "<font face=Verdana>Latency to host <b>$host</b> is <b>$fping ms.</b><br/></font>";
} else if ($fping == "") {
echo "<font face=Verdana>Host <b>$host</b> is not responding to ping.<br/></font>";
//you may add scripts here to trigger an sms email etc
}

}
do_ping("ns1.domainnamrerecord.com", $fping, $p_result);

// in case you want to check a webserver i.e port 80 


$server  = "kashipur.net";
  $port   = "80";
  $timeout = "10";

  if ($server and $port and $timeout) {
    $verbinding =  @fsockopen("$server", $port, $errno, $errstr, $timeout);
  }
  if($verbinding) {
    echo "$server is online";
  }
  else {
    echo "$server 80 is offline";
//you may add scripts here to trigger an sms email etc
  }
?>
