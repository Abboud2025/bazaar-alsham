<?php
session_start();
if(isset($_SESSION['admin_logged_in'])) {
    header("Location: index.php");
    exit;
}

$error = '';
if($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // تحقق بسيط (في الإصدار النهائي سيتم التحقق من قاعدة البيانات)
    if($username === 'admin' && $password === 'admin123') {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_name'] = 'مدير النظام';
        header("Location: index.php");
        exit;
    } else {
        $error = 'بيانات الدخول غير صحيحة!';
    }
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تسجيل دخول المدير</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body class="login-body">
    <div class="login-container">
        <div class="login-box">
            <div class="login-header">
                <h2><i class="fas fa-lock"></i> دخول المدير</h2>
                <p>بازار الشام - لوحة التحكم</p>
            </div>
            
            <?php if($error): ?>
                <div class="alert error"><?php echo $error; ?></div>
            <?php endif; ?>
            
            <form method="POST" class="login-form">
                <div class="form-group">
                    <label>اسم المستخدم:</label>
                    <input type="text" name="username" value="admin" required>
                </div>
                
                <div class="form-group">
                    <label>كلمة المرور:</label>
                    <input type="password" name="password" value="admin123" required>
                </div>
                
                <button type="submit" class="login-btn">
                    <i class="fas fa-sign-in-alt"></i> دخول
                </button>
            </form>
            
            <div class="login-info">
                <p>🔐 بيانات الدخول الافتراضية:</p>
                <p>المستخدم: <strong>admin</strong></p>
                <p>كلمة المرور: <strong>admin123</strong></p>
            </div>
        </div>
    </div>
</body>
</html>
