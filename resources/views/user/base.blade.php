
<!doctype html>
<html lang="en">

@include('user.layout.head')

<body>

    <div class="header px-5">

        <div class="container-fluid  ">
            <div class="row">

                <div class="col-md-12">
                    <div class="header__logo">
                        <a href="index.html"> <img src=" {{ asset('user-frontend/logo-artist.png') }}" alt="logo"></a>
                       
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
                            <div class="text">Find Artist</div>
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

                        <h3>Search and book the best artist for your Event</h3>

                        <form action="#">

                            <div class="d-flex justify-content-center pt-4">

                                <div class="slect">
                                    <select class="select-search" aria-label="Default select example">
                                        <option selected>Choose Category</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <div class="search__person">
                                    <input type="text" placeholder="Search..">
                                </div>

                            </div>

                            <div class="text-left">
                                <button type="submit">Search Artist</button>
                            </div>

                        </form>

                    </div>

                </div>

                <div class="col-md-12 mt-5">
                    <ul>
                        <li>

                            <a href="{{ url('artist-detail') }}">
                                 <img src="https://res.cloudinary.com/css-tricks/image/upload/f_auto,q_auto/v1568814785/photostream-photos/DSC05466_kwlv0n.jpg"
                                alt="A Toyota Previa covered in graffiti" loading="lazy">

                                <div class="artist__name">
                                    <b>Ganesh Thapa</b>
                                    <p>Actor</p>
                                </div>
                            </a>
                                  
                        </li>
                        <li>

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
                        </li>


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