@include('admin.layout.header')
<div class="about__artist px-5 py-5">

    <div class="container-xxl ">
        <div class="row">

            <div class="col-md-5 ">
                <div class="about__artist--img mr-5">

                </div>


            </div>
            <h1>Send Mail</h1>
            @if(count($mail)>0)
            @foreach($mail as $mail)
            <div class="card m-2" >

                <div class="card-body">
                    <h5 class="card-title fw-bold  fs-3">{{$mail->email}}</h5>
                    <p class="card-text ">{{$mail->password}}</p>

                </div>
                <form class="row" action="{{url('/sendmail', $mail->id)}}" method="POST">
                    @csrf
                <div class="col-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">Mail Heading</label>
                        <input type="text" name="heading" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control"  value="{{$mail->email}}">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="text" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="exampleInputPassword1" class="form-label">link Title</label>
                        <input type="text" name="linkTitle" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="exampleInputPassword1" class="form-label">Login Link</label>
                        <input type="url" name="link" class="form-control" id="exampleInputPassword1">
                    </div>
                    
                    <div class="col-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">Mail Footer</label>
                        <input type="text" name="footer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="col-12 mb-3">
                    <button type="submit" class="btn btn-primary bg-primary" style="display:block;">Submit</button>
                    </div>
                   
                </form>
            </div>
            @endforeach
            @else
            <td>No any category here</td>
            @endif





        </div>




    </div>
</div>

</div>


@include('admin.layout.footer')
