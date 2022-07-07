<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Чат</title>
    <link rel="stylesheet" href="./css/app.css"/>
</head>
<body>
    <div class="app">
        <header>
            <h1>Чат</h1>
            <input type="text" name="username" id="username" placeholder="Имя"/>
        </header>

        <div id="messages"></div>

        <form action="" id="message_form">
            <input type="text" name="message" id="message_input" placeholder="текст">
            <button type="submit" id="message_send">отправить</button>
        </form>
    </div>
<script src="./js/app.js"></script>


    <section class="chat">
        <div class="message message--user-1">
            <time class="message__time">21.02.2017 21:12:07</time>
            <figure class="message__author-pic">
            </figure>
            <div class="message__text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at purus nibh. Cras metus nulla, vestibulum in auctor ac, fermentum vitae tellus.</p>
            </div>
        </div>
        <div class="message message--user-2">
            <time class="message__time">21.02.2017 21:12:07</time>
            <figure class="message__author-pic">
            </figure>
            <div class="message__text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at purus nibh. Cras metus nulla, vestibulum in auctor ac, fermentum vitae tellus.</p>
            </div>
        </div>
        <div class="message message--user-2">
            <time class="message__time">21.02.2017 21:12:07</time>
            <figure class="message__author-pic">
            </figure>
            <div class="message__text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at purus nibh. Cras metus nulla, vestibulum in auctor ac, fermentum vitae tellus.</p>
            </div>
        </div>
        <div class="message message--user-1">
            <time class="message__time">21.02.2017 21:12:07</time>
            <figure class="message__author-pic">
            </figure>
            <div class="message__text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at purus nibh. Cras metus nulla, vestibulum in auctor ac, fermentum vitae tellus.</p>
            </div>
        </div>
    </section>
</body>
</html>
