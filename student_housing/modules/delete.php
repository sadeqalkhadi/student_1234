<?php
// جلب قائمة الطالبات
$list = $pdo->query("SELECT id, full_name FROM students")->fetchAll(PDO::FETCH_ASSOC);

// تنفيذ عملية الحذف عند وجود POST
if ($_POST) {
    $stmt = $pdo->prepare("DELETE FROM students WHERE id=?");
    $stmt->execute([$_POST['id']]);
    echo "<div class='success'>✅ تم حذف الطالبة بنجاح</div>";

    // إعادة جلب القائمة بعد الحذف لتحديث الصفحة
    $list = $pdo->query("SELECT id, full_name FROM students")->fetchAll(PDO::FETCH_ASSOC);
}
?>

<h3>حذف طالبة</h3>

<?php if (count($list) == 0): ?>
    <p>لا توجد بيانات حالياً</p>
<?php else: ?>
    <?php foreach($list as $p): ?>
    <form method="post" onsubmit="return confirm('هل أنت متأكد من الحذف؟')">
        <input type="hidden" name="id" value="<?= $p['id'] ?>">
        <?= htmlspecialchars($p['full_name']) ?>
        <button>حذف</button>
    </form>
    <?php endforeach; ?>
<?php endif; ?>
