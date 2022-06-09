@include('admin.layout.header')
<div class="about__artist px-5 py-5">

    <div class="container">

        <div class="row">

            @if(Session::has('message'))

            <div class="alert alert-success">

                {{Session::get('message')}}

            </div>

            @endif
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{Storage::url($artForm->image)}} " class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$artForm->name}}</h5>
                            <p class="card-text">{{$artForm->phone}}</p>
                            <p class="card-text">{{$artForm->category}}</p>
                            <p class="card-text">{{$artForm->address}}</p>
                            <p class="card-text">{{$artForm->email}}</p>
                            <p class="card-text">{{$artForm->description}}</p>
                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        </div>
                    </div>
                </div>
            </div>

            <h2>Create Artist </h2>

            <div class="col-md-12 mt-4">


                <form action="{{url('add-artist')}} " method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        
                        <div class="col-4" hidden>
                            <div class="form-outline">
                                <input type="text" name="usertype" id="form6Example1" class="form-control" value="2" />
                                <label class="form-label" for="form6Example1">User Type</label>
                            </div>

                        </div>

                        <div class="col-4" hidden>
                            <div class="form-outline">
                                <input type="text" name="artist_id" id="form6Example1" class="form-control"
                                    value="{{$artForm->id}}" />
                                <label class="form-label" for="form6Example1">Artist Id</label>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-outline">
                                <input type="text" name="name" id="form6Example1" class="form-control"
                                    value="{{$artForm->name}}" />
                                <label class="form-label" for="form6Example1">Artist Name</label>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-outline">
                                <textarea name="detail" class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea">{{$artForm->description}}</textarea>
                                <label for="floatingTextarea">Comments</label>
                            </div>
                        </div>

                        <div class="col-4" hidden>
                            <div class="form-outline">
                                <input type="text" name="category" id="form6Example1" class="form-control"
                                    value="{{$artForm->category}}" />
                                <label class="form-label" for="form6Example1">Artist Category</label>
                            </div>

                        </div>
                        <div class="col-4">
                            <div class="form-outline">
                                <input type="text" name="email" id="form6Example1" class="form-control"
                                    value="{{$artForm->email}}" />
                                <label class="form-label" for="form6Example1">Artist Email</label>
                            </div>

                        </div>
                        <div class="col-4">
                            <div class="form-outline">
                                <input type="password" name="password" id="form6Example1" class="form-control" />
                                <label class="form-label" for="form6Example1">Password</label>
                            </div>

                        </div>

                        <div class="col-4">
                            <div class="form-outline">
                                <button type="submit" class="btn btn-primary bg-primary">Create Artist</button>
                            </div>
                        </div>
                      
                    </div>

                </form>

            </div>

        </div>

    </div>

</div>


@include('admin.layout.footer')
