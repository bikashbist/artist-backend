@include('admin.layout.header')
<div class="about__artist px-5 py-5">

    <div class="container-xxl ">
        <div class="row">

            <div class="col-md-5 ">
                <div class="about__artist--img mr-5">

                </div>


            </div>
            <h1>List Artist</h1>
            @if(count($artist)>0)
                @foreach($artist as $artist)
                <div class="card m-2" style="width: 18rem;">

                    <div class="card-body">
                        <h5 class="card-title fw-bold  fs-3">{{$artist->name}}</h5>
                        <p class="card-text ">{{$artist->category}}</p>
                      
                        <a href="{{url('new-artist-detail',[$artist->id])}}" class="btn btn-primary btn-sm">Assign Artist</a>
                    </div>
                </div>
                @endforeach
                @else
                <td>No any category here</td>
                @endif
        

                
                <!-- <div class="card m-2" style="width: 18rem;">

                    <div class="card-body">
                        <h5 class="card-title">Kanchan Kaudhary</h5>
                        <p class="card-text text-muted">Some quick example text to build on the Kanchan Kaudhary and
                            make up the
                            bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary btn-sm">View</a>
                    </div>
                </div> -->

            </div>




        </div>
    </div>

</div>


@include('admin.layout.footer')
