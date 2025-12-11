<?php
// جلب قائمة الطلاب
$list = $pdo->query("SELECT id, full_name FROM students")->fetchAll(PDO::FETCH_ASSOC);

// تحديد الطالب المراد تعديل بياناته
$id = $_GET['id'] ?? null;
$data = null;

if ($id) {
    $stmt = $pdo->prepare("SELECT * FROM students WHERE id=?");
    $stmt->execute([$id]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
}

// تنفيذ عملية التحديث
if ($_POST) {
    $stmt = $pdo->prepare("
        UPDATE students SET
        full_name=?, student_number=?, college=?, level=?,
        building_number=?, room_number=?, bed_number=?,
        phone_number=?, housing_date=?, notes=?
        WHERE id=?
    ");
    $stmt->execute([
        $_POST['full_name'],
        $_POST['student_number'],
        $_POST['college'],
        $_POST['level'],
        $_POST['building_number'],
        $_POST['room_number'],
        $_POST['bed_number'],
        $_POST['phone_number'],
        $_POST['housing_date'],
        $_POST['notes'],
        $_POST['id']
    ]);

    echo "<div class='success'>✅ تم تحديث البيانات بنجاح</div>";
}
?>

<h3>اختيار طالبة للتعديل</h3>

<ul>
<?php foreach($list as $p): ?>
<li>
    <a href="?page=update&id=<?= $p['id'] ?>">
        <?= htmlspecialchars($p['full_name']) ?>
    </a>
</li>
<?php endforeach; ?>
</ul>

<?php if ($id && $data): ?>
<hr>

<form method="post" class="grid-form">
<input type="hidden" name="id" value="<?= $data['id'] ?>">

<div class="form-group">
<label>الاسم الكامل</label>
<input name="full_name" value="<?= htmlspecialchars($data['full_name']) ?>" required>
</div>

<div class="form-group">
<label>الرقم الجامعي</label>
<input name="student_number" value="<?= htmlspecialchars($data['student_number']) ?>" required>
</div>

<div class="form-group">
<label>الكلية</label>
<input name="college" value="<?= htmlspecialchars($data['college']) ?>">
</div>

<div class="form-group">
<label>المستوى</label>
<input name="level" value="<?= htmlspecialchars($data['level']) ?>">
</div>

<div class="form-group">
<label>رقم المبنى</label>
<input name="building_number" value="<?= htmlspecialchars($data['building_number']) ?>">
</div>

<div class="form-group">
<label>رقم الغرفة</label>
<input name="room_number" value="<?= htmlspecialchars($data['room_number']) ?>">
</div>

<div class="form-group">
<label>رقم السرير</label>
<input name="bed_number" value="<?= htmlspecialchars($data['bed_number']) ?>">
</div>

<div class="form-group">
<label>رقم الهاتف</label>
<input name="phone_number" value="<?= htmlspecialchars($data['phone_number']) ?>">
</div>

<div class="form-group">
<label>تاريخ السكن</label>
<input type="date" name="housing_date" value="<?= $data['housing_date'] ?>">
</div>

<div class="form-group full">
<label>ملاحظات</label>
<textarea name="notes"><?= htmlspecialchars($data['notes']) ?></textarea>
</div>

<div class="form-group full" style="text-align:center">
<button>تحديث</button>
</div>

</form>
<?php endif; ?>
