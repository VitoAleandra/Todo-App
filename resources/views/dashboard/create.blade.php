@extends('dashboard.layout')
@section('content')
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
        <title >Todo App</title>
    </head>

    <body>
        <div class="container content" style="margin-top: 100px;">
            <form id="create-form" style="outline-color: white; --bs-bg-opacity: 0; border-radius:15px" action="{{ route('store') }}" method="POST">
                @csrf
                @if ($errors->any())
                    <div class="container d-flex align-items-center alert alert-danger" style="border-radius: 15px">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h3 style="margin-left: 50px">Create Todo!</h3>

                <fieldset>
                    <label class="text-dark" for="">Title</label>
                    <input  class="bg-white text-dark" style="border-color: black; border-radius: 15px" placeholder="title of todo" type="text" name="title">
                </fieldset>
                <br>
                <fieldset>
                    <label class="text-dark" for="">Target Date</label>
                    <input class="bg-white text-dark" style="border-color: black; border-radius: 15px" placeholder="Target Date" type="date" name="date">
                </fieldset>
                <br>
                <fieldset>
                    <label class="text-dark" for="">Description</label>
                    <textarea class="bg-white text-dark" style="outlinborder-color: black; border-radius: 15px " name="description" placeholder="Type your descriptions here..." tabindex="5"></textarea>
                </fieldset>
                <fieldset>
                    <button type="submit" style="outline-style: solid; outline-color: rgb(0, 0, 0); outline-width: 1px;" id="contactus-submit"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="text-dark bi bi-send-plus" viewBox="0 0 16 16">
                        <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855a.75.75 0 0 0-.124 1.329l4.995 3.178 1.531 2.406a.5.5 0 0 0 .844-.536L6.637 10.07l7.494-7.494-1.895 4.738a.5.5 0 1 0 .928.372l2.8-7Zm-2.54 1.183L5.93 9.363 1.591 6.602l11.833-4.733Z"/>
                        <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z"/>
                      </svg></button>
                </fieldset>
                <fieldset>
                    <a href="/todo/" class="text-dark btn-cancel btn-lg btn">Cancel</a>
                </fieldset>
            </form>
        </div>
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
