<nav class="navbar">

    <a href="{{ route('home') }}" class="logo">
        MasterMind<span>.cafe</span>
    </a>


    <div class="nav-links">

        <a href="{{ route('home') }}">
            Home
        </a>

        <a href="{{ route('menu') }}">
            Menu
        </a>

        <a href="{{ route('about') }}">
            Our Story
        </a>

        <a href="#">
            Contact
        </a>

    </div>


    <a href="{{ route('menu') }}" class="order-btn">
        Order Now
    </a>

</nav>


<style>

    .navbar {

        position: absolute;

        top: 0;
        left: 0;

        width: 100%;

        padding: 22px 4%;

        display: flex;

        align-items: center;

        justify-content: space-between;

        z-index: 100;

        box-sizing: border-box;
    }


    /* LOGO */

    .logo {

        color: #241b16;

        font-size: 28px;

        font-weight: 800;

        text-decoration: none;

        letter-spacing: -1.5px;
    }


    .logo span {

        color: #c6653e;
    }


    /* NAV LINKS */

    .nav-links {

        display: flex;

        align-items: center;

        gap: 38px;
    }


    .nav-links a {

        color: #4f4036;

        text-decoration: none;

        font-size: 15px;

        font-weight: 500;

        transition: 0.3s;
    }


    .nav-links a:hover {

        color: #c6653e;
    }


    /* ORDER BUTTON */

    .order-btn {

        display: inline-flex;

        align-items: center;

        justify-content: center;

        padding: 12px 22px;

        background: #241b16;

        color: #f5ebdd;

        text-decoration: none;

        border-radius: 8px;

        font-size: 14px;

        font-weight: 700;

        transition: 0.3s;
    }


    .order-btn:hover {

        background: #c6653e;

        transform: translateY(-2px);
    }


    /* MOBILE */

    @media (max-width: 768px) {

        .navbar {

            padding: 20px 6%;
        }


        .logo {

            font-size: 23px;
        }


        .nav-links {

            display: none;
        }


        .order-btn {

            padding: 10px 16px;

            font-size: 13px;
        }

    }

</style>