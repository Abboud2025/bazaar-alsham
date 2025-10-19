<?php
/**
 * دوال مساعدة - بازار الشام
 * الإصدار 1.0.0
 */

// دالة تحقق من تسجيل الدخول
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

// دالة تحقق من مدير النظام
function isAdmin() {
    return isset($_SESSION['admin_logged_in']);
}

// دالة تحويل النص لمقاومة XSS
function safe_html($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

// دالة تنسيق السعر
function formatPrice($price) {
    if($price == 0) return 'مجاني';
    return number_format($price, 0, '', ',') . ' ل.س';
}

// دالة تحويل التاريخ
function arabicDate($date) {
    $months = [
        'January' => 'يناير',
        'February' => 'فبراير', 
        'March' => 'مارس',
        'April' => 'أبريل',
        'May' => 'مايو',
        'June' => 'يونيو',
        'July' => 'يوليو',
        'August' => 'أغسطس',
        'September' => 'سبتمبر',
        'October' => 'أكتوبر',
        'November' => 'نوفمبر',
        'December' => 'ديسمبر'
    ];
    
    return str_replace(array_keys($months), array_values($months), $date);
}

// دالة إعادة توجيه
function redirect($url) {
    header("Location: " . $url);
    exit;
}

// دالة عرض رسالة نجاح
function showSuccess($message) {
    echo '<div class="alert success">✅ ' . safe_html($message) . '</div>';
}

// دالة عرض رسالة خطأ
function showError($message) {
    echo '<div class="alert error">❌ ' . safe_html($message) . '</div>';
}
?>
