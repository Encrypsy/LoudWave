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
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    }

    .container {
        max-width: 900px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    /* Header Section */
    .page-header {
        text-align: center;
        margin-bottom: 50px;
        padding-bottom: 30px;
        border-bottom: 3px solid var(--light-border);
    }

    .page-title {
        font-size: 48px;
        font-weight: 900;
        color: var(--text-dark);
        margin-bottom: 15px;
        font-family: 'Montserrat', sans-serif;
        background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .page-subtitle {
        color: var(--text-muted);
        font-size: 18px;
        font-weight: 500;
    }

    /* Form Container */
    .form-container {
        background: var(--light-bg);
        backdrop-filter: blur(20px);
        border-radius: 24px;
        padding: 50px;
        border: 1px solid var(--light-border);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
        animation: slideInUp 0.6s ease-out;
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
        background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        color: white;
        padding: 25px 30px;
        border-radius: 16px 16px 0 0;
        margin: -50px -50px 40px -50px;
        text-align: center;
    }

    .form-header h2 {
        font-family: 'Montserrat', sans-serif;
        font-size: 28px;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
    }

    /* Form Groups */
    .form-group {
        margin-bottom: 35px;
    }

    .form-label {
        display: block;
        color: var(--text-dark);
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .form-control {
        width: 100%;
        padding: 16px 20px;
        border: 2px solid var(--light-border);
        border-radius: 14px;
        font-size: 16px;
        transition: all 0.3s ease;
        outline: none;
        background: var(--light-bg);
        color: var(--text-dark);
        font-family: 'Inter', sans-serif;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .form-control:focus {
        background: var(--light-bg);
        border-color: var(--primary);
        box-shadow: 0 0 0 4px rgba(138, 43, 226, 0.1);
        transform: translateY(-2px);
    }

    textarea.form-control {
        resize: vertical;
        min-height: 200px;
        line-height: 1.6;
    }

    /* Current Thumbnail */
    .current-thumbnail {
        background: var(--light-secondary);
        padding: 25px;
        border-radius: 16px;
        border: 2px dashed var(--light-border);
        margin-bottom: 25px;
    }

    .thumbnail-preview {
        max-width: 300px;
        max-height: 200px;
        border-radius: 12px;
        border: 3px solid var(--light-border);
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .thumbnail-preview:hover {
        transform: scale(1.05);
        border-color: var(--primary);
    }

    .no-thumbnail {
        padding: 40px;
        text-align: center;
        background: var(--light-secondary);
        border-radius: 12px;
        color: var(--text-muted);
        font-size: 18px;
    }

    /* File Upload */
    .file-upload {
        position: relative;
        margin-top: 15px;
    }

    .file-upload-input {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
    }

    .file-upload-label {
        display: block;
        padding: 20px;
        border: 2px dashed var(--light-border);
        border-radius: 14px;
        text-align: center;
        color: var(--text-muted);
        cursor: pointer;
        transition: all 0.3s ease;
        background: var(--light-secondary);
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

    /* Checkbox Groups */
    .checkbox-group {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
        margin-top: 15px;
    }

    .checkbox-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 15px 20px;
        background: var(--light-secondary);
        border-radius: 12px;
        transition: all 0.3s ease;
        cursor: pointer;
        border: 2px solid transparent;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    .checkbox-item:hover {
        background: rgba(138, 43, 226, 0.05);
        border-color: rgba(138, 43, 226, 0.2);
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .checkbox-item input[type="checkbox"] {
        width: 20px;
        height: 20px;
        accent-color: var(--primary);
        cursor: pointer;
    }

    .checkbox-item label {
        cursor: pointer;
        font-weight: 600;
        color: var(--text-dark);
        margin: 0;
        flex: 1;
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

    /* Action Buttons */
    .form-actions {
        display: flex;
        gap: 15px;
        margin-top: 50px;
        padding-top: 30px;
        border-top: 2px solid var(--light-border);
        flex-wrap: wrap;
    }

    .btn {
        padding: 16px 32px;
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
        background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        color: white;
        box-shadow: 0 6px 20px rgba(138, 43, 226, 0.3);
    }

    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(138, 43, 226, 0.4);
    }

    .btn-secondary {
        background: var(--light-bg);
        color: var(--text-dark);
        border: 2px solid var(--light-border);
        backdrop-filter: blur(10px);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .btn-secondary:hover {
        background: var(--light-secondary);
        transform: translateY(-3px);
        border-color: var(--primary);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    /* Character Count */
    .char-count {
        text-align: right;
        font-size: 13px;
        color: var(--text-muted);
        margin-top: 8px;
    }

    .char-count.warning {
        color: var(--secondary);
        font-weight: 600;
    }

    /* Help Text */
    .help-text {
        color: var(--text-muted);
        font-size: 13px;
        margin-top: 8px;
        font-style: italic;
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

    /* Responsive Design */
    @media (max-width: 768px) {
        .container {
            padding: 20px 15px;
        }

        .page-title {
            font-size: 36px;
        }

        .form-container {
            padding: 30px 25px;
        }

        .form-header {
            margin: -30px -25px 30px -25px;
            padding: 20px;
        }

        .form-header h2 {
            font-size: 24px;
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

        .thumbnail-preview {
            max-width: 100%;
        }
    }

    @media (max-width: 480px) {
        .page-title {
            font-size: 28px;
        }

        .form-container {
            padding: 25px 20px;
        }

        .form-header {
            margin: -25px -20px 25px -20px;
            padding: 15px;
        }

        .form-label {
            font-size: 15px;
        }

        .form-control {
            padding: 14px 16px;
            font-size: 15px;
        }
    }

    /* Music Theme Elements */
    .music-icon {
        font-size: 20px;
    }

    .form-group:focus-within .music-icon {
        animation: bounce 0.5s ease;
    }

    @keyframes bounce {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.2); }
    }
</style>

<div class="container">
    <!-- Page Header -->
    <div class="page-header">
        <h1 class="page-title">Edit Music Article</h1>
        <p class="page-subtitle">Update your music story on LoudWave</p>
    </div>

    <!-- Form Container -->
    <div class="form-container">
        <div class="form-header">
            <h2>🎵 Edit "{{ $post->title }}"</h2>
        </div>

        <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data" id="editForm">
            @csrf @method('PUT')
            
            <!-- Title Field -->
            <div class="form-group">
                <label class="form-label">
                    <span class="music-icon">📝</span>
                    Article Title
                </label>
                <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="Enter captivating title for your music story..." required>
                <div class="char-count" id="titleCount">{{ strlen($post->title) }}/100</div>
            </div>

            <!-- Content Field -->
            <div class="form-group">
                <label class="form-label">
                    <span class="music-icon">📄</span>
                    Article Content
                </label>
                <textarea name="content" class="form-control" placeholder="Write your music story here... Be engaging and informative!" rows="8" required>{{ $post->content }}</textarea>
                <div class="char-count" id="contentCount">{{ strlen($post->content) }} characters</div>
            </div>

            <!-- Current Thumbnail -->
            <div class="form-group">
                <label class="form-label">
                    <span class="music-icon">🖼️</span>
                    Current Thumbnail
                </label>
                <div class="current-thumbnail">
                    @if ($post->thumbnail)
                        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Current Thumbnail" class="thumbnail-preview">
                        <p class="help-text" style="margin-top: 15px;">Current thumbnail image</p>
                    @else
                        <div class="no-thumbnail">
                            <span class="music-icon">🎵</span>
                            <p>No thumbnail uploaded</p>
                        </div>
                    @endif
                </div>
            </div>

            <!-- New Thumbnail Upload -->
            <div class="form-group">
                <label class="form-label">
                    <span class="music-icon">🔄</span>
                    Change Thumbnail (Optional)
                </label>
                <div class="file-upload">
                    <input type="file" name="thumbnail" id="thumbnail" class="file-upload-input" accept="image/*">
                    <label class="file-upload-label" for="thumbnail" id="thumbnailLabel">
                        <span>🎵 Click to upload new thumbnail or drag & drop</span>
                        <br>
                        <small>Recommended: 1200x630px, max 2MB. Leave empty to keep current image.</small>
                    </label>
                </div>
                <img id="thumbnailPreview" class="thumbnail-preview" style="display: none; margin-top: 15px;" alt="New thumbnail preview">
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
                            <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
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
                            <input type="checkbox" name="tags[]" value="{{ $tag->id }}" id="tag_{{ $tag->id }}"
                                {{ $post->tags->contains($tag->id) ? 'checked' : '' }}>
                            <label for="tag_{{ $tag->id }}">{{ $tag->name }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Form Actions -->
            <div class="form-actions">
                <a href="{{ route('posts.index') }}" class="btn btn-secondary">
                    <span>←</span>
                    Back to Articles
                </a>
                <button type="submit" class="btn btn-primary" id="submitBtn">
                    <span>💾</span>
                    Update Article
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
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

        // Thumbnail preview
        const thumbnailInput = document.getElementById('thumbnail');
        const thumbnailLabel = document.getElementById('thumbnailLabel');
        const thumbnailPreview = document.getElementById('thumbnailPreview');

        thumbnailInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                thumbnailLabel.classList.add('has-file');
                thumbnailLabel.innerHTML = `<span>✅ ${file.name}</span><br><small>New thumbnail selected</small>`;
                
                const reader = new FileReader();
                reader.onload = function(e) {
                    thumbnailPreview.src = e.target.result;
                    thumbnailPreview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            } else {
                thumbnailLabel.classList.remove('has-file');
                thumbnailLabel.innerHTML = `<span>🎵 Click to upload new thumbnail or drag & drop</span><br><small>Recommended: 1200x630px, max 2MB. Leave empty to keep current image.</small>`;
                thumbnailPreview.style.display = 'none';
            }
        });

        // Drag and drop for thumbnail
        thumbnailLabel.addEventListener('dragover', function(e) {
            e.preventDefault();
            this.style.borderColor = 'var(--primary)';
            this.style.background = 'rgba(138, 43, 226, 0.05)';
        });

        thumbnailLabel.addEventListener('dragleave', function(e) {
            e.preventDefault();
            this.style.borderColor = 'var(--light-border)';
            this.style.background = 'var(--light-secondary)';
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
        const form = document.getElementById('editForm');
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

        // Auto-save indicator
        let autoSaveTimer;
        const formInputs = form.querySelectorAll('input, textarea, select');
        
        formInputs.forEach(input => {
            input.addEventListener('input', function() {
                clearTimeout(autoSaveTimer);
                submitBtn.innerHTML = '<span>⏳</span> Saving...';
                
                autoSaveTimer = setTimeout(() => {
                    submitBtn.innerHTML = '<span>💾</span> Update Article';
                }, 1000);
            });
        });

        // Initialize character counts
        titleInput.dispatchEvent(new Event('input'));
        contentInput.dispatchEvent(new Event('input'));
    });
</script>
@endsection