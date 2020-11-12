<?php
$myfile = fopen("log.txt", "w");
$conv = [["bot" => nl2br("Hello.\r\n My name is Survaro. I am here to help you.")]];

function getResponse($bot, $user) {
    $conv = [["bot" => nl2br("Hello.\r\n My name is Survaro. I am here to help you.")]];
    array_push($conv, ["user" => nl2br($user)]);
    array_push($conv, ["bot" => nl2br($bot)]);

    foreach ($conv as $arr) {
        foreach ($arr as $sender => $msg) {
            if ($sender == "bot") {
            echo '<div class="bot_msg">'.$msg.'</div><br/>';
            }
            else {
                echo '<div class="my_msg">'.$msg.'</div><br/><br/><br/>';
            }
        }
    }
}



if (isset($_POST["send_msg"])) {
    $message = $_POST["message"];
    if (strpos(strtolower($message), 'hello') !== FALSE || strpos(strtolower($message), 'hi') !== FALSE || strpos(strtolower($message), 'xup') !== FALSE) {
        $response = "Hello There"; 
        echo getResponse($response, $message);  
    } 
    else if (strpos(strtolower($message), 'robot') !== FALSE || strpos(strtolower($message), 'are you a robot?') !== FALSE || strpos(strtolower($message), 'bot') !== FALSE) {
        $response = "I am not a robot"; 
        echo getResponse($response, $message);
    } 
    else if (strpos(strtolower($message), 'how are you?') !== FALSE || strpos(strtolower($message), 'how are you feeling?') !== FALSE ) {
        $response = "I am fine \r\n You?"; 
        echo getResponse($response, $message);
    } 
    else if (strpos(strtolower($message), 'fine') !== FALSE || strpos(strtolower($message), 'am fine') !== FALSE || strpos(strtolower($message), 'am cool') !== FALSE || strpos(strtolower($message), 'cool') !== FALSE || strpos(strtolower($message), 'am good') !== FALSE || strpos(strtolower($message), 'am okay') !== FALSE || strpos(strtolower($message), 'am ok') !== FALSE || strpos(strtolower($message), 'good') !== FALSE) {
        $response = "That's nice \r\n I'm here to help you. What can I do from you?"; 
        echo getResponse($response, $message);
    } 
    else {
        $response = "I do not understand this \r\n Please try again!"; 
        echo getResponse($response, $message);
        }
        fwrite($myfile, $message);
    }
    

elseif (isset($_GET["get_chats"])) {
    foreach ($conv as $arr) {
        foreach ($arr as $sender => $message) {
            if ($sender == "bot") {
            ?>
            <div class="bot_msg"><?php echo $message; ?></div></div>
            <?php
            }
            else {
            ?>
            <div class="my_msg"><?php echo $message; ?></div>
            <?php
            }
        }
    }
} 
else {
    header("location:index.php");
}
fclose($myfile);
?>