<?php

return [
    'SITE_NAME' => "Hiro's tech note",

    'CATEGORY_NAMES' => [
        'cloud' => ['/article/cloud', 'クラウド'],
        'os' => ['/article/os', 'OS'],
        'middleware' => ['/article/middleware', 'ミドルウェア'],
        'application' => ['/article/application', 'アプリケーション'],
        'tool' => ['/article/tool', 'ツール'],
        'programming' => ['/article/programming', 'プログラミング'],
        'framework' => ['/article/framework', 'フレームワーク'],
    ],
  
    'SUBCATEGORY_NAMES' => [
        'cloud' => [
            'aws' => ['/article/cloud/aws', 'AWS'],
        ],
        'os' => [
            'windows' => ['/article/os/windows', 'Windows'],
            'macos' => ['/article/os/macos', 'macOS'],
            'linux' => ['/article/os/linux', 'Linux'],
        ],
        'middleware' => [
            'docker' => ['/article/middleware/docker', 'Docker'],
            'nginx' => ['/article/middleware/nginx', 'Nginx'],
            'apache' => ['/article/middleware/apache', 'Apache'],
            'mysql' => ['/article/middleware/mysql', 'MySQL'],
        ],
        'application' => [
            'wordpress' => ['/article/application/wordpress', 'WordPress'],
        ],
        'tool' => [
            'vim' => ['/article/tool/vim', 'Vim'],
            'vscode' => ['/article/tool/vscode', 'Visual Studio Code'],
            'office' => ['/article/tool/office', 'Microsoft Office'],
            'git' => ['/article/tool/git', 'Git'],
            'wireshark' => ['/article/tool/wireshark', 'Wireshark'],
        ],
        'programming' => [
            'html' => ['/article/programming/html', 'HTML'],
            'css' => ['/article/programming/css', 'CSS'],
            'javascript' => ['/article/programming/javascript', 'JavaScript'],
            'php' => ['/article/programming/php', 'PHP'],
            'ruby' => ['/article/programming/ruby', 'Ruby'],
            'bash' => ['/article/programming/bash', 'Bash'],
        ],
        'framework' => [
            'laravel' => ['/article/framework/laravel', 'Laravel'],
        ],
    ],
  
    'ARTICLE_TITLES' => [
        'cloud' => [
            'aws' => [
                's3' => ['/article/cloud/aws/s3', 'S3の操作方法'],
            ],
        ],
        'os' => [
            'windows' => [
                'setting' => ['/article/os/windows/setting', 'Windows 10の設定方法'],
                'command' => ['/article/os/windows/command', 'Windows 10コマンドの便利な使い方'],
                'keyboard' => ['/article/os/windows/keyboard', 'Windows 10の便利なショートカットキー'],
                'chocolatey' => ['/article/os/windows/chocolatey', 'Chocolateyの操作方法'],
            ],
            'macos' => [
                'command' => ['/article/os/macos/command', 'macOSコマンドの便利な使い方'],
                'keyboard' => ['/article/os/macos/keyboard', 'macOSの便利なショートカットキー'],
                'homebrew' => ['/article/os/macos/homebrew', 'Homebrewの操作方法'],
            ],
            'linux' => [
                'amzn2-setting' => ['/article/os/linux/amzn2-setting', 'Amazon Linux 2の設定方法'],
                'centos7-setting' => ['/article/os/linux/centos7-setting', 'CentOS 7.xの設定方法'],
                'command' => ['/article/os/linux/command', 'Linuxコマンドの便利な使い方'],
            ],
        ],
        'middleware' => [
            'docker' => [
                'operation' => ['/article/middleware/docker/operation', 'Dockerの操作方法'],
            ],
            'nginx' => [
                '' => ['/', ''],
            ],
            'apache' => [
                '' => ['/', ''],
            ],
            'mysql' => [
                'operation' => ['/article/middleware/mysql/operation', 'MySQLの操作方法'],
                'db-and-user' => ['/article/middleware/mysql/db-and-user', 'MySQLのデータベース・ユーザ管理'],
            ],
        ],
        'application' => [
            'wordpress' => [
                'performance' => ['/article/application/wordpress/performance', 'WordPressのパフォーマンスチューニング'],
            ],
        ],
        'tool' => [
            'vim' => [
                'operation' => ['/article/tool/vim/operation', 'Vimの操作方法'],
            ],
            'vscode' => [
                'setting' => ['/article/tool/vscode/setting', 'Visual Studio Codeの設定方法'],
                'keyboard' => ['/article/tool/vscode/keyboard', 'Visual Studio Codeの便利なショートカットキー'],
            ],
            'office' => [
                'setting' => ['/article/tool/office/setting', 'Excel 2019の設定方法'],
            ],
            'git' => [
                'trivia' => ['/article/tool/git/trivia', 'Gitの豆知識'],
                'branch' => ['/article/tool/git/branch', 'ブランチの操作方法'],
            ],
            'wireshark' => [
                'operation' => ['/article/tool/wireshark/operation', 'Wiresharkの操作方法'],
            ],
        ],
        'programming' => [
            'html' => [
                'trivia' => ['/article/programming/html/trivia', 'HTMLの豆知識'],
                'char-reference' => ['/article/programming/html/char-reference', '文字参照'],
            ],
            'css' => [
                '' => ['', ''],
            ],
            'javascript' => [
                'trivia' => ['/article/programming/javascript/trivia', 'JavaScriptの豆知識'],
                'technique' => ['/article/programming/javascript/technique', 'JavaScriptのテクニック'],
            ],
            'php' => [
                'array' => ['/article/programming/php/array', 'PHPの配列の操作方法'],
            ],
            'ruby' => [
                'rbenv' => ['/article/programming/ruby/rbenv', 'rbenvの操作方法'],
                'rubygems' => ['/article/programming/ruby/rubygems', 'RubyGemsの操作方法'],
                'technique' => ['/article/programming/ruby/technique', 'Rubyのテクニック'],
            ],
            'bash' => [
                'technique' => ['/article/programming/bash/technique', 'Bashシェルスクリプトのテクニック'],
            ],
        ],
        'framework' => [
            'laravel' => [
                'setting' => ['/article/framework/laravel/setting', 'Laravelの設定方法'],
                'operation' => ['/article/framework/laravel/operation', 'Laravelの操作方法'],
            ],
        ],
    ],
];
