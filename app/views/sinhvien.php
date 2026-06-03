<h2 class="text-center" style="color: #2c3e50; margin-bottom: 25px; text-transform: uppercase; letter-spacing: 1px;">Danh sách Sinh viên</h2>

<table style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr>
            <th class="text-center" width="10%" style="background-color: #3498db; color: #ffffff; padding: 15px;">ID</th>
            <th class="text-center" width="25%" style="background-color: #3498db; color: #ffffff; padding: 15px;">Mã SV</th>
            <th style="background-color: #3498db; color: #ffffff; padding: 15px; text-align: left;">Họ Tên</th>
        </tr>
    </thead>
    <tbody>
        <?php if(!empty($data['danhsach'])): ?>
            <?php foreach($data['danhsach'] as $sv): ?>
            <tr>
                <td class="text-center" style="padding: 15px; border-bottom: 1px solid #e0e0e0;"><?= $sv['id'] ?></td>
                <td class="text-center" style="padding: 15px; border-bottom: 1px solid #e0e0e0;"><strong><?= $sv['masv'] ?></strong></td>
                <td style="padding: 15px; border-bottom: 1px solid #e0e0e0;"><?= $sv['hoten'] ?></td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3" class="text-center" style="padding: 30px; color: #888;">Chưa có dữ liệu sinh viên trong hệ thống </td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>