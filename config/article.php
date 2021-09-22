<?php

return [
    'SITE_NAME' => "Hiro's tech note",

    'SITE_DESC' => 'このサイトは、ITエンジニアHiroのテクノロジーノートです。',

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
                    'S3の基本操作',
                    'S3の基本的な操作方法を書いています。',
                    '2021-05-04',
                ],
            ],
        ],
        'os' => [
            'windows' => [
                'setting' => [
                    '/article/os/windows/setting',
                    'Windows 10の設定',
                    'Windows 10を便利にするための設定について書いています。',
                    '2021-04-02',
                ],
                'command' => [
                    '/article/os/windows/command',
                    'Windows 10コマンド活用事例',
                    '知っておくと色んな場面で便利になるコマンドの使い方について書いています。',
                    '2021-04-02',
                ],
                'keyboard' => [
                    '/article/os/windows/keyboard',
                    'Windows 10のショートカットキー',
                    '知っておくと色んな場面で便利になるショートカットキーの使い方について書いています。',
                    '2021-04-02',
                ],
                'chocolatey' => [
                    '/article/os/windows/chocolatey',
                    'Chocolateyの基本操作',
                    'Windowsのソフトウェア管理ツールであるChocolateyの基本的な操作方法について書いています。',
                    '2021-04-02',
                ],
            ],
            'macos' => [
                'command' => [
                    '/article/os/macos/command',
                    'macOSコマンド活用事例',
                    '知っておくと色んな場面で便利になるコマンドの使い方について書いています。',
                    '2021-04-01',
                ],
                'keyboard' => [
                    '/article/os/macos/keyboard',
                    'macOSのショートカットキー',
                    '知っておくと色んな場面で便利になるショートカットキーの使い方について書いています。',
                    '2021-04-01',
                ],
                'homebrew' => [
                    '/article/os/macos/homebrew',
                    'Homebrewの基本操作',
                    'macOSのパッケージ管理ツールであるHomebrewの基本的な操作方法について書いています。',
                    '2021-04-01',
                ],
            ],
            'linux' => [
                'amzn2-setting' => [
                    '/article/os/linux/amzn2-setting',
                    'Amazon Linux 2の設定',
                    'Amazon Linux 2を使用するにあたって、よく行う設定について書いています。',
                    '2021-05-02',
                ],
                'centos7-setting' => [
                    '/article/os/linux/centos7-setting',
                    'CentOS 7.xの設定',
                    'CentOS 7.xを使用するにあたって、よく行う設定について書いています。',
                    '2021-03-25',
                ],
                'command' => [
                    '/article/os/linux/command',
                    'Linuxコマンド活用事例',
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
                    '2021-06-26',
                ],
                'docker-compose' => [
                    '/article/middleware/docker/docker-compose',
                    'Docker Composeの基本操作',
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
                // '' => [
                //     '/',
                //     '',
                //     '',
                //     '',
                // ],
            ],
            'apache' => [
                // '' => [
                //     '/',
                //     '',
                //     '',
                //     '',
                // ],
            ],
            'mysql' => [
                'operation' => [
                    '/article/middleware/mysql/operation',
                    'MySQLの基本操作',
                    'MySQLの基本的な操作方法について書いています。',
                    '2021-04-03',
                ],
                'database' => [
                    '/article/middleware/mysql/database',
                    'MySQLのデータベース管理',
                    'MySQLのデータベース管理方法について書いています。',
                    '2021-04-18',
                ],
                'user' => [
                    '/article/middleware/mysql/user',
                    'MySQLのユーザ管理',
                    'MySQLのユーザ管理方法について書いています。',
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
                    'Vimの基本操作',
                    'Vimの基本的な操作方法について書いています。',
                    '2021-04-03',
                ],
            ],
            'vscode' => [
                'setting' => [
                    '/article/tool/vscode/setting',
                    'Visual Studio Codeの設定',
                    'Visual Studio Codeを便利にするための設定について書いています。',
                    '2021-04-03',
                ],
                'keyboard' => [
                    '/article/tool/vscode/keyboard',
                    'Visual Studio Codeのショートカットキー',
                    '知っておくと色んな場面で便利になるショートカットキーの使い方について書いています。',
                    '2021-04-03',
                ],
                'trivia' => [
                    '/article/tool/vscode/trivia',
                    'Visual Studio Codeの豆知識',
                    '知っておくと便利なVisual Studio Codeの豆知識について書いています。',
                    '2021-08-09',
                ],
            ],
            'office' => [
                'setting' => [
                    '/article/tool/office/setting',
                    'Excel 2019の設定',
                    'Excel 2019を便利にするための設定について書いています。',
                    '2021-04-03',
                ],
            ],
            'git' => [
                'trivia' => [
                    '/article/tool/git/trivia',
                    'Gitの豆知識',
                    '知っておくと便利なGitの豆知識について書いています。',
                    '2021-07-01',
                ],
                'branch' => [
                    '/article/tool/git/branch',
                    'ブランチとマージ',
                    'Gitを使った開発で必須となるブランチとマージについて書いています。',
                    '2021-07-02',
                ],
            ],
            'wireshark' => [
                'operation' => [
                    '/article/tool/wireshark/operation',
                    'Wiresharkの基本操作',
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
                // '' => [
                //     '',
                //     '',
                //     '',
                //     '',
                // ],
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
                    'PHPの配列操作',
                    'PHPの配列の操作方法について書いています。',
                    '2021-05-04',
                ],
            ],
            'ruby' => [
                'rbenv' => [
                    '/article/programming/ruby/rbenv',
                    'rbenvの基本操作',
                    'Rubyのバージョン管理ツールであるrbenvの基本的な操作方法について書いています。',
                    '2021-04-05',
                ],
                'rubygems' => [
                    '/article/programming/ruby/rubygems',
                    'RubyGemsの基本操作',
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
                    'Laravelの設定',
                    'Laravelの設定について書いています。',
                    '2021-06-06',
                ],
                'operation' => [
                    '/article/framework/laravel/operation',
                    'Laravelの基本操作',
                    'Laravelの基本的な操作方法について書いています。',
                    '2021-05-05',
                ],
                'trivia' => [
                    '/article/framework/laravel/trivia',
                    'Laravelの豆知識',
                    '知っておくと便利なLaravelの豆知識について書いています。',
                    '2021-09-05',
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
