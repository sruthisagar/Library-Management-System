<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Library Management System</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .center-box {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            
            .form-box {
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                max-width: 400px;
                width: 100%;
            }

            .register-button {
                display: flex;
                justify-content: center;
            }

            .heading {
                display: flex;
                justify-content: center;
            }
        </style>
    </head>
    <body>

        <div class="center-box">
            <div class="form-box">
                <div class="heading mb-3">
                    <h4> User Registration </h4>
                </div>
                <form method="POST" action="{{ route('register.post') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name:</label>
                        <input type="text" id="first_name" name="first_name" class="form-control" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name:</label>
                        <input type="text" id="last_name" name="last_name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="mobile" class="form-label">Mobile Number:</label>
                        <input type="text" id="mobile" name="mobile" class="form-control" required>
                    </div>

                    <!-- <div class="mb-3">
                        <label for="otp" class="form-label">OTP:</label>
                        <input type="text" id="otp" name="otp" class="form-control" required>
                    </div> -->

                    <div class="register-button">
                        <button type="submit" class="btn btn-primary">Sign up</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
