<?php
$category= isset($_GET['c']) ? $_GET['c'] : 'top';
$page= isset($_GET['p']) ? $_GET['p'] : 'list';
switch ($category) {
  case 'top':
    $contents_path = '/contents/top.php';
    break;
  case 'windows':
    switch ($page) {
      case 'list':
        $contents_path = '/contents/windows/list.php';
        break;
      default:
        $contents_path = '/contents/404.php';
        break;
    }
    break;
  case 'macos':
    switch ($page) {
      case 'list':
        $contents_path = '/contents/macos/list.php';
        break;
      default:
        $contents_path = '/contents/404.php';
        break;
    }
    break;
  case 'linux':
    switch ($page) {
      case 'list':
        $contents_path = '/contents/linux/list.php';
        break;
      default:
        $contents_path = '/contents/404.php';
        break;
    }
    break;
  case 'docker':
    switch ($page) {
      case 'list':
        $contents_path = '/contents/docker/list.php';
        break;
      default:
        $contents_path = '/contents/404.php';
        break;
    }
    break;
  case 'nginx':
    switch ($page) {
      case 'list':
        $contents_path = '/contents/nginx/list.php';
        break;
      default:
        $contents_path = '/contents/404.php';
        break;
    }
    break;
  case 'apache':
    switch ($page) {
      case 'list':
        $contents_path = '/contents/apache/list.php';
        break;
      default:
        $contents_path = '/contents/404.php';
        break;
    }
    break;
  case 'mysql':
    switch ($page) {
      case 'list':
        $contents_path = '/contents/mysql/list.php';
        break;
      default:
        $contents_path = '/contents/404.php';
        break;
    }
    break;
  case 'wordpress':
    switch ($page) {
      case 'list':
        $contents_path = '/contents/wordpress/list.php';
        break;
      default:
        $contents_path = '/contents/404.php';
        break;
    }
    break;
  case 'vim':
    switch ($page) {
      case 'list':
        $contents_path = '/contents/vim/list.php';
        break;
      default:
        $contents_path = '/contents/404.php';
        break;
    }
    break;
  case 'vscode':
    switch ($page) {
      case 'list':
        $contents_path = '/contents/vscode/list.php';
        break;
      default:
        $contents_path = '/contents/404.php';
        break;
    }
    break;
  case 'office':
    switch ($page) {
      case 'list':
        $contents_path = '/contents/office/list.php';
        break;
      default:
        $contents_path = '/contents/404.php';
        break;
    }
    break;
  case 'git':
    switch ($page) {
      case 'list':
        $contents_path = '/contents/git/list.php';
        break;
      default:
        $contents_path = '/contents/404.php';
        break;
    }
    break;
  case 'vagrant':
    switch ($page) {
      case 'list':
        $contents_path = '/contents/vagrant/list.php';
        break;
      default:
        $contents_path = '/contents/404.php';
        break;
    }
    break;
  case 'wireshark':
    switch ($page) {
      case 'list':
        $contents_path = '/contents/wireshark/list.php';
        break;
      default:
        $contents_path = '/contents/404.php';
        break;
    }
    break;
  case 'html':
    switch ($page) {
      case 'list':
        $contents_path = '/contents/html/list.php';
        break;
      default:
        $contents_path = '/contents/404.php';
        break;
    }
    break;
  case 'javascript':
    switch ($page) {
      case 'list':
        $contents_path = '/contents/javascript/list.php';
        break;
      default:
        $contents_path = '/contents/404.php';
        break;
    }
    break;
  case 'php':
    switch ($page) {
      case 'list':
        $contents_path = '/contents/php/list.php';
        break;
      default:
        $contents_path = '/contents/404.php';
        break;
    }
    break;
  case 'ruby':
    switch ($page) {
      case 'list':
        $contents_path = '/contents/ruby/list.php';
        break;
      default:
        $contents_path = '/contents/404.php';
        break;
    }
    break;
  case 'bash':
    switch ($page) {
      case 'list':
        $contents_path = '/contents/bash/list.php';
        break;
      default:
        $contents_path = '/contents/404.php';
        break;
    }
    break;
  default:
    $contents_path = '/contents/404.php';
    break;
}
