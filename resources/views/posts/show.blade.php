@extends('layouts.app')

@section('content')
    <style>
        :root {
            --primary: #8A2BE2;
            --secondary: #FF6B6B;
            --accent: #4ECDC4;
            --light-bg: #FFFFFF;
            --light-secondary: #F8F9FA;
            --light-border: #E9ECEF;
            --text-dark: #212529;
            --text-muted: #6C757D;
            --text-light: #FFFFFF;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e7ec 100%);
            min-height: 100vh;
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            padding-bottom: 60px;
        }

        .detail-container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        /* Back Button */
        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--text-dark);
            text-decoration: none;
            padding: 12px 24px;
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid var(--light-border);
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-bottom: 30px;
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .back-button:hover {
            background: rgba(138, 43, 226, 0.1);
            transform: translateX(-5px);
            color: var(--primary);
            border-color: var(--primary);
        }

        /* Article Card */
        .article-card {
            background: var(--light-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--light-border);
            border-radius: 24px;
            overflow: hidden;
            animation: fadeIn 0.6s ease-out;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Hero Image */
        .article-hero {
            width: 100%;
            height: 500px;
            overflow: hidden;
            position: relative;
            background: linear-gradient(135deg, rgba(138, 43, 226, 0.1), rgba(255, 107, 107, 0.1));
        }

        .article-hero img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }

        .article-hero:hover img {
            transform: scale(1.08);
        }

        .article-hero-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 100px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
        }

        .hero-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(255, 255, 255, 0.9));
            padding: 60px 40px 40px;
        }

        /* Article Content */
        .article-content {
            padding: 50px;
        }

        /* Meta Info */
        .article-meta {
            display: flex;
            align-items: center;
            gap: 25px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .author-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .author-avatar {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            font-weight: bold;
            color: white;
            border: 3px solid rgba(255, 255, 255, 0.8);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .author-details {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .author-name {
            color: var(--text-dark);
            font-weight: 700;
            font-size: 16px;
        }

        .publish-date {
            color: var(--text-muted);
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .divider {
            width: 1px;
            height: 35px;
            background: var(--light-border);
        }

        /* Category Badge */
        .category-badge {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 10px 20px;
            border-radius: 12px;
            font-size: 14px;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 15px rgba(138, 43, 226, 0.3);
        }

        /* Title */
        .article-title {
            color: var(--text-dark);
            font-size: 48px;
            font-weight: 900;
            line-height: 1.2;
            margin-bottom: 35px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-family: 'Montserrat', sans-serif;
        }

        /* Content */
        .article-body {
            color: var(--text-dark);
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 45px;
        }

        .article-body p {
            margin-bottom: 25px;
            font-size: 17px;
        }

        .article-body p:first-child {
            font-size: 20px;
            font-weight: 600;
            color: var(--text-dark);
        }

        /* Stats Bar */
        .article-stats {
            display: flex;
            gap: 30px;
            margin: 40px 0;
            padding: 25px;
            background: var(--light-secondary);
            border-radius: 16px;
            border: 1px solid var(--light-border);
        }

        .stat-item {
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--text-dark);
        }

        .stat-icon {
            font-size: 20px;
        }

        .stat-text {
            font-weight: 600;
            font-size: 15px;
        }

        /* Tags Section */
        .tags-section {
            padding: 30px;
            background: var(--light-secondary);
            border-top: 1px solid var(--light-border);
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .tags-label {
            color: var(--text-muted);
            font-weight: 700;
            font-size: 15px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .tag-badge {
            background: rgba(138, 43, 226, 0.1);
            color: var(--primary);
            padding: 10px 18px;
            border-radius: 12px;
            font-size: 14px;
            font-weight: 600;
            border: 1px solid rgba(138, 43, 226, 0.3);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .tag-badge:hover {
            background: rgba(138, 43, 226, 0.2);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(138, 43, 226, 0.2);
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: 50px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 15px 30px;
            border-radius: 14px;
            border: none;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-family: 'Inter', sans-serif;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            box-shadow: 0 6px 20px rgba(138, 43, 226, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(138, 43, 226, 0.4);
        }

        .btn-outline {
            background: var(--light-bg);
            color: var(--text-dark);
            border: 2px solid var(--light-border);
            backdrop-filter: blur(10px);
        }

        .btn-outline:hover {
            background: var(--light-secondary);
            transform: translateY(-3px);
            border-color: var(--primary);
        }

        /* Share Buttons */
        .share-section {
            margin-top: 50px;
            padding-top: 40px;
            border-top: 1px solid var(--light-border);
        }

        .share-title {
            color: var(--text-dark);
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .share-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .share-btn {
            width: 55px;
            height: 55px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            cursor: pointer;
            border: 2px solid var(--light-border);
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
            background: var(--light-bg);
        }

        .share-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(138, 43, 226, 0.1), transparent);
            transition: left 0.5s;
        }

        .share-btn:hover::before {
            left: 100%;
        }

        .share-btn svg {
            width: 24px;
            height: 24px;
            transition: transform 0.3s ease;
        }

        .share-btn:hover svg {
            transform: scale(1.2);
        }

        .share-btn.facebook:hover {
            background: rgba(59, 89, 152, 0.1);
            border-color: #1877f2;
        }

        .share-btn.twitter:hover {
            background: rgba(0, 0, 0, 0.1);
            border-color: #000;
        }

        .share-btn.whatsapp:hover {
            background: rgba(37, 211, 102, 0.1);
            border-color: #25d366;
        }

        .share-btn.link:hover {
            background: rgba(138, 43, 226, 0.1);
            border-color: var(--primary);
        }

        .share-btn:hover {
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        /* Music Theme Elements */
        .music-wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--secondary), var(--accent));
            opacity: 0.8;
        }

        .floating-music {
            position: absolute;
            font-size: 24px;
            opacity: 0.2;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(180deg);
            }
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .article-title {
                font-size: 40px;
            }

            .article-hero {
                height: 400px;
            }
        }

        @media (max-width: 768px) {
            .detail-container {
                padding: 20px 15px;
            }

            .article-hero {
                height: 300px;
            }

            .article-content {
                padding: 30px 25px;
            }

            .article-title {
                font-size: 32px;
            }

            .article-body {
                font-size: 16px;
            }

            .article-body p:first-child {
                font-size: 18px;
            }

            .article-meta {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }

            .divider {
                display: none;
            }

            .article-stats {
                flex-direction: column;
                gap: 15px;
            }

            .tags-section {
                padding: 25px;
            }

            .action-buttons {
                flex-direction: column;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }

            .share-buttons {
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .article-title {
                font-size: 28px;
            }

            .article-content {
                padding: 25px 20px;
            }

            .back-button {
                width: 100%;
                justify-content: center;
            }

            .share-btn {
                width: 50px;
                height: 50px;
            }
        }
    </style>

    <div class="detail-container">
        <!-- Back Button -->
        @if (request('from') === 'posts')
            <a href="{{ route('posts.index') }}" class="back-button">← Kembali</a>
        @elseif(request('from') === 'dashboard')
            <a href="{{ route('dashboard') }}" class="back-button">← Kembali</a>
        @elseif(request('from') === 'home')
            <a href="{{ route('home') }}" class="back-button">← Kembali</a>
        @else
            <a href="{{ url()->previous() }}" class="back-button">← Kembali</a>
        @endif

        <!-- Article Card -->
        <div class="article-card">
            <!-- Hero Image -->
            <div class="article-hero">
                @if ($post->thumbnail)
                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}">
                @else
                    <div class="article-hero-placeholder">
                        🎵
                    </div>
                @endif
                <div class="hero-overlay">
                    <div class="category-badge">
                        <span>🎸</span>
                        <span>{{ $post->category->name ?? 'Music' }}</span>
                    </div>
                </div>
                <div class="music-wave"></div>
            </div>

            <!-- Article Content -->
            <div class="article-content">
                <!-- Meta Information -->
                <div class="article-meta">
                    <div class="author-info">
                        <div class="author-avatar">
                            {{ strtoupper(substr($post->author ?? 'Admin', 0, 1)) }}
                        </div>
                        <div class="author-details">
                            <div class="author-name">{{ $post->user->name ?? 'Unknown Author' }}</div>
                            <div class="publish-date">
                                <span>📅</span>
                                <span>{{ $post->created_at->format('d M Y • H:i') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="divider"></div>

                    <div class="article-stats">
                        <div class="stat-item">
                            <span class="stat-icon">⏱️</span>
                            <span class="stat-text">{{ $post->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </div>

                <!-- Title -->
                <h1 class="article-title">{{ $post->title }}</h1>

                <!-- Body Content -->
                <div class="article-body">
                    {!! nl2br(e($post->content)) !!}
                </div>

                <!-- Share Section -->
                <div class="share-section">
                    <div class="share-title">
                        <span>📤</span>
                        <span>Bagikan Artikel Musik:</span>
                    </div>
                    <div class="share-buttons">
                        {{-- <div class="share-btn facebook" onclick="shareToFacebook()" title="Share to Facebook">
                            <svg viewBox="0 0 24 24" fill="#1877f2">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </div> --}}
                        <div class="share-btn twitter" onclick="shareToTwitter()" title="Share to X (Twitter)">
                            <svg viewBox="0 0 24 24" fill="#000000">
                                <path
                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </div>
                        <div class="share-btn whatsapp" onclick="shareToWhatsApp()" title="Share to WhatsApp">
                            <svg viewBox="0 0 24 24" fill="#25d366">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                            </svg>
                        </div>
                        <div class="share-btn link" onclick="copyLink()" title="Copy Link">
                            <svg viewBox="0 0 24 24" fill="#8A2BE2">
                                <path
                                    d="M10.59 13.41c.41.39.41 1.03 0 1.42-.39.39-1.03.39-1.42 0a5.003 5.003 0 0 1 0-7.07l3.54-3.54a5.003 5.003 0 0 1 7.07 0 5.003 5.003 0 0 1 0 7.07l-1.49 1.49c.01-.82-.12-1.64-.4-2.42l.47-.48a2.982 2.982 0 0 0 0-4.24 2.982 2.982 0 0 0-4.24 0l-3.53 3.53a2.982 2.982 0 0 0 0 4.24zm2.82-4.24c.39-.39 1.03-.39 1.42 0a5.003 5.003 0 0 1 0 7.07l-3.54 3.54a5.003 5.003 0 0 1-7.07 0 5.003 5.003 0 0 1 0-7.07l1.49-1.49c-.01.82.12 1.64.4 2.43l-.47.47a2.982 2.982 0 0 0 0 4.24 2.982 2.982 0 0 0 4.24 0l3.53-3.53a2.982 2.982 0 0 0 0-4.24.973.973 0 0 1 0-1.42z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                {{-- @php
                    $currentRoute = Route::currentRouteName();
                    $showActions = in_array($currentRoute, [
                        'dashboard',
                        'posts.index',
                        'posts.create',
                        'posts.edit',
                        'posts.show',
                    ]);
                @endphp

                @if ($showActions)
                    <div class="action-buttons">
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">
                            <span>✏️</span>
                            <span>Edit Berita</span>
                        </a>
                        <a href="{{ route('posts.index') }}" class="btn btn-outline">
                            <span>📋</span>
                            <span>Lihat Semua Berita</span>
                        </a>
                    </div>
                @endif --}}


            </div>

            <!-- Tags Section -->
            @if ($post->tags && $post->tags->count() > 0)
                <div class="tags-section">
                    <span class="tags-label">🏷️ Tags Musik:</span>
                    @foreach ($post->tags as $tag)
                        <span class="tag-badge">{{ $tag->name }}</span>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    <script>
        function shareToFacebook() {
            const url = window.location.href;
            const title = document.querySelector('.article-title').textContent;
            window.open(
                `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}&quote=${encodeURIComponent(title)}`,
                '_blank', 'width=600,height=400');
        }

        function shareToTwitter() {
            const url = window.location.href;
            const text = document.querySelector('.article-title').textContent;
            window.open(`https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}&text=${encodeURIComponent(text)}`,
                '_blank', 'width=600,height=400');
        }

        function shareToWhatsApp() {
            const url = window.location.href;
            const text = document.querySelector('.article-title').textContent;
            window.open(`https://wa.me/?text=${encodeURIComponent(text + ' - ' + url)}`, '_blank');
        }

        function copyLink() {
            const url = window.location.href;
            navigator.clipboard.writeText(url).then(() => {
                const btn = document.querySelector('.share-btn.link');
                const originalHTML = btn.innerHTML;
                btn.innerHTML =
                    '<svg viewBox="0 0 24 24" fill="#4ECDC4" style="width: 24px; height: 24px;"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>';
                btn.style.background = 'rgba(78, 205, 196, 0.2)';
                btn.style.borderColor = '#4ECDC4';

                setTimeout(() => {
                    btn.innerHTML = originalHTML;
                    btn.style.background = 'var(--light-bg)';
                    btn.style.borderColor = 'var(--light-border)';
                }, 2000);
            });
        }

        // Add floating music notes
        document.addEventListener('DOMContentLoaded', function() {
            const musicNotes = ['🎵', '🎶', '🎸', '🎧', '🎤', '🥁'];
            const heroSection = document.querySelector('.article-hero');

            for (let i = 0; i < 8; i++) {
                const note = document.createElement('div');
                note.className = 'floating-music';
                note.textContent = musicNotes[Math.floor(Math.random() * musicNotes.length)];
                note.style.left = Math.random() * 100 + '%';
                note.style.top = Math.random() * 100 + '%';
                note.style.animationDelay = Math.random() * 5 + 's';
                heroSection.appendChild(note);
            }
        });
    </script>
@endsection
