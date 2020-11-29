<?php

/**
 * @author   Natan Felles <natanfelles@gmail.com>
 */
defined('BASEPATH') or exit('No direct script access allowed');


function xssclean($post)
{
  $rtn = true;
  if ($post) {
    foreach ($post as $key => $data) {
      if (preg_match("/</i", $data, $match)) {
        $rtn = false;
      }
    }
  }
  return $rtn;
}

function output($data)
{
  if (isset($data)) {
    return html_escape($data);
  } else {
    return '';
  }
}
