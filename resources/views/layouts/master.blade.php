<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

        body {
            background: var(--light);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            color: var(--dark);
        }

        .dashboard-container {
            padding: 0;
            max-width: 100%;
        }

        /* Magazine Header */
        .magazine-header {
            background: var(--darker);
            padding: 80px 40px 60px;
            position: relative;
            overflow: hidden;
            border-bottom: none;
        }

        .magazine-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 20% 80%, rgba(138, 43, 226, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 107, 107, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(78, 205, 196, 0.05) 0%, transparent 50%);
        }

        .header-content {
            max-width: 1400px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .masthead {
            flex: 1;
        }

        .publication-name {
            font-size: 72px;
            font-weight: 900;
            color: var(--white);
            margin: 0 0 15px 0; 
            letter-spacing: -2px;
            text-transform: uppercase;
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(90deg, #8A2BE2, #FF6B6B, #4ECDC4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 200% auto;
            animation: gradientShift 5s ease infinite;
        }

        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .publication-tagline {
            color: var(--gray-medium);
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-top: 20px;
        }

        .header-date {
            text-align: right;
            color: var(--gray-medium);
            font-size: 16px;
        }

        .current-date {
            color: var(--white);
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .header-stats {
            display: flex;
            gap: 30px;
            margin-top: 20px;
        }

        .header-stat {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .header-stat-icon {
            font-size: 20px;
        }

        .header-stat-text {
            color: var(--white);
            font-weight: 600;
        }

        /* Stats Bar */
        .stats-bar {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 25px;
            max-width: 1400px;
            margin: -50px auto 0;
            padding: 0 40px;
            position: relative;
            z-index: 2;
        }

        .stat-item {
            background: var(--white);
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            display: flex;
            align-items: center;
            gap: 20px;
            transition: all 0.3s ease;
            border: 1px solid var(--gray-light);
            position: relative;
            overflow: hidden;
        }

        .stat-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 6px;
            height: 100%;
        }

        .stat-item:nth-child(1)::before {
            background: var(--gradient-primary);
        }

        .stat-item:nth-child(2)::before {
            background: var(--gradient-secondary);
        }

        .stat-item:nth-child(3)::before {
            background: var(--gradient-accent);
        }

        .stat-item:nth-child(4)::before {
            background: linear-gradient(135deg, #FFD93D 0%, #FF6B6B 100%);
        }

        .stat-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }

        .stat-icon {
            width: 70px;
            height: 70px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
        }

        .stat-item:nth-child(1) .stat-icon {
            background: var(--gradient-primary);
        }

        .stat-item:nth-child(2) .stat-icon {
            background: var(--gradient-secondary);
        }

        .stat-item:nth-child(3) .stat-icon {
            background: var(--gradient-accent);
        }

        .stat-item:nth-child(4) .stat-icon {
            background: linear-gradient(135deg, #FFD93D 0%, #FF6B6B 100%);
        }

        .stat-details {
            flex: 1;
        }

        .stat-label {
            font-size: 12px;
            color: var(--gray-dark);
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .stat-value {
            font-size: 36px;
            font-weight: 900;
            color: var(--dark);
            line-height: 1;
            font-family: 'Montserrat', sans-serif;
        }

        /* Main Content */
        .main-content {
            max-width: 1400px;
            margin: 80px auto;
            padding: 0 40px;
        }

        /* Alert */
        .alert {
            background: var(--white);
            color: var(--dark);
            padding: 20px 24px;
            border-radius: 12px;
            margin-bottom: 40px;
            display: flex;
            align-items: center;
            gap: 16px;
            border-left: 5px solid var(--primary);
            animation: slideIn 0.5s ease-out;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .alert-icon {
            font-size: 24px;
            color: var(--primary);
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

        /* Section Header */
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 2px solid var(--gray-light);
            flex-wrap: wrap;
            gap: 20px;
        }

        .section-title {
            font-size: 36px;
            font-weight: 900;
            color: var(--dark);
            margin: 0;
            position: relative;
            font-family: 'Montserrat', sans-serif;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -12px;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--gradient-primary);
            border-radius: 2px;
        }

        .section-controls {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .search-box {
            position: relative;
        }

        .search-box input {
            background: var(--white);
            border: 2px solid var(--gray-light);
            border-radius: 50px;
            padding: 14px 50px 14px 20px;
            width: 300px;
            font-size: 14px;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .search-box input:focus {
            outline: none;
            border-color: var(--primary);
            background: var(--white);
            box-shadow: 0 0 0 3px rgba(138, 43, 226, 0.1);
        }

        .search-box input::placeholder {
            color: var(--gray-medium);
        }

        .search-icon {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 18px;
            color: var(--primary);
        }

        /* Advanced Filter Controls */
        .filter-controls {
            background: var(--white);
            border-radius: 16px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--gray-light);
        }

        .filter-header {
            display: flex;
            justify-content: between;
            align-items: center;
            margin-bottom: 20px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .filter-title {
            font-size: 18px;
            font-weight: 700;
            color: var(--dark);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .filter-actions {
            display: flex;
            gap: 10px;
            margin-left: auto;
        }

        .filter-btn {
            padding: 10px 20px;
            border: 2px solid var(--gray-light);
            border-radius: 10px;
            background: var(--white);
            color: var(--gray-dark);
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .filter-btn:hover {
            border-color: var(--primary);
            color: var(--primary);
        }

        .filter-btn.active {
            background: var(--gradient-primary);
            color: white;
            border-color: var(--primary);
        }

        .filter-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .filter-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .filter-label {
            font-size: 13px;
            font-weight: 700;
            color: var(--gray-dark);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .filter-select,
        .filter-input {
            padding: 12px 15px;
            border: 2px solid var(--gray-light);
            border-radius: 10px;
            font-size: 14px;
            background: var(--white);
            color: var(--dark);
            transition: all 0.3s ease;
        }

        .filter-select:focus,
        .filter-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(138, 43, 226, 0.1);
        }

        .date-range {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .date-input {
            flex: 1;
        }

        .stats-filters {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .stat-filter {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 15px;
            background: var(--light);
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            color: var(--gray-dark);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .stat-filter:hover {
            background: var(--gray-light);
        }

        .stat-filter.active {
            background: var(--gradient-primary);
            color: white;
        }

        /* News Grid */
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .news-card {
            background: var(--white);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            text-decoration: none;
            display: block;
            border: 1px solid var(--gray-light);
        }

        .news-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            border-color: var(--primary);
        }

        .news-thumbnail {
            width: 100%;
            height: 220px;
            position: relative;
            overflow: hidden;
            background: var(--gray-light);
        }

        .news-thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .news-card:hover .news-thumbnail img {
            transform: scale(1.1);
        }

        .news-thumbnail-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 64px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
        }

        .category-badge {
            position: absolute;
            top: 16px;
            left: 16px;
            background: var(--gradient-primary);
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 10px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--white);
            border: 2px solid var(--white);
        }

        .news-content {
            padding: 28px;
            background: var(--white);
        }

        .news-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 18px;
            gap: 10px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--gray-light);
        }

        .author-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .author-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--gradient-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            font-weight: 800;
            color: var(--white);
        }

        .author-name {
            font-size: 13px;
            font-weight: 700;
            color: var(--dark);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .date-text {
            font-size: 11px;
            color: var(--gray-dark);
            display: flex;
            align-items: center;
            gap: 4px;
            font-weight: 600;
        }

        .news-title {
            font-size: 20px;
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 12px;
            line-height: 1.3;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            font-family: 'Montserrat', sans-serif;
        }

        .news-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 18px;
            margin-top: 16px;
        }

        .read-more {
            font-size: 11px;
            font-weight: 900;
            color: var(--primary);
            text-transform: uppercase;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }

        .news-card:hover .read-more {
            transform: translateX(5px);
        }

        .news-stats {
            display: flex;
            gap: 16px;
            font-size: 12px;
            color: var(--gray-dark);
            font-weight: 600;
        }

        .stat-item-small {
            display: flex;
            align-items: center;
            gap: 5px;
            background: var(--light);
            padding: 4px 10px;
            border-radius: 50px;
        }

        /* Data Table View */
        .table-view {
            display: none;
            background: var(--white);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            margin-top: 40px;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            background: var(--white);
        }

        .data-table th {
            background: var(--gradient-primary);
            color: white;
            padding: 20px;
            text-align: left;
            font-weight: 700;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .data-table td {
            padding: 20px;
            border-bottom: 1px solid var(--gray-light);
            vertical-align: middle;
        }

        .data-table tr:last-child td {
            border-bottom: none;
        }

        .data-table tr:hover {
            background: rgba(138, 43, 226, 0.03);
        }

        .table-thumbnail {
            width: 60px;
            height: 40px;
            border-radius: 8px;
            object-fit: cover;
        }

        .table-actions {
            display: flex;
            gap: 8px;
        }

        .table-btn {
            padding: 8px 12px;
            border: none;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .table-btn.view {
            background: var(--gradient-accent);
            color: white;
        }

        .table-btn.edit {
            background: var(--gradient-secondary);
            color: white;
        }

        /* View Toggle */
        .view-toggle {
            display: flex;
            background: var(--light);
            border-radius: 12px;
            padding: 5px;
            margin-left: 15px;
        }

        .view-option {
            padding: 10px 15px;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 600;
            font-size: 13px;
        }

        .view-option.active {
            background: var(--white);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
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
            font-size: 100px;
            margin-bottom: 20px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .empty-state h3 {
            font-size: 28px;
            font-weight: 900;
            color: var(--dark);
            margin-bottom: 10px;
            text-transform: uppercase;
            font-family: 'Montserrat', sans-serif;
        }

        .empty-state p {
            color: var(--gray-dark);
            font-size: 16px;
        }

        /* Pagination */
        .pagination-wrapper {
            margin-top: 50px;
            display: flex;
            justify-content: center;
        }

        .pagination-wrapper .pagination {
            display: flex;
            gap: 10px;
        }

        .pagination-wrapper .page-item .page-link {
            padding: 12px 20px;
            border: 2px solid var(--gray-light);
            border-radius: 12px;
            color: var(--dark);
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .pagination-wrapper .page-item.active .page-link {
            background: var(--gradient-primary);
            border-color: var(--primary);
            color: white;
        }

        .pagination-wrapper .page-item .page-link:hover {
            border-color: var(--primary);
            transform: translateY(-2px);
        }

        /* Featured Section */
        .featured-section {
            margin-bottom: 60px;
        }

        .featured-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
        }

        #searchInput {
            position: relative;
            z-index: 3;
        }

        .featured-main {
            background: var(--white);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            text-decoration: none;
            display: block;
            border: 1px solid var(--gray-light);
        }

        .featured-main:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .featured-main .news-thumbnail {
            height: 400px;
        }

        .featured-main .news-content {
            padding: 30px;
        }

        .featured-main .news-title {
            font-size: 28px;
        }

        .featured-side {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .featured-side-item {
            background: var(--white);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            text-decoration: none;
            display: flex;
            border: 1px solid var(--gray-light);
        }

        .featured-side-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .featured-side-item .news-thumbnail {
            width: 120px;
            height: 120px;
            flex-shrink: 0;
        }

        .featured-side-item .news-content {
            padding: 20px;
            flex: 1;
        }

        .featured-side-item .news-title {
            font-size: 16px;
            margin-bottom: 8px;
        }

        /* Music Categories */
        .category-filters {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .category-filter {
            padding: 10px 20px;
            background: var(--white);
            border: 2px solid var(--gray-light);
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
            color: var(--gray-dark);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .category-filter:hover,
        .category-filter.active {
            background: var(--gradient-primary);
            color: white;
            border-color: var(--primary);
            transform: translateY(-2px);
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .featured-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 1024px) {
            .stats-bar {
                grid-template-columns: repeat(2, 1fr);
            }

            .news-grid {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
                gap: 20px;
            }

            .filter-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .magazine-header {
                padding: 60px 20px 40px;
            }

            .header-top {
                flex-direction: column;
            }

            .publication-name {
                font-size: 48px;
            }

            .header-date {
                text-align: left;
            }

            .stats-bar {
                grid-template-columns: 1fr;
                padding: 0 20px;
                gap: 15px;
            }

            .main-content {
                padding: 0 20px;
                margin: 60px auto;
            }

            .section-title {
                font-size: 28px;
            }

            .search-box input {
                width: 100%;
            }

            .news-grid {
                grid-template-columns: 1fr;
            }

            .featured-main .news-thumbnail {
                height: 250px;
            }

            .featured-side-item {
                flex-direction: column;
            }

            .featured-side-item .news-thumbnail {
                width: 100%;
                height: 150px;
            }

            .data-table {
                font-size: 12px;
            }

            .data-table th,
            .data-table td {
                padding: 12px 8px;
            }

            .table-actions {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            .publication-name {
                font-size: 36px;
            }

            .stat-value {
                font-size: 28px;
            }

            .news-thumbnail {
                height: 200px;
            }

            .news-content {
                padding: 20px;
            }

            .section-controls {
                flex-direction: column;
                width: 100%;
            }

            .view-toggle {
                margin-left: 0;
                margin-top: 10px;
            }
        }

        /* Enhanced Search Styles */
        .search-container {
            position: relative;
            width: 100%;
            max-width: 700px;
        }

        .search-box {
            position: relative;
            width: 100%;
        }

        .search-box input {
            background: var(--white);
            border: 2px solid var(--gray-light);
            border-radius: 50px;
            padding: 14px 50px 14px 45px;
            width: 100%;
            font-size: 14px;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .search-box input:focus {
            outline: none;
            border-color: var(--primary);
            background: var(--white);
            box-shadow: 0 0 0 3px rgba(138, 43, 226, 0.1);
        }

        .search-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 18px;
            color: var(--primary);
        }

        .search-actions {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            gap: 8px;
        }

        .search-clear {
            background: none;
            border: none;
            font-size: 16px;
            color: var(--gray-medium);
            cursor: pointer;
            padding: 4px;
            border-radius: 50%;
            transition: all 0.3s ease;
            display: none;
        }

        .search-clear:hover {
            background: var(--gray-light);
            color: var(--gray-dark);
        }

        .search-btn {
            background: var(--gradient-primary);
            border: none;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .search-btn:hover {
            transform: scale(1.1);
        }

        /* Search Results Styles */
        .search-results-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding: 20px;
            background: var(--white);
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .search-results-count {
            font-weight: 600;
            color: var(--dark);
        }

        .search-highlight {
            background: linear-gradient(120deg, var(--primary) 0%, var(--secondary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 700;
        }

        .search-suggestions {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: var(--white);
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border: 1px solid var(--gray-light);
            z-index: 100;
            max-height: 300px;
            overflow-y: auto;
            display: none;
        }

        .suggestion-item {
            padding: 12px 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            border-bottom: 1px solid var(--gray-light);
        }

        .suggestion-item:last-child {
            border-bottom: none;
        }

        .suggestion-item:hover {
            background: var(--light);
        }

        .suggestion-title {
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 4px;
        }

        .suggestion-meta {
            font-size: 12px;
            color: var(--gray-medium);
            display: flex;
            gap: 10px;
        }

        .no-results {
            text-align: center;
            padding: 40px 20px;
            color: var(--gray-medium);
        }

        .no-results-icon {
            font-size: 48px;
            margin-bottom: 16px;
            opacity: 0.5;
        }

        /* Quick Search Filters */
        .quick-search-filters {
            display: flex;
            gap: 10px;
            margin-top: 15px;
            flex-wrap: wrap;
        }

        .quick-filter {
            padding: 6px 12px;
            background: var(--light);
            border: 1px solid var(--gray-light);
            border-radius: 15px;
            font-size: 12px;
            font-weight: 600;
            color: var(--gray-dark);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .quick-filter:hover {
            background: var(--gray-light);
        }

        .quick-filter.active {
            background: var(--gradient-primary);
            color: white;
            border-color: var(--primary);
        }

        /* Search Loading */
        .search-loading {
            display: none;
            text-align: center;
            padding: 20px;
            color: var(--primary);
        }

        .search-loading::after {
            content: '...';
            animation: dots 1.5s steps(4, end) infinite;
        }

        @keyframes dots {

            0%,
            20% {
                content: '.';
            }

            40% {
                content: '..';
            }

            60%,
            100% {
                content: '...';
            }
        }

        /* Recent Searches */
        .recent-searches {
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid var(--gray-light);
        }

        .recent-title {
            font-size: 12px;
            font-weight: 600;
            color: var(--gray-medium);
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .recent-tags {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .recent-tag {
            padding: 4px 10px;
            background: var(--light);
            border-radius: 10px;
            font-size: 11px;
            color: var(--gray-dark);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .recent-tag:hover {
            background: var(--gray-light);
            transform: translateY(-1px);
        }

        /* Responsive Search */
        @media (max-width: 768px) {
            .search-container {
                max-width: 100%;
            }

            .search-results-header {
                flex-direction: column;
                gap: 10px;
                align-items: flex-start;
            }

            .quick-search-filters {
                justify-content: center;
            }
        }

        /* Chart Section Styles */
        .chart-section {
            margin: 60px 0;
        }

        .chart-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }

        .chart-card {
            background: var(--white);
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--gray-light);
            transition: all 0.3s ease;
        }

        .chart-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }

        .chart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .chart-title {
            font-size: 20px;
            font-weight: 800;
            color: var(--dark);
            margin: 0;
            font-family: 'Montserrat', sans-serif;
        }

        .chart-subtitle {
            font-size: 14px;
            color: var(--gray-medium);
            margin-top: 5px;
        }

        .chart-actions {
            display: flex;
            gap: 10px;
        }

        .chart-action-btn {
            background: var(--light);
            border: 1px solid var(--gray-light);
            border-radius: 8px;
            padding: 8px 12px;
            font-size: 12px;
            font-weight: 600;
            color: var(--gray-dark);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .chart-action-btn:hover {
            background: var(--gray-light);
        }

        .chart-wrapper {
            position: relative;
            height: 300px;
            width: 100%;
        }

        .chart-placeholder {
            height: 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: var(--light);
            border-radius: 12px;
            color: var(--gray-medium);
        }

        .chart-placeholder-icon {
            font-size: 48px;
            margin-bottom: 16px;
            opacity: 0.5;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .stat-card-modern {
            background: var(--white);
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--gray-light);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-card-modern:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .stat-card-modern::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 6px;
            height: 100%;
            background: var(--gradient-primary);
        }

        .stat-card-content {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .stat-icon-wrapper {
            width: 70px;
            height: 70px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            background: var(--gradient-primary);
            color: white;
        }

        .stat-details-modern {
            flex: 1;
        }

        .stat-value-modern {
            font-size: 36px;
            font-weight: 900;
            color: var(--dark);
            line-height: 1;
            font-family: 'Montserrat', sans-serif;
            margin-bottom: 5px;
        }

        .stat-label-modern {
            font-size: 12px;
            color: var(--gray-dark);
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .stat-trend {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 12px;
            font-weight: 600;
            color: var(--accent);
        }

        /* Responsive Chart Layout */
        @media (max-width: 1024px) {
            .chart-container {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .chart-section {
                margin: 40px 0;
            }
            
            .chart-card {
                padding: 20px;
            }
            
            .chart-wrapper {
                height: 250px;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .stat-card-modern {
                padding: 25px;
            }
            
            .stat-value-modern {
                font-size: 28px;
            }
        }

        @media (max-width: 480px) {
            .chart-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .chart-actions {
                width: 100%;
                justify-content: space-between;
            }
            
            .chart-action-btn {
                flex: 1;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <div class="dashboard-container">
        @include('layouts._navbar')

        <!-- Magazine Header -->
        <div class="magazine-header">
            <div class="header-content">
                <div class="header-top">
                    <div class="masthead">
                        <h1 class="publication-name">LOUDWAVE</h1>
                        <p class="publication-tagline">Your Ultimate Music News Destination</p>
                        {{-- <div class="header-stats">
                            <div class="header-stat">
                                <span class="header-stat-icon">🔥</span>
                                <span class="header-stat-text">{{ $posts->where('views', '>', 100)->count() }} Trending Articles</span>
                            </div>
                            <div class="header-stat">
                                <span class="header-stat-icon">🎵</span>
                                <span class="header-stat-text">{{ $posts->where('created_at', '>=', today())->count() }} New Releases</span>
                            </div>
                        </div> --}}
                    </div>
                    {{-- <div class="header-date">
                        <div class="current-date">{{ now()->format('l, F d, Y') }}</div>
                        <div>Music News Dashboard</div>
                    </div> --}}
                </div>
            </div>
        </div>

        <!-- Stats Bar -->
        {{-- <div class="stats-bar">
            <div class="stat-item">
                <div class="stat-icon">📰</div>
                <div class="stat-details">
                    <div class="stat-label">Total Articles</div>
                    <div class="stat-value">{{ $posts->total() }}</div>
                </div>
            </div>
            <div class="stat-item">
                <div class="stat-icon">🎵</div>
                <div class="stat-details">
                    <div class="stat-label">Published Today</div>
                    <div class="stat-value">{{ $posts->where('created_at', '>=', today())->count() }}</div>
                </div>
            </div>
            <div class="stat-item">
                <div class="stat-icon">👁️</div>
                <div class="stat-details">
                    <div class="stat-label">Total Readers</div>
                    <div class="stat-value">{{ number_format($posts->sum('views') ?? 0) }}</div>
                </div>
            </div>
            <div class="stat-item">
                <div class="stat-icon">🔥</div>
                <div class="stat-details">
                    <div class="stat-label">Trending Now</div>
                    <div class="stat-value">{{ $posts->where('views', '>', 100)->count() }}</div>
                </div>
            </div>
        </div> --}}

        <!-- Modern Stats Grid -->
        <div class="main-content">
            <div class="stats-grid">
                <div class="stat-card-modern">
                    <div class="stat-card-content">
                        <div class="stat-icon-wrapper">📰</div>
                        <div class="stat-details-modern">
                            <div class="stat-label-modern">Total Berita</div>
                            <div class="stat-value-modern">{{ number_format($totalPosts) }}</div>
                            <div class="stat-trend">
                                <span>📈</span>
                                <span>{{ $todayPosts }} hari ini</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="stat-card-modern">
                    <div class="stat-card-content">
                        <div class="stat-icon-wrapper">📂</div>
                        <div class="stat-details-modern">
                            <div class="stat-label-modern">Kategori</div>
                            <div class="stat-value-modern">{{ number_format($totalCategories) }}</div>
                            <div class="stat-trend">
                                <span>📊</span>
                                <span>{{ $categoryStats->count() }} aktif</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="stat-card-modern">
                    <div class="stat-card-content">
                        <div class="stat-icon-wrapper">🏷️</div>
                        <div class="stat-details-modern">
                            <div class="stat-label-modern">Tags</div>
                            <div class="stat-value-modern">{{ number_format($totalTags) }}</div>
                            <div class="stat-trend">
                                <span>🔖</span>
                                <span>Semua kategori</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="stat-card-modern">
                    <div class="stat-card-content">
                        <div class="stat-icon-wrapper">👥</div>
                        <div class="stat-details-modern">
                            <div class="stat-label-modern">Pengguna</div>
                            <div class="stat-value-modern">{{ number_format($userStats) }}</div>
                            <div class="stat-trend">
                                <span>👤</span>
                                <span>Aktif</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chart Section -->
            <div class="chart-section">
                <div class="section-header">
                    <h2 class="section-title">Analytics & Insights</h2>
                    <p class="section-subtitle">Visualisasi data berita dan kategori</p>
                </div>

                <div class="chart-container">
                    <!-- Monthly Posts Chart -->
                    <div class="chart-card">
                        <div class="chart-header">
                            <div>
                                <h3 class="chart-title">Berita Bulanan</h3>
                                <p class="chart-subtitle">Jumlah berita yang diterbitkan per bulan</p>
                            </div>
                            {{-- <div class="chart-actions">
                                <button class="chart-action-btn" onclick="exportChart('postsChart')">📥 Export</button>
                                <button class="chart-action-btn" onclick="toggleChartView('postsChart')">🔄 Tampilan</button>
                            </div> --}}
                        </div>
                        <div class="chart-wrapper">
                            @if(count($months) > 0 && count($postsCount) > 0)
                                <canvas id="postsChart"></canvas>
                            @else
                                <div class="chart-placeholder">
                                    <div class="chart-placeholder-icon">📊</div>
                                    <p>Data berita bulanan tidak tersedia</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Category Distribution Chart -->
                    <div class="chart-card">
                        <div class="chart-header">
                            <div>
                                <h3 class="chart-title">Distribusi Kategori</h3>
                                <p class="chart-subtitle">Persebaran berita berdasarkan kategori</p>
                            </div>
                            {{-- <div class="chart-actions">
                                <button class="chart-action-btn" onclick="exportChart('categoryChart')">📥 Export</button>
                                <button class="chart-action-btn" onclick="toggleChartView('categoryChart')">🔄 Tampilan</button>
                            </div> --}}
                        </div>
                        <div class="chart-wrapper">
                            @if($categoryStats->count() > 0)
                                <canvas id="categoryChart"></canvas>
                            @else
                                <div class="chart-placeholder">
                                    <div class="chart-placeholder-icon">📈</div>
                                    <p>Data kategori tidak tersedia</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Success Alert -->
            @if (session('success'))
                <div class="alert">
                    <div class="alert-icon">✅</div>
                    <div class="alert-text">{{ session('success') }}</div>
                </div>
            @endif

            <!-- Featured Section -->
            @if ($posts->count() > 0)
                @php
                    $featuredPost = $posts->first();
                    $sidePosts = $posts->skip(1)->take(3);
                @endphp

                <div class="featured-section">
                    <div class="section-header">
                        <h2 class="section-title">Featured Story</h2>
                    </div>
                    <div class="featured-grid">
                        <a href="{{ route('posts.show', $featuredPost) }}" class="featured-main">
                            <div class="news-thumbnail">
                                @if ($featuredPost->thumbnail)
                                    <img src="{{ asset('storage/' . $featuredPost->thumbnail) }}" alt="{{ $featuredPost->title }}">
                                @else
                                    <div class="news-thumbnail-placeholder">🎤</div>
                                @endif
                                <div class="category-badge {{ $featuredPost->category ? strtolower($featuredPost->category->name) : 'music' }}">
                                    {{ $featuredPost->category->name ?? 'Featured' }}
                                </div>
                            </div>
                            <div class="news-content">
                                <div class="news-meta">
                                    <div class="author-info">
                                        <div class="author-avatar">
                                            {{ substr($featuredPost->user->name, 0, 1) }}
                                        </div>
                                        <span class="author-name">{{ $featuredPost
                                        ->user->name ?? 'Unknown Author' }}</span>
                                    </div>
                                    <div class="date-text">
                                        📅 {{ $featuredPost->created_at->format('M d, Y') }}
                                    </div>
                                </div>
                                <h3 class="news-title">{{ $featuredPost->title }}</h3>
                                <div class="news-footer">
                                    <div class="read-more">
                                        Read More →
                                    </div>
                                    <div class="news-stats">
                                        <div class="stat-item-small">
                                            <span>👁️</span>
                                            <span>{{ $featuredPost->views ?? 0 }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="featured-side">
                            @foreach ($sidePosts as $sidePost)
                                <a href="{{ route('posts.show', $sidePost) }}" class="featured-side-item">
                                    <div class="news-thumbnail">
                                        @if ($sidePost->thumbnail)
                                            <img src="{{ asset('storage/' . $sidePost->thumbnail) }}" alt="{{ $sidePost->title }}">
                                        @else
                                            <div class="news-thumbnail-placeholder">🎵</div>
                                        @endif
                                    </div>
                                    <div class="news-content">
                                        <h3 class="news-title">{{ $sidePost->title }}</h3>
                                        <div class="date-text">
                                            📅 {{ $sidePost->created_at->format('M d') }}
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

            <!-- Latest Articles Section -->
            <div class="section-header">
                <h2 class="section-title">Latest Music News</h2>
                <div class="section-controls">
                    <div class="search-container">
                        <div class="search-box">
                            <span class="search-icon">🔍</span>
                            <input type="text" placeholder="Search music articles, artists, genres..." id="searchInput">
                            <div class="search-actions">
                                <button class="search-clear" id="searchClear">✕</button>
                                <button class="search-btn" id="searchButton">↵</button>
                            </div>
                            <div class="search-suggestions" id="searchSuggestions"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Search Results Header -->
            <div class="search-results-header" id="searchResultsHeader" style="display: none;">
                <div class="search-results-count" id="searchResultsCount"></div>
                <div class="search-highlight" id="searchQuery"></div>
            </div>

            <!-- Loading Indicator -->
            <div class="search-loading" id="searchLoading">Searching</div>

            @if ($posts->count() > 0)
                @php
                    $displayPosts = $posts->count() > 4 ? $posts->skip(4) : collect();
                @endphp

                @if ($displayPosts->count() > 0)
                    <!-- Grid View -->
                    <div class="news-grid" id="newsGrid">
                        @foreach ($displayPosts as $post)
                            <a href="{{ route('posts.show', $post) }}" class="news-card"
                                data-title="{{ strtolower($post->title) }}"
                                data-author="{{ strtolower($post->author) }}"
                                data-content="{{ strtolower(strip_tags($post->content)) }}"
                                data-category="{{ $post->category ? strtolower($post->category->name) : 'uncategorized' }}"
                                data-views="{{ $post->views ?? 0 }}"
                                data-date="{{ $post->created_at->format('Y-m-d') }}"
                                data-popular="{{ $post->views > 100 ? 'true' : 'false' }}"
                                data-category-id="{{ $post->category_id }}">
                                <div class="news-thumbnail">
                                    @if ($post->thumbnail)
                                        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}">
                                    @else
                                        <div class="news-thumbnail-placeholder">🎵</div>
                                    @endif
                                    <div class="category-badge {{ $post->category ? strtolower($post->category->name) : 'music' }}">
                                        {{ $post->category->name ?? 'Music' }}
                                    </div>
                                </div>
                                <div class="news-content">
                                    <div class="news-meta">
                                        <div class="author-info">
                                            <div class="author-avatar">
                                                {{ substr($post->user->name, 0, 1) }}
                                            </div>
                                            <span class="author-name">{{ $post->user->name ?? 'Unknown Author' }}</span>
                                        </div>
                                        <div class="date-text">
                                            📅 {{ $post->created_at->format('M d') }}
                                        </div>
                                    </div>
                                    <h3 class="news-title">{{ $post->title }}</h3>
                                    <div class="news-footer">
                                        <div class="read-more">
                                            Read More →
                                        </div>
                                        <div class="news-stats">
                                            <div class="stat-item-small">
                                                <span>👁️</span>
                                                <span>{{ $post->views ?? 0 }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>

                    <!-- Table View -->
                    <div class="table-view" id="tableView">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Article</th>
                                    <th>Author</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Views</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($displayPosts as $post)
                                    <tr data-title="{{ strtolower($post->title) }}"
                                        data-author="{{ strtolower($post->author) }}"
                                        data-content="{{ strtolower(strip_tags($post->content)) }}"
                                        data-category="{{ $post->category ? strtolower($post->category->name) : 'uncategorized' }}"
                                        data-views="{{ $post->views ?? 0 }}"
                                        data-date="{{ $post->created_at->format('Y-m-d') }}"
                                        data-popular="{{ $post->views > 100 ? 'true' : 'false' }}"
                                        data-category-id="{{ $post->category_id }}">
                                        <td>
                                            <div style="display: flex; align-items: center; gap: 12px;">
                                                @if ($post->thumbnail)
                                                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="table-thumbnail">
                                                @else
                                                    <div style="width: 60px; height: 40px; background: var(--gradient-primary); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px;">
                                                        🎵
                                                    </div>
                                                @endif
                                                <div>
                                                    <div style="font-weight: 700; margin-bottom: 4px;">
                                                        {{ $post->title }}</div>
                                                    <div style="font-size: 12px; color: var(--gray-medium);">
                                                        {{ Str::limit(strip_tags($post->content), 50) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $post->author }}</td>
                                        <td>
                                            <span class="table-category {{ $post->category ? strtolower($post->category->name) : 'music' }}"
                                                style="background: {{ $post->category ? 'var(--gradient-primary)' : 'var(--gray-medium)' }};">
                                                {{ $post->category->name ?? 'Uncategorized' }}
                                            </span>
                                        </td>
                                        <td>{{ $post->created_at->format('M d, Y') }}</td>
                                        <td>
                                            <span style="font-weight: 700; color: var(--primary);">{{ $post->views ?? 0 }}</span>
                                        </td>
                                        <td>
                                            @if ($post->views > 100)
                                                <span style="background: var(--gradient-secondary); color: white; padding: 4px 8px; border-radius: 12px; font-size: 11px; font-weight: 700;">
                                                    TRENDING
                                                </span>
                                            @else
                                                <span style="background: var(--gray-light); color: var(--gray-dark); padding: 4px 8px; border-radius: 12px; font-size: 11px; font-weight: 700;">
                                                    NORMAL
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="{{ route('posts.show', $post) }}" class="table-btn view">
                                                    <span>👁️</span>
                                                    View
                                                </a>
                                                <a href="{{ route('posts.edit', $post) }}" class="table-btn edit">
                                                    <span>✏️</span>
                                                    Edit
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="pagination-wrapper">
                        {{ $posts->links() }}
                    </div>
                @endif
            @else
                <div class="empty-state">
                    <div class="empty-icon">🎵</div>
                    <h3>No Music Articles Yet</h3>
                    <p>Start creating your first music story to see it here</p>
                </div>
            @endif
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Modern Chart Styling
            Chart.defaults.font.family = "'Inter', 'Segoe UI', sans-serif";
            Chart.defaults.color = '#6c757d';
            Chart.defaults.plugins.tooltip.backgroundColor = 'rgba(0, 0, 0, 0.8)';
            Chart.defaults.plugins.tooltip.padding = 12;
            Chart.defaults.plugins.tooltip.cornerRadius = 8;
            Chart.defaults.plugins.legend.labels.usePointStyle = true;

            // Monthly Posts Chart
            @if (count($months) > 0 && count($postsCount) > 0)
                const postsCtx = document.getElementById('postsChart').getContext('2d');
                const postsChart = new Chart(postsCtx, {
                    type: 'bar',
                    data: {
                        labels: @json($months),
                        datasets: [{
                            label: 'Jumlah Berita',
                            data: @json($postsCount),
                            backgroundColor: 'rgba(138, 43, 226, 0.8)',
                            borderColor: 'rgba(138, 43, 226, 1)',
                            borderWidth: 0,
                            borderRadius: 8,
                            borderSkipped: false,
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                display: false
                            },
                            title: {
                                display: false
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                grid: {
                                    color: 'rgba(0, 0, 0, 0.05)'
                                },
                                ticks: {
                                    stepSize: 1,
                                    font: {
                                        size: 11
                                    }
                                }
                            },
                            x: {
                                grid: {
                                    display: false
                                },
                                ticks: {
                                    font: {
                                        size: 11
                                    }
                                }
                            }
                        },
                        interaction: {
                            intersect: false,
                            mode: 'index'
                        },
                        animation: {
                            duration: 1000,
                            easing: 'easeOutQuart'
                        }
                    }
                });
            @endif

            // Category Distribution Chart
            @if ($categoryStats->count() > 0)
                const categoryCtx = document.getElementById('categoryChart').getContext('2d');
                const categoryChart = new Chart(categoryCtx, {
                    type: 'doughnut',
                    data: {
                        labels: @json($categoryStats->pluck('name')),
                        datasets: [{
                            data: @json($categoryStats->pluck('posts_count')),
                            backgroundColor: [
                                '#8A2BE2', '#FF6B6B', '#4ECDC4', '#FFD93D', '#6A0DAD',
                                '#FF8E53', '#44A08D', '#C44569', '#F8C630', '#00BBF9'
                            ],
                            borderWidth: 0,
                            hoverOffset: 20
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        cutout: '60%',
                        plugins: {
                            legend: {
                                position: 'bottom',
                                labels: {
                                    padding: 20,
                                    boxWidth: 12,
                                    font: {
                                        size: 11
                                    }
                                }
                            }
                        },
                        animation: {
                            animateScale: true,
                            animateRotate: true,
                            duration: 1000,
                            easing: 'easeOutQuart'
                        }
                    }
                });
            @endif
        });

        // Chart Utility Functions
        function exportChart(chartId) {
            const chartCanvas = document.getElementById(chartId);
            if (chartCanvas) {
                const link = document.createElement('a');
                link.download = `${chartId}-${new Date().toISOString().split('T')[0]}.png`;
                link.href = chartCanvas.toDataURL('image/png');
                link.click();
            }
        }

        function toggleChartView(chartId) {
            // This function can be extended to switch between chart types
            console.log(`Toggle view for ${chartId}`);
            // Implementation for switching chart types would go here
        }


        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.getElementById("searchInput");
            const searchButton = document.getElementById("searchButton");
            const searchClear = document.getElementById("searchClear");
            const newsGrid = document.getElementById("newsGrid");

            const loading = document.getElementById("searchLoading");
            const resultHeader = document.getElementById("searchResultsHeader");
            const resultCount = document.getElementById("searchResultsCount");
            const resultQuery = document.getElementById("searchQuery");

            const allCards = document.querySelectorAll(".news-card");

            // ===========
            //  SEARCH FUNCTION
            // ===========
            function performSearch() {
                const query = searchInput.value.trim().toLowerCase();

                // Show loading
                loading.style.display = "block";
                resultHeader.style.display = "none";

                setTimeout(() => {
                    loading.style.display = "none";

                    let visibleCount = 0;

                    allCards.forEach(card => {
                        const title = card.dataset.title;
                        const author = card.dataset.author;
                        const category = card.dataset.category;
                        const content = card.dataset.content;

                        const matches =
                            title.includes(query) ||
                            author.includes(query) ||
                            category.includes(query) ||
                            content.includes(query);

                        if (!query) {
                            card.style.display = "block";
                            visibleCount++;
                        } else if (matches) {
                            card.style.display = "block";
                            visibleCount++;
                        } else {
                            card.style.display = "none";
                        }
                    });

                    // Show result header
                    if (query !== "") {
                        resultHeader.style.display = "flex";
                        resultQuery.innerHTML = `Results for: <strong>${query}</strong>`;
                        resultCount.innerHTML = `${visibleCount} articles found`;
                    } else {
                        resultHeader.style.display = "none";
                    }

                    // No result message
                    if (visibleCount === 0) {
                        newsGrid.innerHTML = `
                    <div style="padding: 30px; text-align:center; font-size: 18px; opacity: 0.7;">
                        No results found for "<strong>${query}</strong>"
                    </div>
                `;
                    } else {
                        // restore if needed
                    }
                }, 400); // small delay for effect
            }

            // ===========
            // EVENTS
            // ===========
            searchButton.addEventListener("click", performSearch);

            searchInput.addEventListener("keydown", e => {
                if (e.key === "Enter") {
                    e.preventDefault();
                    performSearch();
                }
            });

            // Clear button
            searchClear.addEventListener("click", () => {
                searchInput.value = "";
                performSearch();
                resultHeader.style.display = "none";
            });

            // Real-time suggestions (optional)
            searchInput.addEventListener("input", () => {
                if (!searchInput.value) {
                    resultHeader.style.display = "none";
                }
            });
        });
        // Enhanced Search Functionality
        class ArticleSearch {
            constructor() {
                this.searchInput = document.getElementById('searchInput');
                this.searchClear = document.getElementById('searchClear');
                this.searchButton = document.getElementById('searchButton');
                this.searchSuggestions = document.getElementById('searchSuggestions');
                this.searchResultsHeader = document.getElementById('searchResultsHeader');
                this.searchResultsCount = document.getElementById('searchResultsCount');
                this.searchQuery = document.getElementById('searchQuery');
                this.searchLoading = document.getElementById('searchLoading');
                this.recentSearches = document.getElementById('recentSearches');
                this.recentTags = document.getElementById('recentTags');
                this.quickFilters = document.querySelectorAll('.quick-filter');

                this.currentSearchType = 'all';
                this.recentSearchesList = this.getRecentSearches();
                this.init();
            }

            init() {
                this.setupEventListeners();
                this.showRecentSearches();
            }

            setupEventListeners() {
                // Search input events
                this.searchInput.addEventListener('input', (e) => {
                    this.handleSearchInput(e.target.value);
                });

                this.searchInput.addEventListener('focus', () => {
                    this.showSuggestions();
                });

                this.searchInput.addEventListener('keypress', (e) => {
                    if (e.key === 'Enter') {
                        this.performSearch();
                    }
                });

                // Search actions
                this.searchClear.addEventListener('click', () => {
                    this.clearSearch();
                });

                this.searchButton.addEventListener('click', () => {
                    this.performSearch();
                });

                // Quick filters
                this.quickFilters.forEach(filter => {
                    filter.addEventListener('click', () => {
                        this.setSearchType(filter);
                    });
                });

                // Close suggestions when clicking outside
                document.addEventListener('click', (e) => {
                    if (!this.searchInput.contains(e.target) && !this.searchSuggestions.contains(e.target)) {
                        this.hideSuggestions();
                    }
                });
            }

            handleSearchInput(query) {
                this.toggleClearButton(query);

                if (query.length > 2) {
                    this.showSuggestions();
                    this.generateSuggestions(query);
                } else {
                    this.hideSuggestions();
                }
            }

            toggleClearButton(query) {
                this.searchClear.style.display = query ? 'block' : 'none';
            }

            showSuggestions() {
                this.searchSuggestions.style.display = 'block';
            }

            hideSuggestions() {
                this.searchSuggestions.style.display = 'none';
            }

            generateSuggestions(query) {
                const allArticles = this.getAllArticles();
                const suggestions = allArticles.filter(article =>
                    article.title.toLowerCase().includes(query.toLowerCase()) ||
                    article.author.toLowerCase().includes(query.toLowerCase()) ||
                    article.category.toLowerCase().includes(query.toLowerCase())
                ).slice(0, 5);

                this.displaySuggestions(suggestions, query);
            }

            displaySuggestions(suggestions, query) {
                if (suggestions.length === 0) {
                    this.searchSuggestions.innerHTML = `
                        <div class="no-results">
                            <div class="no-results-icon">🔍</div>
                            <div>No matches found for "${query}"</div>
                        </div>
                    `;
                    return;
                }

                this.searchSuggestions.innerHTML = suggestions.map(article => `
                    <div class="suggestion-item" data-id="${article.id}">
                        <div class="suggestion-title">${this.highlightText(article.title, query)}</div>
                        <div class="suggestion-meta">
                            <span>By ${article.author}</span>
                            <span>•</span>
                            <span>${article.category}</span>
                        </div>
                    </div>
                `).join('');

                // Add click event to suggestions
                this.searchSuggestions.querySelectorAll('.suggestion-item').forEach(item => {
                    item.addEventListener('click', () => {
                        const articleId = item.getAttribute('data-id');
                        this.navigateToArticle(articleId);
                    });
                });
            }

            getAllArticles() {
                const articles = [];
                document.querySelectorAll('.news-card').forEach(card => {
                    articles.push({
                        id: card.getAttribute('href').split('/').pop(),
                        title: card.querySelector('.news-title').textContent,
                        author: card.getAttribute('data-author'),
                        category: card.querySelector('.category-badge').textContent,
                        date: card.getAttribute('data-date')
                    });
                });
                return articles;
            }

            highlightText(text, query) {
                const regex = new RegExp(`(${query})`, 'gi');
                return text.replace(regex, '<mark class="search-highlight">$1</mark>');
            }

            performSearch() {
                const query = this.searchInput.value.trim();
                if (!query) return;

                this.showLoading();
                this.saveRecentSearch(query);

                // Simulate search delay
                setTimeout(() => {
                    this.executeSearch(query);
                    this.hideLoading();
                    this.hideSuggestions();
                }, 500);
            }

            executeSearch(query) {
                const allArticles = document.querySelectorAll('.news-card, .data-table tbody tr');
                let visibleCount = 0;

                allArticles.forEach(article => {
                    const title = article.getAttribute('data-title') || '';
                    const author = article.getAttribute('data-author') || '';
                    const content = article.getAttribute('data-content') || '';
                    const category = article.getAttribute('data-category') || '';

                    let matches = false;

                    switch (this.currentSearchType) {
                        case 'title':
                            matches = title.includes(query.toLowerCase());
                            break;
                        case 'author':
                            matches = author.includes(query.toLowerCase());
                            break;
                        case 'content':
                            matches = content.includes(query.toLowerCase());
                            break;
                        case 'category':
                            matches = category.includes(query.toLowerCase());
                            break;
                        default: // all
                            matches = title.includes(query.toLowerCase()) ||
                                author.includes(query.toLowerCase()) ||
                                content.includes(query.toLowerCase()) ||
                                category.includes(query.toLowerCase());
                    }

                    article.style.display = matches ? '' : 'none';
                    if (matches) visibleCount++;
                });

                this.displaySearchResults(query, visibleCount);
            }

            displaySearchResults(query, count) {
                this.searchResultsHeader.style.display = 'flex';
                this.searchResultsCount.textContent = `${count} results found for`;
                this.searchQuery.textContent = `"${query}"`;

                // Scroll to results
                this.searchResultsHeader.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }

            clearSearch() {
                this.searchInput.value = '';
                this.searchClear.style.display = 'none';
                this.hideSuggestions();
                this.searchResultsHeader.style.display = 'none';

                // Show all articles
                document.querySelectorAll('.news-card, .data-table tbody tr').forEach(item => {
                    item.style.display = '';
                });
            }

            setSearchType(filter) {
                this.quickFilters.forEach(f => f.classList.remove('active'));
                filter.classList.add('active');
                this.currentSearchType = filter.getAttribute('data-search-type');

                // Re-run search if there's a query
                if (this.searchInput.value.trim()) {
                    this.performSearch();
                }
            }

            showLoading() {
                this.searchLoading.style.display = 'block';
            }

            hideLoading() {
                this.searchLoading.style.display = 'none';
            }

            saveRecentSearch(query) {
                if (!this.recentSearchesList.includes(query)) {
                    this.recentSearchesList.unshift(query);
                    if (this.recentSearchesList.length > 5) {
                        this.recentSearchesList.pop();
                    }
                    localStorage.setItem('recentSearches', JSON.stringify(this.recentSearchesList));
                    this.showRecentSearches();
                }
            }

            getRecentSearches() {
                const stored = localStorage.getItem('recentSearches');
                return stored ? JSON.parse(stored) : [];
            }

            showRecentSearches() {
                if (this.recentSearchesList.length > 0) {
                    this.recentSearches.style.display = 'block';
                    this.recentTags.innerHTML = this.recentSearchesList.map(search =>
                        `<div class="recent-tag" data-query="${search}">${search}</div>`
                    ).join('');

                    // Add click events to recent tags
                    this.recentTags.querySelectorAll('.recent-tag').forEach(tag => {
                        tag.addEventListener('click', () => {
                            const query = tag.getAttribute('data-query');
                            this.searchInput.value = query;
                            this.performSearch();
                        });
                    });
                } else {
                    this.recentSearches.style.display = 'none';
                }
            }

            navigateToArticle(articleId) {
                window.location.href = `/posts/${articleId}`;
            }
        }

        // Initialize search when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            const articleSearch = new ArticleSearch();

            // Existing functionality
            populateAuthors();
            filterContent();
        });

        // Rest of your existing JavaScript functions...
        // (populateAuthors, filterContent, view toggle, etc. tetap sama seperti sebelumnya)
    </script>
</body>

</html>
