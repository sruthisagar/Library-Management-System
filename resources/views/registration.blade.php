<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

        <form method="POST" action="{{ route('register.post') }}">
            @csrf

            <div>
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required autofocus>
            </div>

            <div>
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div>
                <label for="mobile">Mobile Number:</label>
                <input type="text" id="mobile" name="mobile" required>
            </div>

            <div>
                <label for="otp">OTP:</label>
                <input type="text" id="otp" name="otp" required>
            </div>

            <div>
                <button type="submit">Register</button>
            </div>
        </form>
    </body>
<html>