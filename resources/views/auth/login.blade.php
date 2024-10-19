<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/bootstrap.js'])
</head>

<body>
    <div class="m-5">
        <div class="fs-2 fw-bold">Login</div>
        <hr>
        <form>
            <div class="mb-3">
                <label for="emailInput" class="form-label">Alamat Email</label>
                <input type="email" class="form-control" id="emailInput" aria-describedby="">
            </div>
            <div class="mb-3">
                <label for="passwordInput" class="form-label">Sandi</label>
                <input type="password" class="form-control" id="passwordInput">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="showPassword">
                <label class="form-check-label" for="showPassword">Tampilkan Password</label>
            </div>
            <button type="submit" class="btn btn-primary">Masuk</button>
        </form>
    </div>
</body>

</html>
