<?php
//
// Created on: <2007-11-28 12:49:09 dis>
//
// SOFTWARE NAME: eZ Teamroom extension for eZ Publish
// SOFTWARE RELEASE: 1.4.0
// COPYRIGHT NOTICE: Copyright (C) 1999-2011 eZ Systems AS
// SOFTWARE LICENSE: eZ Business Use License Agreement Version 2.0
// NOTICE: >
//   This program is free software; you can redistribute it and/or
//   modify it under the terms of version 2.0  of the GNU General
//   Public License as published by the Free Software Foundation.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of version 2.0 of the GNU General
//   Public License along with this program; if not, write to the Free
//   Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
//   MA 02110-1301, USA.
//
//

$eZTemplateOperatorArray = array();

$eZTemplateOperatorArray[] = array( 'script' => eZExtension::baseDirectory() . '/ezteamroom/classes/ezteamroomoperators.php',
                                    'class' => 'eZTeamroomOperators',
                                    'operator_names' => array( 'mytime', 'eztoc2', 'merge_events',
                                                               'teamroom_version',
                                                               'join_teamroom_in_progress', 'str_replace', 'shorten_xml', 'array_sort' ) );

/*$eZTemplateOperatorArray[] = array( 'script' => 'extension/ezteamroom/autoloads/ezkeywordlist.php',
                                    'class' => 'eZKeywordList',
                                    'operator_names' => array( 'ezkeywordlist' ) ); */

?>