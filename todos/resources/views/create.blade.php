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
    <div class="alert alert-primary text-center
     py-3 my-5 container w-50 fs-4">
        Add New Employee
    </div>

    <section class="my-5 container w-50 mx-auto py-5">
        <div class="alert alert-secondary m-4 py-3 text-center">
            <h2> Create New Todo </h2>
        </div>
        <form action="/store" method="post">
            @csrf
            <div class="form-group my-2">
                <label for="todo">Todo Task</label>
                <input type="text" class="form-control py-2" id="todo" name="todo">
            </div>

            <div class="form-group my-2">
                <label for="finished">finished</label>
                <input type="checkbox" name="finished" id="finished">
            </div>
            <input type="submit" value="Add Todo" class="btn btn-primary my-2" name="add_todo">
        </form>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"
        integrity="sha512-TPh2Oxlg1zp+kz3nFA0C5vVC6leG/6mm1z9+mA81MI5eaUVqasPLO8Cuk4gMF4gUfP5etR73rgU/8PNMsSesoQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"
        integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
