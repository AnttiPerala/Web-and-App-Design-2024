<?php

function handleHighScoreInput(){
    if (isset($_POST['playerName']) && isset($_POST['playerTime'])){
          global $wpdb;
    $name = $_POST['playerName'];
    $time = $_POST['playerTime'];

    $wpdb->insert(
        'highscores',
        array(
            'playerName' => $name,
            'playerTime' => $time  
        ),
        array(
            '%s',
            '%d'
        )
    );
}
 
}

add_action('admin_post_storeScore', 'handleHighScoreInput');
add_action('admin_post_nopriv_storeScore', 'handleHighScoreInput');