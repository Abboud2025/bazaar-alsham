<?php
session_start();
require_once 'config/database.php';
require_once 'includes/functions.php';

$db = connectDB();
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>الإعلانات - بازار الشام</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <h1><i class="fas fa-store"></i> بازار الشام</h1>
            </div>
            <nav class="nav">
                <a href="index.php">الرئيسية</a>
                <a href="ads.php" class="active">الإعلانات</a>
                <a href="admin/login.php">لوحة التحكم</a>
            </nav>
        </div>
    </header>

    <main class="main">
        <div class="container">
            <div class="page-header">
                <h2>📢 تصفح الإعلانات</h2>
                <p>اكتشف أحدث العروض في سوق سورية</p>
            </div>

            <div class="ads-grid">
                <!-- إعلان 1 -->
                <div class="ad-card">
                    <div class="ad-image">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="ad-content">
                        <h3>سيارة هيونداي 2020</h3>
                        <p class="ad-price">25,000,000 ل.س</p>
                        <p class="ad-location"><i class="fas fa-map-marker-alt"></i> دمشق</p>
                        <p class="ad-description">سيارة هيونداي النترا 2020، حالة ممتازة، موديل حديث</p>
                        <div class="ad-meta">
                            <span>قبل ساعة</span>
                            <span>مشاهدات: 45</span>
                        </div>
                    </div>
                </div>

                <!-- إعلان 2 -->
                <div class="ad-card">
                    <div class="ad-image">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="ad-content">
                        <h3>شقة للايجار في المزة</h3>
                        <p class="ad-price">150,000 ل.س/شهر</p>
                        <p class="ad-location"><i class="fas fa-map-marker-alt"></i> دمشق</p>
                        <p class="ad-description">شقة 3 غرف في منطقة المزة، طابق ثاني، موقف سيارات</p>
                        <div class="ad-meta">
                            <span>قبل 3 ساعات</span>
                            <span>مشاهدات: 23</span>
                        </div>
                    </div>
                </div>

                <!-- إعلان 3 -->
                <div class="ad-card">
                    <div class="ad-image">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="ad-content">
                        <h3>آيفون 13 جديد</h3>
                        <p class="ad-price">1,200,000 ل.س</p>
                        <p class="ad-location"><i class="fas fa-map-marker-alt"></i> اللاذقية</p>
                        <p class="ad-description">آيفون 13 جديد بالعلبة، ضمان سنة، جميع الملحقات</p>
                        <div class="ad-meta">
                            <span>قبل 5 ساعات</span>
                            <span>مشاهدات: 67</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <p>✨ بازار الشام - سوق سورية الإلكتروني</p>
        </div>
    </footer>
</body>
</html>
