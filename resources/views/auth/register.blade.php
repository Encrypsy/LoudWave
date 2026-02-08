<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - LoudWave</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, var(--darker) 0%, var(--dark) 100%);
            overflow-x: hidden;
        }

        :root {
            --primary: #8A2BE2;
            --secondary: #FF6B6B;
            --accent: #4ECDC4;
            --dark: #1A1A2E;
            --darker: #0F0F1B;
            --light: #F8F9FA;
            --text-light: rgba(255, 255, 255, 0.9);
            --text-muted: rgba(255, 255, 255, 0.6);
        }

        .container {
            display: flex;
            min-height: 100vh;
            width: 100%;
            position: relative;
        }

        /* Animated Background */
        .bg-animation {
            position: fixed;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
            pointer-events: none;
        }

        .floating-element {
            position: absolute;
            border-radius: 50%;
            background: radial-gradient(circle, var(--primary), transparent);
            opacity: 0.1;
            animation: float 15s ease-in-out infinite;
        }

        .floating-element:nth-child(1) {
            width: min(300px, 30vw);
            height: min(300px, 30vw);
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            width: min(200px, 20vw);
            height: min(200px, 20vw);
            top: 60%;
            left: 80%;
            background: radial-gradient(circle, var(--secondary), transparent);
            animation-delay: 5s;
        }

        .floating-element:nth-child(3) {
            width: min(250px, 25vw);
            height: min(250px, 25vw);
            top: 80%;
            left: 20%;
            background: radial-gradient(circle, var(--accent), transparent);
            animation-delay: 10s;
        }

        @keyframes float {
            0%, 100% {
                transform: translate(0, 0) rotate(0deg);
            }
            33% {
                transform: translate(100px, -50px) rotate(120deg);
            }
            66% {
                transform: translate(-50px, 100px) rotate(240deg);
            }
        }

        /* Music Notes Animation */
        .music-notes {
            position: fixed;
            font-size: clamp(18px, 2vw, 24px);
            opacity: 0.3;
            animation: noteFloat 8s linear infinite;
            pointer-events: none;
        }

        .note1 { top: 15%; left: 20%; animation-delay: 0s; }
        .note2 { top: 70%; left: 85%; animation-delay: 2s; }
        .note3 { top: 85%; left: 25%; animation-delay: 4s; }
        .note4 { top: 30%; left: 75%; animation-delay: 6s; }
        .note5 { top: 50%; left: 10%; animation-delay: 8s; }

        @keyframes noteFloat {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 0.3;
            }
            90% {
                opacity: 0.3;
            }
            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }

        /* Left Side - Brand Section */
        .left-side {
            flex: 1;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: clamp(30px, 5vw, 60px);
            min-height: 100vh;
        }

        .left-side::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 30%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(255, 255, 255, 0.05) 0%, transparent 50%);
        }

        .brand-content {
            position: relative;
            z-index: 2;
            color: white;
            text-align: center;
            max-width: min(500px, 90vw);
            width: 100%;
        }

        .logo-section {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: clamp(10px, 2vw, 15px);
            margin-bottom: clamp(30px, 5vw, 40px);
            animation: slideInDown 0.8s ease-out;
        }

        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo-icon {
            font-size: clamp(32px, 5vw, 48px);
            animation: bounce 2s ease-in-out infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        .logo-text {
            font-size: clamp(24px, 4vw, 36px);
            font-weight: 900;
            font-family: 'Montserrat', sans-serif;
            letter-spacing: -1px;
        }

        .brand-title {
            font-size: clamp(32px, 6vw, 52px);
            font-weight: 900;
            line-height: 1.1;
            margin-bottom: clamp(15px, 3vw, 20px);
            font-family: 'Montserrat', sans-serif;
            animation: slideInDown 0.8s ease-out 0.2s both;
        }

        .brand-subtitle {
            font-size: clamp(14px, 2vw, 18px);
            opacity: 0.9;
            line-height: 1.6;
            margin-bottom: clamp(20px, 4vw, 30px);
            animation: slideInDown 0.8s ease-out 0.4s both;
        }

        .features-list {
            text-align: left;
            animation: slideInDown 0.8s ease-out 0.6s both;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: clamp(8px, 2vw, 12px);
            margin-bottom: clamp(10px, 2vw, 15px);
            font-size: clamp(13px, 1.5vw, 15px);
            opacity: 0.9;
        }

        .feature-icon {
            font-size: clamp(16px, 2vw, 18px);
            min-width: 20px;
        }

        /* Right Side - Login Form */
        .right-side {
            flex: 1;
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(20px);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: clamp(30px, 5vw, 60px);
            position: relative;
            border-left: 1px solid rgba(255, 255, 255, 0.1);
            min-height: 100vh;
            overflow-y: auto;
        }

        .right-side::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 80%, rgba(138, 43, 226, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 107, 107, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }

        .login-form-container {
            width: 100%;
            max-width: min(440px, 90vw);
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(30px);
            border-radius: 24px;
            padding: clamp(30px, 5vw, 50px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 25px 80px rgba(0, 0, 0, 0.4);
            position: relative;
            animation: slideInUp 0.8s ease-out;
            margin: auto;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-header {
            margin-bottom: clamp(30px, 5vw, 40px);
            text-align: center;
        }

        .form-header h2 {
            font-size: clamp(28px, 4vw, 38px);
            font-weight: 800;
            color: var(--text-light);
            margin-bottom: clamp(8px, 2vw, 12px);
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, var(--text-light) 0%, var(--primary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .form-header p {
            color: var(--text-muted);
            font-size: clamp(13px, 1.5vw, 15px);
            font-weight: 500;
        }

        .form-group {
            margin-bottom: clamp(20px, 3vw, 25px);
            position: relative;
        }

        .form-group label {
            display: block;
            color: var(--text-light);
            font-size: clamp(13px, 1.5vw, 14px);
            font-weight: 600;
            margin-bottom: clamp(8px, 2vw, 10px);
            display: flex;
            align-items: center;
            gap: clamp(6px, 1vw, 8px);
        }

        .form-group input {
            width: 100%;
            padding: clamp(14px, 3vw, 16px) clamp(16px, 3vw, 20px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 14px;
            font-size: clamp(14px, 1.5vw, 15px);
            transition: all 0.3s ease;
            outline: none;
            background: rgba(255, 255, 255, 0.05);
            color: var(--text-light);
            font-family: 'Inter', sans-serif;
        }

        .form-group input::placeholder {
            color: rgba(255, 255, 255, 0.4);
            font-size: clamp(13px, 1.5vw, 15px);
        }

        .form-group input:focus {
            background: rgba(255, 255, 255, 0.08);
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(138, 43, 226, 0.2);
            transform: translateY(-2px);
        }

        .form-group input:valid {
            border-color: rgba(78, 205, 196, 0.3);
        }

        .input-icon {
            position: absolute;
            right: clamp(16px, 3vw, 20px);
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
            font-size: clamp(16px, 2vw, 18px);
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: clamp(25px, 4vw, 30px);
            flex-wrap: wrap;
            gap: 10px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: clamp(8px, 1vw, 10px);
            font-size: clamp(13px, 1.5vw, 14px);
            color: var(--text-muted);
            cursor: pointer;
        }

        .remember-me input[type="checkbox"] {
            width: clamp(16px, 2vw, 18px);
            height: clamp(16px, 2vw, 18px);
            cursor: pointer;
            accent-color: var(--primary);
            border-radius: 4px;
        }

        .forgot-link {
            color: var(--primary);
            text-decoration: none;
            font-size: clamp(13px, 1.5vw, 14px);
            font-weight: 600;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .forgot-link:hover {
            color: var(--secondary);
            text-shadow: 0 0 10px rgba(255, 107, 107, 0.5);
        }

        .login-btn {
            width: 100%;
            padding: clamp(16px, 3vw, 18px);
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            border: none;
            border-radius: 14px;
            font-size: clamp(15px, 1.5vw, 16px);
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: clamp(20px, 3vw, 25px);
            font-family: 'Inter', sans-serif;
            position: relative;
            overflow: hidden;
        }

        .login-btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .login-btn:hover::before {
            width: 400px;
            height: 400px;
        }

        .login-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(138, 43, 226, 0.5);
        }

        .login-btn:active {
            transform: translateY(-1px);
        }

        .divider {
            display: flex;
            align-items: center;
            margin: clamp(25px, 4vw, 35px) 0;
            color: var(--text-muted);
            font-size: clamp(13px, 1.5vw, 14px);
            font-weight: 600;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        }

        .divider span {
            padding: 0 clamp(15px, 3vw, 20px);
        }

        .social-login {
            display: flex;
            gap: clamp(12px, 2vw, 15px);
            margin-bottom: clamp(25px, 4vw, 30px);
            flex-wrap: wrap;
        }

        .social-btn {
            flex: 1;
            min-width: 120px;
            padding: clamp(13px, 2vw, 15px);
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            font-size: clamp(13px, 1.5vw, 14px);
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: clamp(8px, 1vw, 10px);
            transition: all 0.3s ease;
            color: var(--text-light);
        }

        .social-btn:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        .social-icon {
            width: clamp(18px, 2vw, 20px);
            height: clamp(18px, 2vw, 20px);
        }

        .signup-text {
            text-align: center;
            color: var(--text-muted);
            font-size: clamp(14px, 1.5vw, 15px);
        }

        .signup-text a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 700;
            transition: all 0.3s ease;
        }

        .signup-text a:hover {
            color: var(--secondary);
            text-shadow: 0 0 10px rgba(255, 107, 107, 0.5);
        }

        /* Alert Styles */
        .alert-danger {
            background: rgba(220, 53, 69, 0.1);
            color: #f8d7da;
            padding: clamp(12px, 2vw, 15px) clamp(16px, 3vw, 20px);
            border-radius: 12px;
            margin-bottom: clamp(20px, 3vw, 25px);
            border: 1px solid rgba(220, 53, 69, 0.3);
            font-size: clamp(13px, 1.5vw, 14px);
            font-weight: 500;
            animation: shake 0.5s ease-in-out;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-10px); }
            75% { transform: translateX(10px); }
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .left-side {
                display: none;
            }

            .right-side {
                background: linear-gradient(135deg, var(--darker) 0%, var(--dark) 100%);
                border-left: none;
            }
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .left-side {
                display: flex;
                min-height: 40vh;
                padding: 40px 30px;
            }

            .right-side {
                min-height: 60vh;
                padding: 40px 30px;
            }

            .brand-title {
                font-size: clamp(28px, 5vw, 42px);
            }
        }

        @media (max-width: 480px) {
            .left-side {
                padding: 30px 20px;
                min-height: 35vh;
            }

            .right-side {
                padding: 30px 20px;
                min-height: 65vh;
            }

            .login-form-container {
                padding: 25px 20px;
            }

            .social-login {
                flex-direction: column;
            }

            .social-btn {
                min-width: auto;
            }

            .remember-forgot {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .forgot-link {
                align-self: flex-end;
            }
        }

        @media (max-width: 320px) {
            .left-side {
                min-height: 30vh;
                padding: 20px 15px;
            }

            .right-side {
                min-height: 70vh;
                padding: 20px 15px;
            }

            .login-form-container {
                padding: 20px 15px;
            }
        }

        /* Loading Animation */
        .btn-loading {
            position: relative;
            color: transparent;
        }

        .btn-loading::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            top: 50%;
            left: 50%;
            margin-left: -10px;
            margin-top: -10px;
            border: 2px solid #ffffff;
            border-radius: 50%;
            border-right-color: transparent;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /* Ensure scroll works */
        html, body {
            height: 100%;
            overflow: auto;
        }

        .right-side {
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
        }

        /* Hide scrollbar for cleaner look */
        .right-side::-webkit-scrollbar {
            width: 0px;
            background: transparent;
        }
    </style>
</head>
<body>
    <div class="bg-animation">
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="music-notes note1">🎵</div>
        <div class="music-notes note2">🎶</div>
        <div class="music-notes note3">🎸</div>
        <div class="music-notes note4">🎧</div>
        <div class="music-notes note5">🎤</div>
    </div>

    <div class="container">
        <!-- Left Side - Brand Section -->
        <div class="left-side">
            <div class="brand-content">
                <div class="logo-section">
                    <span class="logo-icon">🎵</span>
                    <span class="logo-text">LOUDWAVE</span>
                </div>
                <h1 class="brand-title">Welcome to LoudWave</h1>
                <p class="brand-subtitle">
                    Your ultimate destination for music news, exclusive interviews, and the latest trends in the music industry.
                </p>
                <div class="features-list">
                    <div class="feature-item">
                        <span class="feature-icon">🎸</span>
                        <span>Latest music news & releases</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">🎤</span>
                        <span>Exclusive artist interviews</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">🎧</span>
                        <span>Curated playlists & reviews</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side - Login Form -->
        <div class="right-side">
            <div class="login-form-container">
                <div class="form-header">
                    <h2>Register Account</h2>
                    <p>Sign in to your LoudWave account</p>
                </div>

                @if (session('failed'))
                    <div class="alert-danger">
                        🎵 {{ session('failed') }}
                    </div>
                @endif

                <form id="loginForm" action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">
                            Name
                        </label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" required value="{{ old('username') }}">
                    </div>

                    <div class="form-group">
                        <label for="email">
                            Email Address
                        </label>
                        <input type="email" id="email" name="email" placeholder="your.email@loudwave.com" required value="{{ old('email') }}">

                    </div>

                    <div class="form-group">
                        <label for="password">
                            Password
                        </label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    </div>

                    <div class="form-group">
                        <label for="confirm_password">
                            Confirm Password
                        </label>
                        <input type="password" id="confirm_password" name="confirm_password" placeholder="Password Confirmation" required>
                    </div>
                        <input type="role" id="role" name="role" value="editor" hidden>
                    {{-- <div class="remember-forgot">
                        <label class="remember-me">
                            <input type="checkbox" id="remember" name="remember">
                            <span>Remember me</span>
                        </label>
                        <a href="#forgot" class="forgot-link">Forgot Password?</a>
                    </div> --}}

                    <button class="login-btn" id="loginButton" type="submit">
                        <span>Sign In</span>
                    </button>
                </form>

                <div class="divider">
                    <span>Or continue with</span>
                </div>

                <div class="social-login">
                    <button class="social-btn" onclick="loginWithGoogle()">
                        <svg class="social-icon" viewBox="0 0 24 24">
                            <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                            <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                            <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                            <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                        </svg>
                        Google
                    </button>
                </div>

                <p class="signup-text">
                    Already had account? <a href="/login">click here</a>
                </p>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            const loginButton = document.getElementById('loginButton');
            const originalText = loginButton.innerHTML;
            
            // Add loading state
            loginButton.classList.add('btn-loading');
            loginButton.disabled = true;
            
            // Simulate loading for demo
            setTimeout(() => {
                loginButton.classList.remove('btn-loading');
                loginButton.disabled = false;
                loginButton.innerHTML = originalText;
            }, 2000);
        });

        function loginWithGoogle() {
            const btn = event.target.closest('.social-btn');
            const originalText = btn.innerHTML;
            btn.innerHTML = '<span>Connecting...</span>';
            
            setTimeout(() => {
                btn.innerHTML = originalText;
                alert('Google OAuth integration required');
            }, 1500);
        }

        function loginWithSpotify() {
            const btn = event.target.closest('.social-btn');
            const originalText = btn.innerHTML;
            btn.innerHTML = '<span>Connecting...</span>';
            
            setTimeout(() => {
                btn.innerHTML = originalText;
                alert('Spotify OAuth integration required');
            }, 1500);
        }

        // Add input validation effects
        const inputs = document.querySelectorAll('input');
        inputs.forEach(input => {
            input.addEventListener('input', function() {
                if (this.value) {
                    this.style.borderColor = 'rgba(78, 205, 196, 0.5)';
                } else {
                    this.style.borderColor = 'rgba(255, 255, 255, 0.1)';
                }
            });
        });

        // Handle responsive behavior
        function handleResize() {
            const rightSide = document.querySelector('.right-side');
            if (window.innerHeight < 600) {
                rightSide.style.alignItems = 'flex-start';
                rightSide.style.paddingTop = '20px';
            } else {
                rightSide.style.alignItems = 'center';
                rightSide.style.paddingTop = '';
            }
        }

        // Initial call
        handleResize();
        
        // Listen for resize events
        window.addEventListener('resize', handleResize);

        // Ensure form is always visible on small screens
        window.addEventListener('load', function() {
            const formContainer = document.querySelector('.login-form-container');
            formContainer.scrollIntoView({ behavior: 'smooth', block: 'center' });
        });
    </script>
</body>
</html>