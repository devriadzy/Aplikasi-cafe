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
</>
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

    background: #080c1a;
    }
/* FOOD IMAGE */

.hero::after {
    content: "";

    position: absolute;

    top: 0;
    right: 0;

    width: 60%;
    height: 100%;

    background-image:
        linear-gradient(
            to right,
    #080c1a 0%,
    rgba(8, 12, 26, 0.85) 15%,
    rgba(8, 12, 26, 0.45) 40%,
    rgba(8, 12, 26, 0.05) 75%,
    rgba(8, 12, 26, 0) 100%
        ),
        url('/images/ff8dda4566254608355e7c471ffcf095.jpg');

    background-size: cover;
    background-position: center;

    z-index: 0;
}

    .hero-content {
        max-width: 700px;

    position: relative;
    z-index: 2;
    }

    .badge {
        display: inline-block;

        padding: 8px 15px;

        background: rgba(108, 99, 255, 0.12);

        border: 1px solid rgba(108, 99, 255, 0.3);

        border-radius: 30px;

        color: #9d98ff;

        font-size: 14px;

        margin-bottom: 25px;
    }

    .hero h1 {
        font-size: clamp(45px, 6vw, 78px);
        line-height: 1.05;
        letter-spacing: -3px;
        margin-bottom: 25px;
    }

    .hero h1 span {
        background: linear-gradient(
            90deg,
            #7b73ff,
            #a78bfa
        );

        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .hero p {
        color: #a8aec4;
        font-size: 18px;
        line-height: 1.7;
        max-width: 600px;
        margin-bottom: 35px;
    }

    .hero-buttons {
        display: flex;
        gap: 15px;
    }


    /* FEATURES */

    .features {
        padding: 100px 8%;
        background: #0b0f20;
    }

    .section-title {
        text-align: center;
        margin-bottom: 55px;
    }

    .section-title h2 {
        font-size: 38px;
        margin-bottom: 12px;
    }

    .section-title p {
        color: #8f95ac;
    }

    .feature-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    .card {
        padding: 30px;
        border-radius: 18px;

        background: #10152a;

        border: 1px solid #1d2339;

        transition: 0.3s;
    }

    .card:hover {
        transform: translateY(-7px);
        border-color: #5149d9;
    }

    .icon {
        width: 50px;
        height: 50px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: rgba(108, 99, 255, 0.15);

        border-radius: 12px;

        font-size: 23px;

        margin-bottom: 20px;
    }

    .card h3 {
        margin-bottom: 12px;
        font-size: 20px;
    }

    .card p {
        color: #858ca4;
        line-height: 1.6;
    }


    /* MOBILE */

    @media (max-width: 768px) {

        .hero {
            padding: 120px 6% 80px;
        }

        .hero h1 {
            letter-spacing: -2px;
        }

        .hero-buttons {
            flex-direction: column;
        }

        .hero-buttons a {
            text-align: center;
        }

        .features {
            padding: 80px 6%;
        }

        .feature-grid {
            grid-template-columns: 1fr;
        }

    }

</style>

@endpush