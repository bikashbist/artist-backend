@include('admin.layout.header')
<div class="about__artist px-5 py-5">

    <div class="container ">
        <div class="row">
        @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}

            </div>
            @endif

            <form action="{{url('category-store')}} " method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" name="category" id="form6Example1" class="form-control" />
                            <label class="form-label" for="form6Example1">Add Category</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <button type="submit" class="btn btn-primary bg-primary">Submit</button>
                        </div>
                    </div>
                </div>

            </form>

            <h2>Category List</h2>

            <div class="col-md-12 mt-4">

                <table class="table table-bordered">
                    <thead>

                        <tr>

                            <th scope="col">Name OF The Category</th>
                            <th scope="col">Edit Category</th>

                        </tr>

                    </thead>
                    <tbody>
                    @if(count($cat)>0)
                    @foreach($cat as $cat)
                    <tr>
             
                        <td>{{$cat->category}}</td>
                       
                      
                     
                        <td><a href="{{URL('category-edit',[$cat->id])}}">
                                <button class="btn btn-success btn-sm">Edit</button>
                                </a> </td>
                     
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
