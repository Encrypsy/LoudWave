<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LoudWave Navbar</title>
    <style>
        :root {
            --primary: #8A2BE2;
            --secondary: #FF6B6B;
            --accent: #4ECDC4;
            --dark: #1A1A2E;
            --darker: #0F0F1B;
            --light: #F8F9FA;
            --gray-light: #E9ECEF;
            --gray-medium: #ADB5BD;
            --gray-dark: #495057;
            --white: #FFFFFF;
            --gradient-primary: linear-gradient(135deg, #8A2BE2 0%, #4A00E0 100%);
            --gradient-secondary: linear-gradient(135deg, #FF6B6B 0%, #FF8E53 100%);
            --gradient-accent: linear-gradient(135deg, #4ECDC4 0%, #44A08D 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: var(--light);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            color: var(--dark);
            line-height: 1.6;
        }

        /* Navigation */
        .navbar {
            background: var(--dark);
            padding: 15px 40px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-content {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-icon {
            font-size: 28px;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .logo-text {
            font-size: 24px;
            font-weight: 900;
            color: var(--white);
            font-family: 'Montserrat', sans-serif;
            letter-spacing: -0.5px;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-link {
            color: var(--gray-medium);
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover {
            color: var(--white);
        }

        .nav-link.active {
            color: var(--white);
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--gradient-primary);
            border-radius: 2px;
        }

        .user-menu {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .user-info {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 2px;
        }

        .user-name {
            color: var(--white);
            font-weight: 700;
            font-size: 14px;
        }

        .user-role {
            color: var(--gray-medium);
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .user-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: var(--gradient-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 700;
            font-size: 18px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .user-avatar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .user-avatar:hover::before {
            opacity: 1;
        }

        .user-avatar:hover {
            transform: scale(1.05);
            border-color: var(--accent);
            box-shadow: 0 4px 15px rgba(255, 107, 107, 0.4);
        }

        /* Dropdown Menu (Optional) */
        .user-dropdown {
            position: relative;
        }

        .dropdown-content {
            position: absolute;
            top: 100%;
            right: 0;
            background: var(--white);
            min-width: 200px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s ease;
            border: 1px solid var(--gray-light);
        }

        .user-dropdown:hover .dropdown-content {
            opacity: 1;
            visibility: visible;
            transform: translateY(5px);
        }

        .dropdown-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 15px 20px;
            color: var(--dark);
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
            border-bottom: 1px solid var(--gray-light);
        }

        .dropdown-item:last-child {
            border-bottom: none;
        }

        .dropdown-item:hover {
            background: var(--light);
            color: var(--primary);
        }

        .dropdown-item .icon {
            font-size: 16px;
            width: 20px;
            text-align: center;
        }

        /* Notification Badge */
        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: var(--gradient-accent);
            color: white;
            font-size: 10px;
            font-weight: 800;
            padding: 3px 6px;
            border-radius: 10px;
            border: 2px solid var(--dark);
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .navbar {
                padding: 15px 20px;
            }

            .nav-content {
                flex-direction: column;
                gap: 15px;
            }

            .nav-links {
                gap: 20px;
                order: 3;
                width: 100%;
                justify-content: center;
                margin-top: 10px;
            }

            .user-menu {
                order: 2;
            }

            .user-info {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .nav-links {
                flex-wrap: wrap;
                gap: 15px;
            }

            .nav-link {
                font-size: 13px;
            }

            .logo-text {
                font-size: 20px;
            }

            .user-avatar {
                width: 40px;
                height: 40px;
                font-size: 16px;
            }
        }

        /* Animation for user menu */
        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .user-avatar.pulse {
            animation: pulse 2s infinite;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-content">
            <a href="/">
                <div class="nav-logo">
                    <div class="logo-icon">🎵</div>
                    <div class="logo-text">LOUDWAVE</div>
                </div>
            </a>
            <div class="nav-links">
                @if (auth()->user()->role === 'admin' || auth()->user()->role === 'editor')
                    @if (auth()->user()->role === 'admin')
                        <a href="{{ route('dashboard') }}"
                            class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                            Dashboard
                        </a>
                    @endif
                    <a href="{{ route('posts.index') }}"
                        class="nav-link {{ request()->routeIs('posts.*') ? 'active' : '' }}">Kelola Berita
                    </a>
                    <a href="{{ route('category') }}"
                        class="nav-link {{ request()->routeIs('category') ? 'active' : '' }}">Kelola Kategori
                    </a>
                    <a href="{{ route('tag') }}"
                        class="nav-link {{ request()->routeIs('tag') ? 'active' : '' }}">Kelola Tag
                    </a>
                    @if (auth()->user()->role === 'admin')
                        <a href="{{ route('user') }}"
                            class="nav-link {{ request()->routeIs('user') ? 'active' : '' }}">
                           Kelola User
                        </a>
                    @endif
                @endif
            </div>
            <div class="user-menu">
                <div class="user-info">
                    <div class="user-name">{{ auth()->user()->name }}</div>
                    <div class="user-role">{{ auth()->user()->role }}</div>
                </div>
                <div class="user-dropdown">
                    <div class="user-avatar pulse">
                        {{ substr(auth()->user()->name, 0, 1) }}
                        
                    </div>
                    <div class="dropdown-content">
                        <a href="#" class="dropdown-item">
                            <span class="icon"></span>
                            <span>My Profile</span>
                        </a>
                        {{-- <a href="#" class="dropdown-item">
                            <span class="icon"></span>
                            <span>Settings</span> --}}
                        </a>
                        <a href="{{ route('logout') }}" class="dropdown-item">
                            <span class="icon"></span>
                            <span>Logout</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <script>
        // Add interactive effects
        document.addEventListener('DOMContentLoaded', function() {
            const userAvatar = document.querySelector('.user-avatar');
            const notificationBadge = document.querySelector('.notification-badge');

            // Pulse animation for new notifications
            if (notificationBadge) {
                setInterval(() => {
                    notificationBadge.style.transform = 'scale(1.1)';
                    setTimeout(() => {
                        notificationBadge.style.transform = 'scale(1)';
                    }, 300);
                }, 3000);
            }

            // Add click effect to avatar
            userAvatar.addEventListener('click', function() {
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 150);
            });

            // Mobile menu behavior
            const navLinks = document.querySelector('.nav-links');
            const userMenu = document.querySelector('.user-menu');

            function handleResize() {
                if (window.innerWidth <= 768) {
                    // Mobile layout adjustments
                    if (userMenu) {
                        userMenu.style.order = '2';
                    }
                    if (navLinks) {
                        navLinks.style.order = '3';
                    }
                } else {
                    // Desktop layout
                    if (userMenu) {
                        userMenu.style.order = '3';
                    }
                    if (navLinks) {
                        navLinks.style.order = '2';
                    }
                }
            }

            // Initial call
            handleResize();

            // Listen for resize
            window.addEventListener('resize', handleResize);
        });
    </script>
</body>

</html>
