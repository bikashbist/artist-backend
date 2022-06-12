@include('admin.layout.header')
<div class="about__artist px-5 py-5">

    <div class="container-xxl ">
        <div class="row">

            <div class="col-md-5 ">
                <div class="about__artist--img mr-5">

                </div>


            </div>
            <h1>List Artist</h1>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Artist Type</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @if(count($artist)>0)
                    @foreach($artist as $artist)

                    <tr>
                        <th scope="row">{{$artist->name}}</th>
                        <td>{{$artist->category}}</td>
                        <td> <a href="{{url('new-artist-detail',[$artist->id])}}" class="btn btn-primary btn-sm">Assign
                                Artist</a></td>

                    </tr>
                    @endforeach
                    @else
                    <td>No any category here</td>
                    @endif


                </tbody>
            </table>










            <div class="col-md-12">
                User Dashboard Artist List
            </div>

            @if(Session::has('message'))

            <div class="alert alert-success">

                {{Session::get('message')}}

            </div>

            

            @endif



            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Artist Type</th>
                        <th scope="col">Artist Email</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @if(count($artistview)>0)
                    @foreach($artistview as $artistview)

                    <tr>
                        <th scope="row">{{$artistview->name}}</th>
                        <td>{{$artistview->category}}</td>
                        <td>{{$artistview->email}}</td>
                        <td> <a href="{{url('user-artist-delete',[$artistview->id])}}" class="btn btn-danger btn-sm">Delete</a></td>

                    </tr>
                    @endforeach
                    @else
                    <td>No any category here</td>
                    @endif


                </tbody>
            </table>
        </div>

    </div>
</div>

</div>


@include('admin.layout.footer')
