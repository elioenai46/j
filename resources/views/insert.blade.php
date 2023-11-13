<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamburger Menu</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: "Poppins", sans-serif;
        --color1: #FFF;
        --color2: #181818;
    }

    .nav-bar {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        list-style: none;
        position: relative;
        background-color: var(--color2);
        padding: 12px 20px;
    }

    .logo img {
        width: 40px;
    }

    .menu {
        display: flex;
    }

    .menu li {
        padding-left: 30px;
    }

    .menu li a {
        display: inline-block;
        text-decoration: none;
        color: white;
        text-align: center;
        transition: 0.15s ease-in-out;
        position: relative;
        text-transform: uppercase;
    }

    .menu li a::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 1px;
        background-color: var(--color1);
        transition: 0.15s ease-in-out;
    }

    .menu li a:hover:after {
        width: 100%;
    }

    .open-menu,
    .close-menu {
        position: absolute;
        color: var(--color1);
        cursor: pointer;
        font-size: 1.5rem;
        display: none;
    }

    .open-menu {
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
    }

    .close-menu {
        top: 20px;
        right: 20px;
    }

    #check {
        display: none;
    }

    @media(max-width: 710px) {
        .menu {
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100vh;
            position: fixed;
            top: 0;
            right: -100%;
            z-index: 100;
            background-color: var(--color2);
            transition: all 0.2s ease-in-out;
        }

        .menu li {
            margin-top: 40px;
        }

        .menu li a {
            padding: 10px;
        }

        .open-menu,
        .close-menu {
            display: block;
        }

        #check:checked~.menu {
            right: 0;
        }
        
    }
    button{
        background-color: transparent;
        color: white;
        border: none;
    }
</style>

<body>
    <header>
        <nav>
            <ul class='nav-bar'>
                <li class='logo'><a href='#'><img src='' /></a></li>
                <input type='checkbox' id='check' />
                <span class="menu">
                    <li><a href="/view">Consultar</a></li>
                    <li><a href="/insert">Agregar</a></li>
                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"><i class="fas fa-sign-out-alt"></i></button>
                        </form>
                    </li>
                    
                    <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
                </span>
                <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
            </ul>
        </nav>
    </header>
    
    @yield('content')
</body>

</html>