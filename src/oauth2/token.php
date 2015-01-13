<?php
/**
 * Created by PhpStorm.
 * User: kevinharbauer
 * Date: 1/12/15
 * Time: 5:08 PM
 */

// include our OAuth2 Server object
require_once __DIR__ . '/oauth_server.php';

// Handle a request for an OAuth2.0 Access Token and send the response to the client
$server->handleTokenRequest(OAuth2\Request::createFromGlobals())->send();

?>