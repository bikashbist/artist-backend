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
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Artist Type</th>
                        <th scope="col">Create Password</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @if(count($artForm)>0)
                    @foreach($artForm as $artForm)

                    <tr>
                        <th scope="row"> <a href="{{url('artist-detail',[$artForm->id])}}" >{{$artForm->name}}</a>     </th>
                        <td>{{$artForm->category}}</td>
                        <td> <a href="{{url('artist-detail',[$artForm->id])}}" class="btn btn-primary btn-sm">Create Password For Artist</a></td>
                     
                        <td> <a href="{{url('artist-mail',[$artForm->id])}}" class="btn btn-success btn-sm mt-3">Send Mail</a></td>

                    </tr>
                    @endforeach
                    @else
                    <td>No any category here</td>
                    @endif


                </tbody>
            </table>








          


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
