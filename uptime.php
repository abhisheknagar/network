Uptime: <?=`uptime;`?>
<br>

<?php

  $sysdata =`uptime;`;
  $uptime = explode(' up ', $sysdata);
  $uptime = explode(',', $uptime[1]);
  $uptime = $uptime[0].', '.$uptime[1].' hrs';

  echo ('Formatted Uptime: '.$uptime);
?>
