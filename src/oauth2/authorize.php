<?php
/**
 * Created by PhpStorm.
 * User: kevinharbauer
 * Date: 1/12/15
 * Time: 5:15 PM
 */
// include our OAuth2 Server object
require_once __DIR__ . '/oauth_server.php';

$request = OAuth2\Request::createFromGlobals();
$response = new OAuth2\Response();

// validate the authorize request
if (!$server->validateAuthorizeRequest($request, $response)) {
    $response->send();
    die;
}
// display an authorization form
if (empty($_POST)) {
    exit('
<form method="post">
  <label>Do You Authorize TestClient?</label><br />
  <input type="submit" name="authorized" value="yes">
  <input type="submit" name="authorized" value="no">
</form>');
}

// print the authorization code if the user has authorized your client
$is_authorized = ($_POST['authorized'] === 'yes');
$server->handleAuthorizeRequest($request, $response, $is_authorized);
if ($is_authorized) {
    // this is only here so that you get to see your code in the cURL request. Otherwise, we'd redirect back to the client
    $code = substr($response->getHttpHeader('Location'), strpos($response->getHttpHeader('Location'), 'code=')+5, 40);
    exit("SUCCESS! Authorization Code: $code");
}
$response->send();

?>
