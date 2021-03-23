<?php
function get_mtime($file) {
  return date('Y-m-d H:m:s', filemtime($file));
}

function get_time_iso8601($time) {
  $dt = new DateTime($time);
  return $dt->format(DateTime::ATOM);
}

function get_date_jp($time) {
  $dt = new DateTime($time);
  return $dt->format('Y年m月d日');
}
