<?php
/**
 * Configuration file of Console Jedi application.
 * 
 * @param string 'web-dir' Path to web directory (document root of main site).
 * @param string 'env-dir' Path to directory with environments settings.
 * @param bool 'useModules' Find and include commands from Bitrix modules.
 * @param array 'commands' Your commands that could not be included from modules.
 * 
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

return [
    'web-dir' => 'www',
    'env-dir' => 'environments',
    'useModules' => true,
    'commands' => [
    ]
];