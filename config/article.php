<?php

return [
    'SITE_NAME' => "Hiro's tech note",

    'CATEGORY_NAMES' => [
        'cloud' => [
            '/article/cloud',
            'クラウド',
        ],
        'os' => [
            '/article/os',
            'OS',
        ],
        'middleware' => [
            '/article/middleware',
            'ミドルウェア',
        ],
        'application' => [
            '/article/application',
            'アプリケーション',
        ],
        'tool' => [
            '/article/tool',
            'ツール',
        ],
        'programming' => [
            '/article/programming',
            'プログラミング',
        ],
        'framework' => [
            '/article/framework',
            'フレームワーク',
        ],
        'security' => [
            '/article/security',
            'セキュリティ',
        ],
    ],
  
    'SUBCATEGORY_NAMES' => [
        'cloud' => [
            'aws' => [
                '/article/cloud/aws',
                'AWS',
            ],
        ],
        'os' => [
            'windows' => [
                '/article/os/windows',
                'Windows',
            ],
            'macos' => [
                '/article/os/macos',
                'macOS',
            ],
            'linux' => [
                '/article/os/linux',
                'Linux',
            ],
        ],
        'middleware' => [
            'docker' => [
                '/article/middleware/docker',
                'Docker',
            ],
            'nginx' => [
                '/article/middleware/nginx',
                'Nginx',
            ],
            'apache' => [
                '/article/middleware/apache',
                'Apache',
            ],
            'mysql' => [
                '/article/middleware/mysql',
                'MySQL',
            ],
        ],
        'application' => [
            'wordpress' => [
                '/article/application/wordpress',
                'WordPress',
            ],
        ],
        'tool' => [
            'vim' => [
                '/article/tool/vim',
                'Vim',
            ],
            'vscode' => [
                '/article/tool/vscode',
                'Visual Studio Code',
            ],
            'office' => [
                '/article/tool/office',
                'Microsoft Office',
            ],
            'git' => [
                '/article/tool/git',
                'Git',
            ],
            'wireshark' => [
                '/article/tool/wireshark',
                'Wireshark',
            ],
        ],
        'programming' => [
            'html' => [
                '/article/programming/html',
                'HTML',
            ],
            'css' => [
                '/article/programming/css',
                'CSS',
            ],
            'javascript' => [
                '/article/programming/javascript',
                'JavaScript',
            ],
            'php' => [
                '/article/programming/php',
                'PHP',
            ],
            'ruby' => [
                '/article/programming/ruby',
                'Ruby',
            ],
            'bash' => [
                '/article/programming/bash',
                'Bash',
            ],
        ],
        'framework' => [
            'laravel' => [
                '/article/framework/laravel',
                'Laravel',
            ],
        ],
        'security' => [
            'letsencrypt' => [
                '/article/security/letsencrypt',
                "Let's Encrypt",
            ],
        ],
    ],
  
    'ARTICLE_TITLES' => [
        'cloud' => [
            'aws' => [
                's3' => [
                    '/article/cloud/aws/s3',
                    'S3の操作方法',
                    'S3の基本的な操作方法を書いています。',
                    '2021-05-04',
                ],
            ],
        ],
        'os' => [
            'windows' => [
                'setting' => [
                    '/article/os/windows/setting',
                    'Windows 10の設定方法',
                    'Windows 10を便利にするための設定方法について書いています。',
                    '2021-04-02',
                ],
                'command' => [
                    '/article/os/windows/command',
                    'Windows 10コマンドの便利な使い方',
                    '知っておくと色んな場面で便利になるコマンドの使い方について書いています。',
                    '2021-04-02',
                ],
                'keyboard' => [
                    '/article/os/windows/keyboard',
                    'Windows 10の便利なショートカットキー',
                    '知っておくと色んな場面で便利になるショートカットキーの使い方について書いています。',
                    '2021-04-02',
                ],
                'chocolatey' => [
                    '/article/os/windows/chocolatey',
                    'Chocolateyの操作方法',
                    'Windowsのソフトウェア管理ツールであるChocolateyの基本的な操作方法について書いています。',
                    '2021-04-02',
                ],
            ],
            'macos' => [
                'command' => [
                    '/article/os/macos/command',
                    'macOSコマンドの便利な使い方',
                    '知っておくと色んな場面で便利になるコマンドの使い方について書いています。',
                    '2021-04-01',
                ],
                'keyboard' => [
                    '/article/os/macos/keyboard',
                    'macOSの便利なショートカットキー',
                    '知っておくと色んな場面で便利になるショートカットキーの使い方について書いています。',
                    '2021-04-01',
                ],
                'homebrew' => [
                    '/article/os/macos/homebrew',
                    'Homebrewの操作方法',
                    'macOSのパッケージ管理ツールであるHomebrewの基本的な操作方法について書いています。',
                    '2021-04-01',
                ],
            ],
            'linux' => [
                'amzn2-setting' => [
                    '/article/os/linux/amzn2-setting',
                    'Amazon Linux 2の設定方法',
                    'Amazon Linux 2を使用するにあたって、よく行う設定について書いています。',
                    '2021-05-02',
                ],
                'centos7-setting' => [
                    '/article/os/linux/centos7-setting',
                    'CentOS 7.xの設定方法',
                    'CentOS 7.xを使用するにあたって、よく行う設定について書いています。',
                    '2021-03-25',
                ],
                'command' => [
                    '/article/os/linux/command',
                    'Linuxコマンドの便利な使い方',
                    '知っておくと色んな場面で便利になるコマンドの使い方について書いています。',
                    '2021-03-25',
                ],
            ],
        ],
        'middleware' => [
            'docker' => [
                'operation' => [
                    '/article/middleware/docker/operation',
                    'Dockerの基本操作',
                    'Dockerの基本的な操作方法について書いています。',
                    '2021-03-30',
                ],
                'docker-compose' => [
                    '/article/middleware/docker/docker-compose',
                    'Docker Compose',
                    'Docker Composeの基本的な操作方法について書いています。',
                    '2021-06-26',
                ],
                'network' => [
                    '/article/middleware/docker/network',
                    'Dockerネットワーク管理',
                    'Dockerネットワーク管理について書いています。',
                    '2021-06-26',
                ],
                'volume' => [
                    '/article/middleware/docker/volume',
                    'Dockerデータ管理',
                    'Dockerデータ管理について書いています。',
                    '2021-06-26',
                ],
                'trivia' => [
                    '/article/middleware/docker/trivia',
                    'Dockerの豆知識',
                    '知っておくと便利なDockerの豆知識について書いています。',
                    '2021-06-26',
                ],
            ],
            'nginx' => [
                '' => [
                    '/',
                    '',
                    '',
                    '',
                ],
            ],
            'apache' => [
                '' => [
                    '/',
                    '',
                    '',
                    '',
                ],
            ],
            'mysql' => [
                'operation' => [
                    '/article/middleware/mysql/operation',
                    'MySQLの操作方法',
                    'MySQLの基本的な操作方法について書いています。',
                    '2021-04-03',
                ],
                'db-and-user' => [
                    '/article/middleware/mysql/db-and-user',
                    'MySQLのデータベース・ユーザ管理',
                    'MySQLのデータベースとユーザの管理方法について書いています。',
                    '2021-04-18',
                ],
            ],
        ],
        'application' => [
            'wordpress' => [
                'performance' => [
                    '/article/application/wordpress/performance',
                    'WordPressのパフォーマンスチューニング',
                    'WordPressのパフォーマンスチューニング方法について書いています。',
                    '2021-04-03',
                ],
            ],
        ],
        'tool' => [
            'vim' => [
                'operation' => [
                    '/article/tool/vim/operation',
                    'Vimの操作方法',
                    'Vimの基本的な操作方法について書いています。',
                    '2021-04-03',
                ],
            ],
            'vscode' => [
                'setting' => [
                    '/article/tool/vscode/setting',
                    'Visual Studio Codeの設定方法',
                    'Visual Studio Codeを便利にするための設定方法について書いています。',
                    '2021-04-03',
                ],
                'keyboard' => [
                    '/article/tool/vscode/keyboard',
                    'Visual Studio Codeの便利なショートカットキー',
                    '知っておくと色んな場面で便利になるショートカットキーの使い方について書いています。',
                    '2021-04-03',
                ],
            ],
            'office' => [
                'setting' => [
                    '/article/tool/office/setting',
                    'Excel 2019の設定方法',
                    'Excel 2019を便利にするための設定方法について書いています。',
                    '2021-04-03',
                ],
            ],
            'git' => [
                'trivia' => [
                    '/article/tool/git/trivia',
                    'Gitの豆知識',
                    '知っておくと便利なGitの豆知識について書いています。',
                    '2021-03-31',
                ],
                'branch' => [
                    '/article/tool/git/branch',
                    'ブランチの操作方法',
                    'Gitを使った開発で必須となるブランチの操作方法について書いています。',
                    '2021-04-01',
                ],
            ],
            'wireshark' => [
                'operation' => [
                    '/article/tool/wireshark/operation',
                    'Wiresharkの操作方法',
                    'パケットキャプチャソフトであるWiresharkの基本的な操作方法について書いています。',
                    '2021-04-03',
                ],
            ],
        ],
        'programming' => [
            'html' => [
                'trivia' => [
                    '/article/programming/html/trivia',
                    'HTMLの豆知識',
                    '知っておくと便利なHTMLの豆知識について書いています。',
                    '2021-04-05',
                ],
                'char-reference' => [
                    '/article/programming/html/char-reference',
                    'HTMLにおける文字参照',
                    'HTMLの文字参照について書いています。',
                    '2021-06-06',
                ],
            ],
            'css' => [
                '' => [
                    '',
                    '',
                    '',
                    '',
                ],
            ],
            'javascript' => [
                'trivia' => [
                    '/article/programming/javascript/trivia',
                    'JavaScriptの豆知識',
                    '知っておくと便利なJavaScriptの豆知識について書いています。',
                    '2021-04-05',
                ],
                'technique' => [
                    '/article/programming/javascript/technique',
                    'JavaScriptのテクニック',
                    'JavaScriptのコードを作成する際に、知っておくと有用な書き方について書いています。',
                    '2021-04-05',
                ],
            ],
            'php' => [
                'array' => [
                    '/article/programming/php/array',
                    'PHPの配列の操作方法',
                    'PHPの配列の操作方法について書いています。',
                    '2021-05-04',
                ],
            ],
            'ruby' => [
                'rbenv' => [
                    '/article/programming/ruby/rbenv',
                    'rbenvの操作方法',
                    'Rubyのバージョン管理ツールであるrbenvの基本的な操作方法について書いています。',
                    '2021-04-05',
                ],
                'rubygems' => [
                    '/article/programming/ruby/rubygems',
                    'RubyGemsの操作方法',
                    'Rubyのパッケージ管理ツールであるRubyGemsの基本的な操作方法について書いています。',
                    '2021-04-05',
                ],
                'technique' => [
                    '/article/programming/ruby/technique',
                    'Rubyのテクニック',
                    'Rubyのコードを作成する際に、知っておくと有用な書き方について書いています。',
                    '2021-04-05',
                ],
            ],
            'bash' => [
                'technique' => [
                    '/article/programming/bash/technique',
                    'Bashシェルスクリプトのテクニック',
                    'Bashシェルスクリプトを作成する際に、知っておくと有用な書き方について書いています。',
                    '2021-03-29',
                ],
            ],
        ],
        'framework' => [
            'laravel' => [
                'setting' => [
                    '/article/framework/laravel/setting',
                    'Laravelの設定方法',
                    'Laravelの設定方法について書いています。',
                    '2021-06-06',
                ],
                'operation' => [
                    '/article/framework/laravel/operation',
                    'Laravelの操作方法',
                    'Laravelの基本的な操作方法について書いています。',
                    '2021-05-05',
                ],
            ],
        ],
        'security' => [
            'letsencrypt' => [
                'ssl-cert' => [
                    '/article/security/letsencrypt/ssl-cert',
                    'SSLサーバ証明書の操作',
                    "Let's EncryptでSSLサーバ証明書を作成・更新・削除する方法について書いています。",
                    '2021-06-26',
                ],
            ],
        ],
    ],
];
