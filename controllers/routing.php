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
        $meta_description = 'このページには、Windowsに関する情報をまとめています。';
        $meta_keywords = 'windows';
        $contents_title = 'Windows';
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
        $meta_description = 'このページには、macOSに関する情報をまとめています。';
        $meta_keywords = 'macos,mac';
        $contents_title = 'macOS';
        $contents_path = '/contents/macos/list.php';
        $breadcrumb_list = ['macOS' => ''];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'linux':
    $descriptions = [
      'command' => '知っておくと色んな場面で便利になるコマンドの使い方を紹介しています。',
      'centos7-setting' => 'CentOS 7.xを使用するにあたって、よく行う設定を紹介しています。',
    ];
    $descriptions = array_merge($descriptions, array_values($descriptions));

    $keywords = [
      'command' => 'linux,command',
      'centos7-setting' => 'linux,centos,設定',
    ];
    $keywords = array_merge($keywords, array_values($keywords));

    $titles = [
      'command' => 'Linuxコマンドの便利な使い方',
      'centos7-setting' => 'CentOS 7.x 設定方法',
    ];
    $titles = array_merge($titles, array_values($titles));

    $links = [
      'command' => '.?c=linux&p=command',
      'centos7-setting' => '.?c=linux&p=centos7-setting',
    ];
    $links = array_merge($links, array_values($links));

    $breadcrumb_list = ['Linux' => '.?c=linux'];

    switch ($page) {
      case 'list':
        $meta_description = 'このページには、Linuxに関する情報をまとめています。';
        $meta_keywords = 'linux';
        $contents_title = 'Linux';
        $contents_path = '/contents/list.php';
        $breadcrumb_list = ['Linux' => ''];
        break;
      case 'command':
        $meta_description = $descriptions['command'];
        $meta_keywords = $keywords['command'];
        $contents_title = $titles['command'];
        $contents_path = '/contents/linux/command.php';
        break;
      case 'centos7-setting':
        $meta_description = $descriptions['centos7-setting'];
        $meta_keywords = $keywords['centos7-setting'];
        $contents_title = $titles['centos7-setting'];
        $contents_path = '/contents/linux/centos7-setting.php';
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'docker':
    switch ($page) {
      case 'list':
        $meta_description = 'このページには、Dockerに関する情報をまとめています。';
        $meta_keywords = 'docker';
        $contents_title = 'Docker';
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
        $meta_description = 'このページには、Nginxに関する情報をまとめています。';
        $meta_keywords = 'nginx';
        $contents_title = 'Nginx';
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
        $meta_description = 'このページには、Apacheに関する情報をまとめています。';
        $meta_keywords = 'apache';
        $contents_title = 'Apache';
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
        $meta_description = 'このページには、MySQLに関する情報をまとめています。';
        $meta_keywords = 'mysql';
        $contents_title = 'MySQL';
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
        $meta_description = 'このページには、WordPressに関する情報をまとめています。';
        $meta_keywords = 'wordpress';
        $contents_title = 'WordPress';
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
        $meta_description = 'このページには、Vimに関する情報をまとめています。';
        $meta_keywords = 'vim,vi';
        $contents_title = 'Vim';
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
        $meta_description = 'このページには、Visual Studio Codeに関する情報をまとめています。';
        $meta_keywords = 'visual studio code,vscode';
        $contents_title = 'Visual Studio Code';
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
        $meta_description = 'このページには、Microsoft Officeに関する情報をまとめています。';
        $meta_keywords = 'microsoft office,ms office,office';
        $contents_title = 'Microsoft Office';
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
        $meta_description = 'このページには、Gitに関する情報をまとめています。';
        $meta_keywords = 'git';
        $contents_title = 'Git';
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
        $meta_description = 'このページには、Vagrantに関する情報をまとめています。';
        $meta_keywords = 'vagrant';
        $contents_title = 'Vagrant';
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
        $meta_description = 'このページには、Wiresharkに関する情報をまとめています。';
        $meta_keywords = 'wireshark';
        $contents_title = 'Wireshark';
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
        $meta_description = 'このページには、HTML/CSSに関する情報をまとめています。';
        $meta_keywords = 'html,css';
        $contents_title = 'HTML/CSS';
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
        $meta_description = 'このページには、JavaScriptに関する情報をまとめています。';
        $meta_keywords = 'javascript,js';
        $contents_title = 'JavaScript';
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
        $meta_description = 'このページには、PHPに関する情報をまとめています。';
        $meta_keywords = 'php';
        $contents_title = 'PHP';
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
        $meta_description = 'このページには、Rubyに関する情報をまとめています。';
        $meta_keywords = 'ruby';
        $contents_title = 'Ruby';
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
        $meta_description = 'このページには、Bashに関する情報をまとめています。';
        $meta_keywords = 'bash';
        $contents_title = 'Bash';
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
