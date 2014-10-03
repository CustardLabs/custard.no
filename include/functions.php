<?php
function getTimeSince($dateString) {
  $currentTimestamp = time();
  $sinceTimestamp   = strtotime($dateString);
  
  $minutesSince          = ($currentTimestamp - $sinceTimestamp) / 60;
  $daysSince             = floor ($minutesSince / 1440);
  $remainingHoursSince   = floor (($minutesSince - $daysSince * 1440) / 60);
  $remainingMinutesSince = $minutesSince - ($daysSince * 1440) - ($remainingHoursSince * 60);

  return array("days" => $daysSince, "hours" => $remainingHoursSince, "minutes" => $remainingMinutesSince);
}
