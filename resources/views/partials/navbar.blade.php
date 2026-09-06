<nav class="navbar">

    <div class="logo">
        MasterMind<span>.cafe</span>
    </div>

    <ul class="nav-links">

        <li>
            <a href="{{ url('/') }}">
                Home
            </a>
        </li>

        <li>
            <a href="#">
                Features
            </a>
        </li>

        <li>
            <a href="{{ url('/about') }}">
                About
            </a>
        </li>

    </ul>

    <a href="#" class="nav-btn">
        Order Now
    </a>

</nav>

<style>
    .navbar {
        width: 100%;
        padding: 22px 8%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 10;
    }

    .logo {
        font-size: 24px;
        font-weight: 800;
        letter-spacing: -1px;
    }

    .logo span {
        color: #6c63ff;
    }

    .nav-links {
        display: flex;
        gap: 35px;
        list-style: none;
    }

    .nav-links a {
        color: #b8bdd3;
        transition: 0.3s;
    }

    .nav-links a:hover {
        color: #ffffff;
    }

    .nav-btn {
        background: #6c63ff;
        color: white;
        padding: 11px 22px;
        border-radius: 10px;
        font-weight: 600;
        transition: 0.3s;
    }

    .nav-btn:hover {
        background: #8179ff;
        transform: translateY(-2px);
    }

    @media (max-width: 768px) {

        .navbar {
            padding: 20px 6%;
        }

        .nav-links {
            display: none;
        }

    }
</style>