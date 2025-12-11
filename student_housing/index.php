<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<title>نظام إدارة سكن الطالبات</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h1>نظام إدارة بيانات سكن الطالبات</h1>

<nav>
<a href="?page=create">➕ إضافة طالبة</a>
<a href="?page=read">📋 عرض الطالبات</a>
<a href="?page=update">✏️ تعديل البيانات</a>
<a href="?page=delete">🗑️ حذف طالبة</a>
</nav>

<hr>

<?php
$page = $_GET['page'] ?? 'create';
$file = "modules/$page.php";

if (file_exists($file)) {
    include $file;
} else {
    echo "<div class='error'>الصفحة غير موجودة</div>";
}
?>

</div>
</body>
</html>
