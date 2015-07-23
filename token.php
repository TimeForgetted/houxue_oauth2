<?php
/**
 *
 * @author: XuYi
 * @date: 2015-07-23
 * @version: $Id$
 */
require_once __DIR__.'/server.php';
$server->handleTokenRequest(OAuth2\Request::createFromGlobals())->send();
