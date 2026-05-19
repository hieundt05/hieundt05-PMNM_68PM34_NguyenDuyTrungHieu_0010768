<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập hệ thống</title>
</head>
<body>
    <div style="width: 300px; margin: 100px auto; font-family: sans-serif;">
        <h2>Đăng Nhập</h2>
        <?php if(isset($data['error'])): ?>
            <p style="color: red; font-size: 14px;"><?= $data['error'] ?></p>
        <?php endif; ?>
        <form action="" method="POST">
            <div style="margin-bottom: 10px;">
                <label>Tài khoản:</label><br>
                <input type="text" name="username" required style="width: 100%; padding: 5px;">
            </div>
            <div style="margin-bottom: 15px;">
                <label>Mật khẩu:</label><br>
                <input type="password" name="password" required style="width: 100%; padding: 5px;">
            </div>
            <button type="submit" style="width: 100%; padding: 8px; cursor: pointer;">Vào trong</button>
        </form>
    </div>
</body>
</html>