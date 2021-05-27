<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechNoteController extends Controller
{
    const SITE_NAME = 'Hiroのポータルサイト';

    const CATEGORY_NAMES = [
        'cloud' => ['/cloud', 'クラウド'],
        'os' => ['/os', 'OS'],
        'middleware' => ['/middleware', 'ミドルウェア'],
        'application' => ['/application', 'アプリケーション'],
        'tool' => ['/tool', 'ツール'],
        'programming' => ['/programming', 'プログラミング'],
        'framework' => ['/framework', 'フレームワーク'],
    ];

    const SUBCATEGORY_NAMES = [
        'cloud' => [
            'aws' => ['/cloud/aws', 'AWS'],
        ],
        'os' => [
            'windows' => ['/os/windows', 'Windows'],
            'macos' => ['/os/macos', 'macOS'],
            'linux' => ['/os/linux', 'Linux'],
        ],
        'middleware' => [
            'docker' => ['/middleware/docker', 'Docker'],
            'nginx' => ['/middleware/nginx', 'Nginx'],
            'apache' => ['/middleware/apache', 'Apache'],
            'mysql' => ['/middleware/mysql', 'MySQL'],
        ],
        'application' => [
            'wordpress' => ['/application/wordpress', 'WordPress'],
        ],
        'tool' => [
            'vim' => ['/tool/vim', 'Vim'],
            'vscode' => ['/tool/vscode', 'Visual Studio Code'],
            'office' => ['/tool/office', 'Microsoft Office'],
            'git' => ['/tool/git', 'Git'],
            'wireshark' => ['/tool/wireshark', 'Wireshark'],
        ],
        'programming' => [
            'html' => ['/programming/html', 'HTML/CSS'],
            'javascript' => ['/programming/javascript', 'JavaScript'],
            'php' => ['/programming/php', 'PHP'],
            'ruby' => ['/programming/ruby', 'Ruby'],
            'bash' => ['/programming/bash', 'Bash'],
        ],
        'framework' => [
            'laravel' => ['/framework/laravel', 'Laravel'],
        ],
    ];

    const PAGE_TITLES = [
        'cloud' => [
            'aws' => [
                's3' => ['/cloud/aws/s3', 'S3の操作方法'],
            ],
        ],
        'os' => [
            'windows' => [
                'setting' => ['/os/windows/setting', 'Windows 10の設定方法'],
                'command' => ['/os/windows/command', 'Windows 10コマンドの便利な使い方'],
                'keyboard' => ['/os/windows/keyboard', 'Windows 10の便利なショートカットキー'],
                'chocolatey' => ['/os/windows/chocolatey', 'Chocolateyの操作方法'],
            ],
            'macos' => [
                'command' => ['/os/macos/command', 'macOSコマンドの便利な使い方'],
                'keyboard' => ['/os/macos/keyboard', 'macOSの便利なショートカットキー'],
                'homebrew' => ['/os/macos/homebrew', 'Homebrewの操作方法'],
            ],
            'linux' => [
                'amzn2-setting' => ['/os/linux/amzn2-setting', 'Amazon Linux 2の設定方法'],
                'centos7-setting' => ['/os/linux/centos7-setting', 'CentOS 7.xの設定方法'],
                'command' => ['/os/linux/command', 'Linuxコマンドの便利な使い方'],
            ],
        ],
        'middleware' => [
            'docker' => [
                'operation' => ['/middleware/docker/operation', 'Dockerの操作方法'],
            ],
            'nginx' => [
                '' => ['/', ''],
            ],
            'apache' => [
                '' => ['/', ''],
            ],
            'mysql' => [
                'operation' => ['/middleware/mysql/operation', 'MySQLの操作方法'],
                'db-and-user' => ['/middleware/mysql/db-and-user', 'MySQLのデータベース・ユーザ管理'],
            ],
        ],
        'application' => [
            'wordpress' => [
                'performance' => ['/application/wordpress/performance', 'WordPressのパフォーマンスチューニング'],
            ],
        ],
        'tool' => [
            'vim' => [
                'operation' => ['/tool/vim/operation', 'Vimの操作方法'],
            ],
            'vscode' => [
                'setting' => ['/tool/vscode/setting', 'Visual Studio Codeの設定方法'],
                'keyboard' => ['/tool/vscode/keyboard', 'Visual Studio Codeの便利なショートカットキー'],
            ],
            'office' => [
                'setting' => ['/tool/office/setting', 'Excel 2019の設定方法'],
            ],
            'git' => [
                'trivia' => ['/tool/git/trivia', 'Gitの豆知識'],
                'branch' => ['/tool/git/branch', 'ブランチの操作方法'],
            ],
            'wireshark' => [
                'operation' => ['/tool/wireshark/operation', 'Wiresharkの操作方法'],
            ],
        ],
        'programming' => [
            'html' => [
                'html-trivia' => ['/programming/html/html-trivia', 'HTMLの豆知識'],
            ],
            'javascript' => [
                'trivia' => ['/programming/javascript/trivia', 'JavaScriptの豆知識'],
                'technique' => ['/programming/javascript/technique', 'JavaScriptのテクニック'],
            ],
            'php' => [
                'array' => ['/programming/php/array', 'PHPの配列の操作方法'],
            ],
            'ruby' => [
                'rbenv' => ['/programming/ruby/rbenv', 'rbenvの操作方法'],
                'rubygems' => ['/programming/ruby/rubygems', 'RubyGemsの操作方法'],
                'technique' => ['/programming/ruby/technique', 'Rubyのテクニック'],
            ],
            'bash' => [
                'technique' => ['/programming/bash/technique', 'Bashシェルスクリプトのテクニック'],
            ],
        ],
        'framework' => [
            'laravel' => [
                'setting' => ['/framework/laravel/setting', 'Laravelの設定方法'],
                'operation' => ['/framework/laravel/operation', 'Laravelの操作方法'],
            ],
        ],
    ];

    public function __invoke($category_id = '', $subcategory_id = '', $page_id = '') {
        $data['site_name'] = self::SITE_NAME;
        $data['category_names'] = self::CATEGORY_NAMES;
        $data['subcategory_names'] = self::SUBCATEGORY_NAMES;

        if (empty($category_id)) {
            /* トップ画面 */
            return view('tech-note.top', $data);
        } else if (array_key_exists($category_id, self::CATEGORY_NAMES)) {
            if (empty($subcategory_id)) {
                /* カテゴリのリスト画面 */
                $data['breadcrumb'] = [
                    self::CATEGORY_NAMES[$category_id][1] => '',
                ];
                $data['page_title'] = self::CATEGORY_NAMES[$category_id][1];
                $data['page_titles'] = self::PAGE_TITLES[$category_id];
                return view('tech-note.category-list', $data);
            } else if (array_key_exists($subcategory_id, self::SUBCATEGORY_NAMES[$category_id])) {
                if (empty($page_id)) {
                    /* サブカテゴリのリスト画面 */
                    $data['breadcrumb'] = [
                        self::CATEGORY_NAMES[$category_id][1] => self::CATEGORY_NAMES[$category_id][0],
                        self::SUBCATEGORY_NAMES[$category_id][$subcategory_id][1] => '',
                    ];
                    $data['page_title'] = self::SUBCATEGORY_NAMES[$category_id][$subcategory_id][1];
                    $data['page_titles'] = self::PAGE_TITLES[$category_id][$subcategory_id];
                    return view('tech-note.subcategory-list', $data);
                } else if (array_key_exists($page_id, self::PAGE_TITLES[$category_id][$subcategory_id])) {
                    /* 個別画面 */
                    $data['breadcrumb'] = [
                        self::CATEGORY_NAMES[$category_id][1] => self::CATEGORY_NAMES[$category_id][0],
                        self::SUBCATEGORY_NAMES[$category_id][$subcategory_id][1] => self::SUBCATEGORY_NAMES[$category_id][$subcategory_id][0],
                    ];
                    $data['page_title'] = self::PAGE_TITLES[$category_id][$subcategory_id][$page_id][1];
                    return view("tech-note.{$category_id}.{$subcategory_id}.{$page_id}", $data);
                }
            }
        }
        $data['page_title'] = 'Not Found';
        return view('tech-note.404', $data);
    }
}
