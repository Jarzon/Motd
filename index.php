<?php
function addPlayer($name, $id, &$players) {
    array_push($players, ['name' => $name, 'link' => $id, 'avatar' => 'masterj.jpg']);
}

$admins = [];
$donators = [];


addPlayer('Master J', 'MasterJibus', $admins);
addPlayer('Master J', 'MasterJibus', $donators);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Master J">
        <title>Demo</title>
        <link href="style/base.css" rel="stylesheet">
        <link href="style/style_steam.css" rel="stylesheet">
    </head>

    <body>
    <div id="content">
        <div id="logo">
            <!-- Logo is written in reverse for technical purpose -->
            <div>evlav</div>
        </div>

        <div class="box">
            <h1 class="rules">Server Rules</h1>
            <ul class="rules">
                <li>No cheating</li>
                <li>No mic spam</li>
                <li>No discriminating, racist, sexist language</li>
                <li>No inappropriate sprays</li>
            </ul><br>
            <p class="center clear">
                <a href="http://steamcommunity.com/groups/YoshiYoshiYoshi">Our group page</a> -
                <a href="./sourcebans">Sourcebans</a>
            </p><br>

            <h2 class="rules">Admins</h2>
            <div class="admins">
                <?php
                    foreach($admins as $player) {
                    echo '<span class="tooltip">
                            <img src="./avatars/'.$player['avatar'].'">
                            <span>
                                <a href="https://steamcommunity.com/id/'.$player['link'].'"><img src="./avatars/'.$player['avatar'].'"></a>
                                <a href="https://steamcommunity.com/id/'.$player['link'].'"><strong>'.$player['name'].'</strong></a>
                            </span>
                        </span>';
                    }
                ?>
            </div>

            <h2 class="rules">Donators</h2>
            <div class="admins">
                <?php
                foreach($donators as $player) {
                    echo '<span>
                            <a href="https://steamcommunity.com/id/'.$player['link'].'"><strong>'.$player['name'].'</strong></a>
                        </span>';
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>