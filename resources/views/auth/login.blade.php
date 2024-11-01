<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta username="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- bootstrap --}}
    <link rel="stylesheet" href="{{ asset('assets/bootstrap') }}/css/bootstrap.min.css">

    {{-- font awesome --}}
    <link rel="stylesheet" href="{{ asset('assets/fontawesome') }}/css/all.min.css">

    {{-- style --}}
    <link rel="stylesheet" href="{{ asset('assets/css') }}/login.css">

    <title>Login | Manajemen</title>
    <title></title>
</head>

<body>


    <section class="side">
        <img src="assets/img/login.png" alt="" class="img-side">
    </section>

    <section class="main">
        <div class="login-container shadow">
            <p class="title">LOGIN</p>
            <div class="separator mt-0"></div>
            <p class="welcome-message">Please, provide login credential to proceed and have access to all our services
            </p>

            <form action="" method="post" class="login-form">
                @csrf
                <div class="form-control">
                    <input type="text" placeholder="Username" name="username" required>
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="password" placeholder="Password" name="password" required>
                    <i class="fa-solid fa-lock"></i>
                </div>

                <button class="submit" type="submit">Login</button>
            </form>
        </div>
    </section>
    
</body>

</html>