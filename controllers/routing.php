<?php
function article_list($category) {
  global $contents_title;
  global $contents_path;
  global $meta_description;
  global $meta_keywords;
  global $breadcrumb_list;

  $contents_title = $category;
  $contents_path = '/contents/list.php';
  $meta_description = "このページには、{$category}に関する情報をまとめています。";
  $meta_keywords = $category;
  $breadcrumb_list = [$category => ''];
}

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
    $titles = [
      'setting' => 'Windows 10の設定方法',
      'command' => 'Windows 10コマンドの便利な使い方',
      'keyboard' => 'Windows 10の便利なショートカットキー',
      'chocolatey' => 'Chocolateyの操作方法',
    ];

    $descriptions = [
      'setting' => 'Windows 10を便利にするための設定方法を紹介しています。',
      'command' => '知っておくと色んな場面で便利になるコマンドの使い方を紹介しています。',
      'keyboard' => '知っておくと色んな場面で便利になるショートカットキーの使い方を紹介しています。',
      'chocolatey' => 'Chocolateyの基本的な操作方法を紹介しています。',
    ];

    $keywords = [
      'setting' => 'windows 10,設定',
      'command' => 'windows 10,コマンド',
      'keyboard' => 'windows 10,ショートカットキー',
      'chocolatey' => 'chocolatey',
    ];

    $links = [
      'setting' => '.?c=windows&p=setting',
      'command' => '.?c=windows&p=command',
      'keyboard' => '.?c=windows&p=keyboard',
      'chocolatey' => '.?c=windows&p=chocolatey',
    ];

    switch ($page) {
      case 'list':
        article_list('Windows');
        break;
      case 'setting':
        $contents_title = $titles['setting'];
        $contents_path = '/contents/windows/setting.php';
        $meta_description = $descriptions['setting'];
        $meta_keywords = $keywords['setting'];
        $breadcrumb_list = ['Windows' => '.?c=windows'];
        break;
      case 'command':
        $contents_title = $titles['command'];
        $contents_path = '/contents/windows/command.php';
        $meta_description = $descriptions['command'];
        $meta_keywords = $keywords['command'];
        $breadcrumb_list = ['Windows' => '.?c=windows'];
        break;
      case 'keyboard':
        $contents_title = $titles['keyboard'];
        $contents_path = '/contents/windows/keyboard.php';
        $meta_description = $descriptions['keyboard'];
        $meta_keywords = $keywords['keyboard'];
        $breadcrumb_list = ['Windows' => '.?c=windows'];
        break;
      case 'chocolatey':
        $contents_title = $titles['chocolatey'];
        $contents_path = '/contents/windows/chocolatey.php';
        $meta_description = $descriptions['chocolatey'];
        $meta_keywords = $keywords['chocolatey'];
        $breadcrumb_list = ['Windows' => '.?c=windows'];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'macos':
    $titles = [
      'command' => 'macOSコマンドの便利な使い方',
      'keyboard' => 'macOSの便利なショートカットキー',
      'homebrew' => 'Homebrewの操作方法',
    ];

    $descriptions = [
      'command' => '知っておくと色んな場面で便利になるコマンドの使い方を紹介しています。',
      'keyboard' => '知っておくと色んな場面で便利になるショートカットキーの使い方を紹介しています。',
      'homebrew' => 'Homebrewの基本的な操作方法を紹介しています。',
    ];

    $keywords = [
      'command' => 'mac,コマンド',
      'keyboard' => 'mac,ショートカットキー',
      'homebrew' => 'mac,homebrew',
    ];

    $links = [
      'command' => '.?c=macos&p=command',
      'keyboard' => '.?c=macos&p=keyboard',
      'homebrew' => '.?c=macos&p=homebrew',
    ];

    switch ($page) {
      case 'list':
        article_list('macOS');
        break;
      case 'command':
        $contents_title = $titles['command'];
        $contents_path = '/contents/macos/command.php';
        $meta_description = $descriptions['command'];
        $meta_keywords = $keywords['command'];
        $breadcrumb_list = ['macOS' => '.?c=macos'];
        break;
      case 'keyboard':
        $contents_title = $titles['keyboard'];
        $contents_path = '/contents/macos/keyboard.php';
        $meta_description = $descriptions['keyboard'];
        $meta_keywords = $keywords['keyboard'];
        $breadcrumb_list = ['macOS' => '.?c=macos'];
        break;
      case 'homebrew':
        $contents_title = $titles['homebrew'];
        $contents_path = '/contents/macos/homebrew.php';
        $meta_description = $descriptions['homebrew'];
        $meta_keywords = $keywords['homebrew'];
        $breadcrumb_list = ['macOS' => '.?c=macos'];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'linux':
    $titles = [
      'command' => 'Linuxコマンドの便利な使い方',
      'centos7-setting' => 'CentOS 7.xの設定方法',
    ];

    $descriptions = [
      'command' => '知っておくと色んな場面で便利になるコマンドの使い方を紹介しています。',
      'centos7-setting' => 'CentOS 7.xを使用するにあたって、よく行う設定を紹介しています。',
    ];

    $keywords = [
      'command' => 'linux,コマンド',
      'centos7-setting' => 'linux,centos,設定',
    ];

    $links = [
      'command' => '.?c=linux&p=command',
      'centos7-setting' => '.?c=linux&p=centos7-setting',
    ];

    switch ($page) {
      case 'list':
        article_list('Linux');
        break;
      case 'command':
        $contents_title = $titles['command'];
        $contents_path = '/contents/linux/command.php';
        $meta_description = $descriptions['command'];
        $meta_keywords = $keywords['command'];
        $breadcrumb_list = ['Linux' => '.?c=linux'];
        break;
      case 'centos7-setting':
        $contents_title = $titles['centos7-setting'];
        $contents_path = '/contents/linux/centos7-setting.php';
        $meta_description = $descriptions['centos7-setting'];
        $meta_keywords = $keywords['centos7-setting'];
        $breadcrumb_list = ['Linux' => '.?c=linux'];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'docker':
    $titles = [
      'operation' => 'Dockerの操作方法',
    ];

    $descriptions = [
      'operation' => 'Dockerの基本的な操作方法を紹介しています。',
    ];

    $keywords = [
      'operation' => 'docker',
    ];

    $links = [
      'operation' => '.?c=docker&p=operation',
    ];

    switch ($page) {
      case 'list':
        article_list('Docker');
        break;
      case 'operation':
        $contents_title = $titles['operation'];
        $contents_path = '/contents/docker/operation.php';
        $meta_description = $descriptions['operation'];
        $meta_keywords = $keywords['operation'];
        $breadcrumb_list = ['Docker' => '.?c=docker'];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'nginx':
    $titles = [
    ];

    $descriptions = [
    ];

    $keywords = [
    ];

    $links = [
    ];

    switch ($page) {
      case 'list':
        article_list('Nginx');
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'apache':
    $titles = [
    ];

    $descriptions = [
    ];

    $keywords = [
    ];

    $links = [
    ];

    switch ($page) {
      case 'list':
        article_list('Apache');
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'mysql':
    $titles = [
    ];

    $descriptions = [
    ];

    $keywords = [
    ];

    $links = [
    ];

    switch ($page) {
      case 'list':
        article_list('MySQL');
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'wordpress':
    $titles = [
    ];

    $descriptions = [
    ];

    $keywords = [
    ];

    $links = [
    ];

    switch ($page) {
      case 'list':
        article_list('WordPress');
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'vim':
    $titles = [
    ];

    $descriptions = [
    ];

    $keywords = [
    ];

    $links = [
    ];

    switch ($page) {
      case 'list':
        article_list('Vim');
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'vscode':
    $titles = [
    ];

    $descriptions = [
    ];

    $keywords = [
    ];

    $links = [
    ];

    switch ($page) {
      case 'list':
        article_list('Visual Studio Code');
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'office':
    $titles = [
    ];

    $descriptions = [
    ];

    $keywords = [
    ];

    $links = [
    ];

    switch ($page) {
      case 'list':
        article_list('Microsoft Office');
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'git':
    $titles = [
      'trivia' => 'Gitの豆知識',
      'branch' => 'ブランチの操作方法'
    ];

    $descriptions = [
      'trivia' => '知っておくと便利なGitの豆知識を紹介しています。',
      'branch' => 'ブランチの操作方法を紹介しています。',
    ];

    $keywords = [
      'trivia' => 'git',
      'branch' => 'git,ブランチ',
    ];

    $links = [
      'trivia' => '.?c=git&p=trivia',
      'branch' => '.?c=git&p=branch',
    ];

    switch ($page) {
      case 'list':
        article_list('Git');
        break;
      case 'trivia':
        $contents_title = $titles['trivia'];
        $contents_path = '/contents/git/trivia.php';
        $meta_description = $descriptions['trivia'];
        $meta_keywords = $keywords['trivia'];
        $breadcrumb_list = ['Git' => '.?c=git'];
        break;
      case 'branch':
        $contents_title = $titles['branch'];
        $contents_path = '/contents/git/branch.php';
        $meta_description = $descriptions['branch'];
        $meta_keywords = $keywords['branch'];
        $breadcrumb_list = ['Git' => '.?c=git'];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'vagrant':
    $titles = [
    ];

    $descriptions = [
    ];

    $keywords = [
    ];

    $links = [
    ];

    switch ($page) {
      case 'list':
        article_list('Vagrant');
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'wireshark':
    $titles = [
    ];

    $descriptions = [
    ];

    $keywords = [
    ];

    $links = [
    ];

    switch ($page) {
      case 'list':
        article_list('Wireshark');
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'html':
    $titles = [
    ];

    $descriptions = [
    ];

    $keywords = [
    ];

    $links = [
    ];

    switch ($page) {
      case 'list':
        article_list('HTML/CSS');
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'javascript':
    $titles = [
    ];

    $descriptions = [
    ];

    $keywords = [
    ];

    $links = [
    ];

    switch ($page) {
      case 'list':
        article_list('JavaScript');
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'php':
    $titles = [
    ];

    $descriptions = [
    ];

    $keywords = [
    ];

    $links = [
    ];

    switch ($page) {
      case 'list':
        article_list('PHP');
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'ruby':
    $titles = [
    ];

    $descriptions = [
    ];

    $keywords = [
    ];

    $links = [
    ];

    switch ($page) {
      case 'list':
        article_list('Ruby');
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'bash':
    $titles = [
      'technique' => 'Bashシェルスクリプトのテクニック',
    ];

    $descriptions = [
      'technique' => 'Bashシェルスクリプトを作成する際に、知っておくと有用な書き方を紹介しています。',
    ];

    $keywords = [
      'technique' => 'bash,シェルスクリプト',
    ];

    $links = [
      'technique' => '.?c=bash&p=technique',
    ];

    switch ($page) {
      case 'list':
        article_list('Bash');
        break;
      case 'technique':
        $contents_title = $titles['technique'];
        $contents_path = '/contents/bash/technique.php';
        $meta_description = $descriptions['technique'];
        $meta_keywords = $keywords['technique'];
        $breadcrumb_list = ['Bash' => '.?c=bash'];
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
