@include('admin.layout.header')
<div class="about__artist px-5 py-5">

    <div class="container">

        <div class="row">


            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        @if(count($profile)>0)
                        @foreach($profile->take(1) as $profile)




                        <img src="{{Storage::url($profile->image)}} " class="img-fluid rounded-start"
                            alt="profile image">


                        @endforeach
                        @else
                        <td>Upload Profile </td>
                        @endif

                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$artistDetail->name}}</h5>

                            <p class="card-text">{{$artistDetail->category}}</p>

                            <p class="card-text">{{$artistDetail->email}}</p>
                            <p class="card-text">{{$artistDetail->detail}}</p>
                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row g-0">



                    <div class="col-md-8">
                        <div class="card-body">
                            <h1>Location</h1>
                            @if(count($address)>0)
                            @foreach($address as $address)
                            <p class="card-text">{{$address->provinceId}} , {{$address->districtId}}</p>


                            @endforeach
                            @else
                            <td>No any address here</td>
                            @endif




                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-12 card-body">
                        <h1>Gallery Images</h1>
                    </div>

                    @if(count($gallery)>0)
                    @foreach($gallery as $gallery)
                    <div class="col-md-4">
                        <div class="card-body">


                            <img src="{{Storage::url($gallery->image)}}" alt="images">





                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        </div>
                    </div>
                    @endforeach
                    @else
                    <td>No any images here</td>
                    @endif
                </div>
            </div>



        </div>
        <div class="col-md-4">
            <h1>Cover Images</h1>
            @if(count($coverImage)>0)
            @foreach($coverImage->take(1) as $coverImage)




            <img src="{{Storage::url($coverImage->image)}} " class="img-fluid rounded-start" alt="coverImage image">


            @endforeach
            @else
            <td>Upload coverImage </td>
            @endif

        </div>

    </div>

</div>


@include('admin.layout.footer')
