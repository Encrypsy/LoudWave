<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LoudWave - Create Article</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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
            max-width: 800px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        /* Header Section */
        .page-header {
            text-align: center;
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
            margin-bottom: 10px;
        }

        .page-subtitle {
            color: var(--gray-dark);
            font-size: 16px;
            font-weight: 500;
        }

        /* Form Styles */
        .form-container {
            background: var(--white);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            border: 1px solid var(--gray-light);
        }

        .form-group {
            margin-bottom: 30px;
        }

        .form-label {
            display: block;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 10px;
            font-size: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-control {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid var(--gray-light);
            border-radius: 12px;
            font-size: 16px;
            font-family: 'Inter', sans-serif;
            transition: all 0.3s ease;
            background: var(--white);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(138, 43, 226, 0.1);
            transform: translateY(-2px);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 150px;
        }

        /* File Upload Styles */
        .file-upload {
            position: relative;
            overflow: hidden;
        }

        .file-upload-input {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }

        .file-upload-label {
            display: block;
            padding: 15px 20px;
            border: 2px dashed var(--gray-medium);
            border-radius: 12px;
            text-align: center;
            color: var(--gray-dark);
            cursor: pointer;
            transition: all 0.3s ease;
            background: var(--light);
        }

        .file-upload-label:hover {
            border-color: var(--primary);
            color: var(--primary);
            background: rgba(138, 43, 226, 0.05);
        }

        .file-upload-label.has-file {
            border-color: var(--accent);
            color: var(--accent);
            background: rgba(78, 205, 196, 0.05);
        }

        /* Checkbox Styles */
        .checkbox-group {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-top: 10px;
        }

        .checkbox-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 15px;
            background: var(--light);
            border-radius: 10px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .checkbox-item:hover {
            background: rgba(138, 43, 226, 0.1);
            transform: translateY(-2px);
        }

        .checkbox-item input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: var(--primary);
        }

        .checkbox-item label {
            cursor: pointer;
            font-weight: 500;
            color: var(--dark);
            margin: 0;
        }

        /* Select Styles */
        .select-wrapper {
            position: relative;
        }

        .select-wrapper::after {
            content: '▼';
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            color: var(--primary);
            pointer-events: none;
            font-size: 12px;
        }

        /* Button Styles */
        .form-actions {
            display: flex;
            gap: 15px;
            justify-content: flex-end;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 2px solid var(--gray-light);
        }

        .btn {
            padding: 15px 30px;
            border: none;
            border-radius: 12px;
            font-weight: 700;
            font-size: 16px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            cursor: pointer;
            font-family: 'Inter', sans-serif;
        }

        .btn-success {
            background: var(--gradient-primary);
            color: white;
            box-shadow: 0 4px 15px rgba(138, 43, 226, 0.3);
        }

        .btn-success:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(138, 43, 226, 0.4);
        }

        .btn-secondary {
            background: var(--white);
            color: var(--gray-dark);
            border: 2px solid var(--gray-light);
        }

        .btn-secondary:hover {
            background: var(--gray-light);
            transform: translateY(-2px);
            border-color: var(--gray-medium);
        }

        /* Music Theme Elements */
        .music-icon {
            font-size: 20px;
        }

        .form-header {
            background: var(--gradient-primary);
            color: white;
            padding: 20px;
            border-radius: 15px 15px 0 0;
            margin: -40px -40px 30px -40px;
            text-align: center;
        }

        .form-header h2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 24px;
            margin: 0;
        }

        /* Preview Section */
        .preview-section {
            margin-top: 30px;
            padding: 20px;
            background: var(--light);
            border-radius: 12px;
            border: 2px dashed var(--gray-medium);
        }

        .preview-title {
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .thumbnail-preview {
            max-width: 200px;
            max-height: 150px;
            border-radius: 8px;
            margin-top: 10px;
            display: none;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                padding: 20px 15px;
            }

            .page-title {
                font-size: 32px;
            }

            .form-container {
                padding: 30px 20px;
            }

            .form-header {
                margin: -30px -20px 30px -20px;
                padding: 15px;
            }

            .form-actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }

            .checkbox-group {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .page-title {
                font-size: 28px;
            }

            .form-container {
                padding: 20px 15px;
            }

            .form-header {
                margin: -20px -15px 20px -15px;
            }
        }

        /* Loading State */
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

        /* Character Count */
        .char-count {
            text-align: right;
            font-size: 12px;
            color: var(--gray-medium);
            margin-top: 5px;
        }

        .char-count.warning {
            color: #FF6B6B;
        }
    </style>
</head>
<body>
    @include('layouts._navbar')
    
    <div class="container">
        <!-- Page Header -->
        <div class="page-header">
            <h1 class="page-title">Create Music Article</h1>
            <p class="page-subtitle">Share the latest music news and stories with LoudWave</p>
        </div>

        <!-- Form Container -->
        <div class="form-container">
            <div class="form-header">
                <h2>🎵 New Music Story</h2>
            </div>

            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" id="articleForm">
                @csrf
                
                <!-- Title Field -->
                <div class="form-group">
                    <label class="form-label">
                        <span class="music-icon">📝</span>
                        Article Title
                    </label>
                    <input type="text" name="title" class="form-control" placeholder="Enter captivating title for your music story..." required>
                    <div class="char-count" id="titleCount">0/100</div>
                </div>

                <!-- Thumbnail Field -->
                <div class="form-group">
                    <label class="form-label">
                        <span class="music-icon">🖼️</span>
                        Thumbnail Image
                    </label>
                    <div class="file-upload">
                        <input type="file" name="thumbnail" class="file-upload-input" id="thumbnailInput" accept="image/*">
                        <label class="file-upload-label" for="thumbnailInput" id="thumbnailLabel">
                            <span>🎵 Click to upload thumbnail or drag & drop</span>
                            <br>
                            <small>Recommended: 1200x630px, max 2MB</small>
                        </label>
                    </div>
                    <img id="thumbnailPreview" class="thumbnail-preview" alt="Thumbnail preview">
                </div>

                <!-- Content Field -->
                <div class="form-group">
                    <label class="form-label">
                        <span class="music-icon">📄</span>
                        Article Content
                    </label>
                    <textarea name="content" class="form-control" placeholder="Write your music story here... Be engaging and informative!" rows="8" required></textarea>
                    <div class="char-count" id="contentCount">0 characters</div>
                </div>

                <!-- Category Field -->
                <div class="form-group">
                    <label class="form-label">
                        <span class="music-icon">🎸</span>
                        Music Category
                    </label>
                    <div class="select-wrapper">
                        <select name="category_id" class="form-control" required>
                            <option value="">-- Select Music Category --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Tags Field -->
                <div class="form-group">
                    <label class="form-label">
                        <span class="music-icon">🏷️</span>
                        Music Tags
                    </label>
                    <div class="checkbox-group">
                        @foreach ($tags as $tag)
                            <div class="checkbox-item">
                                <input type="checkbox" name="tags[]" value="{{ $tag->id }}" id="tag_{{ $tag->id }}">
                                <label for="tag_{{ $tag->id }}">{{ $tag->name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- <input type="text" value="{{ user()->name }}" name="user" hidden> --}}

                <!-- Form Actions -->
                <div class="form-actions">
                    <a href="{{ route('posts.index') }}" class="btn btn-secondary">
                        <span>←</span>
                        Back to Articles
                    </a>
                    <button type="submit" class="btn btn-success" id="submitBtn">
                        <span>🎵</span>
                        Publish Article
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Thumbnail preview
            const thumbnailInput = document.getElementById('thumbnailInput');
            const thumbnailLabel = document.getElementById('thumbnailLabel');
            const thumbnailPreview = document.getElementById('thumbnailPreview');

            thumbnailInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    thumbnailLabel.classList.add('has-file');
                    thumbnailLabel.innerHTML = `<span>✅ ${file.name}</span>`;
                    
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        thumbnailPreview.src = e.target.result;
                        thumbnailPreview.style.display = 'block';
                    }
                    reader.readAsDataURL(file);
                }
            });

            // Character count for title
            const titleInput = document.querySelector('input[name="title"]');
            const titleCount = document.getElementById('titleCount');
            
            titleInput.addEventListener('input', function() {
                const length = this.value.length;
                titleCount.textContent = `${length}/100`;
                
                if (length > 80) {
                    titleCount.classList.add('warning');
                } else {
                    titleCount.classList.remove('warning');
                }
            });

            // Character count for content
            const contentInput = document.querySelector('textarea[name="content"]');
            const contentCount = document.getElementById('contentCount');
            
            contentInput.addEventListener('input', function() {
                const length = this.value.length;
                contentCount.textContent = `${length} characters`;
                
                if (length > 5000) {
                    contentCount.classList.add('warning');
                } else {
                    contentCount.classList.remove('warning');
                }
            });

            // Drag and drop for thumbnail
            thumbnailLabel.addEventListener('dragover', function(e) {
                e.preventDefault();
                this.style.borderColor = 'var(--primary)';
                this.style.background = 'rgba(138, 43, 226, 0.1)';
            });

            thumbnailLabel.addEventListener('dragleave', function(e) {
                e.preventDefault();
                this.style.borderColor = 'var(--gray-medium)';
                this.style.background = 'var(--light)';
            });

            thumbnailLabel.addEventListener('drop', function(e) {
                e.preventDefault();
                this.style.borderColor = 'var(--accent)';
                this.style.background = 'rgba(78, 205, 196, 0.05)';
                
                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    thumbnailInput.files = files;
                    thumbnailInput.dispatchEvent(new Event('change'));
                }
            });

            // Form submission
            const form = document.getElementById('articleForm');
            const submitBtn = document.getElementById('submitBtn');

            form.addEventListener('submit', function(e) {
                // Basic validation
                const title = titleInput.value.trim();
                const content = contentInput.value.trim();
                
                if (!title || !content) {
                    e.preventDefault();
                    alert('Please fill in all required fields');
                    return;
                }

                // Show loading state
                submitBtn.classList.add('btn-loading');
                submitBtn.disabled = true;
            });

            // Auto-save draft (optional)
            let autoSaveTimer;
            const formInputs = form.querySelectorAll('input, textarea, select');
            
            formInputs.forEach(input => {
                input.addEventListener('input', function() {
                    clearTimeout(autoSaveTimer);
                    autoSaveTimer = setTimeout(() => {
                        console.log('Auto-save triggered');
                        // Here you could implement auto-save functionality
                    }, 2000);
                });
            });
        });
    </script>
</body>
</html>