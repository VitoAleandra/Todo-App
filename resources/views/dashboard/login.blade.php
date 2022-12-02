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
    <div class="ff-nv card border-0 rounded-0" >
        <form method="POST" class="user" action="{{ route('login.auth') }}">
            {{-- mengambil dan mengirim data input ke controller yg nantinya diambil oleh request $request --}}
            @csrf
            @if ($errors->any())
            <script>
                Swal.fire(
                    'Username Tidak Tersedia!',
                    'please create username',
                    'warning'
                )
            </script>
            @endif
            @if (session('succes'))
                <div class="alert alert-success">
                    {{ session('succes') }}
                </div>
            @endif

            @if (session('notAllowed'))
                <script>
                    Swal.fire(
                    'Login dulu ngab!',
                    'bapa lu hamil',
                    'error'
                    )
                </script>
            @endif
            <div class="container d-flex align-items-center justify-content-center vh-100">
                <div class="form-control mt-3 bg-dark border-0 w-50" style=" --bs-bg-opacity: 0;">
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
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <input placeholder="Username" type="text" class="opacity-75 bg-dark text-white form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" style="border:none; border-radius: 15px" name="username">
                        <div id="emailHelp" class="opacity-75 form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"></label>
                        <input type="password" placeholder="Password" class="opacity-75 bg-dark text-white form-control" id="exampleInputPassword1" style="border:none; border-radius: 15px" name="password">
                        <div id="emailHelp" class="opacity-50 form-text"></div>
                    </div>
                    <div class="mb-3 form-check">
                        <a class="form-check-label text-white" style="margin-left: 520px" for="exampleCheck1"
                            href="/register">Register!</a>
                    </div>
                    <div class="text-center">
                        <button type="submit" style="border-radius: 25px" class="px-5 btn btn-light login-vito mb-4">Login</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
