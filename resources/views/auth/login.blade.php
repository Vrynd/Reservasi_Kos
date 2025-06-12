<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/styleLogin.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
    @include('sweetalert::alert')
    <div class="container" id="container" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
        <div class="form-container sign-up">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <h1>Buat Akun</h1>
                <input type="text" placeholder="Name" name="name" required>
                <input type="email" placeholder="Email" name="email" required>

                <!-- Password Field with Eye Icon -->
                <div class="password-container">
                    <input type="password" placeholder="Password" name="password" id="registerPassword" required>
                    <i class="ri-eye-line" id="toggleRegisterPassword"></i>
                </div>
                <button type="submit">Daftar</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="{{ route('login.authenticate') }}" method="POST">
                @csrf
                <h1>Masuk</h1>
                <input type="email" placeholder="Email" name="email" value="{{ old('email') }}">
                <!-- Password Field with Eye Icon -->
                <div class="password-container">
                    <input type="password" placeholder="Password" name="password" id="loginPassword">
                    <i class="ri-eye-line" id="toggleLoginPassword"></i>
                </div>
                <button>Masuk</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Selamat Datang kembali!</h1>
                    <p>Masukkan detail pribadi Anda untuk menggunakan semua fitur situs</p>
                    <button class="hidden" id="login">Masuk</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hallo, Semua!</h1>
                    <p>Silahkan login terlebih dahulu untuk menggunakan semua fitur situs ini</p>
                    <button class="hidden" id="register">Daftar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/scriptLogin.js"></script>
    <script>
        // Toggle Password Visibility for Register
        document.getElementById('toggleRegisterPassword').addEventListener('click', function() {
            const passwordField = document.getElementById('registerPassword');
            const icon = this;
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                icon.classList.replace('ri-eye-line', 'ri-eye-off-line');
            } else {
                passwordField.type = 'password';
                icon.classList.replace('ri-eye-off-line', 'ri-eye-line');
            }
        });
        // Toggle Password Visibility for Login
        document.getElementById('toggleLoginPassword').addEventListener('click', function() {
            const passwordField = document.getElementById('loginPassword');
            const icon = this;
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                icon.classList.replace('ri-eye-line', 'ri-eye-off-line');
            } else {
                passwordField.type = 'password';
                icon.classList.replace('ri-eye-off-line', 'ri-eye-line');
            }
        });
    </script>
    <script>
        AOS.init();
    </script>
</body>
</html>
