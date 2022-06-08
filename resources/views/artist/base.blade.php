<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NTAF National Tharu Artist Forum</title>

    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('artist-frontend/style.css') }}">
    <style>
        .artist__header {
            position: relative;
            height: 400px;
        }

    </style>
</head>

<body>
    <div class="artist__header">




        @if(count($coverimage)>0)
        @foreach($coverimage as $coverimage)

        <img class="artist__profile__img" src=" {{Storage::url($coverimage->image)}} " alt="img">




        @endforeach
        @else
        <td>Upload coverimage </td>
        @endif

        <!-- change profile form -->
     


        <div class="artist__header--nav">

            <div class="art__header px-5">

                <div class="container-fluid ">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="header__logo">
                                <a href="index.html"> <img src=" {{ asset('artist-frontend/logo-artist.png') }} "
                                        alt="logo"></a>
                                <div class="d-flex flex-row-reverse">
                                    <x-app-layout>

                                    </x-app-layout>
                                </div>


                            </div>
                        </div>

                        <div class="col-md-12 mt-5 ">

                            <div>
                                <h1>{{{ Auth::user()->name  }}} <span class="text-success fs-1">I Am The </span>
                                    <span class="text-primary fs-1"> {{{ Auth::user()->category  }}}</span></h1>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
            <div class="col-md-4">
                <form action="{{route('Artist-cover.store')}} " method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">

                        <div class="col-12 mt-4">
                            <div class="form-outline">
                                <label for="formFile" class="form-label ">Upload Cover Image</label>
                                <input class="form-control  @error('image') is-invalid @enderror  " type="file"
                                    name="image" id="formFile"
                                    style="background: #ffffff;line-height: 55px; border: 4px solid #c1c1c1;">
                            </div>
                            @error('image')
                            <div class="alert alert-danger">
                                {{ $message}}
                            </div>
                            @enderror
                        </div>

                        <div class="col-12 mt-4" hidden>
                            <div class="form-outline">
                                <input type="number" name="artistId" class="form-control" id="exampleInputnumber1"
                                    aria-describedby="numberHelp" value="{{{ Auth::user()->id }}}">
                                <div id="numberHelp" class="form-text"> id
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-4" hidden>
                            <div class="form-outline">
                                <input type="number" name="artist_id" class="form-control" id="exampleInputnumber1"
                                    aria-describedby="numberHelp" value="{{{ Auth::user()->artist_id }}}">
                                <div id="numberHelp" class="form-text">artist id
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-4">
                            <div class="form-outline">
                                <button type="submit" class="btn btn-primary bg-primary">Submit
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    <div class="about__artist px-5 py-5">

        <div class="container-xxl ">
            <div class="row">

                <div class="col-md-5 ">
                    @if(Session::has('profile'))
                    <div class="alert alert-success">
                        {{Session::get('profile')}}

                    </div>
                    @endif
                    <div class="about__artist--img mr-5">



                        @if(count($profile)>0)
                        @foreach($profile as $profile)



                        <img src="{{Storage::url($profile->image)}} " alt="Bridge">


                        @endforeach
                        @else
                        <td>Upload Profile </td>
                        @endif

                        <!-- change profile form -->
                        <form action="{{route('Artist-profile.store')}} " method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class="col-12 mt-4">
                                    <div class="form-outline">
                                        <label for="formFile" class="form-label ">Profile Image</label>
                                        <input class="form-control  @error('image') is-invalid @enderror  " type="file"
                                            name="image" id="formFile"
                                            style="background: #ffffff;line-height: 55px; border: 4px solid #c1c1c1;">
                                    </div>
                                    @error('image')
                                    <div class="alert alert-danger">
                                        {{ $message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-12 mt-4" hidden>
                                    <div class="form-outline">
                                        <input type="number" name="artistId" class="form-control"
                                            id="exampleInputnumber1" aria-describedby="numberHelp"
                                            value="{{{ Auth::user()->id }}}">
                                        <div id="numberHelp" class="form-text"> id
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 mt-4" hidden>
                                    <div class="form-outline">
                                        <input type="number" name="artist_id" class="form-control"
                                            id="exampleInputnumber1" aria-describedby="numberHelp"
                                            value="{{{ Auth::user()->artist_id }}}">
                                        <div id="numberHelp" class="form-text">artist id
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 mt-4">
                                    <div class="form-outline">
                                        <button type="submit" class="btn btn-primary bg-primary">Submit
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </form>


                    </div>


                </div>
                <div class="col-md-7 my-auto px-5">
                    <div class="about__artist--contain">
                        <div class="signUp">

                            <div class="signUp__title">
                                <h2>{{{ Auth::user()->name }}} </h2>
                            </div>
                            <div class="inner__contain text-danger text-uppercase mb-4 fw-bold">
                                {{{ Auth::user()->category }}}

                            </div>

                        </div>
                        <p>{{{ Auth::user()->detail }}}</p>
                    </div>

                </div>

            </div>
        </div>

    </div>
    <div class="error-msg">
        <div class="container">
            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}

            </div>
            @endif
        </div>
    </div>
    <div class="signUp px-5 ">

        <div class="container-xxl ">
            <div class="row">
                <div class="col-md-6">
                    <div class="signUp__title ">
                        <h2>Choose Gallery </h2>
                    </div>

                    <form action="{{route('gallery.store')}} " method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <div class="col-12 mt-4">
                                <div class="form-outline">
                                    <label for="formFile" class="form-label ">Image Gallery</label>
                                    <input class="form-control  @error('image') is-invalid @enderror  " type="file"
                                        name="image" id="formFile"
                                        style="background: #ffffff;line-height: 55px; border: 4px solid #c1c1c1;">
                                </div>
                                @error('image')
                                <div class="alert alert-danger">
                                    {{ $message}}
                                </div>
                                @enderror
                            </div>

                            <div class="col-12 mt-4" hidden>
                                <div class="form-outline">
                                    <input type="number" name="artistId" class="form-control" id="exampleInputnumber1"
                                        aria-describedby="numberHelp" value="{{{ Auth::user()->id }}}">
                                    <div id="numberHelp" class="form-text"> id
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-4" hidden>
                                <div class="form-outline">
                                    <input type="number" name="artist_id" class="form-control" id="exampleInputnumber1"
                                        aria-describedby="numberHelp" value="{{{ Auth::user()->artist_id }}}">
                                    <div id="numberHelp" class="form-text">artist id
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <div class="form-outline">
                                    <button type="submit" class="btn btn-primary bg-primary">Submit
                                    </button>
                                </div>
                            </div>

                        </div>
                    </form>

                </div>
                <div class="col-md-6 about__artist--contain">
                    <div class=" signUp">

                        <div class="signUp__title my-4">
                            <h2>Add Your Location </h2>
                        </div>
                        <div class="inner__contain text-danger text-uppercase mb-4 fw-bold">
                            <form action="{{route('address.store')}} " method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-12 mb-4">
                                        <div class="form-outline">
                                            <div class="mb-3">

                                                <input type="text" name="province"
                                                    class="form-control  @error('province') is-invalid @enderror "
                                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                                <div id="emailHelp" class="form-text">Write Your Province</div>
                                            </div>


                                            @error('province')
                                            <div class="alert alert-danger">
                                                {{ $message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-outline">
                                            <div class="mb-3">

                                                <input type="text" name="district"
                                                    class="form-control  @error('district') is-invalid @enderror "
                                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                                <div id="emailHelp" class="form-text">Write Your District</div>
                                            </div>


                                            @error('district')
                                            <div class="alert alert-danger">
                                                {{ $message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4" hidden>
                                        <div class="form-outline">
                                            <input type="number" name="artistId" class="form-control"
                                                id="exampleInputnumber1" aria-describedby="numberHelp"
                                                value="{{{ Auth::user()->id }}}">
                                            <div id="numberHelp" class="form-text"> id
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4" hidden>
                                        <div class="form-outline">
                                            <input type="number" name="artist_id" class="form-control"
                                                id="exampleInputnumber1" aria-describedby="numberHelp"
                                                value="{{{ Auth::user()->artist_id }}}">
                                            <div id="numberHelp" class="form-text">artist id
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="form-outline">
                                            <button type="submit" class="btn btn-primary bg-primary">Submit
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </form>


                        </div>
                        @if(count($location)>0)
                        @foreach($location as $location)


                        <div class="col-sm-12 col-md-12">
                            <p>{{$location->provinceId}} , {{$location->districtId}}</p>

                        </div>

                        @endforeach
                        @else
                        <td>No any package here</td>
                        @endif




                    </div>

                </div>



            </div>
        </div>

    </div>

    <div class="signUp px-5 py-5">

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
                        @if(count($imagegaller)>0)
                        @foreach($imagegaller as $imagegaller)


                        <div class="col-sm-12 col-md-4">
                            <a class="lightbox" href="{{Storage::url($imagegaller->image)}} ">
                                <img src="{{Storage::url($imagegaller->image)}} " alt="Bridge">
                            </a>
                        </div>

                        @endforeach
                        @else
                        <td>No any package here</td>
                        @endif



                    </div>

                </div>

            </div>
        </div>

    </div>




    <div class="footer__fist bg-dark px-5 py-5">

        <div class="container-xxl ">
            <div class="row">


                <div class="col-md-4">
                    <div class="footer_social">
                        <ul>
                            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                    </svg> </a></li>
                            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                        <path
                                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                    </svg></a></li>
                            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                    </svg></a></li>
                            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                    </svg></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 text-center text-white">
                    <div class="footer__center">
                        <h2>Let's Talk?</h2>
                    </div>

                </div>
                <div class="col-md-4 ">
                    <div class="footer__end">
                        <div class="footer__btn">
                            <a href="#">Make an enquiry</a>
                        </div>
                    </div>

                </div>


            </div>
        </div>


    </div>
    <div class="footer__second">
        <div class="container">

            <div class="d-flex justify-content-around text-white">
                <div>
                    <b>Kathmandu</b>
                    <p>+977-23151423</p>
                </div>
                <div>
                    <b>Dhangadhi</b>
                    <p>+977-23151423</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__last bg-dark text-white px-5 ">
        <div class="container-xxl">
            <div class="row">
                <div class="col-md-4">
                    <p>2022 © Design & Devlop By : <a href="#">abs infosys</a></p>
                </div>
                <div class="col-md-8">
                    <ul>
                        <li>
                            <a href="#">Home</a>
                            <a href="#">About</a>
                            <a href="#">For Business</a>
                            <a href="#"> Business</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.full.min.js">
    </script>
    <script>
        $(function () {
            $("select").select2();
        });

    </script>
</body>

</html>
