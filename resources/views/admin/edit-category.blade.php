@include('admin.layout.header')
<div class="about__artist px-5 py-5">

    <div class="container ">
        <div class="row">
            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}

            </div>
            @endif
            <form action="{{url('updateCategory', [$editCategory->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{method_field('PUT')}}
                <div class="row card-body">
                    <div class="col-12 form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="category" class="form-control @error('category') is-invalid @enderror"
                            id="exampleInputEmail1" value="{{$editCategory->category}}">
                        @error('category')
                        <div class="alert alert-danger">
                            {{ $message}}
                        </div>
                        @enderror
                    </div>




                </div>
                <!-- /.card-body -->

                <div class="card-footer     my-4 ">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <br>
                <br>

            </form>
        </div>

    </div>

</div>


@include('admin.layout.footer')
