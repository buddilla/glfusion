<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Geeklog 1.5                                                               |
// +---------------------------------------------------------------------------+
// | chinese_traditional_utf-8.php                                             |
// |                                                                           |
// | Chinese language file for the Geeklog installation script                 |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2000-2008 by the following authors:                         |
// |                                                                           |
// | Authors: Tony Bibbs         - tony AT tonybibbs DOT com                   |
// |          Mark Limburg       - mlimburg AT users DOT sourceforge DOT net   |
// |          Jason Whittenburg  - jwhitten AT securitygeeks DOT com           |
// |          Dirk Haun          - dirk AT haun-online DOT de                  |
// |          Randy Kolenko      - randy AT nextide DOT ca				       |
// |          Matt West          - matt AT mattdanger DOT net			       |
// |		  Samuel Maung Stone - sam AT stonemicro DOT com                   |
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
    0 => '志樂 – 終極網志系統',
    1 => '安裝支助',
    2 => '終極網志系統',
    3 => '志樂安裝',
    4 => '需要PHP 4.1.0',
    5 => '抱歉, 志樂要求最少 PHP 4.1.0 來操作(你有的是',
    6 => '). 請 <a href="http://www.php.net/downloads.php">升級PHP</a> 安裝 或請你的網站服務員幫你安裝.',
    7 => '找不到志樂檔案',
    8 => '安裝系統無法找到關鍵的志樂檔案. 也許你將它們搬移過. 請指定所需檔案和目錄的路徑:',
    9 => '歡迎你！並謝謝你選擇志樂!',
    10 => '檔案/目錄',
    11 => '許可設定',
    12 => '改為',
    13 => '目前',
    14 => '改目錄為',
    15 => '輸出志樂標題功能已關閉. <code>backend</code> 目錄沒被測試',
    17 => '用戶照片功能關閉. The <code>userphotos</code> 目錄沒被測試',
    18 => '文章圖像功能關閉. The <code>articles</code> 目錄沒被測試',
    19 => '志樂需要某些檔案和目錄能讓伺服器寫入. 以下列出必須更改的檔案和目錄.',
    20 => '注意!',
    21 => '你的志樂和網站將不能正常運作直到你解決以上問題. 不隨從這步驟便是運用志樂時出錯誤的第一個原因. 請作必要的更改後再繼續.',
    22 => '不知',
    23 => '選你的安裝方法:',
    24 => '新安裝',
    25 => '升級',
    26 => '無法更改',
    27 => '. 你有否肯定你的檔案能被伺服器寫入嗎?',
    28 => 'siteconfig.php. 你有否肯定你的檔案能被伺服器寫入嗎?',
    29 => '志樂網站',
    30 => '另一個俏皮的志樂網站',
    31 => '所需的設定資料',
    32 => '網站名',
    33 => '網站標語',
    34 => '數據種類',
    35 => 'MySQL',
    36 => 'MySQL 和InnoDB Table 支助',
    37 => 'Microsoft SQL',
    38 => '',
    39 => '資料庫主機名',
    40 => '資料庫名',
    41 => '資料庫用戶名',
    42 => '資料庫密碼',
    43 => '資料庫表格首碼',
    44 => '隨意設定',
    45 => '網站 URL',
    46 => '(沒有後隨的一丿slash)',
    47 => '管理員目錄路徑',
    48 => '網站電郵',
    49 => '網站的 不可回信的電郵',
    50 => '安裝',
    51 => '需要 MySQL 3.23.2',
    52 => '抱歉, 志樂需要最少 MySQL 3.23.2 來操作 (你有的是 ',
    53 => '). 請 <a href="http://dev.mysql.com/downloads/mysql/">升級你的MySQL</a> 安裝 或請你的網站主機服務員幫你升級.',
    54 => '錯誤的資料庫資料',
    55 => '抱歉, 資料庫資料好像不準確. 請回去再試一次.',
    56 => '無法連接到資料庫',
    57 => '抱歉，安裝系統無法找到你指定的資料庫. 可能資料庫不存在或你寫錯資料庫名字. 請回去再試.',
    58 => '. 你有否肯定檔案能夠被伺服器寫入嗎?',
    59 => '注:',
    60 => '你的 MySQL 版本不支援 InnoDB表格. 你想繼續不用 InnoDB 來安裝嗎?',
    61 => '回頭',
    62 => '繼續',
    63 => '有一個志樂資料庫已經存在. 此安裝系統不許可在現存的資料庫裏做新的志樂安裝. 想繼續的話你必須要選擇一下的一個項目:',
    64 => '刪除資料庫的表格. 或刪除整個資料庫而從新建立一個新的資料庫. 然後選擇以下的 "重試".',
    65 => '要執行資料庫升級 (到一個新的志樂版本) 選擇一下的 "升級".',
    66 => '重試',
    67 => '志樂資料庫設定有錯誤', 
    68 => '資料庫不是空的. 請刪除資料庫的表格後再試.',
    69 => '升級志樂',
    70 => '開始前請做目前志樂的資料庫備份. 此安裝系統會改變你的志樂資料庫，故萬一出了差錯你需要原有的資料庫來恢復網站。你已被警告!',
    71 => '請再下肯定你選擇了準確的志樂版本. 這程式會升級你的志樂版本 (i.e. 你可從任何版本升級到 ',
    72 => ').',
    73 => '請注意這程式不會升級任何貝它beta，或測試release candidate 志樂版本。',
    74 => '資料庫已經是最新的!',
    75 => '看來你的資料庫已經是最新的. 也許你曾經升級過. 若你想再升級, 請從新安裝原來備份的資料庫來重試.',
    76 => '選擇你現有的志樂版本',
    77 => '安裝系統無法確定你目前的志樂版本, 請在下列選擇:',
    78 => '升級錯誤',
    79 => '志樂升級除了錯誤.',
    80 => '更改',
    81 => '停止!',
    82 => '下列檔案的寫入許可設定是關鍵的. 在你處理這問題以前志樂不回安裝.',
    83 => '安裝錯誤',
    84 => '路徑 "',
    85 => '" 好像不對. 請回去重試.',
    86 => '語言',
    87 => 'http://www.geeklog.net/forum/index.php?forum=1',
    88 => '更改目錄和所屬檔案為',
    89 => '目前版本:',
    90 => '空的資料庫?',
    91 => '看來你的資料庫是空的或你提供的資料庫資料有錯誤. 或你想重新安裝 (而不是升級)? 請回去再試.',
    92 => '用 UTF-8'
);

// +---------------------------------------------------------------------------+
// success.php

$LANG_SUCCESS = array(
    0 => '安裝完成',
    1 => '志樂安裝 ',
    2 => ' 完成!',
    3 => '恭喜, 你已成功的 ',
    4 => ' 志樂。 請用一分鐘時間閱讀以下的資訊.',
    5 => '要登入你的新志樂網站, 請用這個帳戶:',
    6 => '用戶名:',
    7 => 'Admin',
    8 => '密碼:',
    9 => 'password',
    10 => '安全警告',
    11 => '不要忘記',
    12 => '項目',
    13 => '刪除或改名 install 目錄,',
    14 => '更改',
    15 => '帳戶密碼.',
    16 => '設定許可於',
    17 => '和',
    18 => '回到',
    19 => '<strong>注意:</strong> 因為安全模式已改變, 我們已建立了新的帳戶讓你管理你的新網站.  這新的帳戶名是 <b>NewAdmin</b> 和密碼是 <b>password</b>',
    20 => '安裝',
    21 => '升級'
);

// +---------------------------------------------------------------------------+
// help.php

$LANG_HELP = array(
    0 => '志樂安裝支助',
    1 => '你的網站名.',
    2 => '簡單的描述你的網站.',
    3 => '志樂可用 MySQL 或 Microsoft SQL 資料庫安裝. 若你不肯定你的選擇，請問你的主機服務員.<br><br><strong>注:</strong> InnoDB 表格也許會在巨大的網站上提升效果, 但它會使資料庫備份次序更加複雜.',
    4 => '你的資料庫的網路名 (或 IP 位址). 這通常是 "localhost". 若你不肯定，請問你的主機服務員.',
    5 => '你的資料庫名稱. 若你不肯定，請問你的主機服務員.',
    6 => '你的資料庫用戶名. 若你不肯定，請問你的主機服務員.',
    7 => '你的資料庫用戶密碼. 若你不肯定，請問你的主機服務員.',
    8 => '有些人想在同一個資料庫裏安裝數個志樂網站. 為了讓每一個志樂正確的運行他們必須有獨特的表格首碼 (例如： gl1_, gl2_, etc).',
    9 => '肯定這是你的網站的正確 URL, 就是志樂的 <code>index.php</code> 檔案存在處 (沒有後面的一丿).',
    10 => '有些主機服務者預先設定管理目錄 admin. 在這樣的情況下，你要將志樂的 admin 目錄改名，例如： "myadmin" 而且更改一下的 URL. 現暫時不必改，等到你發現進入 admin菜當是遇到問題.',
    11 => '這是所有志樂寄出的電郵的回信位址和在辛迪加的聯絡資訊.',
    12 => '這是系統電郵的寄信者位址用於用戶登記時等等. 這應當是跟網站電郵同樣或一個無法回信的位址避免冒名者借著網站登記來錄取你的地址. 若這電郵不跟上面一樣, 建議你加一個資訊在你寄出的電郵裏.',
    13 => '指示你是否要用 UTF-8 為你網站的默認字形檔. 這在多言語的網站上會有幫助.'
);
?>
