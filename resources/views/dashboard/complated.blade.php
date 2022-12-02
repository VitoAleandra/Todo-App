@extends('dashboard.layout')
@section('content')
    @if (session('notAllowed'))
        <script>
            Swal.fire(
                'Udah Login Ngab!',
                'masa ga inget?',
                'warning'
            )
        </script>
    @endif

        
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
            integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="assets/css/main.css">
        <title>Todo App</title>
    </head>

    <body>
        <div class="wrapper" style="margin-auto">
            @if (Session::get('succesAdd'))
            <script>
                Swal.fire(
                    'Todo Berhasil Ditambah!',
                    'uhuuy',
                    'success'
                )
            </script>
        @endif
            <div class="d-flex align-items-start justify-content-between" style="border-radius: 15px">
                <div class="d-flex flex-column">
                    <div class="text-dark h2">My Todo's</div>
                    <p class="text-dark text-justify">
                        Here's a list of activities you have to do
                    </p>
                    <span>
                        <a href="/create" style="" class="text-info"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                          </svg> Add New Todo </a>
                        <a class="text-dark" style="margin-left: 230px" href="/todo"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                          </svg>UnCompleted</a> 
                    </span>
                    <br>
                </div>
                <div class="mb-3 text-dark info btn ml-md-4 ml-0" >
                    <a class="text-dark fas fa-info" style="margin-left: -33px" title="Info"></a>
                </div>
            </div>
            <div class="mb-3 work border-bottom ">
                <div class="d-flex align-items-center py-1 ">
                    <div>
                        <span class="text-dark fas fa-comment btn"></span>
                    </div>
                    <div class="text-dark">{{$todo->count()}} todos</div>
                    <button class="ml-auto btn  text-dark fas fa-angle-down" type="button" data-toggle="collapse"
                        data-target="#comments" aria-expanded="false" aria-controls="comments"></button>
                </div>
            </div>

            @foreach ($todo as $items)
                <div class="comment d-flex align-items-start justify-content-between">
                    <div class="mr-3">
                        <label class="option">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="d-flex flex-column w-75">
                        {{-- menampilkan data dinamis/data yg diambil dari db pada blade harus menggunakan {{}} --}}
                            {{ $items['title'] }}
                        <p>{{ $items['description'] }} </p>
                        <p class="text-dark">{{ $items['status'] == 1 ? 'completed' : 'On-Procces' }} <span
                                class="date">{{ \Carbon\Carbon::parse($items['done_time'])->format(' j F, Y') }}</span></p>
                                <br>
                                <a href="{{route('delete', $items->id) }}" class="btn text-dark" style="outline-color: rgb(0, 0, 0); outline-style: solid; outline-width:1px; border-radius: 15px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-dark bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                  </svg>
                                </a>
                    </div>
                    <div class="ml-auto">
                        <a href ="{{route('edit', $items->id)}}"class="btn" style="border-radius: 15px;"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="text-dark bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg></a>
                    </div>
                </div>
                @endforeach

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
            integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
        </script>
    </body>
    </html>
@endsection
