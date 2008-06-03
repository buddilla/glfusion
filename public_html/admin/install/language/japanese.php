<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Geeklog 1.5                                                               |
// +---------------------------------------------------------------------------+
// | japanese.php                                                              |
// |                                                                           |
// | English language file for the Geeklog installation script                 |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2000-2008 by the following authors:                         |
// |                                                                           |
// | Authors: Tony Bibbs        - tony AT tonybibbs DOT com                    |
// |          Mark Limburg      - mlimburg AT users DOT sourceforge DOT net    |
// |          Jason Whittenburg - jwhitten AT securitygeeks DOT com            |
// |          Dirk Haun         - dirk AT haun-online DOT de                   |
// |          Randy Kolenko     - randy AT nextide DOT ca                      |
// |          Matt West         - matt AT mattdanger DOT net                   |
// |                                                                           |
// | Translation to Japanese                                                   |
// |          Takahiro Kambe    - taca AT back-street DOT net                  |
// +---------------------------------------------------------------------------+
// |                                                                           |
// | This program is free software; you can redistribute it and/or             |
// | modify it under the terms of the GNU General Public License               |
// | as published by the Free Software Foundation; either version 2            |
// | of the License, or (at your option) any later version.                    |
// |                                                                           |
// | This program is distributed in the hope that it will be useful,           |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
// | GNU General Public License for more details.                              |
// |                                                                           |
// | You should have received a copy of the GNU General Public License         |
// | along with this program; if not, write to the Free Software Foundation,   |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.           |
// |                                                                           |
// +---------------------------------------------------------------------------+
//
// $Id$

// +---------------------------------------------------------------------------+

$LANG_CHARSET = 'utf-8';

// +---------------------------------------------------------------------------+
// | Array Format:                                                             |
// | $LANG_NAME[XX]: $LANG - variable name                                    |
// |                 NAME  - where array is used                               |
// |                 XX    - phrase id number                                  |
// +---------------------------------------------------------------------------+

// +---------------------------------------------------------------------------+
// install.php

$LANG_INSTALL = array(
    0 => 'Geeklog - 究極のWeblogシステム',
    1 => 'インストールのサポート',
    2 => '究極のWeblogシステム',
    3 => 'Geeklogインストール',
    4 => 'PHP 4.1.0以降が必要',
    5 => '申し訳ありません, Geeklogは少なくともPHP 4.1.0が動作に必要です。(あなたのご使用中のバージョンは ',
    6 => '). <a href="http://www.php.net/downloads.php">PHPのアップグレード</a>からインストールするか、ご利用のホスティングサービスにご依頼下さい。',
    7 => 'Geeklogのファイルの場所を確認できません。',
    8 => 'インストールスクリプトは重要なGeeklogのファイルを確認できませんでした。おそらく、デフォルトの場所から変更されていると思います。以下のファイルのあるパスを指定して下さい:',
    9 => 'ようこそ、そしてGeeklogを選んでくれてありがとう!',
    10 => 'ファイル/ディレクトリ',
    11 => 'パーミッション',
    12 => '変更',
    13 => '現在',
    14 => 'ディレクトリを変更',
    15 => 'Geeklogヘッドラインのエクスポートは無効としました。<code>backend</code>ディレクトリはテストしていません',
    17 => 'ユーザの写真は無効です。<code>userphotos</code>はテストしていません',
    18 => '記事に画像の使用は無効です。<code>articles</code>ディレクトリはテストしていません',
    19 => 'Geeklogでは、Webサーバがいくつかのファイルとディレクトリに書き込みできる必要があります。以下は、変更が必要なファイルとディレクトリです。',
    20 => '警告!',
    21 => 'あなたのGeeklogとサイトは上のエラーを直すまで適切に動作しません。この段階に従わないのが、Geeklogを使おうとしたとき起きるエラーの「ナンバー1」の理由です。どうか、続ける前に必要な変更を行なって下さい。',
    22 => '不明',
    23 => 'インストール方法を選択:',
    24 => '新規インストール',
    25 => 'アップグレード',
    26 => '変更不可能',
    27 => '。ファイルがWebサーバから書き込みできることを確かめましたか?',
    28 => 'siteconfig.php。このファイルがWebサーバから書き込みできることを確かめましたか?',
    29 => 'Geeklogサイト',
    30 => 'もう一つのしゃれたGeeklogサイト',
    31 => '必要な設定情報',
    32 => 'サイト名',
    33 => 'サイトスローガン',
    34 => 'データベースタイプ',
    35 => 'MySQL',
    36 => 'InnoDBテーブルをサポートしたMySQL',
    37 => 'Microsoft SQL',
    38 => '',
    39 => 'データベースのホスト名',
    40 => 'データベースの名前',
    41 => 'データベースのユーザ名',
    42 => 'データベースのパスワード',
    43 => 'データベースのテーブルのプリフィックス',
    44 => '追加の設定',
    45 => 'サイトURL',
    46 => '(最後にスラッシュを付けない)',
    47 => '管理ディレクトリのパス',
    48 => 'サイトの電子メール・アドレス',
    49 => 'サイトの返信を受けない電子メール・アドレス',
    50 => 'インストール',
    51 => 'MySQL 3.23.2以降が必要',
    52 => '申し訳ありませんが、Geeklogを動作させるには最低でもMySQL 3.23.2が必要です(現在のバージョンは ',
    53 => ')。どうか、<a href="http://dev.mysql.com/downloads/mysql/">MySQLをアップグレード</a>インストールするか、ご利用のホスティング・サービスに依頼してください。',
    54 => 'データベースの情報が正しくありません',
    55 => '申し訳ありませんが、入力されたデータベースの情報は正しくないようです。どうか、ページを戻って、もう一度試してください。',
    56 => 'データベースに接続できませんでした',
    57 => '申し訳ありませんが、インストーラは指定されたデータベースを見つけられませんでした。データベースが存在しないか、名前の綴りを誤っていたかのどちらかでしょう。ページを戻って、もう一度t試してください。',
    58 => '。ファイルがWebサーバから書き込み可能か確かめられました?',
    59 => '注意:',
    60 => 'InnoDBテーブルはご利用のMySQLのバージョンではサポートされていません。InooDBのサポートなしで、インストールを続けますか?',
    61 => '戻る',
    62 => '続ける',
    63 => 'Geeklogのデータベースがすでに存在します。インストーラは既存のGeeklogのデータベースに、新規のインストールを行うことは許可されていません。続けるには次のどれかを行わなければなりません:',
    64 => '存在するデータベースからテーブルを削除します。または、データベースを削除してから再作成します。それから下の「再実行」ボタンをクリックします。',
    65 => '下の「アップグレード」オプションを選択して、データベースを(新しいGeeklogのバージョンに)アップグレードを行います。',
    66 => '再実行',
    67 => 'Geeklogのデータベースの設定でエラー', 
    68 => 'データベースが空hdeありません。すべてのテーブルを削除して、もう一度初めてください。',
    69 => 'Geeklogをアップグレード中',
    70 => '始める前に、データベースと現在のGeeklogのファイルのバックアップがたいへん重要です。このインストール処理ではGeeklogのデータベースを作り変えるため、何かうまくいかなくてアップグレードの処理をやり直すときに、元のデータベースのバックアップが必要となります。<strong>あなたは警告を受けました!</strong>',
    71 => '以下からアップグレードしようとしている正しいGeeklogのバージョンを選択していることを確かめて下さい。このバージョンから進める方向に、ここでの処理を行います。(すなわち、どの古いバージョンからも直接',
    72 => 'にアップグレードできます)。',
    73 => 'Geeklogのベータやリリース候補のバージョンからはアップグレードできないことに注意して下さい。',
    74 => 'データベースはすでに更新済みです!',
    75 => 'あなたのデータベースはすでに最新になっています。おそらく、アップグレードを以前に実行されています。もし、アップグレードをやり直す場合は、バックアップしたデータベースを再インストールした上で再度行って下さい。',
    76 => '現在のGeeklogのバージョンを選択',
    77 => 'インストーラはGeeklogの現在のバージョンを確認できませんでした。どうぞ、次のリストから選択してください。',
    78 => 'アップグレード・エラー',
    79 => 'Geeklogのアップグレードのインストール中にエラーが発生しました。',
    80 => '変更',
    81 => '停止!',
    82 => '以下にリストされたファイルのパーミッションを変更することが重要です。そうするまで、Geeklogはインストールできません。',
    83 => 'インストール・エラー',
    84 => 'パスの "',
    85 => '" は存在しないか誤っています。どうか、ページを戻って、もう一度試してしてください。',
    86 => '言語',
    87 => 'http://www.geeklog.net/forum/index.php?forum=1',
    88 => 'ディレクトリと含まれているファイルを',
    89 => '現在のバージョン:',
    90 => 'データベースが空?',
    91 => 'データベースが空か、入力されたデータベースのアクセス情報が正しくありません。もしくは、(アップグレードの代わりに)新規インストールをされたかったのではないでしょうか?  どうか、ページを戻って、もう一度試してください。',
    92 => 'UTF-8を使用'
);

// +---------------------------------------------------------------------------+
// success.php

$LANG_SUCCESS = array(
    0 => 'インストールが完了',
    1 => 'Geeklogのインストール',
    2 => '完了!',
    3 => 'おめでとうございます、うまくGeeklogを',
    4 => 'できました。どうか、以下に表示された情報を読むのに少し時間を割いてください。',
    5 => '新しいGeeklogのサイトにログインするには、このアカウントを使用して下さい:',
    6 => 'ユーザ名:',
    7 => 'Admin',
    8 => 'パスワード:',
    9 => 'password',
    10 => 'セキュリティ警告',
    11 => '次の',
    12 => 'のことを忘れないでください:',
    13 => 'installディレクトリを削除するか名前を変更してください:',
    14 => '',
    15 => 'アカウントのパスワードを変更してください。',
    16 => '',
    17 => 'と',
    18 => 'のアクセス権を戻して下さい:',
    19 => '<strong>注意:</strong>セキュリティ・モデルが変更されたため、新しいサイトを管理するのに必要な権限を持った新しいアカウントを作成しました。新しいアカウントのユーザ名は<b>NewAdmin</b>、パスワードは<b>password</b>です。',
    20 => 'インストール',
    21 => 'アップグレード'
);

// +---------------------------------------------------------------------------+
// help.php

$LANG_HELP = array(
    0 => 'Geeklogインストールのサポート',
    1 => 'あなたのWebサイト名です。',
    2 => '簡単なWebサイトの説明です。',
    3 => 'GeeklogはMySQLかMicrosoft SQLデータベースのいずれかを使用してインストールできます。どちらを選択すべきか確かでない場合はホスティング・サービスの提供者に確認してみて下さい。
<br><br><strong>注意:</strong>InooDBテーブルは(たいへん)巨大なサイトでは性能を改善するかもしれませんが、データベースのバックアップをより複雑にします。',
    4 => '使用するデータベース・サーバのネットワーク名(またはIPアドレス)です。一般的に"localhost"です。もし、確かでない場合はホスティング・サービスの提供者に確認してみて下さい。',
    5 => 'データベースの名前です。もし、確かでない場合はホスティング・サービスの提供者に確認してみて下さい。',
    6 => 'データベースのアカウントのユーザ名です。もし、確かでない場合はホスティング・サービスの提供者に確認してみて下さい。',
    7 => 'データベースのアカウントのパスワードです。もし、確かでない場合はホスティング・サービスの提供者に確認してみて下さい。',
    8 => 'ユーザによっては、同じデータベースに複数のGeeklogのコピーをインストールしたい場合があります。それぞれのGeeklogのコピーが正しく動作するためには、それぞれが一意となるテーブルのプリフィックス(すなわちgl1_やgl2_といった)を指定しなければなりません。',
    9 => 'あなたのサイトの正しいURLであることを確認して下さい。すなわち、Geeklogの<code>index.php</code>が位置する(最後にスラッシュをつけない)場所となります。',
    10 => 'ホスティング・サービスによっては、予めadminディレクトリが設定されている場合があります。このような場合は、Geeklogのadminディレクトリを何か別の"myadmin"といった名前に変更して、以下のURLも合わせて変更する必要があります。Geeklogの管理メニューのアクセスに問題に出会うまでは、そのままにしてください。',
    11 => 'これはGeeklogによって送信されるすべてのメールの返信アドレスと、シンジケーション・フィードに表示される連絡先となります。',
    12 => 'これはユーザが登録を行ったときなどに送信されるメールの送信者アドレスです。これはサイトの電子メール・アドレスと同一にするか、spammerがこのサイトに登録してあなたのメールアドレスを取得するのを防ぐために、届かないアドレスにしてください。上のアドレスと同じでない場合は、送信されるメッセージに届かないアドレスであるとを書いておくことをお勧めします。',
    13 => 'UTF-8をあなたのサイトのデフォルトの文字セットとすることを指示します。複数言語の構成とする場合にお勧めします。'
);

?>
