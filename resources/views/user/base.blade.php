<!doctype html>
<html lang="en">

@include('user.layout.head')

<body>

    <div class="header px-5">

        <div class="container-fluid  ">
            <div class="row">

                <div class="col-md-12">
                    <div class="header__logo">
                        <a href="/"> <img src=" {{ asset('user-frontend/logo-artist.png') }}" alt="logo"></a>

                    </div>
                </div>

                <div class="col-md-12 ">
                    @include('user.layout.nav')
                </div>
                <div class="col-md-12 mt-5">
                    <div>
                        <h1>A better way to Find <br> best Artists</h1>
                    </div>

                </div>

                <div class="col-md-12 mt-5">
                    <div class="outer">
                        <div class="button">
                            <div id="list-example" class="list-group ">
                                <a class=" text text-decoration-none" href="#list-item-1">Find Artist</a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="signUp px-5 py-5">

        <div class="container-fluid  ">
            <div class="row">

                <div class="col-md-12 text-center">
                    <div class="signUp__title">
                        <h2>Join the ArtistNepal</h2>
                    </div>
                    <div class="signUp__subTitle">
                        <span>Become Part of the Nepal’s Largest Artist’s Community</span>
                    </div>
                    <div class="signUp__link">
                        <a href="{{ url('artist-form') }}">Sign Up Now For FREE!</a>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="search px-5 py-5">

        <div class="container-fluid  ">
            <div class="row">

                <div class="col-md-12 text-center">

                    <div class="search__artist">


                        <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0"
                            class="scrollspy-example" tabindex="0">

                            <h3 id="list-item-1">Search and book the best artist for your Event</h3>

                            <form action="{{url('/search')}}" type="get">

                                <div class="d-flex justify-content-center pt-4">

                                    <div class="slect">
                                        <select class="select-search" aria-label="Default select example">
                                            <option selected>Search Here </option>

                                        </select>
                                    </div>

                                    <div class="search__person">

                                        <input type="search" name="query" class="select-search" placeholder="Search..">




                                    </div>

                                </div>
                                <div class="text-left">
                                    <button type="submit">Search Artist</button>
                                </div>


                            </form>

                        </div>


                    </div>

                </div>

                <div class="col-md-12 mt-5">
                    <ul>


                        @if(count($listArtist)>0)
                        @foreach($listArtist as $listArtist)

                        <li>

                            <a href=" {{url('artist-detail-artist',[$listArtist->id])}}">


                                <img src="{{Storage::url($listArtist->image)}}"
                                    alt="A Toyota Previa covered in graffiti" loading="lazy">

                                <div class="artist__name">
                                    <b>{{$listArtist->name}}</b>
                                    <p>{{$listArtist->category}}</p>
                                </div>
                            </a>

                        </li>


                        @endforeach
                        @else
                        <td>No any category here</td>
                        @endif

                        <!-- <li>

                                <a href="artist-detail.html">
                                    <img src="https://res.cloudinary.com/css-tricks/image/upload/f_auto,q_auto/v1568814785/photostream-photos/DSC05621_zgtcco.jpg"
                                        alt="Interesting living room light through a window" loading="lazy">

                                    <div class="artist__name">
                                        <b>Ganesh Thapa</b>
                                        <p>Actor</p>
                                    </div>
                                </a>

                            </li>
                            <li>
                                <img src="https://res.cloudinary.com/css-tricks/image/upload/f_auto,q_auto/v1568814785/photostream-photos/DSC05513_gfbiwi.jpg"
                                    alt="Sara on a red bike" loading="lazy">
                            </li>
                            <li>
                                <img src="https://res.cloudinary.com/css-tricks/image/upload/f_auto,q_auto/v1568814785/photostream-photos/DSC05588_nb0dma.jpg"
                                    alt="XOXO venue in between talks" loading="lazy">
                            </li>
                            <li>
                                <img src="https://res.cloudinary.com/css-tricks/image/upload/f_auto,q_auto/v1568814785/photostream-photos/DSC05459_ziuomy.jpg"
                                    alt="Trees lit by green light during dusk" loading="lazy">
                            </li>
                            <li>
                                <img src="https://res.cloudinary.com/css-tricks/image/upload/f_auto,q_auto/v1568814785/photostream-photos/DSC05586_oj8jfo.jpg"
                                    alt="Portrait of Justin Pervorse" loading="lazy">
                            </li>
                            <li>
                                <img src="https://res.cloudinary.com/css-tricks/image/upload/f_auto,q_auto/v1568814785/photostream-photos/DSC05465_dtkwef.jpg"
                                    alt="Empty bike racks outside a hotel" loading="lazy">
                            </li>
                            <li>
                                <a href="#">
                                    <img src="https://res.cloudinary.com/css-tricks/image/upload/f_auto,q_auto/v1568814785/photostream-photos/DSC05626_ytsf3j.jpg"
                                        alt="Heavy rain on an intersection" loading="lazy">

                                    <div class="artist__name">
                                        <b>Ganesh Thapa</b>
                                        <p>Actor</p>
                                    </div>
                                </a>

                            </li>
                            <li>
                                <img src="https://res.cloudinary.com/css-tricks/image/upload/f_auto,q_auto/v1568814785/photostream-photos/DSC05449_l9kukz.jpg"
                                    alt="Payam Rajabi eating peanut chicken" loading="lazy">
                            </li>
                            <li>
                                <img src="https://res.cloudinary.com/css-tricks/image/upload/f_auto,q_auto/v1568814785/photostream-photos/DSC05544_aczrb9.jpg"
                                    alt="Portland skyline sunset" loading="lazy">
                            </li>
                            <li>
                                <img src="https://res.cloudinary.com/css-tricks/image/upload/f_auto,q_auto/v1568814785/photostream-photos/DSC05447_mvffor.jpg"
                                    alt="Interior at Nong's" loading="lazy">
                            </li>
                            <li>
                                <img src="https://res.cloudinary.com/css-tricks/image/upload/f_auto,q_auto/v1568814784/photostream-photos/DSC05501_yirmq8.jpg"
                                    alt="A kimchi hotdog on a plate" loading="lazy">
                            </li>
                            <li>
                                <img src="https://res.cloudinary.com/css-tricks/image/upload/f_auto,q_auto/v1568814784/photostream-photos/DSC05624_f5b2ud.jpg"
                                    alt="Restaurant window with graffiti saying 'water'" loading="lazy">
                            </li> -->


                        <!--  Adding an empty <li> here so the final photo doesn't stretch like crazy. Try removing it and see what happens!  -->
                        <li></li>
                    </ul>
                </div>

            </div>
        </div>

    </div>

    @include('user.layout.footer')

</body>

</html>
