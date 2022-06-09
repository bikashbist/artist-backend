@include('admin.layout.header')
<div class="about__artist px-5 py-5">

    <div class="container-xxl ">
        <div class="row">

            <div class="col-md-5 ">
                <div class="about__artist--img mr-5">
                    <h1>This Is For User Name & Password ( Form Data)</h1>
                </div>


            </div>
            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}

            </div>
            @endif
            <div class="col-md-12 d-flex flex-wrap">
                @if(count($artForm)>0)
                @foreach($artForm as $artForm)
                <div class="card m-2" style="width: 18rem;">

                    <div class="card-body">
                        <h5 class="card-title fw-bold  fs-3">{{$artForm->name}}</h5>
                        <p class="card-text ">{{$artForm->category}}</p>
                        <p class="card-text text-muted">{{$artForm->description}}</p>
                        <a href="{{url('artist-detail',[$artForm->id])}}" class="btn btn-primary btn-sm">Create Password For Artist</a>
                        <a href="{{url('artist-mail',[$artForm->id])}}" class="btn btn-success btn-sm">Send Mail</a>
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
