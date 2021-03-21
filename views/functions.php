<?php
function get_update_date($file) {
  return date('Y-m-d', filemtime($file));
}
