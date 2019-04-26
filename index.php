<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="./css/header_footer.css">
    <link rel="stylesheet" type="text/css" href="./css/index.css">

    <title>Skully's Drawing Art!</title>
</head>
<body>
    <nav>
        <ul id = "list">
            <li>Home</li>
            <li>Portfolio</li>
            <li>Patreon</li>
            <li>Twitch</li>
        </ul>
    </nav>
    
    <!-- header -->
    <header>

        <div id='header-wrapper'>
            <!-- header image goes here -->
            <div id='header-text'>
                <h1>This is a header</h1>
                <h2>This is subtext</h2>
            </div>
        </div>

    </header>
    

    <!-- drawings -->
    <main>
        <?php
        for($i = 0; $i < 20; $i++){
            echo "<img id='img".$i."' alt=".$i." />";
        };
        ?>
    </main>


    <!-- patreon -->
    <section id='patreon'>
        <div id='patreon-container'>
            <div id='patreon-h2'>
                <h2>This is a title</h2>
            </div>
            <div id='patreon-information-container'> 
                <!-- contains information -->
                <div id='information-panel'>
                    <p>Information</p>
                    <p>Information</p>
                    <p>Information</p>
                    <p>Information</p>
                </div>

                <div id='image-panel'>
                    <img alt="An artwork piece for patreon"/>
                </div>
            </div>
            <div id='patreon-button'>
                <button>Patreon</button>
            </div>
        </div>
    </section>


    <!-- Twitch -->
    <section id='twitch'>

        <h2>I'm a title</h2>
        <div id='twitch-vid-container'>
            <!-- Contains chat -->
            <div id='chat-container'></div>
            <!-- Contains video -->
            <div id='video-container'></div>
        </div>

    </section>


    <!-- footer -->
    <footer>
        <p>SkullySlums</p>
    </footer>
    
</body>
</html>