<?php
/**
 * Bacon.
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to mail@dasprids.de so I can send you a copy immediately.
 *
 * @package    Bacon_Text
 * @subpackage Highlight
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */
return array(
    'description' => 'Backus-Naur Form',
    'keywords' => array(
        array(
            'id' => 1,
            'regex' => '^[ \\t]*([-a-zA-Z_]+|<[-a-zA-Z_]+>)\\s*[:=]',
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '//',
            ),
        ),
        array(
            'block' => true,
            'nested' => false,
            'delimiter' => array(
                'open' => '\\/\\*',
                'close' => '\\*\\/',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"',
    ),
    'identifiers' => '[-a-zA-Z_]+|<[-a-zA-Z_]+>',
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\.|\\:|\\=',
    'ignore_case' => false,
);
