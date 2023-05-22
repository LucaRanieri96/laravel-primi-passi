<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomePage</title>
</head>

<body>
    <header>
        <nav>
            <h1>NAVIGATION</h1>

            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="contacts">Contacts</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Questa è la About page</h2>
    </main>
</body>

</html>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        color: white;
        background-color: #161616;
    }

    nav {
        display: flex;
        justify-content: space-between;
        color: white;
        background-color: rgb(0, 145, 255);
    }

    h1 {
        padding: 2rem;
    }

    ul {
        list-style: none;
        padding: 2rem;
        gap: 1rem;
        display: flex;
        flex-direction: row;
    }

    ul li a {
        text-decoration: none;
        color: white;
    }

    h2 {
        text-align: center;
        margin: 2rem
    }
</style>
