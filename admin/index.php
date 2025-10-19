<?php
session_start();
require_once '../config/database.php';

// تحقق إذا كان المدير مسجل الدخول
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
    <title>لوحة التحكم - بازار الشام</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="admin-body">
    <div class="admin-container">
        <header class="admin-header">
            <h1><i class="fas fa-cog"></i> لوحة تحكم المدير</h1>
            <div class="admin-info">
                <span>مرحباً، المدير!</span>
                <a href="logout.php" class="logout-btn">تسجيل خروج</a>
            </div>
        </header>

        <div class="admin-stats">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-list"></i>
                </div>
                <div class="stat-info">
                    <h3>0</h3>
                    <p>إجمالي الإعلانات</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="stat-info">
                    <h3>0</h3>
                    <p>في انتظار المراجعة</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-info">
                    <h3>0</h3>
                    <p>المستخدمين</p>
                </div>
            </div>
        </div>

        <div class="admin-actions">
            <h2>الإجراءات السريعة</h2>
            <div class="action-grid">
                <a href="ads.php" class="action-card">
                    <i class="fas fa-list"></i>
                    <span>إدارة الإعلانات</span>
                </a>
                <a href="users.php" class="action-card">
                    <i class="fas fa-users"></i>
                    <span>إدارة المستخدمين</span>
                </a>
                <a href="categories.php" class="action-card">
                    <i class="fas fa-tags"></i>
                    <span>التصنيفات</span>
                </a>
                <a href="settings.php" class="action-card">
                    <i class="fas fa-cog"></i>
                    <span>الإعدادات</span>
                </a>
            </div>
        </div>

        <div class="system-info">
            <h3>معلومات النظام</h3>
            <div class="info-grid">
                <div class="info-item">
                    <label>إصدار النظام:</label>
                    <span>1.0.0</span>
                </div>
                <div class="info-item">
                    <label>المطور:</label>
                    <span>Abboud2025</span>
                </div>
                <div class="info-item">
                    <label>حالة قاعدة البيانات:</label>
                    <span class="status-success">✅ متصل</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
