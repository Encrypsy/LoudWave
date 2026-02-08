<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LoudWave - Create Tag</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            max-width: 600px;
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
            padding: 0;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            border: 1px solid var(--gray-light);
            overflow: hidden;
        }

        .form-header {
            background: var(--gradient-primary);
            color: white;
            padding: 25px 40px;
            text-align: center;
        }

        .form-header h2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 24px;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }

        .form-content {
            padding: 40px;
        }

        .form-group {
            margin-bottom: 30px;
        }

        .form-label {
            display: block;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 12px;
            font-size: 16px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .form-control {
            width: 100%;
            padding: 16px 20px;
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

        /* Color Picker Styles */
        .color-picker-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(60px, 1fr));
            gap: 12px;
            margin-top: 10px;
        }

        .color-option {
            position: relative;
            cursor: pointer;
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s ease;
            aspect-ratio: 1;
        }

        .color-option:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .color-option input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .color-swatch {
            width: 100%;
            height: 100%;
            border-radius: 10px;
            border: 3px solid transparent;
            transition: all 0.3s ease;
        }

        .color-option input:checked + .color-swatch {
            border-color: var(--dark);
            box-shadow: 0 0 0 2px var(--white), 0 0 0 4px var(--dark);
        }

        /* Icon Picker Styles */
        .icon-picker-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(70px, 1fr));
            gap: 12px;
            margin-top: 10px;
        }

        .icon-option {
            position: relative;
            cursor: pointer;
            border-radius: 12px;
            padding: 15px;
            background: var(--light);
            text-align: center;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .icon-option:hover {
            background: rgba(138, 43, 226, 0.1);
            transform: translateY(-2px);
        }

        .icon-option input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .icon-display {
            font-size: 24px;
            margin-bottom: 5px;
            color: var(--dark);
            transition: all 0.3s ease;
        }

        .icon-option input:checked + .icon-display-container {
            border-color: var(--primary);
            background: rgba(138, 43, 226, 0.1);
        }

        .icon-option input:checked + .icon-display-container .icon-display {
            color: var(--primary);
            transform: scale(1.2);
        }

        .icon-display-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
            padding: 10px;
            border-radius: 10px;
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }

        /* Button Styles */
        .form-actions {
            display: flex;
            gap: 15px;
            justify-content: flex-end;
            margin-top: 40px;
            padding-top: 30px;
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
            gap: 10px;
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

        /* Preview Section */
        .preview-section {
            margin-top: 30px;
            padding: 25px;
            background: var(--light);
            border-radius: 15px;
            border: 2px dashed var(--gray-medium);
        }

        .preview-title {
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 18px;
        }

        .tag-preview {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: 600;
            font-size: 14px;
            background: var(--gradient-primary);
            color: white;
            box-shadow: 0 4px 12px rgba(138, 43, 226, 0.3);
        }

        /* Character Count */
        .char-count {
            text-align: right;
            font-size: 14px;
            color: var(--gray-medium);
            margin-top: 8px;
            font-weight: 500;
        }

        .char-count.warning {
            color: var(--secondary);
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

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                padding: 20px 15px;
            }

            .page-title {
                font-size: 32px;
            }

            .form-content {
                padding: 30px 25px;
            }

            .form-header {
                padding: 20px 25px;
            }

            .form-actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }

            .color-picker-container {
                grid-template-columns: repeat(4, 1fr);
            }

            .icon-picker-container {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 480px) {
            .page-title {
                font-size: 28px;
            }

            .form-content {
                padding: 25px 20px;
            }

            .form-header {
                padding: 15px 20px;
            }

            .color-picker-container {
                grid-template-columns: repeat(3, 1fr);
            }

            .icon-picker-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        /* Description Text */
        .description {
            color: var(--gray-dark);
            font-size: 14px;
            margin-top: 5px;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    @include('layouts._navbar')
    
    <div class="container">
        <!-- Page Header -->
        <div class="page-header">
            <h1 class="page-title">Create New Category</h1>
            <p class="page-subtitle">Organize your music content</p>
        </div>

        <!-- Form Container -->
        <div class="form-container">
            <div class="form-header">
                <h2>
                    <i class="fas fa-tags"></i>
                    Category Information
                </h2>
            </div>

            <div class="form-content">
                <form action="{{ route('category.store') }}" method="POST" id="tagForm">
                    @csrf
                    
                    <!-- Tag Name Field -->
                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-heading"></i>
                            Category Name
                        </label>
                        <input type="text" name="name" class="form-control" placeholder="Enter category name (e.g., Rock, Pop, Electronic...)" required maxlength="30">
                        <div class="char-count" id="nameCount">0/30 characters</div>
                        {{-- <div class="description">Choose a descriptive name that represents the music genre or category</div> --}}
                    </div>
                    
                    

                    <!-- Form Actions -->
                    <div class="form-actions">
                        <a href="{{ route('category') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i>
                            Back 
                        </a>
                        <button type="submit" class="btn btn-success" id="submitBtn">
                            <i class="fas fa-plus-circle"></i>
                            Create Category
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const nameInput = document.querySelector('input[name="name"]');
            const descInput = document.querySelector('textarea[name="description"]');
            const nameCount = document.getElementById('nameCount');
            const descCount = document.getElementById('descCount');
            const tagPreview = document.getElementById('tagPreview');
            const form = document.getElementById('tagForm');
            const submitBtn = document.getElementById('submitBtn');
            const colorOptions = document.querySelectorAll('input[name="color"]');
            const iconOptions = document.querySelectorAll('input[name="icon"]');

            // Character count for name
            nameInput.addEventListener('input', function() {
                const length = this.value.length;
                nameCount.textContent = `${length}/30 characters`;
                
                if (length > 25) {
                    nameCount.classList.add('warning');
                } else {
                    nameCount.classList.remove('warning');
                }

                updateTagPreview();
            });

            // Character count for description
            descInput.addEventListener('input', function() {
                const length = this.value.length;
                descCount.textContent = `${length}/200 characters`;
                
                if (length > 180) {
                    descCount.classList.add('warning');
                } else {
                    descCount.classList.remove('warning');
                }
            });

            // Update tag preview when color changes
            colorOptions.forEach(option => {
                option.addEventListener('change', function() {
                    if (this.checked) {
                        updateTagPreview();
                    }
                });
            });

            // Update tag preview when icon changes
            iconOptions.forEach(option => {
                option.addEventListener('change', function() {
                    if (this.checked) {
                        updateTagPreview();
                    }
                });
            });

            // Update tag preview function
            function updateTagPreview() {
                const tagName = nameInput.value || 'Your Tag Name';
                const selectedColor = document.querySelector('input[name="color"]:checked').value;
                const selectedIcon = document.querySelector('input[name="icon"]:checked').value;
                
                // Update preview text
                tagPreview.querySelector('span').textContent = tagName;
                
                // Update preview color
                tagPreview.style.background = selectedColor;
                
                // Update preview icon
                const iconClass = getIconClass(selectedIcon);
                tagPreview.querySelector('i').className = iconClass;
            }

            // Get icon class based on selected value
            function getIconClass(iconValue) {
                const icons = {
                    'music': 'fas fa-music',
                    'guitar': 'fas fa-guitar',
                    'drum': 'fas fa-drum',
                    'headphones': 'fas fa-headphones',
                    'microphone': 'fas fa-microphone',
                    'compact-disc': 'fas fa-compact-disc'
                };
                return icons[iconValue] || 'fas fa-music';
            }

            // Form submission
            form.addEventListener('submit', function(e) {
                const nameValue = nameInput.value.trim();
                
                if (!nameValue) {
                    e.preventDefault();
                    showError('Please enter a tag name');
                    return;
                }
                
                if (nameValue.length > 30) {
                    e.preventDefault();
                    showError('Tag name must be less than 30 characters');
                    return;
                }

                // Show loading state
                submitBtn.classList.add('btn-loading');
                submitBtn.disabled = true;
            });

            // Error display function
            function showError(message) {
                // Remove existing error
                const existingError = document.querySelector('.error-message');
                if (existingError) {
                    existingError.remove();
                }

                // Create error message
                const errorDiv = document.createElement('div');
                errorDiv.className = 'error-message';
                errorDiv.style.cssText = `
                    background: var(--gradient-secondary);
                    color: white;
                    padding: 15px 20px;
                    border-radius: 12px;
                    margin-bottom: 20px;
                    font-size: 14px;
                    font-weight: 600;
                    text-align: center;
                    animation: slideIn 0.3s ease;
                `;
                errorDiv.textContent = message;

                form.prepend(errorDiv);

                setTimeout(() => {
                    errorDiv.remove();
                }, 5000);
            }

            // Add slideIn animation
            const style = document.createElement('style');
            style.textContent = `
                @keyframes slideIn {
                    from {
                        opacity: 0;
                        transform: translateY(-10px);
                    }
                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }
            `;
            document.head.appendChild(style);

            // Initialize preview
            updateTagPreview();
        });
    </script>
</body>
</html>