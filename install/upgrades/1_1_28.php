<?php
/*
 +-------------------------------------------------------------------------+
 | Copyright (C) 2004-2022 The Cacti Group                                 |
 |                                                                         |
 | This program is free software; you can redistribute it and/or           |
 | modify it under the terms of the GNU General Public License             |
 | as published by the Free Software Foundation; either version 2          |
 | of the License, or (at your option) any later version.                  |
 |                                                                         |
 | This program is distributed in the hope that it will be useful,         |
 | but WITHOUT ANY WARRANTY; without even the implied warranty of          |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           |
 | GNU General Public License for more details.                            |
 +-------------------------------------------------------------------------+
 | Cacti: The Complete RRDtool-based Graphing Solution                     |
 +-------------------------------------------------------------------------+
 | This code is designed, written, and maintained by the Cacti Group. See  |
 | about.php and/or the AUTHORS file for specific developer information.   |
 +-------------------------------------------------------------------------+
 | http://www.cacti.net/                                                   |
 +-------------------------------------------------------------------------+
*/

function upgrade_to_1_1_28() {
	db_install_add_key('poller', 'index', 'disabled', array('disabled'));
	db_install_drop_key('host', 'key', 'poller_id');
	db_install_add_key('host', 'index', 'poller_id_disabled', array('poller_id', 'disabled'));
	db_install_drop_key('poller_item', 'index', 'local_data_id');
	db_install_add_key('poller_item', 'index', 'poller_id_action', array('poller_id', 'action'));
}
