<?php

/**
 * @defgroup plugins_pubIds_urn URN Pub ID Plugin
 */

/**
 * @file plugins/pubIds/urn/index.php
 *
 * Copyright (c) 2003-2013 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_pubIds_urn
 * @brief Wrapper for urn plugin.
 *
 */
require_once('URNPubIdPlugin.inc.php');

return new URNPubIdPlugin();

?>
