<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>จีรวัฒน์ ศักดิ์วงษ์ (อิคคิว)</title>
<script>
    // ฟังก์ชันสำหรับโชว์/ซ่อนรูป
    function toggleImage(id) {
        var img = document.getElementById(id);
        if (img.style.display === "none") {
            img.style.display = "block"; // ถ้าซ่อนอยู่ ให้โชว์
        } else {
            img.style.display = "none";  // ถ้าโชว์อยู่ ให้ซ่อน (กดซ้ำเพื่อปิด)
        }
    }
</script>
</head>

<body>
    <h1>จีรวัฒน์ ศักดิ์วงษ์ (อิคคิว)</h1>

    <button type="button" onclick="toggleImage('pic1')" style="background-color: green; color: white; padding: 10px 20px; font-size: 16px; border: none; cursor: pointer;">
        กดเพื่อดูรูปจีรวัฒน์ (อิคคิว)
    </button>
    
    <br><br>

    <img id="pic1" src="img/1.jpg" width="400" style="display: none;">

    <br><br>

    <button type="button" onclick="toggleImage('pic2')" style="background-color: orange; color: white; padding: 10px 20px; font-size: 16px; border: none; cursor: pointer;">
        กดเพื่อดูรูปอาจารย์เอกชัย
    </button>

    <br><br>

    <img id="pic2" src="img/j.jpg" width="400" style="display: none;">

</body>
</html>