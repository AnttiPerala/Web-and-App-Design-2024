<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        path {
            opacity: 0;
        }

        #hud {
            display: flex;
            gap: 1rem;
            background-color: coral;
            padding: 1rem;
            font-size: 1.2rem;
            align-items: center;
        }

        table.highScoreTable {
            border-collapse: collapse;
        }

      th, td {
        border: 1px solid gray;
        padding: 0.5rem;
        }

        #sendHighScore{
            display: none;
        }
    </style>
</head>
<body>

    <div id="hud">
        <p id="foundMistakes">Found mistakes: 0 / 5</p>
        <p id="timePassed">Time passed: </p>
        <form id="sendHighScore" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
            <input type="hidden" name="action" value="storeScore">
            <input type="hidden" name="playerTime" id="playerTime">
            <input type="text" name="playerName" required placeholder="Your name">
            <input type="submit" value="Submit High Score">
    </form>
    </div>

    
    <!-- Created with Inkscape (http://www.inkscape.org/) -->
    <svg id="game" version="1.1" viewBox="0 0 1920 920" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <image width="1920" height="920" preserveAspectRatio="none" xlink:href="<?php bloginfo('template_url'); ?>/findfivemistakes.jpg"/>
    <path class="hotspot1" d="m276.9 228.7c5.463-5.932 15.64-6.222 22.35-2.423 8.405 3.901 14.21 12.38 13.84 21.75 1.234 11.68-12.14 19.27-22.48 16.66-10.22 0.074-16.6-9.199-18.41-18.27-1.524-5.933 0.8234-13.45 4.7-17.73z" style="fill-opacity:0;stroke-width:3.8;stroke:#d34e28"/>
    <path class="hotspot1" d="m1206 225.1c26.9-29.87 74.92 7.959 48.1 38.68-21.68 26.45-63.92-0.9792-52.55-32.03l1.36-3.219z" style="fill-opacity:0;stroke-width:3.8;stroke:#d34e28"/>
    <path class="hotspot2" d="m824.5 156.8c23.67-20.94 60.85-30.75 90.01-15.25 30.86 9.33 41.38 42.55 38.81 71.79 0.4436 30.51-37.02 38.77-61.07 42.63-27.25-1.125-58.93-6.753-79.86-24.4-5.772-22.59-16.07-58.02 8.933-72.46z" style="fill-opacity:0;stroke-width:3.8;stroke:#d34e28"/>
    <path class="hotspot2" d="m1743 142.2c22-10.92 46.37-21.47 71.48-17.52 13.51 2.184 25.23 9.87 36.71 16.85 15.05 9.622 28.67 24.54 29.88 43.18 4.086 16.84-5.725 34.22-20.06 42.82-11.85 7.65-26.69 10.27-40.44 7.118-20.24-2.158-41.11 5.263-60.88-1.479-11.54-3.775-17.34-15.17-22.28-25.35-7.768-16.54-12.09-37.09-2.886-53.97 2.207-4.345 5.838-7.613 8.476-11.66z" style="fill-opacity:0;stroke-width:3.8;stroke:#d34e28"/>
    <path class="hotspot3" d="m161.6 563.2c10.15-30.65 70.82-16.94 55.11 16.21-11.45 23.17-61.98 29.95-58.36-5.666l1.119-5.443z" style="fill-opacity:0;stroke-width:3.8;stroke:#d34e28"/>
    <path class="hotspot3" d="m1089 566.1c23.05-33.82 84.14 19.2 34.2 32.55-18.56 4.334-44.8-10.96-34.2-32.55z" style="fill-opacity:0;stroke-width:3.8;stroke:#d34e28"/>
    <path class="hotspot4" d="m420 642.5c22.33 0.9892 59.18-15.43 67.32 15.98 1.255 30.87-36.77 32.57-59.01 29-26.34-2.269-30.54-33.26-8.31-44.98z" style="fill-opacity:0;stroke-width:3.8;stroke:#d34e28"/>
    <path class="hotspot4" d="m1350 652.2c24.39-11.15 56.84-14.55 74.12 10.3 8.76 34.42-37.9 37.31-59.83 26-14.29-3.079-32.78-26.73-14.29-36.3z" style="fill-opacity:0;stroke-width:3.8;stroke:#d34e28"/>
    <path class="hotspot5" d="m473.2 416.1c15.88-23.42 49.63-24.11 74.83-21.19 28.93 11.54 32.65 63.45 0.4245 73.37-23.12 6.78-56.41 10.24-71.57-12.92-5.252-12.22-3.598-26.28-3.679-39.27z" style="fill-opacity:0;stroke-width:3.8;stroke:#d34e28"/>
    <path class="hotspot5" d="m1400 406.4c20.73-15.91 50.14-23.03 75.43-17.09 23.03 17.46 27.53 62.77 0.7532 79.4-27.71 19.33-76.02 9.524-79.91-28.57-2.063-11.26-1.137-23.28 3.731-33.74z" style="fill-opacity:0;stroke-width:3.8;stroke:#d34e28"/>
    </svg>

    <?php 
    
        global $wpdb;
        $rowResults = $wpdb->get_results("SELECT playerName, playerTime FROM highscores ORDER BY playerTime ASC");
    ?>

    <table class="highScoreTable">
        <tr>
            <th>Rank</th>
            <th>Player</th>
            <th>Time</th>
        </tr>
        <?php
        $i = 1;
        foreach ($rowResults as $row){
            ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row->playerName; ?></td>
            <td><?php echo $row->playerTime; ?></td>
        </tr>
        <?php
        $i++; } ?>


    </table>

   

    <script>

        let foundMistakes = 0;
        let timePassed = 0;

        setInterval(function(){

            if (foundMistakes < 5){
                timePassed++;
            document.querySelector('#timePassed').textContent = 'Time passed: '+ timePassed + ' s';
            } else {
               
                document.querySelector('#timePassed').textContent = 'You found all the mistakes! Congratulations! Your time was: '+ timePassed +'s';
                document.getElementById('playerTime').value = timePassed;
                document.getElementById('sendHighScore').style.display = 'block';
            }

            
        }, 1000);


        document.querySelectorAll('path').forEach(function(element){
            element.addEventListener('click', handleClick);       
        });

        document.getElementById("game").addEventListener('click', punish);

        function punish(){
        
            alert('Nope, you need to be more careful!');
        
        }


        function handleClick(event){
            let classNamePair = this.classList[0];
            foundMistakes++;
            event.stopPropagation(); //stops the event from bubbling up to its parents (meaning that the click is only registered for the path that was clicked)
            document.querySelector('#foundMistakes').textContent = 'Found mistakes: ' + foundMistakes + ' / 5';
            document.querySelectorAll('.' + classNamePair).forEach(function(element){
                element.style.opacity = "1";
                element.removeEventListener('click', handleClick);
        });

    }

    </script>

</body>
</html>


