<?php
$page= isset($_GET['p']) ? $_GET['p'] : 'top';
switch ($page) {
  case 'top':
    include_once(__DIR__ . '/../contents/top.php');
    break;
  case 'windows':
    include_once(__DIR__ . '/../contents/windows/list.php');
    break;
  case 'macos':
    include_once(__DIR__ . '/../contents/macos/list.php');
    break;
  case 'linux':
    include_once(__DIR__ . '/../contents/linux/list.php');
    break;
  case 'docker':
    include_once(__DIR__ . '/../contents/docker/list.php');
    break;
  case 'nginx':
    include_once(__DIR__ . '/../contents/nginx/list.php');
    break;
  case 'apache':
    include_once(__DIR__ . '/../contents/apache/list.php');
    break;
  case 'mysql':
    include_once(__DIR__ . '/../contents/mysql/list.php');
    break;
  case 'wordpress':
    include_once(__DIR__ . '/../contents/wordpress/list.php');
    break;
  case 'vim':
    include_once(__DIR__ . '/../contents/vim/list.php');
    break;
  case 'vscode':
    include_once(__DIR__ . '/../contents/vscode/list.php');
    break;
  case 'office':
    include_once(__DIR__ . '/../contents/office/list.php');
    break;
  case 'git':
    include_once(__DIR__ . '/../contents/git/list.php');
    break;
  case 'vagrant':
    include_once(__DIR__ . '/../contents/vagrant/list.php');
    break;
  case 'wireshark':
    include_once(__DIR__ . '/../contents/wireshark/list.php');
    break;
  case 'html':
    include_once(__DIR__ . '/../contents/html/list.php');
    break;
  case 'javascript':
    include_once(__DIR__ . '/../contents/javascript/list.php');
    break;
  case 'php':
    include_once(__DIR__ . '/../contents/php/list.php');
    break;
  case 'ruby':
    include_once(__DIR__ . '/../contents/ruby/list.php');
    break;
  case 'bash':
    include_once(__DIR__ . '/../contents/bash/list.php');
    break;
  default:
    include_once(__DIR__ . '/../contents/404.php');
    break;
}
