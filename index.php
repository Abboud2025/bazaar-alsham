<?php
session_start();

$project_info = [
    'name' => 'بازار الشام',
    'version' => '1.0.0',
    'github' => 'https://github.com/Abboud2025/bazaar-alsham',
    'owner' => 'Abboud2025'
];
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>بازار الشام - سوق سورية الإلكتروني</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <h1><i class="fas fa-store"></i> بازار الشام</h1>
                <span class="version">v<?php echo $project_info['version']; ?></span>
            </div>
            <div class="github-badge">
                <a href="<?php echo $project_info['github']; ?>" target="_blank">
                    <i class="fab fa-github"></i> GitHub
                </a>
            </div>
        </div>
    </header>

    <main class="main">
        <div class="container">
            <div class="hero">
                <h2>🎉 مرحباً بك في بازار الشام!</h2>
                <p>سوق سورية الإلكتروني المتكامل</p>
                
                <div class="project-owner">
                    <p>المشروع بواسطة: <strong><?php echo $project_info['owner']; ?></strong></p>
                </div>

                <div class="status-cards">
                    <div class="status-card">
                        <i class="fas fa-check-circle"></i>
                        <h3>✅ Repository جاهز</h3>
                        <p>تم إنشاء المشروع على GitHub</p>
                    </div>
                    <div class="status-card">
                        <i class="fas fa-code"></i>
                        <h3>🚀 جاهز للتطوير</h3>
                        <p>ابدأ بإضافة الملفات</p>
                    </div>
                    <div class="status-card">
                        <i class="fas fa-users"></i>
                        <h3>👥 مفتوح المصدر</h3>
                        <p>مرحب بالمساهمات</p>
                    </div>
                </div>

                <div class="next-steps">
                    <h3>📋 الخطوات التالية:</h3>
                    <ol>
                        <li>إضافة مجلدات المشروع</li>
                        <li>إنشاء نظام قاعدة البيانات</li>
                        <li>تصميم واجهة المستخدم</li>
                        <li>برمجة لوحة التحكم</li>
                    </ol>
                </div>

                <div class="action-buttons">
                    <button onclick="showStructure()" class="btn btn-primary">
                        <i class="fas fa-folder"></i> عرض هيكل المشروع
                    </button>
                    <button onclick="runDemo()" class="btn btn-success">
                        <i class="fas fa-play"></i> تشغيل Demo
                    </button>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <p>✨ <?php echo $project_info['name']; ?> - مشروع مفتوح المصدر</p>
            <p>المطور: <?php echo $project_info['owner']; ?></p>
        </div>
    </footer>

    <script>
    function showStructure() {
        const structure = `
📁 bazaar-alsham/
├── 📁 admin/           # لوحة تحكم المدير
├── 📁 assets/          # التصميم والصور
│   ├── 📁 css/
│   ├── 📁 js/
│   └── 📁 images/
├── 📁 config/          # إعدادات قاعدة البيانات
├── 📁 includes/        # ملفات المساعدة
├── 📄 index.php        # الصفحة الرئيسية
├── 📄 README.md        # الوثائق
└── 📄 .gitignore       # الملفات المستثناة
        `;
        alert('هيكل المشروع:\n' + structure);
    }

    function runDemo() {
        alert('🚀 تجربة Demo\n\nسيتم عرض واجهة تجريبية للنظام');
        // هنا يمكن فتح صفحة demo لاحقاً
    }
    </script>
</body>
</html>
