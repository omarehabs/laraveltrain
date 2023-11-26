<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Task Manager</title>
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Kdam+Thmor+Pro&display=swap"
        rel="stylesheet">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Bootstrap --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    {{-- Custom Css File --}}
    {{-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="my-5 container text-center ">

        <div class=" font-weight-light m-4 py-4 text-center">
            <h2> laravel Todo </h2>

            <a class="btn btn-primary mt-6" href="{{ '/create' }}">Add new Todo</a>


            <ul class="list-group mt-9">
                @foreach ($not_finished as $not_finished_todo)
                    <li class="list-group-item ">
                        <p>{{ $not_finished_todo->todo }} </p>
                        {{-- <a href="" class="btn btn-danger ms-auto" type="button">delete</a> --}}

                        <form action={{ '/delete/' . $not_finished_todo->id }} method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger ms-auto " /> delete</button>
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </form>

                        <form action={{ '/finish/' . $not_finished_todo->id }} method="POST">
                            @csrf
                            @method('PUT')

                            <button type="submit" class="btn btn-success ms-auto " /> finished</button>

                        </form>


                        {{-- <button href="" type="button" class="btn btn-success ms-auto">finished</a> --}}
                    </li>
                @endforeach


            </ul>

            <br />
            <div class="alert alert-secondary mt-2 text-center">
                <h2> Finished Tasks </h2>
            </div>
            <ul class="list-group">
                @foreach ($finished as $finished_todo)
                    <li class="list-group-item mb-8"> {{ $finished_todo->todo }}
                    </li>
                @endforeach
            </ul>

            </section>
        </div>
    </div>
</body>

</html>
