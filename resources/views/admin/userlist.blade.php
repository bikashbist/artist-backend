@include('admin.layout.header')
<div class="about__artist px-5 py-5">

    <div class="container">

        <div class="row">

            @if(Session::has('message'))

            <div class="alert alert-success">

                {{Session::get('message')}}

            </div>

            @endif
            <h2>All Artist List </h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Email</th>
                        <th scope="col">Send Email</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($usersArtist)>0)
                    @foreach($usersArtist as $usersArtist)



                    <tr>
                    <th scope="row">{{$usersArtist->id}}</th>
                        <th >{{$usersArtist->name}}</th>
                        <td>{{$usersArtist->category}}</td>
                        <td>{{$usersArtist->email}}</td>
                        <td><a href="#" class="btn btn-success btn-sm">Send</a></td>
                    </tr>

                    @endforeach
                    @else
                    <td>No any images here</td>
                    @endif


                </tbody>
            </table>






        </div>

    </div>

</div>


@include('admin.layout.footer')
