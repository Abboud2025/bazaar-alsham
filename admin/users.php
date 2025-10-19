<?php
session_start();
require_once '../config/database.php';

if(!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>إدارة المستخدمين - بازار الشام</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body class="admin-body">
    <div class="admin-container">
        <header class="admin-header">
            <h1><i class="fas fa-users"></i> إدارة المستخدمين</h1>
            <div class="admin-info">
                <a href="index.php" class="btn-back">← الرجوع</a>
            </div>
        </header>

        <div class="content-section">
            <div class="section-header">
                <h2>المستخدمين المسجلين</h2>
                <div class="search-box">
                    <input type="text" placeholder="بحث بالاسم أو البريد...">
                    <button>🔍</button>
                </div>
            </div>

            <div class="users-table">
                <table>
                    <thead>
                        <tr>
                            <th>المستخدم</th>
                            <th>البريد الإلكتروني</th>
                            <th>المحافظة</th>
                            <th>تاريخ التسجيل</th>
                            <th>الحالة</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="user-info">
                                    <div class="user-avatar">أ</div>
                                    <span>أحمد محمد</span>
                                </div>
                            </td>
                            <td>ahmed@example.com</td>
                            <td>دمشق</td>
                            <td>2024-01-15</td>
                            <td><span class="status-active">نشط</span></td>
                            <td>
                                <button class="btn-ban">🚫 حظر</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="user-info">
                                    <div class="user-avatar">ف</div>
                                    <span>فاطمة علي</span>
                                </div>
                            </td>
                            <td>fatima@example.com</td>
                            <td>حلب</td>
                            <td>2024-01-10</td>
                            <td><span class="status-active">نشط</span></td>
                            <td>
                                <button class="btn-ban">🚫 حظر</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
    document.querySelectorAll('.btn-ban').forEach(btn => {
        btn.addEventListener('click', function() {
            if(confirm('هل تريد حظر هذا المستخدم؟')) {
                const row = this.closest('tr');
                const statusCell = row.querySelector('.status-active');
                statusCell.textContent = 'محظور';
                statusCell.className = 'status-banned';
                this.textContent = '✅ فك الحظر';
                this.className = 'btn-unban';
            }
        });
    });
    </script>
</body>
</html>
