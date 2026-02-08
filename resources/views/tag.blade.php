<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelola Tag - LoudWave</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Modern CSS Reset and Variables */
        :root {
            --primary: #8b5cf6;
            --primary-dark: #7c3aed;
            --secondary: #06b6d4;
            --secondary-dark: #0891b2;
            --accent: #f59e0b;
            --light: #f8fafc;
            --dark: #1e293b;
            --gray: #64748b;
            --gray-light: #e2e8f0;
            --danger: #ef4444;
            --border-radius: 12px;
            --shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --transition: all 0.3s ease;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f0f4f8 0%, #d9e2ec 100%);
            color: var(--dark);
            line-height: 1.6;
            min-height: 100vh;
        }
        
        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        /* Header Section */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2.5rem;
            flex-wrap: wrap;
            gap: 1.5rem;
        }
        
        .header h1 {
            color: var(--dark);
            font-size: 2.5rem;
            font-weight: 800;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: relative;
            display: inline-block;
        }
        
        .header h1::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 60%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            border-radius: 2px;
        }
        
        /* Create Tag Button */
        .createTag-btn a {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            text-decoration: none;
            padding: 0.85rem 1.75rem;
            border-radius: var(--border-radius);
            font-weight: 600;
            transition: var(--transition);
            box-shadow: var(--shadow);
            position: relative;
            overflow: hidden;
        }
        
        .createTag-btn a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: var(--transition);
        }
        
        .createTag-btn a:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 25px -5px rgba(139, 92, 246, 0.3);
        }
        
        .createTag-btn a:hover::before {
            left: 100%;
        }
        
        /* Table Container */
        .table-container {
            background-color: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            margin-bottom: 2rem;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        thead {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
        }
        
        th {
            padding: 1.25rem 1.5rem;
            text-align: left;
            font-weight: 600;
            color: white;
            font-size: 1rem;
        }
        
        th:first-child {
            border-top-left-radius: var(--border-radius);
        }
        
        th:last-child {
            border-top-right-radius: var(--border-radius);
        }
        
        td {
            padding: 1.25rem 1.5rem;
            border-bottom: 1px solid var(--gray-light);
        }
        
        tbody tr {
            transition: var(--transition);
        }
        
        tbody tr:last-child td {
            border-bottom: none;
        }
        
        tbody tr:hover {
            background-color: rgba(139, 92, 246, 0.05);
            transform: scale(1.01);
        }
        
        /* Number Column */
        td:first-child {
            font-weight: 600;
            color: var(--primary);
            width: 80px;
        }
        
        /* Tag Name Column */
        td:nth-child(2) {
            font-weight: 500;
            color: var(--dark);
        }
        
        /* Tag Badge Style */
        .tag-badge {
            display: inline-flex;
            align-items: center;
            background: linear-gradient(135deg, var(--secondary), var(--secondary-dark));
            color: white;
            padding: 0.4rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            box-shadow: 0 2px 4px rgba(6, 182, 212, 0.2);
        }
        
        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 0.75rem;
        }
        
        form {
            display: inline;
        }
        
        button[type="submit"] {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, var(--danger), #dc2626);
            color: white;
            border: none;
            padding: 0.65rem 1.25rem;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: 0 4px 6px rgba(239, 68, 68, 0.2);
        }
        
        button[type="submit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(239, 68, 68, 0.3);
        }
        
        /* Edit Button */
        .edit-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, var(--accent), #eab308);
            color: white;
            text-decoration: none;
            padding: 0.65rem 1.25rem;
            border-radius: 8px;
            font-weight: 500;
            transition: var(--transition);
            box-shadow: 0 4px 6px rgba(245, 158, 11, 0.2);
        }
        
        .edit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(245, 158, 11, 0.3);
            color: white;
        }
        
        /* Stats Cards */
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2.5rem;
        }
        
        .stat-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 1.5rem;
            box-shadow: var(--shadow);
            display: flex;
            align-items: center;
            gap: 1rem;
            transition: var(--transition);
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
        }
        
        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
        }
        
        .stat-icon.primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
        }
        
        .stat-content h3 {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--dark);
        }
        
        .stat-content p {
            color: var(--gray);
            font-size: 0.9rem;
        }
        
        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
            color: var(--gray);
        }
        
        .empty-state i {
            font-size: 4rem;
            margin-bottom: 1.5rem;
            color: var(--gray-light);
        }
        
        .empty-state h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 1.5rem;
            }
            
            .header {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .header h1 {
                font-size: 2rem;
            }
            
            .table-container {
                overflow-x: auto;
            }
            
            table {
                min-width: 600px;
            }
            
            th, td {
                padding: 1rem;
            }
            
            .stats-container {
                grid-template-columns: 1fr;
            }
            
            .action-buttons {
                flex-direction: column;
            }
        }
        
        /* Animation for table rows */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        tbody tr {
            animation: fadeIn 0.5s ease forwards;
        }
        
        tbody tr:nth-child(1) { animation-delay: 0.1s; }
        tbody tr:nth-child(2) { animation-delay: 0.2s; }
        tbody tr:nth-child(3) { animation-delay: 0.3s; }
        tbody tr:nth-child(4) { animation-delay: 0.4s; }
        tbody tr:nth-child(5) { animation-delay: 0.5s; }
    </style>
</head>

<body>

    @include('layouts._navbar')

    <div class="container">
        <div class="header">
            <h1>Kelola Tag</h1>
            <div class="createTag-btn">
                <a href="{{ route('tag.create') }}">
                    <i class="fas fa-plus-circle"></i>
                    Tambah Tag
                </a>
            </div>
        </div>
        
        <!-- Stats Cards -->
        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-icon primary">
                    <i class="fas fa-tags"></i>
                </div>
                <div class="stat-content">
                    <h3>{{ $tags->count() }}</h3>
                    <p>Total Tag</p>
                </div>
            </div>
        </div>
        
        @if($tags->count() > 0)
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Tag</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <span class="tag-badge">
                                    <i class="fas fa-tag"></i>
                                    {{ $tag->name }}
                                </span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <!-- Edit Button (Optional - if you have edit functionality) -->
                                    <!--
                                    <a href="" class="edit-btn">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </a>
                                    -->
                                    
                                    <form action="{{ route('tag.delete', $tag->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">
                                            <i class="fas fa-trash"></i>
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="empty-state">
            <i class="fas fa-tags"></i>
            <h3>Belum ada tag</h3>
            <p>Mulai dengan menambahkan tag pertama Anda</p>
            <div style="margin-top: 1.5rem;">
                <div class="createTag-btn">
                    <a href="{{ route('tag.create') }}">
                        <i class="fas fa-plus-circle"></i>
                        Tambah Tag Pertama
                    </a>
                </div>
            </div>
        </div>
        @endif
    </div>
    
    <script>
        // Add subtle animation to page load
        document.addEventListener('DOMContentLoaded', function() {
            document.body.style.opacity = 0;
            document.body.style.transition = 'opacity 0.5s ease';
            
            setTimeout(function() {
                document.body.style.opacity = 1;
            }, 100);
            
            // Add confirmation for delete actions
            const deleteForms = document.querySelectorAll('form[method="POST"]');
            deleteForms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    if (!confirm('Apakah Anda yakin ingin menghapus tag ini?')) {
                        e.preventDefault();
                    }
                });
            });
            
            // Add random tag colors for visual variety
            const tagBadges = document.querySelectorAll('.tag-badge');
            const colors = [
                'linear-gradient(135deg, #06b6d4, #0891b2)',
                'linear-gradient(135deg, #8b5cf6, #7c3aed)',
                'linear-gradient(135deg, #f59e0b, #eab308)',
                'linear-gradient(135deg, #10b981, #059669)',
                'linear-gradient(135deg, #ec4899, #db2777)'
            ];
            
            tagBadges.forEach(badge => {
                const randomColor = colors[Math.floor(Math.random() * colors.length)];
                badge.style.background = randomColor;
            });
        });
    </script>
</body>

</html>