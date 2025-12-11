<h3>إضافة طالبة جديدة</h3>

<?php
if ($_POST) {
    $stmt = $pdo->prepare("
    INSERT INTO students
    (full_name, student_number, college, level,
     building_number, room_number, bed_number,
     phone_number, housing_date, notes)
    VALUES (?,?,?,?,?,?,?,?,?,?)
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
        $_POST['notes']
    ]);

    echo "<div class='success'>✅ تم إضافة الطالبة</div>";
}
?>

<div class="card form-card">
<form method="post" class="grid-form">

<div class="form-group">
<label>الاسم الكامل</label>
<input name="full_name" required>
</div>

<div class="form-group">
<label>الرقم الجامعي</label>
<input name="student_number" required>
</div>

<div class="form-group">
<label>الكلية</label>
<input name="college">
</div>

<div class="form-group">
<label>المستوى</label>
<input name="level">
</div>

<div class="form-group">
<label>رقم المبنى</label>
<input name="building_number">
</div>

<div class="form-group">
<label>رقم الغرفة</label>
<input name="room_number">
</div>

<div class="form-group">
<label>رقم السرير</label>
<input name="bed_number">
</div>

<div class="form-group">
<label>رقم الهاتف</label>
<input name="phone_number">
</div>

<div class="form-group">
<label>تاريخ السكن</label>
<input type="date" name="housing_date">
</div>

<div class="form-group full">
<label>ملاحظات</label>
<textarea name="notes"></textarea>
</div>

<div class="form-group full" style="text-align:center">
<button>حفظ البيانات</button>
</div>

</form>
</div>
