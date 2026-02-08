<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LoudWave - Manage Articles</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
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

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 40px;
        }

        /* Header Section */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 3px solid var(--gray-light);
        }

        .page-title {
            font-size: 42px;
            font-weight: 900;
            color: var(--dark);
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(90deg, #8A2BE2, #FF6B6B);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .btn-primary {
            background: var(--gradient-primary);
            color: white;
            border: none;
            padding: 14px 28px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 16px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(138, 43, 226, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(138, 43, 226, 0.4);
        }

        /* Alert */
        .alert {
            background: var(--white);
            color: var(--dark);
            padding: 20px 24px;
            border-radius: 12px;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            gap: 16px;
            border-left: 5px solid var(--primary);
            animation: slideIn 0.5s ease-out;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .alert-success {
            border-left-color: #28a745;
        }

        .alert-icon {
            font-size: 24px;
        }

        .alert-text {
            flex: 1;
            font-weight: 500;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Table Styles */
        .table-container {
            background: var(--white);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            background: var(--white);
        }

        .table th {
            background: var(--gradient-primary);
            color: white;
            padding: 20px;
            text-align: left;
            font-weight: 700;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .table td {
            padding: 20px;
            border-bottom: 1px solid var(--gray-light);
            vertical-align: middle;
        }

        .table tr:last-child td {
            border-bottom: none;
        }

        .table tr:hover {
            background: rgba(138, 43, 226, 0.03);
        }

        /* Thumbnail Styles */
        .thumbnail {
            width: 80px;
            height: 60px;
            border-radius: 8px;
            object-fit: cover;
            border: 2px solid var(--gray-light);
            transition: all 0.3s ease;
        }

        .thumbnail:hover {
            transform: scale(1.1);
            border-color: var(--primary);
        }

        .thumbnail-placeholder {
            width: 80px;
            height: 60px;
            border-radius: 8px;
            background: linear-gradient(135deg, var(--gray-light) 0%, var(--gray-medium) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gray-dark);
            font-size: 20px;
        }

        /* Button Styles */
        .btn {
            padding: 10px 18px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 13px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-sm {
            padding: 8px 14px;
            font-size: 12px;
        }

        .btn-info {
            background: var(--gradient-accent);
            color: white;
        }

        .btn-warning {
            background: linear-gradient(135deg, #FFD93D 0%, #FF6B6B 100%);
            color: white;
        }

        .btn-danger {
            background: var(--gradient-secondary);
            color: white;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .btn-group {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        /* Text Styles */
        .post-title {
            font-weight: 700;
            color: var(--dark);
            font-size: 16px;
            margin-bottom: 5px;
        }

        .post-author {
            color: var(--gray-dark);
            font-size: 13px;
            font-weight: 600;
        }

        .post-date {
            color: var(--gray-medium);
            font-size: 12px;
            font-weight: 500;
        }

        /* Pagination */
        .pagination-wrapper {
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }

        .pagination {
            display: flex;
            gap: 8px;
            list-style: none;
        }

        .page-item .page-link {
            padding: 12px 18px;
            border: 2px solid var(--gray-light);
            border-radius: 10px;
            color: var(--dark);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .page-item.active .page-link {
            background: var(--gradient-primary);
            border-color: var(--primary);
            color: white;
        }

        .page-item .page-link:hover {
            border-color: var(--primary);
            transform: translateY(-2px);
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 80px 20px;
            background: var(--white);
            border-radius: 16px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            border: 2px solid var(--gray-light);
        }

        .empty-icon {
            font-size: 80px;
            margin-bottom: 20px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .empty-state h3 {
            font-size: 24px;
            font-weight: 900;
            color: var(--dark);
            margin-bottom: 10px;
            font-family: 'Montserrat', sans-serif;
        }

        .empty-state p {
            color: var(--gray-dark);
            font-size: 16px;
        }

        /* Stats Bar */
        .stats-bar {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-item {
            background: var(--white);
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            gap: 15px;
            transition: all 0.3s ease;
            border-left: 4px solid var(--primary);
        }

        .stat-item:nth-child(2) {
            border-left-color: var(--secondary);
        }

        .stat-item:nth-child(3) {
            border-left-color: var(--accent);
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            background: var(--gradient-primary);
        }

        .stat-item:nth-child(2) .stat-icon {
            background: var(--gradient-secondary);
        }

        .stat-item:nth-child(3) .stat-icon {
            background: var(--gradient-accent);
        }

        .stat-details {
            flex: 1;
        }

        .stat-label {
            font-size: 12px;
            color: var(--gray-dark);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .stat-value {
            font-size: 24px;
            font-weight: 900;
            color: var(--dark);
            line-height: 1;
            font-family: 'Montserrat', sans-serif;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .container {
                padding: 20px;
            }

            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }

            .page-title {
                font-size: 32px;
            }

            .stats-bar {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .table-container {
                overflow-x: auto;
            }

            .table {
                min-width: 800px;
            }

            .action-buttons {
                flex-direction: column;
            }

            .btn-group {
                flex-direction: column;
            }

            .stats-bar {
                grid-template-columns: 1fr;
            }

            .page-title {
                font-size: 28px;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 15px;
            }

            .page-title {
                font-size: 24px;
            }

            .btn-primary {
                width: 100%;
                justify-content: center;
            }

            .stat-value {
                font-size: 20px;
            }
        }

        /* Confirmation Dialog */
        .confirm-dialog {
            background: var(--white);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            border: 2px solid var(--primary);
            max-width: 400px;
            margin: 20px auto;
            text-align: center;
        }

        .confirm-buttons {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    @include('layouts._navbar')

    <div class="container">
        <!-- Page Header -->
        <div class="page-header">
            <h1 class="page-title">Manage Music Articles</h1>
            <a href="{{ route('posts.create') }}" class="btn-primary">
                <span>🎵</span>
                + Tambah Berita Musik
            </a>
        </div>

        <!-- Stats Bar -->
        <div class="stats-bar">
            <div class="stat-item">
                <div class="stat-icon">📰</div>
                <div class="stat-details">
                    <div class="stat-label">Total Articles</div>
                    <div class="stat-value">{{ $posts->total() }}</div>
                </div>
            </div>
        </div>

        <!-- Success Alert -->
        @if (session('success'))
            <div class="alert alert-success">
                <div class="alert-icon">✅</div>
                <div class="alert-text">{{ session('success') }}</div>
            </div>
        @endif

        @if ($posts->count() > 0)
            <!-- Table Container -->
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Article Details</th>
                            <th>Author</th>
                            <th>Thumbnail</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>
                                    <div class="post-title">{{ $post->title }}</div>
                                    {{-- <div class="post-author">By {{ $post->author }}</div> --}}
                                </td>
                                <td>
                                    <span class="post-author">{{ $post->user->name ?? 'Unknown Author' }}</span>
                                </td>
                                <td>
                                    @if ($post->thumbnail)
                                        <img src="{{ asset('storage/' . $post->thumbnail) }}" class="thumbnail"
                                            alt="{{ $post->title }}">
                                    @else
                                        <div class="thumbnail-placeholder">🎵</div>
                                    @endif
                                </td>
                                <td>
                                    <div class="post-date">{{ $post->created_at->format('d M Y') }}</div>
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <a href="{{ route('posts.show', $post->id) }}?from=posts"
                                            class="btn btn-info btn-sm">
                                            <span>👁️</span>
                                            View
                                        </a>
                                        @if ($post->user && auth()->user() && auth()->user()->id == $post->user->id)
                                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm">
                                                <span>✏️</span>
                                                Edit
                                            </a>
                                            <form action="{{ route('posts.destroy', $post) }}" method="POST"
                                                style="display:inline;">
                                                @csrf @method('DELETE')
                                                <button type="button" class="btn btn-danger btn-sm"
                                                    onclick="confirmDelete(this)">
                                                    <span>🗑️</span>
                                                    Delete
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="pagination-wrapper">
                {{ $posts->links() }}
            </div>
        @else
            <!-- Empty State -->
            <div class="empty-state">
                <div class="empty-icon">🎵</div>
                <h3>No Music Articles Yet</h3>
                <p>Start creating your first music story to build your content library</p>
                <a href="{{ route('posts.create') }}" class="btn-primary" style="margin-top: 20px;">
                    <span>🎵</span>
                    Create Your First Article
                </a>
            </div>
        @endif
    </div>

    <script>
        // Enhanced confirmation dialog
        function confirmDelete(button) {
            if (confirm('Are you sure you want to delete this music article? This action cannot be undone.')) {
                button.closest('form').submit();
            }
        }

        // Add some interactive effects
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effects to table rows
            const tableRows = document.querySelectorAll('.table tbody tr');
            tableRows.forEach(row => {
                row.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateX(5px)';
                    this.style.transition = 'transform 0.2s ease';
                });

                row.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateX(0)';
                });
            });

            // Add loading state to buttons
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    if (this.classList.contains('btn-danger')) {
                        return; // Skip for delete buttons
                    }

                    const originalText = this.innerHTML;
                    this.innerHTML = '<span>⏳</span> Loading...';
                    this.disabled = true;

                    setTimeout(() => {
                        this.innerHTML = originalText;
                        this.disabled = false;
                    }, 1500);
                });
            });
        });
    </script>
</body>

</html>
