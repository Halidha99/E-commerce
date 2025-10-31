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

        .register-container {
            display: flex;
            min-height: 80vh;

            max-height: 90vh;
            overflow: hidden;
            padding-top: 2.5rem;

            box-sizing: border-box;
        }

        /* Image section */
        .image-section {
            flex: 0.9;
            /* Slightly smaller than form */
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
            /* Slightly lighter overlay */
            z-index: 0;
        }

        .image-overlay-text {
            text-align: left;
            max-width: 350px;
            /* Slightly smaller */
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
            /* Reduced padding */
            border-radius: 12px;
            width: 100%;
            max-width: 320px;
            /* Slightly smaller form */
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 0.5s ease-out;
            margin-top: 0.8rem;
        }

        .register-title {
            text-align: center;
            font-size: 1.45rem;
            font-weight: 700;
            margin-bottom: 0.9rem;
        }

        .input-type-label {
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
            /* Slightly smaller input */
            border-radius: 8px;
            border: none;
            outline: none;
            font-size: 0.88rem;
            background: #f6e0b3;
            color: #442200;
            margin-bottom: 0.75rem;
        }

        .password-field {
            position: relative;
        }

        .password-field i {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #442200;
        }

        /* Updated button */
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

        .login-link {
            font-size: 0.85rem;
            color: #442200;
            margin-top: 0.4rem;
            text-align: center;
        }

        .login-link a {
            font-weight: 600;
            color: #442200;
            text-decoration: none;
        }

        .or-divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 0.8rem 0;
            color: #442200;
            font-weight: 600;
        }

        .or-divider::before,
        .or-divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #442200;
        }

        .or-divider::before {
            margin-right: 0.5em;
        }

        .or-divider::after {
            margin-left: 0.5em;
        }

        .social-login {
            display: flex;
            justify-content: center;
            gap: 0.75rem;
        }

        .social-button {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background-color: #6b4a1b;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            transition: 0.3s;
        }

        .social-button:hover {
            background-color: #a0763b;
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
            .register-container {
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

            .image-overlay-text h1 {
                font-size: 1.45rem;
            }

            .image-overlay-text h2 {
                font-size: 0.85rem;
            }

            .image-overlay-text p {
                font-size: 0.78rem;
            }
        }
    </style>

    <div class="register-container">
        <!-- Image Section -->
        <div class="image-section">
            <div class="image-overlay-text">
                <h1>ILLUMINATE YOUR LIFE</h1>
                <h2>FIND THE PERFECT LIGHTING SOLUTION</h2>
                <h1>LUMENA</h1>
                <p>We're here to make your world glow. 💡</p>
            </div>
        </div>

        <!-- Right registration form -->
        <div class="form-section">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="register-title">Register</div>

                <label class="input-type-label" for="name">Name</label>
                <x-text-input id="name" class="transparent-input" type="text" name="name" :value="old('name')" required
                    placeholder="Enter your username" />
                <x-input-error :messages="$errors->get('name')" class="text-black" />

                <label class="input-type-label" for="email">Email</label>
                <x-text-input id="email" class="transparent-input" type="email" name="email" :value="old('email')"
                    required placeholder="Enter your Email" />
                <x-input-error :messages="$errors->get('email')" class="text-black" />

                <label class="input-type-label" for="mobile_number">Contact Number</label>
                <x-text-input id="mobile_number" class="transparent-input" type="tel" name="mobile_number"
                    :value="old('mobile_number')" required placeholder="Enter your contact" />
                <x-input-error :messages="$errors->get('mobile_number')" class="text-black" />

                <label class="input-type-label" for="password">Password</label>
                <div class="password-field">
                    <x-text-input id="password" class="transparent-input" type="password" name="password" required
                        placeholder="Enter your password" />
                    <i class="fa-regular fa-eye" id="togglePassword"></i>
                </div>
                <x-input-error :messages="$errors->get('password')" class="text-black" />

                <p class="login-link">Already Registered? <a href="{{ route('login') }}">Login</a></p>

                <x-primary-button class="primary-button">Register</x-primary-button>

                <div class="or-divider">OR</div>

                <div class="social-login">
                    <a href="#" class="social-button"><i class="fab fa-google"></i></a>
                    <a href="#" class="social-button"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-button"><i class="fab fa-instagram"></i></a>
                </div>
            </form>
        </div>
    </div>

    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const passwordInput = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
            passwordInput.setAttribute("type", type);
            this.classList.toggle("fa-eye-slash");
        });
    </script>
</x-guest-layout>
