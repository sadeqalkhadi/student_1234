نظام إدارة سكن الطالبات

وصف مشروع PHP + MySQL لإدارة بيانات سكن الطالبات (CRUD). واجهة عربية وتصميم عصري.

تشغيل محلياً (XAMPP)

شغّل Apache و MySQL عبر XAMPP.
انسخ مجلد المشروع إلى C:\xampp\htdocs\student_housing.
استورد قاعدة البيانات:
افتح http://localhost/phpmyadmin
أنشئ قاعدة جديدة student_housing_db
استورد الملف database.sql
أنشئ ملف إعداد محلي:`
حرّر بيانات الاتصال ($host, $db, $user, $pass) حسب جهازك
افتح المتصفح: http://localhost/student_housing
محتويات المستودع

index.php,style.css , database.sql , config.php ,
modules/ (create/read/update/delete)
