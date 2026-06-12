<h2 style="text-align: center; color: #2c3e50;">Cập nhật Sinh Viên</h2>

<form action="/PMNM-68PM34/public/Sinhvien/edit/<?= $data['sinhvien']['id'] ?>" method="POST" style="max-width: 450px; margin: 0 auto; background: #f9f9f9; padding: 30px; border-radius: 8px; border: 1px solid #ddd; font-family: sans-serif;">
    <div style="margin-bottom: 15px;">
        <label style="font-weight: bold; color: #333;">Mã Sinh Viên:</label><br>
        <input type="text" name="masv" value="<?= $data['sinhvien']['masv'] ?>" required style="width: 100%; padding: 10px; margin-top: 5px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
    </div>
    <div style="margin-bottom: 15px;">
        <label style="font-weight: bold; color: #333;">Họ và Tên:</label><br>
        <input type="text" name="hoten" value="<?= $data['sinhvien']['hoten'] ?>" required style="width: 100%; padding: 10px; margin-top: 5px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
    </div>
    <div style="margin-bottom: 15px;">
        <label style="font-weight: bold; color: #333;">Giới tính:</label><br>
        <select name="gioitinh" style="width: 100%; padding: 10px; margin-top: 5px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
            <option value="Nam" <?= $data['sinhvien']['gioitinh'] == 'Nam' ? 'selected' : '' ?>>Nam</option>
            <option value="Nữ" <?= $data['sinhvien']['gioitinh'] == 'Nữ' ? 'selected' : '' ?>>Nữ</option>
        </select>
    </div>
    <div style="margin-bottom: 20px;">
        <label style="font-weight: bold; color: #333;">Lớp học:</label><br>
        <input type="text" name="lop_hoc" value="<?= $data['sinhvien']['lop_hoc'] ?>" required style="width: 100%; padding: 10px; margin-top: 5px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
    </div>
    <button type="submit" style="width: 100%; padding: 12px; background-color: #f0ad4e; color: white; border: none; font-weight: bold; cursor: pointer; border-radius: 5px; font-size: 16px;">💾 Cập nhật</button>
    
    <div style="text-align: center; margin-top: 15px;">
        <a href="/PMNM-68PM34/public/Sinhvien" style="color: #7f8c8d; text-decoration: none; font-weight: bold;">🔙 Quay lại</a>
    </div>
</form>