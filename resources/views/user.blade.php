<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelola Kategori - LoudWave</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Modern CSS Reset and Variables */
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --secondary: #f43f5e;
            --secondary-dark: #e11d48;
            --light: #f8fafc;
            --dark: #1e293b;
            --gray: #64748b;
            --gray-light: #e2e8f0;
            --success: #10b981;
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
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
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

        /* Create Category Button */
        .createCategory-btn a {
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

        .createCategory-btn a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: var(--transition);
        }

        .createCategory-btn a:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 25px -5px rgba(99, 102, 241, 0.3);
        }

        .createCategory-btn a:hover::before {
            left: 100%;
        }

        /* Table Styles */
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
            background-color: rgba(99, 102, 241, 0.05);
            transform: scale(1.01);
        }

        /* Number Column */
        td:first-child {
            font-weight: 600;
            color: var(--primary);
        }

        /* Category Name Column */
        td:nth-child(2) {
            font-weight: 500;
            color: var(--dark);
        }

        /* Delete Button */
        form {
            display: inline;
        }

        button[type="submit"] {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, var(--secondary), var(--secondary-dark));
            color: white;
            border: none;
            padding: 0.65rem 1.25rem;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: 0 4px 6px rgba(244, 63, 94, 0.2);
        }

        button[type="submit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(244, 63, 94, 0.3);
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

            th,
            td {
                padding: 1rem;
            }

            .stats-container {
                grid-template-columns: 1fr;
            }
        }

        /* Animation for table rows */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        tbody tr {
            animation: fadeIn 0.5s ease forwards;
        }

        tbody tr:nth-child(1) {
            animation-delay: 0.1s;
        }

        tbody tr:nth-child(2) {
            animation-delay: 0.2s;
        }

        tbody tr:nth-child(3) {
            animation-delay: 0.3s;
        }

        tbody tr:nth-child(4) {
            animation-delay: 0.4s;
        }

        tbody tr:nth-child(5) {
            animation-delay: 0.5s;
        }
    </style>
</head>

<body>

    @include('layouts._navbar')

    <div class="container">
        <div class="header">
            <h1>Kelola User</h1>
            {{-- <div class="createCategory-btn">
                <a href="{{ route('category.create') }}">
                    <i class="fas fa-plus-circle"></i>
                    Tambah Kateg
                </a>
            </div> --}}
        </div>

        <!-- Stats Cards -->
        {{-- <div class="stats-container">
            <div class="stat-card">
                <div class="stat-icon primary">
                    <i class="fas fa-layer-group"></i>
                </div>
                <div class="stat-content">
                    <h3>{{ $user->count() }}</h3>
                    <p>Total User</p>
                </div>
            </div>
        </div> --}}

        @if ($user->count() > 0)
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>List User</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($user as $pengguna)
                            @if (auth()->id() !== $pengguna->id)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $pengguna->name }}</td>
                                    <td>{{ $pengguna->role }}</td>
                                    <td>
                                        <form action="{{ route('user.delete', $pengguna->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                                <i class="fas fa-trash"></i> Hapus
                                            </button>
                                        </form>

                                        <a href="{{ route('user.editRole', $pengguna->id) }}" class="edit-btn">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            {{-- <div class="empty-state">
            <i class="fas fa-inbox"></i>
            <h3>Belum ada kategori</h3>
            <p>Mulai dengan menambahkan kategori pertama Anda</p>
            <div style="margin-top: 1.5rem;">
                <div class="createCategory-btn">
                    <a href="{{ route('category.create') }}">
                        <i class="fas fa-plus-circle"></i>
                        Tambah Kategori Pertama
                    </a>
                </div>
            </div>
        </div> --}}
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
                    if (!confirm('Apakah Anda yakin ingin menghapus kategori ini?')) {
                        e.preventDefault();
                    }
                });
            });
        });
    </script>
</body>

</html>
