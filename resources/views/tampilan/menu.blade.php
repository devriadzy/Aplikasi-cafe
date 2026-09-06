@extends('layout.app')

@section('title', 'Our Menu')

@section('content')

<section class="menu-page">

    <div class="menu-header">

        <div class="badge">
            ✦ Our Menu
        </div>

        <h1>
            Good Food.<br>
            <span>Good Mood.</span>
        </h1>

        <p>
            Take your time, explore our menu, and find something
            made just for your moment.
        </p>

    </div>


    <div class="menu-container">

        {{-- COFFEE --}}

        <div class="menu-category">

            <div class="category-title">

                <h2>☕ Coffee</h2>

                <span>Freshly Brewed</span>

            </div>


            <div class="menu-grid">

                <div class="menu-card">

                    <div class="menu-image">
                        <img src="{{ asset('images/kopi.png') }}" alt="Cappuccino">
                    </div>

                    <div class="menu-info">

                        <div class="menu-name">

                            <h3>Cappuccino</h3>

                            <span>Rp 28K</span>

                        </div>

                        <p>
                            Smooth espresso combined with
                            creamy steamed milk.
                        </p>

                    </div>

                </div>


                <div class="menu-card">

                    <div class="menu-image">
                        <img src="{{ asset('images/coffee.jpg') }}" alt="Café Latte">
                    </div>

                    <div class="menu-info">

                        <div class="menu-name">

                            <h3>Café Latte</h3>

                            <span>Rp 30K</span>

                        </div>

                        <p>
                            Rich espresso with silky
                            steamed milk.
                        </p>

                    </div>

                </div>


                <div class="menu-card">

                    <div class="menu-image">
                        <img src="{{ asset('images/coffee.jpg') }}" alt="Americano">
                    </div>

                    <div class="menu-info">

                        <div class="menu-name">

                            <h3>Americano</h3>

                            <span>Rp 25K</span>

                        </div>

                        <p>
                            Bold espresso balanced with
                            refreshing water.
                        </p>

                    </div>

                </div>

            </div>

        </div>


        {{-- FOOD --}}

        <div class="menu-category">

            <div class="category-title">

                <h2>🍰 Food & Dessert</h2>

                <span>Freshly Made</span>

            </div>


            <div class="menu-grid">

                <div class="menu-card">

                    <div class="menu-image">
                        <img src="{{ asset('images/croissant.jpg') }}" alt="Butter Croissant">
                    </div>

                    <div class="menu-info">

                        <div class="menu-name">

                            <h3>Butter Croissant</h3>

                            <span>Rp 22K</span>

                        </div>

                        <p>
                            Flaky, buttery and freshly baked
                            every morning.
                        </p>

                    </div>

                </div>


                <div class="menu-card">

                    <div class="menu-image">
                        <img src="{{ asset('images/cake.jpg') }}" alt="Chocolate Cake">
                    </div>

                    <div class="menu-info">

                        <div class="menu-name">

                            <h3>Chocolate Cake</h3>

                            <span>Rp 32K</span>

                        </div>

                        <p>
                            Rich chocolate cake with a
                            soft and moist texture.
                        </p>

                    </div>

                </div>


                <div class="menu-card">

                    <div class="menu-image">
                        <img src="{{ asset('images/sandwich.jpg') }}" alt="Chicken Sandwich">
                    </div>

                    <div class="menu-info">

                        <div class="menu-name">

                            <h3>Chicken Sandwich</h3>

                            <span>Rp 35K</span>

                        </div>

                        <p>
                            Grilled chicken, fresh vegetables
                            and homemade sauce.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection


@push('styles')

<style>

    .menu-page {
        padding: 140px 8% 100px;
        background: #080c1a;
        min-height: 100vh;
    }


    /* HEADER */

    .menu-header {
        max-width: 700px;
        margin-bottom: 80px;
    }

    .menu-header h1 {
        font-size: clamp(48px, 6vw, 76px);
        line-height: 1;
        letter-spacing: -3px;
        margin: 20px 0;
    }

    .menu-header h1 span {
        background: linear-gradient(
            90deg,
            #7b73ff,
            #a78bfa
        );

        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .menu-header p {
        color: #a8aec4;
        font-size: 18px;
        line-height: 1.7;
        max-width: 550px;
    }


    /* CATEGORY */

    .menu-category {
        margin-bottom: 80px;
    }

    .category-title {
        display: flex;
        align-items: center;
        justify-content: space-between;

        margin-bottom: 30px;

        border-bottom: 1px solid #1d2339;

        padding-bottom: 15px;
    }

    .category-title h2 {
        font-size: 28px;
    }

    .category-title span {
        color: #7b73ff;
        font-size: 14px;
    }


    /* MENU GRID */

    .menu-grid {
        display: grid;

        grid-template-columns:
            repeat(3, 1fr);

        gap: 25px;
    }


    /* CARD */

    .menu-card {
        background: #10152a;

        border: 1px solid #1d2339;

        border-radius: 18px;

        overflow: hidden;

        transition: 0.3s;
    }

    .menu-card:hover {
        transform: translateY(-7px);

        border-color: #5149d9;

        box-shadow:
            0 15px 40px
            rgba(81, 73, 217, 0.15);
    }


    /* IMAGE */

    .menu-image {
        width: 100%;
        height: 220px;

        overflow: hidden;
    }

    .menu-image img {
        width: 100%;
        height: 100%;

        object-fit: cover;

        transition: 0.4s;
    }

    .menu-card:hover .menu-image img {
        transform: scale(1.05);
    }


    /* INFO */

    .menu-info {
        padding: 22px;
    }

    .menu-name {
        display: flex;

        justify-content: space-between;
        align-items: center;

        gap: 15px;

        margin-bottom: 10px;
    }

    .menu-name h3 {
        font-size: 20px;
    }

    .menu-name span {
        color: #a78bfa;

        font-weight: 600;

        white-space: nowrap;
    }

    .menu-info p {
        color: #858ca4;

        line-height: 1.6;

        font-size: 14px;
    }


    /* MOBILE */

    @media (max-width: 768px) {

        .menu-page {
            padding: 120px 6% 80px;
        }

        .menu-header {
            margin-bottom: 55px;
        }

        .menu-header h1 {
            letter-spacing: -2px;
        }

        .category-title h2 {
            font-size: 22px;
        }

        .menu-grid {
            grid-template-columns: 1fr;
        }

        .menu-image {
            height: 240px;
        }

    }

</style>

@endpush