<?php
$stmt = $pdo->query("SELECT * FROM students ORDER BY id DESC");
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h3>قائمة الطالبات</h3>

<?php if (!$data): ?>
<p>لا توجد بيانات</p>
<?php else: ?>

<table>
<tr>
<th>الاسم</th>
<th>الرقم الجامعي</th>
<th>الكلية</th>
<th>المبنى</th>
<th>الغرفة</th>
<th>الهاتف</th>
</tr>

<?php foreach ($data as $s): ?>
<tr>
<td><?= $s['full_name'] ?></td>
<td><?= $s['student_number'] ?></td>
<td><?= $s['college'] ?></td>
<td><?= $s['building_number'] ?></td>
<td><?= $s['room_number'] ?></td>
<td><?= $s['phone_number'] ?></td>
</tr>
<?php endforeach; ?>

</table>
<?php endif; ?>
