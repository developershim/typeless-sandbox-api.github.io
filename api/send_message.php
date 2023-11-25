<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Expose-Headers: Content-Length, X-JSON");
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json; charset=UTF-8");

// get search query
if( isset($_GET["uid"]) && isset($_GET["mid"]) && isset($_GET["message"])
    && trim($_GET["uid"]) != ''
    && trim($_GET["mid"]) != ''
    && trim($_GET["message"]) != '' ) {
    
    var_dump($_GET["uid"], $_GET["mid"], $_GET["message"]);

    // set response code - 200 OK
    http_response_code(200);
  
    // tell the user status is OK
    echo json_encode(
        array("message" => "Slack message has been successfully sent.")
    );
}
else {
    // set response code - 404 Not found
    http_response_code(404);
  
    // tell the user no items found
    echo json_encode(
        array("message" => "Query parameters are not set.")
    );
}
?>