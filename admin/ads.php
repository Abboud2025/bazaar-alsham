<?php
session_start();
require_once '../config/database.php';

if(!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

$db = connectDB();
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>إدارة الإعلانات - بازار الشام</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body class="admin-body">
    <div class="admin-container">
        <header class="admin-header">
            <h1><i class="fas fa-list"></i> إدارة الإعلانات</h1>
            <div class="admin-info">
                <a href="index.php" class="btn-back">← الرجوع</a>
            </div>
        </header>

        <div class="content-section">
            <div class="section-header">
                <h2>الإعلانات المعلقة</h2>
                <div class="filters">
                    <select>
                        <option>جميع الإعلانات</option>
                        <option>معلقة</option>
                        <option>مقبولة</option>
                        <option>مرفوضة</option>
                    </select>
                </div>
            </div>

            <div class="ads-list">
                <div class="ad-item pending">
                    <div class="ad-image">
                        <i class="fas fa-image"></i>
                    </div>
                    <div class="ad-details">
                        <h3>سيارة هيونداي 2020</h3>
                        <p class="ad-meta">
                            <span>المستخدم: أحمد محمد</span>
                            <span>المحافظة: دمشق</span>
                            <span>السعر: 25,000,000 ل.س</span>
                        </p>
                        <p class="ad-description">سيارة هيونداي النترا 2020، حالة ممتازة، موديل حديث...</p>
                    </div>
                    <div class="ad-actions">
                        <button class="btn-approve">✅ قبول</button>
                        <button class="btn-reject">❌ رفض</button>
                        <button class="btn-view">👁️ عرض</button>
                    </div>
                </div>

                <div class="ad-item pending">
                    <div class="ad-image">
                        <i class="fas fa-image"></i>
                    </div>
                    <div class="ad-details">
                        <h3>شقة للايجار في المزة</h3>
                        <p class="ad-meta">
                            <span>المستخدم: فاطمة علي</span>
                            <span>المحافظة: دمشق</span>
                            <span>السعر: 150,000 ل.س/شهر</span>
                        </p>
                        <p class="ad-description">شقة 3 غرف في منطقة المزة، طابق ثاني، موقف سيارات...</p>
                    </div>
                    <div class="ad-actions">
                        <button class="btn-approve">✅ قبول</button>
                        <button class="btn-reject">❌ رفض</button>
                        <button class="btn-view">👁️ عرض</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    // محاكاة إجراءات الإعلانات
    document.querySelectorAll('.btn-approve').forEach(btn => {
        btn.addEventListener('click', function() {
            if(confirm('هل تريد قبول هذا الإعلان؟')) {
                this.closest('.ad-item').classList.add('approved');
                alert('تم قبول الإعلان بنجاح ✅');
            }
        });
    });

    document.querySelectorAll('.btn-reject').forEach(btn => {
        btn.addEventListener('click', function() {
            const reason = prompt('سبب الرفض:');
            if(reason) {
                this.closest('.ad-item').classList.add('rejected');
                alert('تم رفض الإعلان ❌\nالسبب: ' + reason);
            }
        });
    });
    </script>
</body>
</html>
