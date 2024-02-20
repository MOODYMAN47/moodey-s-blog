{{-- login.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('../../css/logsin.css') }}" rel="stylesheet" />
    <style>
        .error-message {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}" onsubmit="return validateForm()">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <span id="email-error" class="error-message" style="display: none;">Email is required</span>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <span id="password-error" class="error-message" style="display: none;">Password is required</span>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
    <p>Don't have an account? <a href="{{ route('register') }}">Sign up</a></p>

    <script>
        function validateForm() {
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var emailError = document.getElementById('email-error');
            var passwordError = document.getElementById('password-error');

            if (email.trim() === '') {
                emailError.style.display = 'block';
                return false;
            } else {
                emailError.style.display = 'none';
            }

            if (password.trim() === '') {
                passwordError.style.display = 'block';
                return false;
            } else {
                passwordError.style.display = 'none';
            }

            return true;
        }
    </script>
</body>
</html>



