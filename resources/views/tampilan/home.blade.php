@extends('layout.app')

@section('title', 'Home')

@section('content')

<section class="hero">

    <div class="hero-content">

        <div class="badge">
            ✦ Welcome to Our Café
        </div>

        <h1>
            Your Daily Dose <br> of


            <span>comfort.</span>
        </h1>

        <p>
            A cozy little place where good coffee meets good moments.
Enjoy freshly brewed coffee, delicious bites, and a warm atmosphere
made for slow mornings, meaningful conversations, productive afternoons,
or simply taking a little time for yourself.
        </p>

        <div class="hero-buttons">

        <a href="{{ route('menu') }}" class="primary-btn">
          Explore Our Menu →

            </a>

            <a href="#" class="secondary-btn">
                Our Story
            </a>

        </div>

    </div>

</section>


<section class="features">

    <div class="section-title">

        <span class="section-label">OUR EXPERIENCE</span>

        <h2>More Than Just Coffee</h2>

        <p>
            Good coffee, good food, and good moments —
            everything you need to make your day a little better.
        </p>

    </div>


    <div class="feature-grid">

        <div class="card">

            <div class="icon">
                ☕
            </div>

            <h3>Freshly Brewed</h3>

            <p>
                Freshly brewed coffee made with carefully
                selected beans to give you the perfect cup
                every time.
            </p>

        </div>


        <div class="card">

            <div class="icon">
                🥐
            </div>

            <h3>Made With Love</h3>

            <p>
                Delicious bites and freshly made treats
                prepared to perfectly accompany your
                favorite coffee.
            </p>

        </div>


        <div class="card">

            <div class="icon">
                ✦
            </div>

            <h3>Cozy Moments</h3>

            <p>
                A warm and cozy space to slow down,
                catch up with friends, get some work done,
                or simply enjoy your own time.
            </p>

        </div>

    </div>

</section>

@endsection


@push('styles')

<style>

    /* HERO */

    .hero {
    min-height: 100vh;

    display: flex;
    align-items: center;

    padding: 120px 8% 80px;

    position: relative;
    overflow: hidden;

    background: #f5ebdd;

    color: #241b16;
}


/* =========================
   FOOD ART
========================= */

.hero::after {
    content: "";

    position: absolute;

    top: 0;
    right: 0;

    width: 65%;
    height: 100%;

    background-image:

        linear-gradient(
            to right,

            #f5ebdd 0%,

            rgba(245, 235, 221, 0.98) 8%,

            rgba(245, 235, 221, 0.85) 20%,

            rgba(245, 235, 221, 0.45) 40%,

            rgba(245, 235, 221, 0.08) 65%,

            rgba(245, 235, 221, 0) 100%
        ),

        url('/images/ff8dda4566254608355e7c471ffcf095.jpg');

    background-size: cover;

    background-position: center;

    z-index: 0;
}


/* =========================
   CONTENT
========================= */

.hero-content {
    max-width: 700px;

    position: relative;

    z-index: 2;
}


.badge {
    display: inline-block;

    padding: 9px 16px;

    background: #241b16;

    color: #f5ebdd;

    border-radius: 30px;

    font-size: 13px;

    font-weight: 600;

    letter-spacing: 0.5px;

    margin-bottom: 25px;
}


.hero h1 {
    font-size: clamp(50px, 6vw, 82px);

    line-height: 0.98;

    letter-spacing: -4px;

    margin-bottom: 28px;

    color: #241b16;
}


.hero h1 span {

    color: #c6653e;

    background: none;

    -webkit-text-fill-color: initial;
}


.hero p {

    color: #6b5b50;

    font-size: 18px;

    line-height: 1.7;

    max-width: 600px;

    margin-bottom: 35px;
}


/* =========================
   BUTTONS
========================= */

.hero-buttons {

    display: flex;

    gap: 15px;
}


.primary-btn {

    display: inline-flex;

    align-items: center;

    padding: 15px 24px;

    background: #c6653e;

    color: white;

    border-radius: 10px;

    text-decoration: none;

    font-weight: 700;

    transition: 0.3s;
}


.primary-btn:hover {

    background: #a94f30;

    transform: translateY(-3px);
}


.secondary-btn {

    display: inline-flex;

    align-items: center;

    padding: 15px 24px;

    background: transparent;

    color: #241b16;

    border: 1px solid #8d7766;

    border-radius: 10px;

    text-decoration: none;

    font-weight: 600;

    transition: 0.3s;
}


.secondary-btn:hover {

    background: #241b16;

    color: #f5ebdd;
}
/* =========================
   FEATURES
========================= */

.features {
    padding: 110px 8%;
    background: #fffaf3;
    color: #241b16;
}


.section-title {
    max-width: 650px;
    margin: 0 auto 60px;
    text-align: center;
}


.section-label {
    display: inline-block;

    margin-bottom: 15px;

    font-size: 12px;
    font-weight: 800;

    letter-spacing: 2px;

    color: #c6653e;
}


.section-title h2 {
    font-size: clamp(38px, 5vw, 58px);

    line-height: 1;

    letter-spacing: -2px;

    margin-bottom: 20px;
}


.section-title p {
    color: #6b5b50;

    font-size: 16px;

    line-height: 1.7;

    margin: 0;
}


.feature-grid {
    display: grid;

    grid-template-columns: repeat(3, 1fr);

    gap: 25px;

    max-width: 1200px;

    margin: 0 auto;
}


.card {
    padding: 35px;

    background: #f5ebdd;

    border-radius: 20px;

    border: 1px solid rgba(36, 27, 22, 0.08);

    transition: 0.3s;
}


.card:hover {
    transform: translateY(-8px);

    box-shadow: 0 15px 35px rgba(36, 27, 22, 0.10);
}


.icon {
    width: 55px;
    height: 55px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #c6653e;

    color: white;

    border-radius: 15px;

    font-size: 25px;

    margin-bottom: 25px;
}


.card h3 {
    font-size: 23px;

    margin-bottom: 12px;

    color: #241b16;
}


.card p {
    color: #6b5b50;

    line-height: 1.7;

    font-size: 15px;

    margin: 0;
}


/* =========================
   RESPONSIVE
========================= */

@media (max-width: 800px) {

    .feature-grid {
        grid-template-columns: 1fr;
    }

    .features {
        padding: 80px 6%;
    }

}

</style>

@endpush