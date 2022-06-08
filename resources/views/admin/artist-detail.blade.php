@include('admin.layout.header')
<div class="about__artist px-5 py-5">

    <div class="container">

        <div class="row">


            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{Storage::url($artistDetail->image)}} " class="img-fluid rounded-start" alt="profile image">
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

    </div>

</div>


@include('admin.layout.footer')
