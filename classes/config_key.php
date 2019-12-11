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
 * Class for generating and representing a Safe Exam Browser config key.
 *
 * @package    quizaccess_seb
 * @author     Andrew Madden <andrewmadden@catalyst-au.net>
 * @copyright  2019 Catalyst IT
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace quizaccess_seb;

defined('MOODLE_INTERNAL') || die();

class config_key {

    /** @var string $hash The Config Key hash. */
    private $hash;

    /**
     * The config_key constructor.
     *
     * @param string $hash The Config Key hash.
     */
    public function __construct(string $hash) {
        $this->hash = $hash;
    }

    /**
     * Generate the Config Key hash from an SEB Config XML string.
     *
     * @param string $xml A PList XML string, representing SEB config.
     * @return config_key This config key instance.
     *
     * @throws \CFPropertyList\IOException
     * @throws \CFPropertyList\PListException
     * @throws \DOMException
     */
    public static function generate(string $xml) {
        $hash = '';
        $plist = new property_list($xml);
        $plist->delete_element('originatorVersion');
        $hash = $plist->to_json();
        // Hash the JSON with SHA256. Defaults to required Base16 encoding.
        $hash = hash('SHA256', $hash);

        return new self($hash);
    }

    /**
     * Get the Config Key hash.
     *
     * @return string The Config Key hash
     */
    public function get_hash() : string {
        return $this->hash;
    }
}
