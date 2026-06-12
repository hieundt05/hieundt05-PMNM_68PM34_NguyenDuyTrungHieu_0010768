<div style="margin-bottom: 20px;">
    <h2 style="margin: 0; font-size: 22px; color: #444;">Danh sách sinh viên</h2>
</div>

<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding-bottom: 15px; border-bottom: 1px solid #f0f0f0;">
    <form method="GET" action="/PMNM-68PM34/public/Sinhvien" style="display: flex; gap: 8px; align-items: center; margin: 0;">
        <input type="text" name="keyword" value="<?= isset($data['keyword']) ? htmlspecialchars($data['keyword']) : '' ?>" placeholder="Tìm theo tên hoặc MSSV..." style="padding: 0 12px; border: 1px solid #ddd; border-radius: 4px; width: 230px; font-size: 13px; height: 32px; box-sizing: border-box; outline: none;">
        
        <select style="padding: 0 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 13px; background: #fdfdfd; color: #555; height: 32px; box-sizing: border-box; outline: none;">
            <option>-- Tất cả lớp --</option>
        </select>
        
        <button type="submit" style="background-color: #4b8df8; color: white; border: none; padding: 0 15px; border-radius: 4px; cursor: pointer; font-size: 13px; height: 32px; display: inline-flex; align-items: center; justify-content: center; box-sizing: border-box;">Tìm kiếm</button>
        
        <a href="/PMNM-68PM34/public/Sinhvien" style="background-color: #f4f4f4; color: #333; border: 1px solid #ddd; padding: 0 15px; border-radius: 4px; cursor: pointer; font-size: 13px; text-decoration: none; display: inline-flex; align-items: center; justify-content: center; height: 32px; box-sizing: border-box;">Đặt lại</a>
    </form>
    
    <div style="display: flex; align-items: center; gap: 15px;">
        <span style="font-size: 13px; color: #666;">Hiển thị: 5 / trang </span>
        <a href="/PMNM-68PM34/public/Sinhvien/create" style="background-color: #5cb85c; color: white; text-decoration: none; padding: 0 15px; border-radius: 4px; font-size: 13px; font-weight: 500; display: inline-flex; align-items: center; justify-content: center; height: 32px; box-sizing: border-box;">+ Thêm sinh viên</a>
    </div>
</div>

<table style="width: 100%; border-collapse: collapse; margin-bottom: 25px; font-size: 14px;">
    <thead>
        <tr style="background-color: #337ab7; color: white;">
            <th style="padding: 10px; text-align: center; border-right: 1px solid #286090; width: 5%;">STT</th>
            <th style="padding: 10px; text-align: left; border-right: 1px solid #286090; width: 15%;">MSSV</th>
            <th style="padding: 10px; text-align: left; border-right: 1px solid #286090; width: 25%;">Họ tên</th>
            <th style="padding: 10px; text-align: center; border-right: 1px solid #286090; width: 10%;">Giới tính</th>
            <th style="padding: 10px; text-align: center; border-right: 1px solid #286090; width: 25%;">Lớp học</th>
            <th style="padding: 10px; text-align: center; width: 20%;">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php if(!empty($data['danhsach'])): ?>
            <?php foreach($data['danhsach'] as $index => $sv): ?>
            <tr style="border-bottom: 1px solid #eee; background-color: <?= $index % 2 == 0 ? '#f9f9f9' : '#ffffff' ?>;">
                <td style="padding: 10px; text-align: center; color: #555;"><?= ($data['currentPage'] - 1) * 5 + $index + 1 ?></td>
                <td style="padding: 10px; color: #333;"><?= $sv['masv'] ?></td>
                <td style="padding: 10px; color: #333;"><?= $sv['hoten'] ?></td>
                <td style="padding: 10px; text-align: center; color: #555;"><?= $sv['gioitinh'] ?></td>
                <td style="padding: 10px; text-align: center;">
                    <span style="color: #0288d1; font-weight: 500; font-size: 13px;"><?= $sv['lop_hoc'] ?></span>
                </td>
                <td style="padding: 10px; text-align: center;">
                    <a href="/PMNM-68PM34/public/Sinhvien/edit/<?= $sv['id'] ?>" style="background-color: #f0ad4e; color: white; text-decoration: none; padding: 4px 10px; border-radius: 3px; font-size: 12px; margin-right: 5px; display: inline-block;">Sửa</a>
                    <a href="/PMNM-68PM34/public/Sinhvien/delete/<?= $sv['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');" style="background-color: #d9534f; color: white; text-decoration: none; padding: 4px 10px; border-radius: 3px; font-size: 12px; display: inline-block;">Xóa</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="6" style="padding: 40px; text-align: center; color: #888;">Không tìm thấy kết quả nào</td></tr>
        <?php endif; ?>
    </tbody>
</table>

<?php if(isset($data['totalPages']) && $data['totalPages'] > 1): ?>
<div style="text-align: right; margin-top: 10px;">
    <?php for($i = 1; $i <= $data['totalPages']; $i++): ?>
        <a href="?keyword=<?= isset($data['keyword']) ? urlencode($data['keyword']) : '' ?>&page=<?= $i ?>" style="padding: 5px 10px; margin: 0 2px; background-color: <?= ($i == $data['currentPage']) ? '#777' : '#f4f4f4' ?>; color: <?= ($i == $data['currentPage']) ? 'white' : '#666' ?>; text-decoration: none; border-radius: 3px; font-size: 13px; display: inline-block;">
            <?= $i ?>
        </a>
    <?php endfor; ?>
</div>
<?php endif; ?>