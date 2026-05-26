<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Sinh Viên</title>
    <link href="https://fonts.googleapis.com/css2?family=Segoe+UI:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6; /* Màu nền xám nhạt */
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); 
        }
        h2 {
            text-align: center;
            color: #2c3e50;  
            margin-bottom: 25px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0; 
        }
        th {
            background-color: #3498db;  
            color: #ffffff;
            font-weight: 600;
        }
        tr:hover {
            background-color: #f1f9ff;  
            transition: background-color 0.3s ease;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Danh sách Sinh viên</h2>
        <table>
            <thead>
                <tr>
                    <th class="text-center" width="10%">ID</th>
                    <th class="text-center" width="25%">Mã SV</th>
                    <th>Họ Tên</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($data['danhsach'])): ?>
                    <?php foreach($data['danhsach'] as $sv): ?>
                    <tr>
                        <td class="text-center"><?= $sv['id'] ?></td>
                        <td class="text-center"><strong><?= $sv['masv'] ?></strong></td>
                        <td><?= $sv['hoten'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3" class="text-center" style="padding: 30px; color: #888;">Chưa có dữ liệu sinh viên trong hệ thống </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>