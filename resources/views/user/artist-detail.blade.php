
<!doctype html>
<html lang="en">

@include('user.layout.head')

<body>

<div class="artist__header">

<img class="artist__profile__img" src="{{ asset('user-frontend/image/bb.jpg') }}" alt="img">
<div class="artist__header--nav">

    <div class="art__header px-5">

        <div class="container-fluid ">
            <div class="row">

                <div class="col-md-12">
                    <div class="header__logo">
                        <a href="/"> <img src="{{ asset('user-frontend/logo-artist.png') }}" alt="logo"></a>

                    </div>
                </div>

                <div class="col-md-12 ">
                @include('user.layout.nav')
                </div>
                <div class="col-md-12 mt-5">
                    <div>
                        <h1>Neeta Dhungana</h1>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>
</div>
<div class="about__artist px-5 py-5">

<div class="container-xxl ">
    <div class="row">

        <div class="col-md-5 ">
            <div class="about__artist--img mr-5">
                <img src="{{ asset('user-frontend/image/nita.jpg') }}" alt="artist">
            </div>


        </div>
        <div class="col-md-7 my-auto px-5">
            <div class="about__artist--contain">
                <div class="signUp">

                    <div class="signUp__title">
                        <h2>Neeta Dhungana</h2>
                    </div>
                    <div class="inner__contain text-danger text-uppercase mb-4 fw-bold">
                        ACTRESS

                    </div>

                </div>
                <p>Neeta Dhungana is an actress and a model associated with Nepalese film industry. Neeta has
                    been working in Nepali film industry since teenager. She has played as an elder sister in
                    Ajambari Nata which was released in 2008.</p>
            </div>
        </div>

    </div>
</div>

</div>
<div class="signUp px-5 ">

<div class="container-xxl ">
    <div class="row">

        <div class="col-md-12 text-center">
            <div class="signUp__title">
                <h2>Image Gallery</h2>
            </div>
            <div class="inner__contain">
                <p>Become Part of the Nepal’s Largest Artist’s Community</p>
            </div>

        </div>

    </div>
</div>

</div>

<div class="gallery__part px-5 pb-5">

<div class="container-xxl ">
    <div class="row">

        <div class="tz-gallery">

            <div class="row">

                <div class="col-sm-12 col-md-4">
                    <a class="lightbox"
                        href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/bridge.jpg">
                        <img src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/bridge.jpg"
                            alt="Bridge">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox"
                        href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/park.jpg">
                        <img src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/park.jpg"
                            alt="Park">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox"
                        href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/tunnel.jpg">
                        <img src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/tunnel.jpg"
                            alt="Tunnel">
                    </a>
                </div>
                <div class="col-sm-12 col-md-8">
                    <a class="lightbox"
                        href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/traffic.jpg">
                        <img src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/traffic.jpg"
                            alt="Traffic">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox"
                        href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/rails.jpg">
                        <img src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/rails.jpg"
                            alt="Coast">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox"
                        href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/coast.jpg">
                        <img src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/coast.jpg"
                            alt="Rails">
                    </a>
                </div>

            </div>

        </div>

    </div>
</div>

</div>
   
     @include('user.layout.footer')

</body>

</html>