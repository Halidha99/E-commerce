<x-guest-layout>
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: #fefefe;
        }

        .login-container {
            display: flex;
            min-height: 75vh;
            max-height: 90vh;
            overflow: hidden;
            padding-top: 2.5rem;
        }

        /* Image section */
        .image-section {
            flex: 0.9;
            background: url('{{ asset("images/users/background.webp") }}') center/cover no-repeat;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #e5db8c;
            min-height: 75vh;
        }

        .image-section::before {
            content: "";
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.45);
            z-index: 0;
        }

        .image-overlay-text {
            text-align: left;
            max-width: 350px;
            padding: 0.8rem;
            position: relative;
            z-index: 1;
        }

        .image-overlay-text h1,
        .image-overlay-text h2,
        .image-overlay-text p {
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
            margin: 0.2rem 0;
        }

        .image-overlay-text h1 {
            font-size: 1.7rem;
            font-weight: 700;
        }

        .image-overlay-text h2 {
            font-size: 0.95rem;
            font-weight: 500;
        }

        .image-overlay-text p {
            font-size: 0.85rem;
        }

        /* Form section */
        .form-section {
            flex: 1;
            background-color: #eac57a;
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            padding: 2.5rem 1.2rem;
            min-height: 75vh;
        }

        form {
            background: #f2d59c;
            padding: 1.3rem;
            border-radius: 12px;
            width: 100%;
            max-width: 320px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 0.5s ease-out;
            margin-top: 0.8rem;
        }

        .login-title {
            text-align: center;
            font-size: 1.45rem;
            font-weight: 700;
            margin-bottom: 0.9rem;
        }

        .input-label {
            font-size: 0.8rem;
            font-weight: 600;
            color: #442200;
            text-transform: uppercase;
            margin-bottom: 0.2rem;
            display: block;
        }

        .transparent-input {
            width: 100%;
            padding: 0.42rem 0.75rem;
            border-radius: 8px;
            border: none;
            outline: none;
            font-size: 0.88rem;
            background: #f6e0b3;
            color: #442200;
            margin-bottom: 0.75rem;
        }

        .password-container {
            position: relative;
        }

        .password-container i {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #442200;
        }

        .primary-button {
            background-color: #a0763b;
            color: #fff;
            font-weight: 700;
            padding: 0.6rem 1.1rem;
            border-radius: 8px;
            cursor: pointer;
            border: none;
            margin: 1rem 0;
            width: 100%;
            text-align: center;
            display: block;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
            transition: background 0.3s, transform 0.2s;
        }

        .primary-button:hover {
            background-color: #8b5e2c;
            transform: translateY(-2px);
        }

        .remember-me {
            font-size: 0.85rem;
            color: #442200;
            margin: 0.5rem 0;
            display: flex;
            align-items: center;
        }

        .forgot-link {
            font-size: 0.85rem;
            color: #442200;
            margin-top: 0.4rem;
            display: block;
            text-align: center;
        }

        .forgot-link a {
            font-weight: 600;
            color: #442200;
            text-decoration: none;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(12px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive design */
        @media (max-width: 1024px) {
            .login-container {
                flex-direction: column;
            }

            .image-section {
                display: none;
            }

            .form-section {
                background-color: #f2d59c;
                min-height: auto;
                padding: 2rem 1rem;
            }

            form {
                box-shadow: none;
                max-width: 90%;
                padding: 1.4rem;
                margin-top: 0;
            }
        }

        @media (max-width: 480px) {
            .transparent-input {
                padding: 0.38rem 0.7rem;
                font-size: 0.82rem;
            }

            .primary-button {
                padding: 0.5rem 0.9rem;
                font-size: 0.9rem;
            }
        }
    </style>

    <div class="login-container">
        <!-- Image Section -->
        <div class="image-section">
            <div class="image-overlay-text">
                <h1>WELCOME BACK</h1>
                <h2>LOG IN TO YOUR ACCOUNT</h2>
                <p>Access your Lumena account and keep your world glowing 💡</p>
            </div>
        </div>

        <!-- Right login form -->
        <div class="form-section">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="login-title">Login</div>

                <!-- Email -->
                <label class="input-label" for="email">Email</label>
                <x-text-input id="email" class="transparent-input" type="email" name="email" :value="old('email')"
                    required autofocus placeholder="Enter your email" />
                <x-input-error :messages="$errors->get('email')" class="text-black" />

                <!-- Password with eye toggle -->
                <label class="input-label" for="password">Password</label>
                <div class="password-container">
                    <x-text-input id="password" class="transparent-input" type="password" name="password" required
                        placeholder="Enter your password" />
                    <i class="fa-solid fa-eye" id="togglePassword"></i>
                </div>
                <x-input-error :messages="$errors->get('password')" class="text-black" />

                <!-- Remember Me -->
                <label class="remember-me">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2">Remember me</span>
                </label>

                <!-- Forgot Password -->
                @if (Route::has('password.request'))
                    <div class="forgot-link">
                        <a href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    </div>
                @endif

                <!-- Login Button -->
                <x-primary-button class="primary-button">
                    Log In
                </x-primary-button>
            </form>
        </div>
    </div>

    <!-- Password toggle script -->
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</x-guest-layout>
