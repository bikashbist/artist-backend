<!doctype html>
<html lang="en">

@include('user.layout.head')

<body>

    <div class="artist__header">

        <img class="artist__profile__img" src="{{ asset('user-frontend/image/bb.jpg') }}" alt="img">

        <div class="artist__header--nav">

            <div class="art__header px-5">

                <div class="container-fluid ">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="header__logo">
                                <a href="/"> <img src="{{ asset('user-frontend/logo-artist.png') }}" alt="logo"></a>

                            </div>
                        </div>

                        <div class="col-md-12 ">
                            @include('user.layout.nav')
                        </div>
                        <div class="col-md-12 mt-5">
                            <div>
                                <h1>Artist Form</h1>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="signUp px-5 py-5 ">

        <div class="container ">
            <div class="row">
                @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}

                </div>
                @endif
                <form action="{{url('artist-form-store')}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" name="name" id="form6Example1"
                                    class="form-control @error('name') is-invalid @enderror" />
                                <label class="form-label" for="form6Example1">Your name</label>
                                @error('name')
                                <div class="alert alert-danger">
                                    {{ $message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                       


                            <input tyle="text" name="category"
                                class="form-control @error('category') is-invalid @enderror" list="datalistOptions"
                                id="exampleDataList" placeholder="Type to search...">
                            <datalist id="datalistOptions">
                                @if(count($cat)>0)
                                @foreach($cat as $cat)



                                <option value="{{$cat->category}}">


                                    @endforeach
                                    @else
                                    <td>No any category here</td>
                                    @endif

                            </datalist>
                            <label for="exampleDataList" class="form-label">Choose Category</label>
                            @error('category')
                            <div class="alert alert-danger">
                                {{ $message}}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" name="address" id="form6Example1"
                                    class="form-control @error('address') is-invalid @enderror" />
                                <label class="form-label" for="form6Example1">Address</label>
                                @error('address')
                                <div class="alert alert-danger">
                                    {{ $message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="email" name="email" id="form6Example5"
                                    class="form-control @error('email') is-invalid @enderror" />
                                <label class="form-label" for="form6Example5">Email</label>
                                @error('email')
                                <div class="alert alert-danger">
                                    {{ $message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <input type="number" name="phone" id="form6Example6"
                                    class="form-control @error('phone') is-invalid @enderror" />
                                <label class="form-label" for="form6Example6">Phone</label>
                                @error('phone')
                                <div class="alert alert-danger">
                                    {{ $message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="file" name="image" id="form6Example5"
                                    class="form-control @error('image') is-invalid @enderror" />
                                <label class="form-label" for="form6Example5">Payment Slip</label>
                                @error('image')
                                <div class="alert alert-danger">
                                    {{ $message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>



                    <!-- Number input -->
                    <div class="form-outline mb-4">

                    </div>

                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <textarea name="description" class="form-control" id="form6Example7" rows="4"></textarea>
                        <label class="form-label" for="form6Example7">Write About You</label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Submit Your Detail</button>
                </form>





            </div>
        </div>

    </div>



    @include('user.layout.footer')

</body>

</html>
