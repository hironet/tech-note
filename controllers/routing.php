<?php
function not_found() {
  global $contents_title;
  global $contents_path;
  $contents_title = 'Not Found';
  $contents_path = '/contents/404.php';
}

$category= isset($_GET['c']) ? $_GET['c'] : 'top';
$page= isset($_GET['p']) ? $_GET['p'] : 'list';
switch ($category) {
  case 'top':
    $contents_title = '';
    $contents_path = '/contents/top.php';
    break;
  case 'windows':
    switch ($page) {
      case 'list':
        $contents_title = 'Windows | ';
        $contents_path = '/contents/windows/list.php';
        $breadcrumb_list = ['Windows' => ''];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'macos':
    switch ($page) {
      case 'list':
        $contents_title = 'macOS | ';
        $contents_path = '/contents/macos/list.php';
        $breadcrumb_list = ['macOS' => ''];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'linux':
    switch ($page) {
      case 'list':
        $contents_title = 'Linux | ';
        $contents_path = '/contents/linux/list.php';
        $breadcrumb_list = ['Linux' => ''];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'docker':
    switch ($page) {
      case 'list':
        $contents_title = 'Docker | ';
        $contents_path = '/contents/docker/list.php';
        $breadcrumb_list = ['Docker' => ''];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'nginx':
    switch ($page) {
      case 'list':
        $contents_title = 'Nginx | ';
        $contents_path = '/contents/nginx/list.php';
        $breadcrumb_list = ['Nginx' => ''];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'apache':
    switch ($page) {
      case 'list':
        $contents_title = 'Apache | ';
        $contents_path = '/contents/apache/list.php';
        $breadcrumb_list = ['Apache' => ''];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'mysql':
    switch ($page) {
      case 'list':
        $contents_title = 'MySQL | ';
        $contents_path = '/contents/mysql/list.php';
        $breadcrumb_list = ['MySQL' => ''];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'wordpress':
    switch ($page) {
      case 'list':
        $contents_title = 'WordPress | ';
        $contents_path = '/contents/wordpress/list.php';
        $breadcrumb_list = ['WordPress' => ''];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'vim':
    switch ($page) {
      case 'list':
        $contents_title = 'Vim | ';
        $contents_path = '/contents/vim/list.php';
        $breadcrumb_list = ['Vim' => ''];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'vscode':
    switch ($page) {
      case 'list':
        $contents_title = 'Visual Studio Code | ';
        $contents_path = '/contents/vscode/list.php';
        $breadcrumb_list = ['Visual Studio Code' => ''];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'office':
    switch ($page) {
      case 'list':
        $contents_title = 'Microsoft Office | ';
        $contents_path = '/contents/office/list.php';
        $breadcrumb_list = ['Microsoft Office' => ''];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'git':
    switch ($page) {
      case 'list':
        $contents_title = 'Git | ';
        $contents_path = '/contents/git/list.php';
        $breadcrumb_list = ['Git' => ''];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'vagrant':
    switch ($page) {
      case 'list':
        $contents_title = 'Vagrant | ';
        $contents_path = '/contents/vagrant/list.php';
        $breadcrumb_list = ['Vagrant' => ''];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'wireshark':
    switch ($page) {
      case 'list':
        $contents_title = 'Wireshark | ';
        $contents_path = '/contents/wireshark/list.php';
        $breadcrumb_list = ['Wireshark' => ''];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'html':
    switch ($page) {
      case 'list':
        $contents_title = 'HTML/CSS | ';
        $contents_path = '/contents/html/list.php';
        $breadcrumb_list = ['HTML/CSS' => ''];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'javascript':
    switch ($page) {
      case 'list':
        $contents_title = 'JavaScript | ';
        $contents_path = '/contents/javascript/list.php';
        $breadcrumb_list = ['JavaScript' => ''];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'php':
    switch ($page) {
      case 'list':
        $contents_title = 'PHP | ';
        $contents_path = '/contents/php/list.php';
        $breadcrumb_list = ['PHP' => ''];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'ruby':
    switch ($page) {
      case 'list':
        $contents_title = 'Ruby | ';
        $contents_path = '/contents/ruby/list.php';
        $breadcrumb_list = ['Ruby' => ''];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'bash':
    switch ($page) {
      case 'list':
        $contents_title = 'Bash | ';
        $contents_path = '/contents/bash/list.php';
        $breadcrumb_list = ['Bash' => ''];
        break;
      default:
        not_found();
        break;
    }
    break;
  default:
    not_found();
    break;
}
