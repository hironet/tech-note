<?php
function article_list($category) {
  global $contents_title;
  global $contents_path;
  global $contents_desc;
  global $breadcrumb_list;

  $contents_title = $category;
  $contents_desc = "このページには、{$category}に関する情報をまとめています。";
  $contents_path = '/contents/list.php';
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

    $descs = [
      'setting' => 'Windows 10を便利にするための設定方法を紹介しています。',
      'command' => '知っておくと色んな場面で便利になるコマンドの使い方を紹介しています。',
      'keyboard' => '知っておくと色んな場面で便利になるショートカットキーの使い方を紹介しています。',
      'chocolatey' => 'Chocolateyの基本的な操作方法を紹介しています。',
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
        $contents_desc = $descs['setting'];
        $contents_path = '/contents/windows/setting.php';
        $breadcrumb_list = ['Windows' => '.?c=windows'];
        break;
      case 'command':
        $contents_title = $titles['command'];
        $contents_desc = $descs['command'];
        $contents_path = '/contents/windows/command.php';
        $breadcrumb_list = ['Windows' => '.?c=windows'];
        break;
      case 'keyboard':
        $contents_title = $titles['keyboard'];
        $contents_desc = $descs['keyboard'];
        $contents_path = '/contents/windows/keyboard.php';
        $breadcrumb_list = ['Windows' => '.?c=windows'];
        break;
      case 'chocolatey':
        $contents_title = $titles['chocolatey'];
        $contents_desc = $descs['chocolatey'];
        $contents_path = '/contents/windows/chocolatey.php';
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

    $descs = [
      'command' => '知っておくと色んな場面で便利になるコマンドの使い方を紹介しています。',
      'keyboard' => '知っておくと色んな場面で便利になるショートカットキーの使い方を紹介しています。',
      'homebrew' => 'Homebrewの基本的な操作方法を紹介しています。',
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
        $contents_desc = $descs['command'];
        $contents_path = '/contents/macos/command.php';
        $breadcrumb_list = ['macOS' => '.?c=macos'];
        break;
      case 'keyboard':
        $contents_title = $titles['keyboard'];
        $contents_desc = $descs['keyboard'];
        $contents_path = '/contents/macos/keyboard.php';
        $breadcrumb_list = ['macOS' => '.?c=macos'];
        break;
      case 'homebrew':
        $contents_title = $titles['homebrew'];
        $contents_desc = $descs['homebrew'];
        $contents_path = '/contents/macos/homebrew.php';
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

    $descs = [
      'command' => '知っておくと色んな場面で便利になるコマンドの使い方を紹介しています。',
      'centos7-setting' => 'CentOS 7.xを使用するにあたって、よく行う設定を紹介しています。',
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
        $contents_desc = $descs['command'];
        $contents_path = '/contents/linux/command.php';
        $breadcrumb_list = ['Linux' => '.?c=linux'];
        break;
      case 'centos7-setting':
        $contents_title = $titles['centos7-setting'];
        $contents_desc = $descs['centos7-setting'];
        $contents_path = '/contents/linux/centos7-setting.php';
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

    $descs = [
      'operation' => 'Dockerの基本的な操作方法を紹介しています。',
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
        $contents_desc = $descs['operation'];
        $contents_path = '/contents/docker/operation.php';
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

    $descs = [
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

    $descs = [
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
      'operation' => 'MySQLの操作方法',
    ];

    $descs = [
      'operation' => 'MySQLの基本的な操作方法を紹介しています。',
    ];

    $links = [
      'operation' => '.?c=mysql&p=operation',
    ];

    switch ($page) {
      case 'list':
        article_list('MySQL');
        break;
      case 'operation':
        $contents_title = $titles['operation'];
        $contents_desc = $descs['operation'];
        $contents_path = '/contents/mysql/operation.php';
        $breadcrumb_list = ['MySQL' => '.?c=mysql'];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'wordpress':
    $titles = [
      'performance' => 'WordPressのパフォーマンスチューニング',
    ];

    $descs = [
      'performance' => 'WordPressのパフォーマンスチューニング方法について紹介しています。',
    ];

    $links = [
      'performance' => '.?c=wordpress&p=performance',
    ];

    switch ($page) {
      case 'list':
        article_list('WordPress');
        break;
      case 'performance':
        $contents_title = $titles['performance'];
        $contents_desc = $descs['performance'];
        $contents_path = '/contents/wordpress/performance.php';
        $breadcrumb_list = ['WordPress' => '.?c=wordpress'];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'vim':
    $titles = [
      'operation' => 'Vimの操作方法',
    ];

    $descs = [
      'operation' => 'Vimの基本的な操作方法を紹介しています。',
    ];

    $links = [
      'operation' => '.?c=vim&p=operation',
    ];

    switch ($page) {
      case 'list':
        article_list('Vim');
        break;
      case 'operation':
        $contents_title = $titles['operation'];
        $contents_desc = $descs['operation'];
        $contents_path = '/contents/vim/operation.php';
        $breadcrumb_list = ['Vim' => '.?c=vim'];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'vscode':
    $titles = [
      'setting' => 'Visual Studio Codeの設定方法',
      'keyboard' => 'Visual Studio Codeの便利なショートカットキー',
    ];

    $descs = [
      'setting' => 'Visual Studio Codeを便利にするための設定方法を紹介しています。',
      'keyboard' => '知っておくと色んな場面で便利になるショートカットキーの使い方を紹介しています。',
    ];

    $links = [
      'setting' => '.?c=vscode&p=setting',
      'keyboard' => '.?c=vscode&p=keyboard',
    ];

    switch ($page) {
      case 'list':
        article_list('Visual Studio Code');
        break;
      case 'setting':
        $contents_title = $titles['setting'];
        $contents_desc = $descs['setting'];
        $contents_path = '/contents/vscode/setting.php';
        $breadcrumb_list = ['Visual Studio Code' => '.?c=vscode'];
        break;
      case 'keyboard':
        $contents_title = $titles['keyboard'];
        $contents_desc = $descs['keyboard'];
        $contents_path = '/contents/vscode/keyboard.php';
        $breadcrumb_list = ['Visual Studio Code' => '.?c=vscode'];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'office':
    $titles = [
      'setting' => 'Excel 2019の設定方法',
    ];

    $descs = [
      'setting' => 'Excel 2019を便利にするための設定方法を紹介しています。',
    ];

    $links = [
      'setting' => '.?c=office&p=setting',
    ];

    switch ($page) {
      case 'list':
        article_list('Microsoft Office');
        break;
      case 'setting':
        $contents_title = $titles['setting'];
        $contents_desc = $descs['setting'];
        $contents_path = '/contents/office/setting.php';
        $breadcrumb_list = ['Microsoft Office' => '.?c=office'];
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

    $descs = [
      'trivia' => '知っておくと便利なGitの豆知識を紹介しています。',
      'branch' => 'ブランチの操作方法を紹介しています。',
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
        $contents_desc = $descs['trivia'];
        $contents_path = '/contents/git/trivia.php';
        $breadcrumb_list = ['Git' => '.?c=git'];
        break;
      case 'branch':
        $contents_title = $titles['branch'];
        $contents_desc = $descs['branch'];
        $contents_path = '/contents/git/branch.php';
        $breadcrumb_list = ['Git' => '.?c=git'];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'vagrant':
    $titles = [
      'operation' => 'Vagrantの操作方法',
    ];

    $descs = [
      'operation' => 'Vagrantの基本的な操作方法を紹介しています。',
    ];

    $links = [
      'operation' => '.?c=vagrant&p=operation',
    ];

    switch ($page) {
      case 'list':
        article_list('Vagrant');
        break;
      case 'operation':
        $contents_title = $titles['operation'];
        $contents_desc = $descs['operation'];
        $contents_path = '/contents/vagrant/operation.php';
        $breadcrumb_list = ['Vagrant' => '.?c=vagrant'];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'wireshark':
    $titles = [
      'operation' => 'Wiresharkの操作方法',
    ];

    $descs = [
      'operation' => 'Wiresharkの基本的な操作方法を紹介しています。',
    ];

    $links = [
      'operation' => '.?c=wireshark&p=operation',
    ];

    switch ($page) {
      case 'list':
        article_list('Wireshark');
        break;
      case 'operation':
        $contents_title = $titles['operation'];
        $contents_desc = $descs['operation'];
        $contents_path = '/contents/wireshark/operation.php';
        $breadcrumb_list = ['Wireshark' => '.?c=wireshark'];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'html':
    $titles = [
      'html-trivia' => 'HTMLの豆知識',
    ];

    $descs = [
      'html-trivia' => '知っておくと便利なHTMLの豆知識を紹介しています。',
    ];

    $links = [
      'html-trivia' => '.?c=html&p=html-trivia',
    ];

    switch ($page) {
      case 'list':
        article_list('HTML/CSS');
        break;
      case 'html-trivia':
        $contents_title = $titles['html-trivia'];
        $contents_desc = $descs['html-trivia'];
        $contents_path = '/contents/html/html-trivia.php';
        $breadcrumb_list = ['HTML' => '.?c=html'];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'javascript':
    $titles = [
      'trivia' => 'JavaScriptの豆知識',
      'technique' => 'JavaScriptのテクニック',
    ];

    $descs = [
      'trivia' => '知っておくと便利なJavaScriptの豆知識を紹介しています。',
      'technique' => 'JavaScriptのコードを作成する際に、知っておくと有用な書き方を紹介しています。',
    ];

    $links = [
      'trivia' => '.?c=javascript&p=trivia',
      'technique' => '.?c=javascript&p=technique',
    ];

    switch ($page) {
      case 'list':
        article_list('JavaScript');
        break;
      case 'trivia':
        $contents_title = $titles['trivia'];
        $contents_desc = $descs['trivia'];
        $contents_path = '/contents/javascript/trivia.php';
        $breadcrumb_list = ['JavaScript' => '.?c=javascript'];
        break;
      case 'technique':
        $contents_title = $titles['technique'];
        $contents_desc = $descs['technique'];
        $contents_path = '/contents/javascript/technique.php';
        $breadcrumb_list = ['JavaScript' => '.?c=javascript'];
        break;
      default:
        not_found();
        break;
    }
    break;
  case 'php':
    $titles = [
    ];

    $descs = [
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
      'rbenv' => 'rbenvの操作方法',
      'rubygems' => 'RubyGemsの操作方法',
      'technique' => 'Rubyのテクニック',
    ];

    $descs = [
      'rbenv' => 'rbenvの基本的な操作方法を紹介しています。',
      'rubygems' => 'RubyGemsの基本的な操作方法を紹介しています。',
      'technique' => 'Rubyのコードを作成する際に、知っておくと有用な書き方を紹介しています。',
    ];

    $links = [
      'rbenv' => '.?c=ruby&p=rbenv',
      'rubygems' => '.?c=ruby&p=rubygems',
      'technique' => '.?c=ruby&p=technique',
    ];

    switch ($page) {
      case 'list':
        article_list('Ruby');
        break;
      case 'rbenv':
        $contents_title = $titles['rbenv'];
        $contents_desc = $descs['rbenv'];
        $contents_path = '/contents/ruby/rbenv.php';
        $breadcrumb_list = ['Ruby' => '.?c=ruby'];
        break;
      case 'rubygems':
        $contents_title = $titles['rubygems'];
        $contents_desc = $descs['rubygems'];
        $contents_path = '/contents/ruby/rubygems.php';
        $breadcrumb_list = ['Ruby' => '.?c=ruby'];
        break;
      case 'technique':
        $contents_title = $titles['technique'];
        $contents_desc = $descs['technique'];
        $contents_path = '/contents/ruby/technique.php';
        $breadcrumb_list = ['Ruby' => '.?c=ruby'];
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

    $descs = [
      'technique' => 'Bashシェルスクリプトを作成する際に、知っておくと有用な書き方を紹介しています。',
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
        $contents_desc = $descs['technique'];
        $contents_path = '/contents/bash/technique.php';
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
