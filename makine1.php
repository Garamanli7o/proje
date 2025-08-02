<?php
require_once 'header.php';// include ile aynı işlevi görür, header.php dosyasını dahil eder ve daha güvenli dosya bulunamazsa hata verir
require_once 'config.php'; // Veritabanı bağlantısı için gerekli ayarlar
?>
    <div class="container">
        <div style="text-align: center; font-size: 25px;">
            <h1 style="font-family: Tahoma, Geneva, sans-serif;margin:10px; padding:10px;">Makine Verileri:</h1>
        </div>
         <div class="MakineVeriTablosu" style="align-items: center; display: flex; flex-direction: column;">
            
<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Makine Adı</th> <th> Makine Durumu</th> <th>Makine Sıcaklığı</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid red;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Bağlantı başarılı ( bu yazı baglanıp baglanamadıgını ögrenmek icin test asaması sonrası silinecektir)";
            echo "<br>";
            echo "<br>";
    $stmt = $conn->prepare("SELECT id, Makine_Adi, Makine_Durumu,Makine_Sicakligi FROM makine_1");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
// $conn = null; bu baglantıyı durdurur
echo "</table>";
?>
        <?php
            include 'footer.php'; 
        ?>
</body>
</html> 