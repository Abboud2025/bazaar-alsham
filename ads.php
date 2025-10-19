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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
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

                <!-- إعلان 4 -->
                <div class="ad-card">
                    <div class="ad-image">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <div class="ad-content">
                        <h3>لابتوب ديل جديد</h3>
                        <p class="ad-price">800,000 ل.س</p>
                        <p class="ad-location"><i class="fas fa-map-marker-alt"></i> حمص</p>
                        <p class="ad-description">لابتوب ديل core i7، ذاكرة 16GB، شاشة 15 بوصة</p>
                        <div class="ad-meta">
                            <span>قبل يوم</span>
                            <span>مشاهدات: 89</span>
                        </div>
                    </div>
                </div>

                <!-- إعلان 5 -->
                <div class="ad-card">
                    <div class="ad-image">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <div class="ad-content">
                        <h3>ملابس أطفال</h3>
                        <p class="ad-price">25,000 ل.س</p>
                        <p class="ad-location"><i class="fas fa-map-marker-alt"></i> طرطوس</p>
                        <p class="ad-description">ملابس أطفال جديدة بمقاسات مختلفة، جودة عالية</p>
                        <div class="ad-meta">
                            <span>قبل يومين</span>
                            <span>مشاهدات: 34</span>
                        </div>
                    </div>
                </div>

                <!-- إعلان 6 -->
                <div class="ad-card">
                    <div class="ad-image">
                        <i class="fas fa-couch"></i>
                    </div>
                    <div class="ad-content">
                        <h3>أثاث منزلي</h3>
                        <p class="ad-price">450,000 ل.س</p>
                        <p class="ad-location"><i class="fas fa-map-marker-alt"></i> حلب</p>
                        <p class="ad-description">طقم كنب جديد، 3 قطع، لون بيج، ضمان سنة</p>
                        <div class="ad-meta">
                            <span>قبل 3 أيام</span>
                            <span>مشاهدات: 56</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <p>✨ بازار الشام - سوق سورية الإلكتروني</p>
            <p>📞 للتواصل: info@bazaar-alsham.com</p>
        </div>
    </footer>

    <script>
    // إضافة تفاعل بسيط
    document.querySelectorAll('.ad-card').forEach(card => {
        card.addEventListener('click', function() {
            const title = this.querySelector('h3').textContent;
            alert('تفاصيل الإعلان: ' + title + '\n\nسيتم عرض التفاصيل الكاملة في الإصدار القادم!');
        });
    });
    </script>
</body>
</html>
