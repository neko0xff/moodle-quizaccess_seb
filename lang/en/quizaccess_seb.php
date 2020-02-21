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

$string['pluginname'] = 'Safe Exam Browser access rule';

// Privacy.
$string['privacy:metadata:quizaccess_seb_template'] = 'Safe Exam Browser template settings. This includes the ID of the last user to create or modify the settings.';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = 'ID of user who last created or modified the settings.';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = 'Unix time that the settings were created.';
$string['privacy:metadata:quizaccess_seb_template:timemodified'] = 'Unix time that the settings were last modified.';
$string['privacy:metadata:quizaccess_seb_quizsettings'] = 'Safe Exam Browser settings for a quiz. This includes the ID of the last user to create or modify the settings.';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = 'ID of user who last created or modified the settings.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = 'Unix time that the settings were created.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = 'Unix time that the settings were last modified.';
$string['privacy:metadata:quizaccess_seb_quizsettings:quizid'] = 'ID of the quiz the settings exist for.';
$string['quizsettings'] = 'Quiz settings';

// Admin settings.
$string['seb_managetemplates'] = 'Manage Safe Exam Browser templates';
$string['setting:downloadlink'] = 'Safe Exam Browser download link.';
$string['setting:downloadlink_desc'] = 'URL for downloading the Safe Exam Browser application.';
$string['setting:quizpasswordrequired'] = 'Quiz password required.';
$string['setting:quizpasswordrequired_desc'] = 'Check this box if all quizzes that require the Safe Exam Browser must have a quiz password set.';
$string['setting:showseblink'] = 'Show seb:// link';
$string['setting:showhttplink'] = 'Show http:// link';
$string['setting:showseblinks'] = 'Show Safe Exam Browser config links.';
$string['setting:showseblinks_desc'] = 'Decide whether to show links for the user to access the Safe Exam Browser configuration file when access to quiz is prevented. Note that seb:// links may not work for every browser.';

// Quiz form settings.
$string['seb'] = 'Safe Exam Browser';
$string['seb_help'] = 'Setup quiz to use the Safe Exam Browser.';
$string['seb_activateurlfiltering'] = 'Enable URL filtering';
$string['seb_activateurlfiltering_help'] = 'If enabled, URLs will be filtered when loading web pages. The filter set has to be defined below.';
$string['seb_allowedbrowserexamkeys'] = 'Allowed Browser Exam Keys';
$string['seb_allowedbrowserexamkeys_help'] = 'In this field you can enter the allowed Browser Exam Keys for versions of Safe Exam Browser that are permitted to access this quiz. If no keys are entered, then Moodle does not check Browser Exam Keys.';
$string['seb_allowreloadinexam'] = 'Enable reload in exam';
$string['seb_allowreloadinexam_help'] = 'If enabled, page reload is allowed (reload button in SEB task bar, browser tool bar, iOS side slider menu, keyboard shortcut F5/cmd+R). Offline caching might break when the user tries to reload a page without internet connection.';
$string['seb_allowspellchecking'] = 'Enable spell checking';
$string['seb_allowspellchecking_help'] = 'If enabled, spell checking in the SEB browser is allowed.';
$string['seb_allowuserquitseb'] = 'Enable quitting of SEB';
$string['seb_allowuserquitseb_help'] = 'If enabled, users can quit SEB with the "Quit" button in the SEB task bar or by pressing the keys Ctrl-Q or by clicking the main browser window close button.';
$string['seb_enableaudiocontrol'] = 'Enable audio controls';
$string['seb_enableaudiocontrol_help'] = 'If enabled, the audio control icon is shown in the SEB task bar.';
$string['seb_expressionsallowed'] = 'Expressions allowed';
$string['seb_expressionsallowed_help'] = 'A text field which contains the allowed filtering expressions for the allowed URLs. Use of the wildcard char \'\*\' is possible. Examples for expressions: \'example.com\' or \'example.com/stuff/\*\'. \'example.com\' matches \'example.com\', \'www.example.com\' and \'www.mail.example.com\' \'example.com/stuff/\*\' matches all requests to any subdomain of \'example.com\' that have \'stuff\' as the first segment of the path.';
$string['seb_expressionsblocked'] = 'Expressions blocked';
$string['seb_expressionsblocked_help'] = 'A text field which contains the filtering expressions for the blocked URLs. Use of the wildcard char \'\*\' is possible. Examples for expressions: \'example.com\' or \'example.com/stuff/\*\'. \'example.com\' matches \'example.com\', \'www.example.com\' and \'www.mail.example.com\' \'example.com/stuff/\*\' matches all requests to any subdomain of \'example.com\' that have \'stuff\' as the first segment of the path.';
$string['seb_filterembeddedcontent'] = 'Filter also embedded content';
$string['seb_filterembeddedcontent_help'] = 'If enabled, also all embedded resources will be filtered using the filter set.';
$string['seb_linkquitseb'] = 'Show Exit Safe Exam Browser button, configured with this quit link';
$string['seb_linkquitseb_help'] = 'In this field you can enter the link to quit SEB. It will be used on an "Exit Safe Exam Browser" button on the page that appears after the exam is submitted. When clicking the button or the link placed wherever you want to put it, it is possible to quit SEB without having to enter a quit password. If no link is entered, then the "Exit Safe Exam Browser" button does not appear and there is no link set to quit SEB.';
$string['seb_muteonstartup'] = 'Mute on startup';
$string['seb_muteonstartup_help'] = 'If enabled, audio is initially muted when starting SEB.';
$string['seb_quitpassword'] = 'Quit password';
$string['seb_quitpassword_help'] = 'This password is prompted when users try to quit SEB with the "Quit" button, Ctrl-Q or the close button in the main browser window. If no quit password is set, then SEB just prompts "Are you sure you want to quit SEB?".';
$string['seb_regexallowed'] = 'Regex allowed';
$string['seb_regexallowed_help'] = 'A text field which contains the filtering expressions for allowed URLs in a regular expression (Regex) format.';
$string['seb_regexblocked'] = 'Regex blocked';
$string['seb_regexblocked_help'] = 'A text field which contains the filtering expressions for blocked URLs in a regular expression (Regex) format.';
$string['seb_requiresafeexambrowser'] = 'Require the use of Safe Exam Browser';
$string['seb_requiresafeexambrowser_help'] = "If enabled, students can only attempt the quiz using the Safe Exam Browser.
The available options are:

* No
<br/>Safe Exam Browser is not required to attempt the quiz.
* Yes – Use an existing template
<br/>A template for the configuration of Safe Exam Browser can be used. Templates are managed by the Moodle Administrator. Your manual settings overwrite the settings in the template.
* Yes – Configure manually
<br/>No template for the configuration of Safe Exam Browser will be used. You can configure Safe Exam Browser manually.
* Yes – Upload my own config
<br/>You can upload your own Safe Exam Browser configuration file. All manual settings and the use of templates will be disabled.
* Yes – Use SEB client config
<br/>No configurations of Safe Exam Browser are on Moodle side. The quiz can be attempted with any configuration of Safe Exam Browser.";
$string['seb_templateid'] = 'Safe Exam Browser config template';
$string['seb_templateid_help'] = 'The settings in the selected config template will be used for the configuration of the Safe Exam Browser while attempting the quiz. You may overwrite the settings in the template with your manual settings.';
$string['seb_showkeyboardlayout'] = 'Show keyboard layout';
$string['seb_showkeyboardlayout_help'] = 'If enabled, the current keyboard layout is shown in the SEB task bar. It allows you to switch to other keyboard layouts, which have been enabled in the operating system.';
$string['seb_showreloadbutton'] = 'Show reload button';
$string['seb_showreloadbutton_help'] = 'If enabled, a reload button appears in the SEB task bar. This button allows to reload the current web page.';
$string['seb_showsebtaskbar'] = 'Show SEB task bar';
$string['seb_showsebtaskbar_help'] = 'If enabled, a task bar appears at the bottom of the SEB browser window. In case you like to show the Wi-Fi control, the reload button, the time or the keyboard layout to your students, you have to activate the task bar. The task bar is also needed when you permit third party applications, which are displayed as icons in the task bar.';
$string['seb_showtime'] = 'Show time';
$string['seb_showtime_help'] = 'If enabled, the current time is displayed in the SEB task bar.';
$string['seb_showwificontrol'] = 'Show Wi-Fi control';
$string['seb_showwificontrol_help'] = 'If enabled, a Wi-Fi control button appears in the SEB task bar. The button allows to reconnect to Wi-Fi networks which have previously been connected to.';
$string['seb_suppresssebdownloadlink'] = 'Suppress Safe Exam Browser download button';
$string['seb_suppresssebdownloadlink_help'] = 'If enabled, no button for Safe Exam Browser download will be shown on the quiz start page.';
$string['filemanager_sebconfigfile'] = 'Upload Safe Exam Browser config file';
$string['filemanager_sebconfigfile_help'] = 'Please upload your own Safe Exam Browser config file for this quiz.';
$string['seb_userconfirmquit'] = 'Ask user to confirm quitting';
$string['seb_userconfirmquit_help'] = 'If enabled, users have to confirm quitting of SEB when a quit link is detected.';
$string['seb_use_manually'] = 'Yes – Configure manually';
$string['seb_use_template'] = 'Yes – Use an existing template';
$string['seb_use_upload'] = 'Yes – Upload my own config';
$string['seb_use_client'] = 'Yes – Use SEB client config';
$string['disabledsettings'] = 'Disabled settings.';
$string['disabledsettings_help'] = 'Safe Exam Browser quiz settings are unable to be updated if there is one or more existing quiz attempts. To re-enable settings, all quiz attempts must be deleted.';
$string['downloadsebconfig'] = 'Download SEB config file';

// Exceptions.
$string['missingrequiredsettings'] = 'Config settings not provided all required settings.';
$string['noconfigfound'] = 'No SEB config could be found for quiz with cmid: {$a}';
$string['noconfigfilefound'] = 'No uploaded SEB config file could be found for quiz with cmid: {$a}';
$string['allowedbrowserkeysdistinct'] = 'The keys must all be different.';
$string['allowedbrowserkeyssyntax'] = 'A key should be a 64-character hex string.';
$string['filenotpresent'] = 'Please upload a SEB config file.';
$string['fileparsefailed'] = 'The uploaded file could not be saved as a SEB config file.';
$string['clientrequiresseb'] = 'This quiz has been configured to use the Safe Exam Browser with client configuration.';
$string['settingsfrozen'] = 'Due to there being at least one quiz attempt, the Safe Exam Browser settings can no longer be updated.';
$string['passwordnotset'] = 'Using Safe Exam Browser requires to set a quiz password.';
$string['conflictingsettings'] = 'You don\'t have permissions to update existing Safe Exam Browser settings';

// Capabilities.
$string['seb:bypassseb'] = 'Bypass the requirement to view quiz in Safe Exam Browser.';
$string['seb:managetemplates'] = 'Manage Safe Exam Browser configuration templates.';
$string['seb:manage_filemanager_sebconfigfile'] = 'Modify Safe Exam Browser quiz setting: Select SEB config file.';
$string['seb:manage_seb_allowedbrowserexamkeys'] = 'Modify Allowed Browser Exam Keys';
$string['seb:manage_seb_requiresafeexambrowser'] = 'Modify Safe Exam Browser quiz setting: Require Safe Exam Browser';
$string['seb:manage_seb_templateid'] = 'Modify Safe Exam Browser quiz setting: Select SEB template.';
$string['seb:manage_seb_suppresssebdownloadlink'] = 'Modify Safe Exam Browser quiz setting: Suppress download link.';
$string['seb:manage_seb_linkquitseb'] = 'Modify Safe Exam Browser quiz setting: Quit link.';
$string['seb:manage_seb_userconfirmquit'] = 'Modify Safe Exam Browser quiz setting: Confirm on quit.';
$string['seb:manage_seb_allowuserquitseb'] = 'Modify Safe Exam Browser quiz setting: Allow quit.';
$string['seb:manage_seb_quitpassword'] = 'Modify Safe Exam Browser quiz setting: Quit password.';
$string['seb:manage_seb_allowreloadinexam'] = 'Modify Safe Exam Browser quiz setting: Allow reload.';
$string['seb:manage_seb_showsebtaskbar'] = 'Modify Safe Exam Browser quiz setting: Show task bar.';
$string['seb:manage_seb_showreloadbutton'] = 'Modify Safe Exam Browser quiz setting: Show reload button.';
$string['seb:manage_seb_showtime'] = 'Modify Safe Exam Browser quiz setting: Show time.';
$string['seb:manage_seb_showkeyboardlayout'] = 'Modify Safe Exam Browser quiz setting: Show keyboard layout.';
$string['seb:manage_seb_showwificontrol'] = 'Modify Safe Exam Browser quiz setting: Show Wi-Fi control.';
$string['seb:manage_seb_enableaudiocontrol'] = 'Modify Safe Exam Browser quiz setting: Enable audio control.';
$string['seb:manage_seb_muteonstartup'] = 'Modify Safe Exam Browser quiz setting: Mute on startup.';
$string['seb:manage_seb_allowspellchecking'] = 'Modify Safe Exam Browser quiz setting: Enable spell checking.';
$string['seb:manage_seb_activateurlfiltering'] = 'Modify Safe Exam Browser quiz setting: Activate URL filtering.';
$string['seb:manage_seb_filterembeddedcontent'] = 'Modify Safe Exam Browser quiz setting: Filter embedded content.';
$string['seb:manage_seb_expressionsallowed'] = 'Modify Safe Exam Browser quiz setting: Simple expressions allowed.';
$string['seb:manage_seb_regexallowed'] = 'Modify Safe Exam Browser quiz setting: Regex expressions allowed.';
$string['seb:manage_seb_expressionsblocked'] = 'Modify Safe Exam Browser quiz setting: Simple expressions blocked.';
$string['seb:manage_seb_regexblocked'] = 'Modify Safe Exam Browser quiz setting: Regex expressions blocked.';

// Quiz access information.
$string['invalidkeys'] = "The config key or browser exam keys could not be validated. Please ensure you are using the Safe Exam Browser with correct configuration file.";
$string['sebrequired'] = "This quiz has been configured so that students may only attempt it using the Safe Exam Browser.";
$string['sebdownloadbutton'] = 'Download Safe Exam Browser';
$string['seblinkbutton'] = 'Launch Safe Exam Browser';
$string['httplinkbutton'] = 'Download Configuration';

// Events.
$string['event:accessprevented'] = "Quiz access was prevented";
$string['not_seb'] = "No SEB browser is being used";
$string['invalid_config_key'] = "Invalid SEB config key";
$string['invalid_browser_key'] = "Invalid SEB browser key";
$string['unknown_reason'] = "Unknown reason";
$string['event:templatecreated'] = "SEB Template was created";
$string['event:templatedeleted'] = "SEB Template was deleted";
$string['event:templatedisabled'] = "SEB Template was disabled";
$string['event:templateenabled'] = "SEB Template was enabled";
$string['event:templateupdated'] = "SEB Template was updated";

// Templates.
$string['managetemplates'] = 'Manage templates';
$string['addtemplate'] = 'Add new template';
$string['newtemplate'] = 'New template';
$string['edittemplate'] = 'Edit template';
$string['content'] = 'Template';
$string['name'] = 'Name';
$string['description'] = 'Description';
$string['enabled'] = 'Enabled';
$string['duplicatetemplate'] = "Template with the same name already exists";
$string['exitsebbutton'] = 'Exit Safe Exam Browser';
$string['invalidtemplate'] = "Invalid SEB config template";
$string['cantdelete'] = 'Template can\'t be deleted as it has been used for one or more quizzes';
$string['cantedit'] = 'Template can\'t be edited as it has been used for one or more quizzes';
$string['confirmtemplateremovaltitle'] = 'Confirm template removal?';
$string['confirmtemplateremovalquestion'] = 'Are you sure that you wish to remove this template?';
$string['notemplate'] = 'No template';
$string['restoredfrom'] = '{$a->name} (restored via cmid {$a->cmid})';
$string['used'] = 'In use';
