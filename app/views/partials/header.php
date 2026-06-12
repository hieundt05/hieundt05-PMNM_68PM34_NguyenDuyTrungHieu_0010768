<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>QLSV</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Roboto', sans-serif; background-color: #f4f6f9; margin: 0; color: #333; }
        
        /* Thanh Navbar màu xanh đen tinh gọn */
        .navbar { background-color: #2c3e50; padding: 15px 30px; display: flex; justify-content: space-between; align-items: center; color: white; }
        .navbar-left a { color: white; text-decoration: none; font-size: 16px; font-weight: bold; letter-spacing: 0.5px; }
        .navbar-right a { color: white; text-decoration: none; font-size: 15px; font-weight: 500; transition: 0.2s; }
        .navbar-right a:hover { color: #d1d1d1; }
        
        .main-content { background: white; margin: 30px auto; max-width: 1000px; padding: 25px; border-radius: 4px; box-shadow: 0 1px 4px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="navbar-left">
            <a href="/PMNM-68PM34/public/Sinhvien">Quản lý sinh viên</a>
        </div>
        <div class="navbar-right">
            <a href="/PMNM-68PM34/public/Login/logout">Đăng xuất</a>
        </div>
    </div>
    <div class="main-content">