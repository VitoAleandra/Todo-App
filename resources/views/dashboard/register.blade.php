@extends('dashboard.layout')
@section('content')
    <style>
         .card {
            background-image: url('https://wallpaperaccess.com/full/1216364.jpg');
            background-size: cover; 
        }

        .bayangan {
            box-shadow: rgba(19, 17, 17, 0.514) 4px 4px 4px;
        }
    </style>
    <div class="ff-nv card border-0 rounded-0 ">
        <form method="POST" action="{{ route('register-input') }}">
            @if ($errors->any())
                <div class="container d-flex align-items-center alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="container d-flex align-items-center justify-content-center vh-100">
                <div class="form-control mt-3 bg-dark border-0 w-50" style="--bs-bg-opacity: 0.0; ">
                    @csrf
                    <div class="text-center">
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="text-white bi bi-journal-richtext" viewBox="0 0 16 16">
                                <path d="M7.5 3.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm-.861 1.542 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047L11 4.75V7a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 7v-.5s1.54-1.274 1.639-1.208zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                              </svg>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="text-white form-label">Nama Lengkap</label>
                        <input type="name" class="bg-dark opacity-75 text-white form-control" id="exampleInputName"
                            style="border:none; border-radius: 15px" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="text-white form-label">Email</label>
                        <input type="email" class="bg-dark opacity-75 text-white form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" style="border:none; border-radius: 15px" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="text-white form-label">Username</label>
                        <input type="username" class="bg-dark opacity-75 text-white form-control" id="exampleInputusername1"
                            aria-describedby="usernameHelp" style="border:none; border-radius: 15px" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="text-white form-label">Buat Password</label>
                        <input type="password" class="bg-dark opacity-75 text-white form-control" id="exampleInputusername1"
                            aria-describedby="usernameHelp" style="border:none; border-radius: 15px" name="password">
                    </div>
                    <div class="mb-3 form-check">
                        <a class="form-check-label text-white" style="margin-left: 470px" for="exampleCheck1" href="/">I have
                            Acount</a>
                    </div>
                    <div class="text-center">
                        <button type="submit" style="border-radius: 25px" class="px-5 btn btn-light mb-4">Register</button>
                    </div>
        </form>
    </div>
    </div>
    </div>
@endsection
