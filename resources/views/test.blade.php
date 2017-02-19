<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>flexbox tutorials</title>
    <style type="text/css">
        html , body {
            height : 100%;
        }

        .container {
            display: flex;
            width : 90%;
            height : 100%;
            margin : auto;
            flex-direction: column;
            border: 1px solid gold;
            justify-content: space-between;
            align-items: center;
        }
        header, footer {
            background-color : lightblue;
            width: 100%;
        }
        main {
            margin-bottom: auto;
        }



    </style>
</head>
<body>
<div class="container">
    <header>
        <h1>this is the title</h1>
    </header>
    <main>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam corporis doloremque ex facere facilis
            laboriosam sint? Earum error facilis hic, itaque minus molestias placeat quaerat quidem sint, suscipit
            ullam vel!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam corporis doloremque ex facere facilis
            laboriosam sint? Earum error facilis hic, itaque minus molestias placeat quaerat quidem sint, suscipit
            ullam vel!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam corporis doloremque ex facere facilis
            laboriosam sint? Earum error facilis hic, itaque minus molestias placeat quaerat quidem sint, suscipit
            ullam vel!</p>
    </main>
    <footer>
        <h3>this is the footer</h3>
    </footer>
</div>
</body>
</html>