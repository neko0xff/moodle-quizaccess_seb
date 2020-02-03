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
 * Event for when access to a quiz is prevented by this subplugin.
 *
 * @package    quizaccess_seb
 * @author     Andrew Madden <andrewmadden@catalyst-au.net>
 * @copyright  2020 Catalyst IT
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace quizaccess_seb\event;

use context_module;
use core\event\base;
use quizaccess_seb\quiz_settings;

defined('MOODLE_INTERNAL') || die();

class access_prevented extends base {

    /**
     * Create event with strict parameters.
     *
     * Define strict parameters to create event with instead of relying on internal validation of array. Better code practice.
     * Easier for consumers of this class to know what data must be supplied and observers can have more trust in event data.
     *
     * @param quiz_settings $quizsettings SEB settings of quiz.
     * @param string $courseid ID of course containing quiz.
     * @param context_module $context Context of quiz course module.
     * @param string $reason Reason that access was prevented.
     * @param string $url URL of page that received request.
     * @param string|null $receivedconfigkey Config key retrieved from page header.
     * @param string|null $receivedbrowserexamkey Browser exam key retrieved from page header.
     * @return base
     */
    public static function create_strict(quiz_settings $quizsettings, string $courseid,
                                         context_module $context, string $reason, string $url,
                                         string $receivedconfigkey = null, string $receivedbrowserexamkey = null) : base {
        global $USER;
        $other = []; // Extra event data.
        $quizid = $quizsettings->get('quizid');

        // Set extra data.
        $other['reason'] = $reason;
        $other['url'] = $url;
        $other['savedconfigkey'] = $quizsettings->get('configkey');
        $other['receivedconfigkey'] = $receivedconfigkey;
        // TODO: Issue #16 - Provide browser exam key data.
        $other['receivedbrowserexamkey'] = $receivedbrowserexamkey;

        return self::create([
            'userid' => $USER->id,
            'objectid' => $quizid,
            'courseid' => $courseid,
            'context' => $context,
            'other' => $other,
        ]);
    }

    /**
     * Initialize the event data.
     */
    protected function init() {
        $this->data['objecttable'] = 'quiz';
        $this->data['crud'] = 'r';
        $this->data['edulevel'] = self::LEVEL_PARTICIPATING;
    }

    /**
     * Get the name of the event.
     *
     * @return string Name of event.
     */
    public static function get_name() {
        return get_string('event:accessprevented', 'quizaccess_seb');
    }

    /**
     * Returns non-localised event description with id's for admin use only.
     *
     * @return string Description.
     */
    public function get_description() {
        return "The user with id '$this->userid' has been prevented from accessing quiz with id '$this->objectid' by the "
                . "Safe Exam Browser access plugin. The reason was '{$this->other['reason']}'.";
    }

    /**
     * This is used when restoring course logs where it is required that we
     * map the objectid to it's new value in the new course.
     *
     * @return array Mapping of object id.
     */
    public static function get_objectid_mapping() : array {
        return array('db' => 'quiz', 'restore' => 'quiz');
    }

    /**
     * This is used when restoring course logs where it is required that we
     * map the information in 'other' to it's new value in the new course.
     *
     * @return array List of mapping of other ids.
     */
    public static function get_other_mapping() : array {
        return [
            'cmid' => ['db' => 'course_modules', 'restore' => 'course_modules']
        ];
    }
}