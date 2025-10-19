<?php
/**
 * إعدادات قاعدة البيانات - بازار الشام
 * تم التطوير بواسطة: Abboud2025
 */

class Database {
    private $host = "localhost";
    private $db_name = "bazaar_alsham";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username, 
                $this->password
            );
            $this->conn->exec("set names utf8");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch(PDOException $exception) {
            echo "⚠️ خطأ في الاتصال بقاعدة البيانات: " . $exception->getMessage();
        }
        return $this->conn;
    }
}

// دالة مساعدة للاتصال
function connectDB() {
    $database = new Database();
    return $database->getConnection();
}

// اختبار الاتصال (للتطوير فقط)
function testConnection() {
    try {
        $db = connectDB();
        if ($db) {
            return "✅ الاتصال بقاعدة البيانات ناجح";
        }
    } catch (Exception $e) {
        return "❌ فشل الاتصال: " . $e->getMessage();
    }
}
?>
