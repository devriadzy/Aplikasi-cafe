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

        <h2>Everything You Need</h2>

        <p>
            Fitur sederhana untuk membangun aplikasi
            yang powerful.
        </p>

    </div>


    <div class="feature-grid">

        <div class="card">

            <div class="icon">
                ⚡
            </div>

            <h3>Fast Performance</h3>

            <p>
                Dibangun dengan teknologi modern
                untuk memberikan performa yang cepat
                dan responsif.
            </p>

        </div>


        <div class="card">

            <div class="icon">
                🔒
            </div>

            <h3>Secure</h3>

            <p>
                Sistem yang aman dengan struktur
                aplikasi yang mudah dikembangkan.
            </p>

        </div>


        <div class="card">

            <div class="icon">
                🚀
            </div>

            <h3>Easy to Scale</h3>

            <p>
                Struktur fleksibel sehingga aplikasi
                dapat terus berkembang.
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

</style>

@endpush