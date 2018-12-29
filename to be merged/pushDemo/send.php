<?php
require('vendor/autoload.php');

if(isset($_POST["username"]) && isset($_POST["text"])) {
    $username = $_POST["username"];
    $text = $_POST["text"];

    $options = array(
        'encrypted' => false
    );
    $pusher = new Pusher(
        '82bacbe7544d534f3deb',
        '1c1c217639d5b2f36461',
        '279775',
        $options
    );

    $data['message'] = $text;
    $pusher->trigger($username, 'my-event', $data);
}
header('location: index.html');
exit;
?>
