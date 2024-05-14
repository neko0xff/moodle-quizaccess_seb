<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for the quizaccess_seb plugin.
 *
 * @package    quizaccess_seb
 * @author     Luca Bösch <luca.boesch@bfh.ch>
 * @author     Andrew Madden <andrewmadden@catalyst-au.net>
 * @author     Dmitrii Metelkin <dmitriim@catalyst-au.net>
 * @translate_zh-TW  neko0xff <neko_0xff@protonmail.com>
 * @copyright  2019 Catalyst IT
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = '新增模版';
$string['allowedbrowserkeysdistinct'] = '密鑰必須全部不同。';
$string['allowedbrowserkeyssyntax'] = '密鑰應該是 64 個字符的十六進制的字符串';
$string['cachedef_config'] = 'SEB 設置快取';
$string['cachedef_configkey'] = 'SEB 配置密鑰緩存';
$string['cachedef_quizsettings'] = 'SEB 測驗設置緩存';
$string['cantdelete'] = '該模板已用於一項或多項測驗，因此無法刪除。';
$string['cantedit'] = '該模板已用於一項或多項測驗，因此無法編輯。';
$string['clientrequiresseb'] = '此測驗已配置為使用帶有客戶端配置的Safe Exam Browser。';
$string['confirmtemplateremovalquestion'] = '您確定要刪除此模板嗎？';
$string['confirmtemplateremovaltitle'] = '確認模板刪除?';
$string['conflictingsettings'] = '您無權更新現有的 Safe Exam Browser 設置。';
$string['content'] = '模版';
$string['description'] = '描述';
$string['disabledsettings'] = '關閉設定';
$string['disabledsettings_help'] = '如果已進行測驗，則無法更改 Safe Exam Browser 測驗設置。 要更改設置，必須首先刪除所有進行中的測驗。';
$string['downloadsebconfig'] = '下戴 SEB 設定檔';
$string['duplicatetemplate'] = '已存在同名模板。';
$string['edittemplate'] = '修改模版';
$string['enabled'] = '啟用';
$string['event:accessprevented'] = "測驗訪問己被阻止";
$string['event:templatecreated'] = '己經建立 SEB 模版';
$string['event:templatedeleted'] = '己經刪除 SEB 模版';
$string['event:templatedisabled'] = '己經關閉 SEB 模版';
$string['event:templateenabled'] = '己經啟用 SEB 模版';
$string['event:templateupdated'] = '己經上傳 SEB 模版';
$string['exitsebbutton'] = '離開 Safe Exam Browser';
$string['filemanager_sebconfigfile'] = '上傳 Safe Exam Browser 設定檔';
$string['filemanager_sebconfigfile_help'] = '請為此測驗上傳您自己的Safe Exam Browser設定檔。';
$string['filenotpresent'] = '請上傳 SEB 設定檔';
$string['fileparsefailed'] = '上傳的文件無法保存為 SEB 設定檔。';
$string['httplinkbutton'] = '下戴設定檔';
$string['invalid_browser_key'] = "無效的 SEB 瀏覽器金鑰";
$string['invalid_config_key'] = "無效的 SEB 設置金鑰";
$string['invalidkeys'] = "無法驗證配置密鑰或瀏覽器檢查密鑰。 請確保您使用的Safe Exam Browser具有正確的配置文件。";
$string['invalidtemplate'] = "無效的 SEB 設置模版";
$string['manage_templates'] = 'Safe Exam Browser 模版';
$string['managetemplates'] = '管理模板';
$string['missingrequiredsettings'] = '配置設置缺少一些必需的值。';
$string['name'] = '名子';
$string['newtemplate'] = '新模版';
$string['noconfigfilefound'] = '找不到已上傳的SEB配置文件用於識別碼為:{$a}的測驗';
$string['noconfigfound'] = '找不到SEB配置用於識別碼為:{$a}的測驗';
$string['not_seb'] = '未使用Safe Exam Browser。';
$string['notemplate'] = '無模版';
$string['passwordnotset'] = '目前的設定要求使用Safe Exam Browser的測驗必須設置一個測驗密碼。';
$string['pluginname'] = 'Safe Exam Browser 允許規則';
$string['privacy:metadata:quizaccess_seb_quizsettings'] = 'Safe Exam Browser在測驗時的設定。包括最後一個建立或修改設定的使用者ID。';
$string['privacy:metadata:quizaccess_seb_quizsettings:quizid'] = '存在這些設定的測驗ID。';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = '建立設定的Unix時間。';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = '上次修改設定的Unix時間。';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = '最後一個建立或修改設定的使用者ID。';
$string['privacy:metadata:quizaccess_seb_template'] = 'Safe Exam Browser模板設定。包括最後一個建立或修改模板的使用者ID。';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = '創建模板時的 Unix 時間。';
$string['privacy:metadata:quizaccess_seb_template:timemodified'] = '上次修改模板的 Unix 時間。';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = '最後一個建立或修改模板的使用者ID。';
$string['quizsettings'] = '快速設定';
$string['restoredfrom'] = '{$a->name} (通過cmid恢復 {$a->cmid})';
$string['seb'] = 'Safe Exam Browser';
$string['seb:bypassseb'] = '繞過在Safe Exam Browser中查看測驗的要求。';
$string['seb:manage_filemanager_sebconfigfile'] = '修改 SEB 考試設定: 選擇 SEB 設定檔';
$string['seb:manage_seb_activateurlfiltering'] = '修改 SEB 考試設定: 啟用 URL 過濾';
$string['seb:manage_seb_allowedbrowserexamkeys'] = '修改 SEB 考試設定: 允許的瀏覽器考試按鍵';
$string['seb:manage_seb_allowreloadinexam'] = '修改 SEB 考試設定: 允許重新戴入';
$string['seb:manage_seb_allowspellchecking'] = '修改 SEB 考試設定: 開啟拼寫檢查';
$string['seb:manage_seb_allowuserquitseb'] = '修改 SEB 考試設定: 允許離開';
$string['seb:manage_seb_enableaudiocontrol'] = '修改 SEB 考試設定: 啟用音頻控制';
$string['seb:manage_seb_expressionsallowed'] = '修改 SEB 考試設定: 允許簡單的表達式';
$string['seb:manage_seb_expressionsblocked'] = '修改 SEB 考試設定: 禁止簡單的表達式';
$string['seb:manage_seb_filterembeddedcontent'] = '修改 SEB 考試設定: 過濾嵌入內容';
$string['seb:manage_seb_linkquitseb'] = '修改 SEB 考試設定: 關閉連結';
$string['seb:manage_seb_muteonstartup'] = '修改 SEB 考試設定: 啟動時靜音';
$string['seb:manage_seb_quitpassword'] = '修改 SEB 考試設定: 關閉密碼';
$string['seb:manage_seb_regexallowed'] = '修改 SEB 考試設定: 允許正則表達式';
$string['seb:manage_seb_regexblocked'] = '修改 SEB 考試設定: 禁用正則表達式';
$string['seb:manage_seb_requiresafeexambrowser'] = '修改 SEB 考試設定: 需要 Safe Exam Browser';
$string['seb:manage_seb_showkeyboardlayout'] = '修改 SEB 考試設定: 顯示鍵盤按鍵配置';
$string['seb:manage_seb_showreloadbutton'] = '修改 SEB 考試設定: 顯示重新戴入按鍵';
$string['seb:manage_seb_showsebtaskbar'] = '修改 SEB 考試設定: 顯示任務欄';
$string['seb:manage_seb_showtime'] = '修改 SEB 考試設定: 顯示時間';
$string['seb:manage_seb_showwificontrol'] = '修改 SEB 考試設定: 顯示 Wi-Fi 控制項';
$string['seb:manage_seb_showsebdownloadlink'] = '修改 SEB 考試設定: 顯示下戴連結';
$string['seb:manage_seb_templateid'] = '修改 SEB 考試設定: 選擇 SEB 模版';
$string['seb:manage_seb_userconfirmquit'] = '修改 SEB 考試設定: 退出時確認';
$string['seb:managetemplates'] = '管理 SEB 設置模版';
$string['seb_activateurlfiltering'] = '啟用 URL 過濾';
$string['seb_activateurlfiltering_help'] = '如果啟用，加載網頁時將過濾 URL。 過濾器組必須在下面定義。';
$string['seb_allowedbrowserexamkeys'] = '允許的瀏覽器考試鍵';
$string['seb_allowedbrowserexamkeys_help'] = '在此欄位中,您可以輸入允許訪問此測驗的Safe Exam Browser版本的瀏覽器考試密鑰。如果未輸入任何密鑰,則不會檢查瀏覽器考試密鑰。';
$string['seb_allowreloadinexam'] = '在考試中啟用重新加載';
$string['seb_allowreloadinexam_help'] = '如果啟用，則允許頁面重新加載（SEB 任務欄、瀏覽器工具欄、iOS 側滑塊菜單、鍵盤快捷鍵 F5/cmd+R 中的重新加載按鈕）。 請注意，如果用戶嘗試在沒有互聯網連接的情況下重新加載頁面，則脫機緩存可能會中斷。';
$string['seb_allowspellchecking'] = '開啟拼寫檢查';
$string['seb_allowspellchecking_help'] = '如果啟用，則允許在 SEB 瀏覽器中進行拼寫檢查。';
$string['seb_allowuserquitseb'] = ' 在SEB內啟用退出';
$string['seb_allowuserquitseb_help'] = '如果啟用,使用者可以透過SEB工作列上的"退出"按鈕、按Ctrl-Q鍵或點擊主瀏覽器視窗關閉按鈕來退出SEB。';
$string['seb_enableaudiocontrol'] = '啟用音頻控制';
$string['seb_enableaudiocontrol_help'] = '如果啟用，音頻控製圖標將顯示在 SEB 任務欄中。';
$string['seb_expressionsallowed'] = '允許表達式';
$string['seb_expressionsallowed_help'] = '一個文字欄位,包含允許網址的過濾表達式。可以使用萬用字元''。表達式範例: \'example.com\' 或 \'example.com/stuff/\'。\'example.com\' 匹配 \'example.com\'、\'www.example.com\' 和 \'www.mail.example.com\'。 \'example.com/stuff/\*\' 匹配所有對 \'example.com\' 任何子域名且路徑的第一段為 \'stuff\' 的請求。';
$string['seb_expressionsblocked'] = '禁用表達式';
$string['seb_expressionsblocked_help'] = '此文字欄位包含用于過濾被阻擋 URL 的過濾表达式。可以使用通配符字符 \'\*\'. 表達式範例: \'example.com\'或\'example.com/stuff/\*\'. \'example.com\'匹配 \'example.com\'、\'www.example.com\'和 \'www.mail.example.com\'。\'example.com/stuff/\*\' 匹配所有路徑的第一段為「stuff」的「example.com」任何子域的請求。';
$string['seb_filterembeddedcontent'] = '過濾嵌入的內容';
$string['seb_filterembeddedcontent_help'] = '如果啟用，嵌入資源也將使用過濾器集進行過濾。';
$string['seb_help'] = '設置測驗時只使用 Safe Exam Browser.';
$string['seb_linkquitseb'] = '顯示使用此退出鏈接配置的“退出Safe Exam Browser”按鈕';
$string['seb_linkquitseb_help'] = '在此字段中，您可以輸入退出 SEB 的鏈接。 它將用於提交考試後出現的頁面上的“退出Safe Exam Browser”按鈕。 單擊該按鈕或放置在任意位置的鏈接時，可以退出 SEB，而無需輸入退出密碼。 如果未輸入鏈接，則不會出現“退出Safe Exam Browser”按鈕，並且沒有設置用於退出 SEB 的鏈接。';
$string['seb_managetemplates'] = '管理Safe Exam Browser模板';
$string['seb_muteonstartup'] = '啟動時靜音';
$string['seb_muteonstartup_help'] = '如果啟用，啟動 SEB 時音頻最初會靜音。';
$string['seb_quitpassword'] = '退出密碼';
$string['seb_quitpassword_help'] = '當使用者嘗試使用「退出」按鈕、Ctrl-Q 或主瀏覽器窗口的關閉按鈕退出 SEB 時，會提示此密碼。如果未设置退出密码，则 SEB 只會提示「您確定要退出 SEB 嗎？」。';
$string['seb_regexallowed'] = '允許正則表達式';
$string['seb_regexallowed_help'] = '包含正則表達式 (Regex) 格式的允許 URL 的過濾表達式的文本字段。';
$string['seb_regexblocked'] = '禁止正則表達式';
$string['seb_regexblocked_help'] = '包含正則表達式 (Regex) 格式的阻止 URL 的過濾表達式的文本字段。';
$string['seb_requiresafeexambrowser'] = '需要使用 Safe Exam Browser';
$string['seb_requiresafeexambrowser_help'] = '如果啟用，學生只能使用Safe Exam Browser進行測驗。
可用的選項有：

* 否
<br/>嘗試測驗時，不需要Safe Exam Browser .
* 是 – 使用現有模板
<br/>可以使用 Safe Exam Browser 預設配置模板。 模板在站點管理中進行管理。 您的手動設定會覆蓋模板中的配置。
* 是 – 手動配置
<br/>將不會使用 Safe Exam Browser 預設配置模板。 您可以手動配置Safe Exam Browser。
* 是 – 上傳我的設置
<br/>您可以上傳自己的 Safe Exam Browser 配置文件。 所有手動設置和模板的使用都將被禁用。
* 是 – 使用 SEB 客戶端的設置
<br/>Moodle 端沒有Safe Exam Browser的配置。 可以使用 Safe Exam Browser 的任何配置來嘗試進行測驗。';
$string['seb_showkeyboardlayout'] = '顯示鍵盤按鍵配置';
$string['seb_showkeyboardlayout_help'] = '如果啟用,當前的鍵盤佈局會顯示在SEB工作列上。它允許您切換到在作業系統中啟用的其他鍵盤佈局。';
$string['seb_showreloadbutton'] = '顯示重新戴入按鍵';
$string['seb_showreloadbutton_help'] = '如果啟用,SEB工作列上將顯示一個重新載入按鈕,允許重新載入目前的網頁。';
$string['seb_showsebtaskbar'] = '顯示 SEB 任務欄';
$string['seb_showsebtaskbar_help'] = '若啟用，工作列將出現在 SEB 瀏覽器窗口的底部。工作列用於顯示項目，例如 Wi-Fi 控制、重新載入按鈕、時間和鍵盤配置。';
$string['seb_showtime'] = '顯示時間';
$string['seb_showtime_help'] = '如果啟用，當前時間將顯示在 SEB 任務欄中。';
$string['seb_showwificontrol'] = '顯示 Wi-Fi 控制項';
$string['seb_showwificontrol_help'] = '如果啟用,SEB工作列上將顯示一個Wi-Fi控制按鈕。該按鈕允許使用者重新連線至先前連線過的Wi-Fi網路。';
$string['seb_showsebdownloadlink'] = '顯示 Safe Exam Browser 下戴按鈕';
$string['seb_showsebdownloadlink_help'] = '如果啟用，則測驗開始頁面上將顯示Safe Exam Browser下載按鈕。';
$string['seb_templateid'] = 'Safe Exam Browser 設置模版';
$string['seb_templateid_help'] = '嘗試測驗時,將使用所選配置範本中的設定來配置安全考試瀏覽器。您可以使用手動設定來覆蓋範本中的設定。';
$string['seb_use_client'] = '是 – 使用 SEB 客戶端設定';
$string['seb_use_manually'] = '是 – 手動配置';
$string['seb_use_template'] = '是 – 使用現有的模板';
$string['seb_use_upload'] = '是 – 上傳我自己的設置';
$string['seb_userconfirmquit'] = '詢問用戶確認是否退出';
$string['seb_userconfirmquit_help'] = '如果啟用，當檢測到退出連結時，用戶必須確認退出 SEB。';
$string['sebdownloadbutton'] = '下戴 Safe Exam Browser';
$string['seblinkbutton'] = '啟動 Safe Exam Browser';
$string['sebrequired'] = "此測驗已配置為學生只能使用Safe Exam Browser進行測驗。";
$string['setting:autoreconfigureseb'] = '自動設置 SEB';
$string['setting:autoreconfigureseb_desc'] = '如果啟用，使用Safe Exam Browser導航到測驗的用戶將自動強制重新配置其Safe Exam Browser。';
$string['setting:displayblocksbeforestart'] = '開始測驗前顯示塊';
$string['setting:displayblocksbeforestart_desc'] = '如果啟用，將在用戶進行測驗之前顯示塊。';
$string['setting:displayblockswhenfinished'] = '完成測驗後顯示塊';
$string['setting:displayblockswhenfinished_desc'] = '如果啟用，將在用戶完成測驗後顯示塊。';
$string['setting:downloadlink'] = 'Safe Exam Browser 下戴連結';
$string['setting:downloadlink_desc'] = '用於下載 Safe Exam Browser 應用程式的URL。';
$string['setting:quizpasswordrequired'] = '需要考試密碼';
$string['setting:quizpasswordrequired_desc'] = '如果啟用，所有需要使用到Safe Exam Browser的測驗都必須設置測驗密碼。';
$string['setting:showhttplink'] = '顯示 http:// 連結';
$string['setting:showseblink'] = '顯示 seb:// 連結';
$string['setting:showseblinks'] = '顯示 Safe Exam Browser 設定連結';
$string['setting:showseblinks_desc'] = '當訪問測驗被阻止時是否顯示用戶訪問Safe Exam Browser配置文件的連接。 請注意，seb:// 鏈接可能不適用於所有瀏覽器。';
$string['setting:supportedversions'] = '請注意，要使用配置鍵功能，需要以下最低版本的 Safe Exam Browser 客戶端: macOS - 2.1.5pre2, Windows - 3.0, iOS - 2.1.14.';
$string['settingsfrozen'] = '由於至少有一次測驗嘗試，Safe Exam Browser的設置無法再更新。';
$string['unknown_reason'] = "未知原因";
$string['used'] = '己使用';
