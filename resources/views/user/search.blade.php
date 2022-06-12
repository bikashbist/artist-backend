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
    <div class="search px-5 py-5">

        <div class="container-fluid  ">
            <div class="row">



                <div class="col-md-12 mt-5">
                    <ul>


                        @if(count($artist)>0)
                        @foreach($artist as $artist)

                        <li>

                            <a href=" {{url('artist-detail-artist',[$artist->id])}}">


                                <img src="{{Storage::url($artist->image)}}" alt="A Toyota Previa covered in graffiti"
                                    loading="lazy">

                                <div class="artist__name">
                                    <b>{{$artist->name}}</b>
                                    <p>{{$artist->category}}</p>
                                </div>
                            </a>

                        </li>


                        @endforeach
                        @else
                        <td>No any category here</td>
                        @endif

                        <li></li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
    @include('user.layout.footer')

</body>

</html>
