@extends('layout.app')

@section('title', 'About')

@section('content')

<section class="about-hero">

    <div class="about-content">

        <div class="badge">
            ✦ About Us
        </div>

        <h1>
            We build things<br>
            <span>that matter.</span>
        </h1>

        <p>
            Kami percaya bahwa teknologi bukan hanya tentang
            membuat sesuatu terlihat keren, tetapi juga tentang
            menciptakan solusi yang berguna, sederhana, dan
            memberikan pengalaman terbaik bagi pengguna.
        </p>

    </div>

</section>


<section class="about-section">

    <div class="about-grid">

        <div class="about-text">

            <span class="section-label">
                WHO WE ARE
            </span>

            <h2>
                Simple ideas.<br>
                Powerful solutions.
            </h2>

            <p>
                Kami adalah tim yang berfokus pada pengembangan
                solusi digital dengan menggabungkan teknologi,
                kreativitas, dan kebutuhan pengguna.
            </p>

            <p>
                Dari sebuah ide sederhana, kami mencoba
                mengubahnya menjadi sebuah produk digital
                yang mudah digunakan dan memiliki manfaat nyata.
            </p>

        </div>


        <div class="about-card">

            <div class="card-glow"></div>

            <div class="about-icon">
                🚀
            </div>

            <h3>
                Our Mission
            </h3>

            <p>
                Membuat teknologi menjadi lebih mudah,
                accessible, dan bermanfaat untuk semua orang.
            </p>

        </div>

    </div>

</section>


<section class="values-section">

    <div class="section-title">

        <span class="section-label">
            OUR VALUES
        </span>

        <h2>
            What drives us
        </h2>

        <p>
            Prinsip yang menjadi dasar dalam setiap hal
            yang kami kerjakan.
        </p>

    </div>


    <div class="values-grid">

        <div class="value-card">

            <div class="value-number">
                01
            </div>

            <h3>
                Innovation
            </h3>

            <p>
                Selalu terbuka terhadap ide baru dan
                teknologi yang dapat memberikan solusi
                lebih baik.
            </p>

        </div>


        <div class="value-card">

            <div class="value-number">
                02
            </div>

            <h3>
                Simplicity
            </h3>

            <p>
                Kami percaya bahwa solusi yang baik
                tidak harus rumit. Simple is powerful.
            </p>

        </div>


        <div class="value-card">

            <div class="value-number">
                03
            </div>

            <h3>
                Impact
            </h3>

            <p>
                Setiap produk yang dibuat harus memiliki
                manfaat dan memberikan dampak positif.
            </p>

        </div>

    </div>

</section>


<section class="about-cta">

    <div>

        <span class="section-label">
            LET'S WORK TOGETHER
        </span>

        <h2>
            Have an idea?
        </h2>

        <p>
            Mari wujudkan ide tersebut menjadi sesuatu
            yang nyata.
        </p>

        <a href="#" class="primary-btn">
            Get Started →
        </a>

    </div>

</section>

@endsection


@push('styles')

<style>

    /* =========================
       ABOUT HERO
    ========================= */

    .about-hero {
        min-height: 75vh;

        display: flex;
        align-items: center;

        padding: 140px 8% 100px;

        position: relative;
        overflow: hidden;
    }

    .about-hero::before {
        content: "";

        position: absolute;

        width: 450px;
        height: 450px;

        background: #6c63ff;

        filter: blur(180px);

        opacity: 0.18;

        top: -150px;
        right: -100px;
    }

    .about-content {
        max-width: 750px;

        position: relative;
        z-index: 2;
    }

    .about-content h1 {
        font-size: clamp(45px, 6vw, 75px);

        line-height: 1.05;

        letter-spacing: -3px;

        margin-bottom: 25px;
    }

    .about-content h1 span {
        background: linear-gradient(
            90deg,
            #7b73ff,
            #a78bfa
        );

        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .about-content p {
        max-width: 650px;

        color: #a8aec4;

        font-size: 18px;

        line-height: 1.8;
    }


    /* =========================
       ABOUT SECTION
    ========================= */

    .about-section {
        padding: 100px 8%;

        background: #0b0f20;
    }

    .about-grid {
        max-width: 1100px;

        margin: auto;

        display: grid;

        grid-template-columns: 1.2fr 0.8fr;

        gap: 80px;

        align-items: center;
    }

    .section-label {
        color: #7b73ff;

        font-size: 13px;

        font-weight: 700;

        letter-spacing: 2px;
    }

    .about-text h2 {
        font-size: 42px;

        line-height: 1.15;

        margin: 15px 0 25px;

        letter-spacing: -1px;
    }

    .about-text p {
        color: #858ca4;

        line-height: 1.8;

        margin-bottom: 18px;
    }


    /* =========================
       MISSION CARD
    ========================= */

    .about-card {
        position: relative;

        padding: 40px;

        background: #10152a;

        border: 1px solid #1d2339;

        border-radius: 22px;

        overflow: hidden;

        transition: 0.3s;
    }

    .about-card:hover {
        transform: translateY(-7px);

        border-color: #5149d9;
    }

    .card-glow {
        position: absolute;

        width: 180px;
        height: 180px;

        background: #6c63ff;

        filter: blur(100px);

        opacity: 0.15;

        right: -80px;
        top: -80px;
    }

    .about-icon {
        width: 60px;
        height: 60px;

        display: flex;

        align-items: center;
        justify-content: center;

        background: rgba(108, 99, 255, 0.15);

        border-radius: 15px;

        font-size: 28px;

        margin-bottom: 25px;
    }

    .about-card h3 {
        font-size: 24px;

        margin-bottom: 15px;
    }

    .about-card p {
        color: #858ca4;

        line-height: 1.7;
    }


    /* =========================
       VALUES
    ========================= */

    .values-section {
        padding: 100px 8%;
    }

    .section-title {
        text-align: center;

        max-width: 600px;

        margin: 0 auto 55px;
    }

    .section-title h2 {
        font-size: 40px;

        margin: 12px 0;
    }

    .section-title p {
        color: #858ca4;

        line-height: 1.6;
    }

    .values-grid {
        max-width: 1100px;

        margin: auto;

        display: grid;

        grid-template-columns: repeat(3, 1fr);

        gap: 25px;
    }

    .value-card {
        padding: 35px;

        background: #10152a;

        border: 1px solid #1d2339;

        border-radius: 18px;

        transition: 0.3s;
    }

    .value-card:hover {
        transform: translateY(-7px);

        border-color: #5149d9;
    }

    .value-number {
        color: #6c63ff;

        font-size: 14px;

        font-weight: 700;

        margin-bottom: 30px;
    }

    .value-card h3 {
        font-size: 22px;

        margin-bottom: 12px;
    }

    .value-card p {
        color: #858ca4;

        line-height: 1.7;
    }


    /* =========================
       CTA
    ========================= */

    .about-cta {
        padding: 100px 8%;

        text-align: center;

        background: #0b0f20;
    }

    .about-cta h2 {
        font-size: 48px;

        margin: 15px 0;
    }

    .about-cta p {
        color: #858ca4;

        margin-bottom: 30px;

        line-height: 1.6;
    }


    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 768px) {

        .about-hero {
            padding: 130px 6% 80px;
        }

        .about-content h1 {
            letter-spacing: -2px;
        }

        .about-section {
            padding: 80px 6%;
        }

        .about-grid {
            grid-template-columns: 1fr;

            gap: 50px;
        }

        .about-text h2 {
            font-size: 34px;
        }

        .values-section {
            padding: 80px 6%;
        }

        .values-grid {
            grid-template-columns: 1fr;
        }

        .about-cta {
            padding: 80px 6%;
        }

        .about-cta h2 {
            font-size: 38px;
        }

    }

</style>

@endpush