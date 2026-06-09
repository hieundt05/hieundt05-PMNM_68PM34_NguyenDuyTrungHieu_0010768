<h2 class="text-center" style="color: #2c3e50; margin-bottom: 25px; text-transform: uppercase; letter-spacing: 1px;">Danh sách Sinh viên</h2>

<table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
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
            <tr><td colspan="3" class="text-center" style="padding: 30px; color: #888;">Chưa có dữ liệu sinh viên</td></tr>
        <?php endif; ?>
    </tbody>
</table>

<?php if(isset($data['totalPages']) && $data['totalPages'] > 1): ?>
<div style="text-align: center; margin-top: 20px;">
    <?php for($i = 1; $i <= $data['totalPages']; $i++): ?>
        <a href="?page=<?= $i ?>" style="padding: 8px 15px; margin: 0 5px; background-color: <?= ($i == $data['currentPage']) ? '#2c3e50' : '#ecf0f1' ?>; color: <?= ($i == $data['currentPage']) ? 'white' : '#333' ?>; text-decoration: none; border-radius: 5px; font-weight: bold;">
            <?= $i ?>
        </a>
    <?php endfor; ?>
</div>
<?php endif; ?>