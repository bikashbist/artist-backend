<!doctype html>
<html lang="en">

@include('user.layout.head')

<body>

    <div class="artist__header">
        @if(count($coverImage)>0)
        @foreach($coverImage->take(1) as $coverImage)

        <img class="artist__profile__img" src="{{Storage::url($coverImage->image)}} " alt="img">



        @endforeach
        @else
        <td>Upload coverImage </td>
        @endif

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
                                <h1>{{$artistview->name}}</h1>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="about__artist px-5 py-5">

        <div class="container-fluid  ">
            <div class="row">

                <div class="col-md-5 ">
                    <div class="about__artist--img mr-5">
                        @if(count($profile)>0)
                        @foreach($profile->take(1) as $profile)

                        <img src="{{Storage::url($profile->image)}}" alt="artist">

                        @endforeach
                        @else
                        <td>Upload Profile </td>
                        @endif

                    </div>


                </div>

                <div class="col-md-7 my-auto px-5">
                    <div class="about__artist--contain">
                        <div class="signUp">

                            <div class="signUp__title">
                                <h2>{{$artistview->name}}</h2>
                            </div>
                            <div class="inner__contain text-danger text-uppercase mb-4 fw-bold">
                                {{$artistview->category}}

                            </div>

                        </div>
                        <p>{{$artistview->detail}}</p>
                        <h2>My Address</h2>

                        @if(count($address)>0)
                        @foreach($address->take(1) as $address)
                        <p class="card-text">{{$address->provinceId}} , {{$address->districtId}}</p>


                        @endforeach
                        @else
                        <td>No any address here</td>
                        @endif
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="signUp px-5 ">

        <div class="container-fluid  ">
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

        <div class="container-fluid  ">
            <div class="row">

                <div class="tz-gallery">

                    <div class="row">
                        @if(count($gallery)>0)
                        @foreach($gallery as $gallery)

                        <div class="col-sm-12 col-md-4">
                            <a class="lightbox" href="{{Storage::url($gallery->image)}}">
                                <img src="{{Storage::url($gallery->image)}}" alt="Bridge">
                            </a>
                        </div>
                        @endforeach
                        @else
                        <td>No any images here</td>
                        @endif
                 



                    </div>

                </div>

            </div>
        </div>

    </div>

    @include('user.layout.footer')

</body>

</html>
