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
 * @copyright  2019 Catalyst IT
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = '新增模版';
$string['allowedbrowserkeysdistinct'] = 'The keys must all be different.';
$string['allowedbrowserkeyssyntax'] = 'A key should be a 64-character hex string.';
$string['cachedef_config'] = 'SEB 設置快取';
$string['cachedef_configkey'] = 'SEB config key cache';
$string['cachedef_quizsettings'] = 'SEB quiz settings cache';
$string['cantdelete'] = 'The template can\'t be deleted as it has been used for one or more quizzes.';
$string['cantedit'] = 'The template can\'t be edited as it has been used for one or more quizzes.';
$string['clientrequiresseb'] = 'This quiz has been configured to use the Safe Exam Browser with client configuration.';
$string['confirmtemplateremovalquestion'] = '您確定要刪除此模板嗎？';
$string['confirmtemplateremovaltitle'] = '確認模板刪除?';
$string['conflictingsettings'] = 'You don\'t have permission to update existing Safe Exam Browser settings.';
$string['content'] = '模版';
$string['description'] = '描述';
$string['disabledsettings'] = '關閉設定';
$string['disabledsettings_help'] = 'Safe Exam Browser quiz settings can\'t be changed if the quiz has been attempted. To change a setting, all quiz attempts must first be deleted.';
$string['downloadsebconfig'] = '下戴 SEB 設定檔';
$string['duplicatetemplate'] = 'A template with the same name already exists.';
$string['edittemplate'] = '修改模版';
$string['enabled'] = '啟用';
$string['event:accessprevented'] = "測驗訪問己被阻止";
$string['event:templatecreated'] = '己經建立 SEB 模版';
$string['event:templatedeleted'] = '己經刪除 SEB 模版';
$string['event:templatedisabled'] = '己經關閉 SEB 模版';
$string['event:templateenabled'] = '己經啟用 SEB 模版';
$string['event:templateupdated'] = '己經上傳 SEB 模版';
$string['exitsebbutton'] = '離開 Safe Exam Browser';
$string['filemanager_sebconfigfile'] = 'Upload Safe Exam Browser config file';
$string['filemanager_sebconfigfile_help'] = 'Please upload your own Safe Exam Browser config file for this quiz.';
$string['filenotpresent'] = '請上傳 SEB 設定檔';
$string['fileparsefailed'] = 'The uploaded file could not be saved as a SEB config file.';
$string['httplinkbutton'] = 'Download configuration';
$string['invalid_browser_key'] = "Invalid SEB browser key";
$string['invalid_config_key'] = "Invalid SEB config key";
$string['invalidkeys'] = "The config key or browser exam keys could not be validated. Please ensure you are using the Safe Exam Browser with correct configuration file.";
$string['invalidtemplate'] = "無效的 SEB 設置模版";
$string['manage_templates'] = 'Safe Exam Browser 模版';
$string['managetemplates'] = '管理模板';
$string['missingrequiredsettings'] = 'Config settings are missing some required values.';
$string['name'] = '名子';
$string['newtemplate'] = '新模版';
$string['noconfigfilefound'] = 'No uploaded SEB config file could be found for quiz with cmid: {$a}';
$string['noconfigfound'] = 'No SEB config could be found for quiz with cmid: {$a}';
$string['not_seb'] = '未使用Safe Exam Browser。';
$string['notemplate'] = '無模版';
$string['passwordnotset'] = 'Current settings require quizzes using the Safe Exam Browser to have a quiz password set.';
$string['pluginname'] = 'Safe Exam Browser access rules';
$string['privacy:metadata:quizaccess_seb_quizsettings'] = 'Safe Exam Browser settings for a quiz. This includes the ID of the last user to create or modify the settings.';
$string['privacy:metadata:quizaccess_seb_quizsettings:quizid'] = 'ID of the quiz the settings exist for.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = 'Unix time that the settings were created.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = 'Unix time that the settings were last modified.';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = 'ID of user who last created or modified the settings.';
$string['privacy:metadata:quizaccess_seb_template'] = 'Safe Exam Browser template settings. This includes the ID of the last user to create or modify the template.';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = 'Unix time that the template was created.';
$string['privacy:metadata:quizaccess_seb_template:timemodified'] = 'Unix time that the template was last modified.';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = 'ID of user who last created or modified the template.';
$string['quizsettings'] = '快速設定';
$string['restoredfrom'] = '{$a->name} (restored via cmid {$a->cmid})';
$string['seb'] = 'Safe Exam Browser';
$string['seb:bypassseb'] = '繞過在Safe Exam Browser中查看測驗的要求。';
$string['seb:manage_filemanager_sebconfigfile'] = '修改 SEB 考試設定: 選擇 SEB 設定檔';
$string['seb:manage_seb_activateurlfiltering'] = '修改 SEB 考試設定: Activate URL filtering';
$string['seb:manage_seb_allowedbrowserexamkeys'] = '修改 SEB 考試設定: Allowed browser exam keys';
$string['seb:manage_seb_allowreloadinexam'] = '修改 SEB 考試設定: 允許重新戴入';
$string['seb:manage_seb_allowspellchecking'] = '修改 SEB 考試設定: Enable spell checking';
$string['seb:manage_seb_allowuserquitseb'] = '修改 SEB 考試設定: 允許離開';
$string['seb:manage_seb_enableaudiocontrol'] = '修改 SEB 考試設定: 啟用音源控制';
$string['seb:manage_seb_expressionsallowed'] = '修改 SEB 考試設定: Simple expressions allowed';
$string['seb:manage_seb_expressionsblocked'] = '修改 SEB 考試設定: Simple expressions blocked';
$string['seb:manage_seb_filterembeddedcontent'] = '修改 SEB 考試設定: Filter embedded content';
$string['seb:manage_seb_linkquitseb'] = '修改 SEB 考試設定: 關閉連結';
$string['seb:manage_seb_muteonstartup'] = '修改 SEB 考試設定: Mute on startup';
$string['seb:manage_seb_quitpassword'] = '修改 SEB 考試設定: 關閉密碼';
$string['seb:manage_seb_regexallowed'] = '修改 SEB 考試設定: Regex expressions allowed';
$string['seb:manage_seb_regexblocked'] = '修改 SEB 考試設定: Regex expressions blocked';
$string['seb:manage_seb_requiresafeexambrowser'] = '修改 SEB 考試設定: Require Safe Exam Browser';
$string['seb:manage_seb_showkeyboardlayout'] = '修改 SEB 考試設定: 顯示鍵盤按鍵配置';
$string['seb:manage_seb_showreloadbutton'] = '修改 SEB 考試設定: 顯示重新戴入按鍵';
$string['seb:manage_seb_showsebtaskbar'] = '修改 SEB 考試設定: 顯示任務欄';
$string['seb:manage_seb_showtime'] = '修改 SEB 考試設定: 顯示時間';
$string['seb:manage_seb_showwificontrol'] = '修改 SEB 考試設定: 顯示 Wi-Fi 控制項';
$string['seb:manage_seb_showsebdownloadlink'] = '修改 SEB 考試設定: 顯示下戴連結';
$string['seb:manage_seb_templateid'] = '修改 SEB 考試設定: 選擇 SEB 模版';
$string['seb:manage_seb_userconfirmquit'] = '修改 SEB 考試設定: Confirm on quit';
$string['seb:managetemplates'] = 'Manage SEB configuration templates';
$string['seb_activateurlfiltering'] = 'Enable URL filtering';
$string['seb_activateurlfiltering_help'] = 'If enabled, URLs will be filtered when loading web pages. The filter set has to be defined below.';
$string['seb_allowedbrowserexamkeys'] = 'Allowed browser exam keys';
$string['seb_allowedbrowserexamkeys_help'] = 'In this field you can enter the allowed browser exam keys for versions of Safe Exam Browser that are permitted to access this quiz. If no keys are entered, then browser exam keys are not checked.';
$string['seb_allowreloadinexam'] = 'Enable reload in exam';
$string['seb_allowreloadinexam_help'] = 'If enabled, page reload is allowed (reload button in SEB task bar, browser tool bar, iOS side slider menu, keyboard shortcut F5/cmd+R). Note that offline caching may break if a user tries to reload a page without an internet connection.';
$string['seb_allowspellchecking'] = 'Enable spell checking';
$string['seb_allowspellchecking_help'] = 'If enabled, spell checking in the SEB browser is allowed.';
$string['seb_allowuserquitseb'] = 'Enable quitting of SEB';
$string['seb_allowuserquitseb_help'] = 'If enabled, users can quit SEB with the "Quit" button in the SEB task bar or by pressing the keys Ctrl-Q or by clicking the main browser window close button.';
$string['seb_enableaudiocontrol'] = 'Enable audio controls';
$string['seb_enableaudiocontrol_help'] = 'If enabled, the audio control icon is shown in the SEB task bar.';
$string['seb_expressionsallowed'] = 'Expressions allowed';
$string['seb_expressionsallowed_help'] = 'A text field which contains the allowed filtering expressions for the allowed URLs. Use of the wildcard char \'\*\' is possible. Examples for expressions: \'example.com\' or \'example.com/stuff/\*\'. \'example.com\' matches \'example.com\', \'www.example.com\' and \'www.mail.example.com\'. \'example.com/stuff/\*\' matches all requests to any subdomain of \'example.com\' that have \'stuff\' as the first segment of the path.';
$string['seb_expressionsblocked'] = 'Expressions blocked';
$string['seb_expressionsblocked_help'] = 'A text field which contains the filtering expressions for the blocked URLs. Use of the wildcard char \'\*\' is possible. Examples for expressions: \'example.com\' or \'example.com/stuff/\*\'. \'example.com\' matches \'example.com\', \'www.example.com\' and \'www.mail.example.com\'. \'example.com/stuff/\*\' matches all requests to any subdomain of \'example.com\' that have \'stuff\' as the first segment of the path.';
$string['seb_filterembeddedcontent'] = 'Filter also embedded content';
$string['seb_filterembeddedcontent_help'] = 'If enabled, embedded resources will also be filtered using the filter set.';
$string['seb_help'] = 'Setup quiz to use the Safe Exam Browser.';
$string['seb_linkquitseb'] = 'Show Exit Safe Exam Browser button, configured with this quit link';
$string['seb_linkquitseb_help'] = 'In this field you can enter the link to quit SEB. It will be used on an "Exit Safe Exam Browser" button on the page that appears after the exam is submitted. When clicking the button or the link placed wherever you want to put it, it is possible to quit SEB without having to enter a quit password. If no link is entered, then the "Exit Safe Exam Browser" button does not appear and there is no link set to quit SEB.';
$string['seb_managetemplates'] = 'Manage Safe Exam Browser templates';
$string['seb_muteonstartup'] = 'Mute on startup';
$string['seb_muteonstartup_help'] = 'If enabled, audio is initially muted when starting SEB.';
$string['seb_quitpassword'] = 'Quit password';
$string['seb_quitpassword_help'] = 'This password is prompted when users try to quit SEB with the "Quit" button, Ctrl-Q or the close button in the main browser window. If no quit password is set, then SEB just prompts "Are you sure you want to quit SEB?".';
$string['seb_regexallowed'] = 'Regex allowed';
$string['seb_regexallowed_help'] = 'A text field which contains the filtering expressions for allowed URLs in a regular expression (Regex) format.';
$string['seb_regexblocked'] = 'Regex blocked';
$string['seb_regexblocked_help'] = 'A text field which contains the filtering expressions for blocked URLs in a regular expression (Regex) format.';
$string['seb_requiresafeexambrowser'] = 'Require the use of Safe Exam Browser';
$string['seb_requiresafeexambrowser_help'] = 'If enabled, students can only attempt the quiz using the Safe Exam Browser.
The available options are:

* 否
<br/>Safe Exam Browser is not required to attempt the quiz.
* 是 – Use an existing template
<br/>A template for the configuration of Safe Exam Browser can be used. Templates are managed in the site administration. Your manual settings overwrite the settings in the template.
* 是 – Configure manually
<br/>No template for the configuration of Safe Exam Browser will be used. You can configure Safe Exam Browser manually.
* 是 – 上傳我的設置
<br/>You can upload your own Safe Exam Browser configuration file. All manual settings and the use of templates will be disabled.
* 是 – 使用 SEB 客戶端的設置
<br/>No configurations of Safe Exam Browser are on the Moodle side. The quiz can be attempted with any configuration of Safe Exam Browser.';
$string['seb_showkeyboardlayout'] = '顯示鍵盤按鍵配置';
$string['seb_showkeyboardlayout_help'] = 'If enabled, the current keyboard layout is shown in the SEB task bar. It allows you to switch to other keyboard layouts, which have been enabled in the operating system.';
$string['seb_showreloadbutton'] = '顯示重新戴入按鍵';
$string['seb_showreloadbutton_help'] = 'If enabled, a reload button is displayed in the SEB task bar, allowing the current web page to be reloaded.';
$string['seb_showsebtaskbar'] = '顯示 SEB 任務欄';
$string['seb_showsebtaskbar_help'] = 'If enabled, a task bar appears at the bottom of the SEB browser window. The task bar is required to display items such as Wi-Fi control, reload button, time and keyboard layout.';
$string['seb_showtime'] = '顯示時間';
$string['seb_showtime_help'] = 'If enabled, the current time is displayed in the SEB task bar.';
$string['seb_showwificontrol'] = '顯示 Wi-Fi 控制項';
$string['seb_showwificontrol_help'] = 'If enabled, a Wi-Fi control button appears in the SEB task bar. The button allows users to reconnect to Wi-Fi networks which have previously been connected to.';
$string['seb_showsebdownloadlink'] = 'Show Safe Exam Browser download button';
$string['seb_showsebdownloadlink_help'] = 'If enabled, a button for Safe Exam Browser download will be shown on the quiz start page.';
$string['seb_templateid'] = 'Safe Exam Browser 設置模版';
$string['seb_templateid_help'] = 'The settings in the selected config template will be used for the configuration of the Safe Exam Browser while attempting the quiz. You may overwrite the settings in the template with your manual settings.';
$string['seb_use_client'] = '是 – 使用 SEB 客戶端設定';
$string['seb_use_manually'] = '是 – Configure manually';
$string['seb_use_template'] = '是 – Use an existing template';
$string['seb_use_upload'] = '是 – 上傳我自己的設置';
$string['seb_userconfirmquit'] = '詢問用戶確認退出';
$string['seb_userconfirmquit_help'] = 'If enabled, users have to confirm quitting of SEB when a quit link is detected.';
$string['sebdownloadbutton'] = '下戴 Safe Exam Browser';
$string['seblinkbutton'] = '啟動 Safe Exam Browser';
$string['sebrequired'] = "This quiz has been configured so that students may only attempt it using the Safe Exam Browser.";
$string['setting:autoreconfigureseb'] = '自動設置 SEB';
$string['setting:autoreconfigureseb_desc'] = 'If enabled, users who navigate to the quiz using the Safe Exam Browser will be automatically forced to reconfigure their Safe Exam Browser.';
$string['setting:displayblocksbeforestart'] = 'Display blocks before starting quiz';
$string['setting:displayblocksbeforestart_desc'] = 'If enabled, blocks will be displayed before a user attempts the quiz.';
$string['setting:displayblockswhenfinished'] = 'Display blocks after finishing quiz';
$string['setting:displayblockswhenfinished_desc'] = 'If enabled, blocks will be displayed after a user has finished their quiz attempt.';
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
