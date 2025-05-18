<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login Interaktif</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #fff0f5;
            /* Pink yang lebih cerah */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-container {
            background-color: white;
            width: 400px;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.7);
            /* Shadow pink */
        }

        .login-title {
            color: #ff1493;
            /* Deep pink yang lebih cerah */
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: 600;
        }

        .input-group {
            position: relative;
            margin-bottom: 25px;
        }

        .input-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #ff69b4;
            /* Hot pink */
            font-size: 18px;
        }

        .input-field {
            width: 100%;
            padding: 15px 15px 15px 45px;
            border: 2px solid #ffb6c1;
            /* Light pink border */
            border-radius: 10px;
            font-size: 16px;
            outline: none;
            transition: all 0.3s;
            background-color: #fffafa;
            /* Snow white */
        }

        .input-field:focus {
            border-color: #ff1493;
            /* Deep pink */
            box-shadow: 0 0 0 3px rgba(255, 20, 147, 0.3);
        }

        .input-field::placeholder {
            color: #ffb6c1;
            /* Light pink */
        }

        .login-button {
            width: 100%;
            padding: 15px;
            background: linear-gradient(45deg, #ff1493, #ff69b4);
            /* Gradient deep pink to hot pink */
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 10px;
        }

        .login-button:hover {
            background: linear-gradient(45deg, #ff69b4, #ff1493);
            /* Gradient terbalik */
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 105, 180, 0.4);
        }

        .forgot-password {
            text-align: center;
            margin-top: 20px;
        }

        .forgot-password a {
            color: #ff69b4;
            /* Hot pink */
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s;
        }

        .forgot-password a:hover {
            text-decoration: underline;
            color: #ff1493;
            /* Deep pink */
        }

        .signup-link {
            text-align: center;
            margin-top: 25px;
            font-size: 14px;
            color: #666;
        }

        .signup-link a {
            color: #ff1493;
            /* Deep pink */
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
     <div class="login-container">
        <h1 class="login-title">Registrasi</h1>

        <form action="{{ route('Registrasi') }}" method="POST">
            @csrf
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" class="input-field @error('name') is-invalid @enderror " placeholder="Username" name="name" value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" class="input-field @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" class="input-field @error('password') is-invalid @enderror" placeholder="Password" name="password">
                @error('password')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" class="input-field" placeholder="Konfirmasi Password" name="password_confirmation">
            </div>

            <button type="submit" class="login-button">Registrasi</button>

            <div class="signup-link">
                Sudah punya akun? <a href="/login">Masuk</a>
            </div>
        </form>
    </div>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
