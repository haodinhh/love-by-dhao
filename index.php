<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glinh xinh gai nhat he mattroi</title>
    <style>
        body {
            background-color: #FFD1DC; /* Nền màu hồng pastel */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
            text-align: center;
            overflow: hidden; /* Ngăn cuộn trang */
        }
        img {
            width: 200px; /* Kích thước ảnh GIF */
            margin-bottom: 20px;
        }
        h2 {
            margin-bottom: 10px;
        }
        .buttons, .yes-options {
            display: flex;
            gap: 20px;
            margin-top: 15px;
        }
        .yes-options {
            display: none; /* Ẩn tùy chọn Yes ban đầu */
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            transition: transform 0.3s ease; /* Hiệu ứng khi di chuyển nút */
        }
        #yesButton {
            background-color: #207335; /* Màu xanh cho nút Yes */
            color: white;
        }
        #noButton, #areYouSureButton {
            background-color: #FF0000; /* Màu đỏ cho nút No */
            color: white;
            position: relative;
            transition: left 0.3s ease, top 0.3s ease; /* Thêm hiệu ứng di chuyển mượt mà */
        }
        #message {
            margin-top: 20px;
            font-weight: bold;
        }
        #confirmYesButton {
            background-color: #207335; /* Màu xanh cho nút Yes trong nhóm tùy chọn */
            color: white;
        }
    </style>
</head>
<body>
    <audio id="backgroundMusic" src="1.mp3" loop></audio> <!-- Thêm nhạc nền -->
    
    <img src="cute-spin-cute-bubu.gif" alt="Funny GIF"> <!-- Thay bằng URL ảnh GIF của bạn -->
    
    <h2 style="color: #ac5865;">Can I hug youuuuuu?</h2>
    
    <div class="buttons">
        <button id="yesButton" onclick="showYesOptions()">Yes</button>
        <button id="noButton" onclick="moveNoButton()">No</button>
    </div>
    
    <div class="yes-options">
        <button id="confirmYesButton" onclick="goToNewPage()">Yes</button>
        <button id="areYouSureButton" onclick="moveAreYouSureButton()">Are you sure?</button>
    </div>
    
    <p id="message"></p>
    
    <audio id="noSound" src="no-sound.mp3"></audio>
    <audio id="areYouSureSound" src="no-sound.mp3"></audio> <!-- Âm thanh cho nút Are you sure -->

    <script>
        // Lấy phần tử nhạc nền
        const backgroundMusic = document.getElementById("backgroundMusic");

        // Hàm để phát nhạc nền
        function playBackgroundMusic() {
            backgroundMusic.volume = 0.3; // Thiết lập âm lượng ở mức 30%
            backgroundMusic.play().catch((error) => {
                console.error("Không thể phát nhạc nền:", error);
            });
        }

        // Gọi hàm phát nhạc và hiển thị nút Yes thứ hai khi nhấn vào nút Yes đầu tiên
        function showYesOptions() {
            playBackgroundMusic(); // Phát nhạc nền khi nhấn Yes
            document.querySelector('.buttons').style.display = 'none'; // Ẩn các nút ban đầu
            document.querySelector('.yes-options').style.display = 'flex'; // Hiển thị tùy chọn Yes mới
        }

        // Chuyển hướng sang trang khác
        function goToNewPage() {
            window.location.href = 'yeye.php'; // Thay 'trang_moi.html' bằng địa chỉ trang bạn muốn chuyển hướng tới
        }

        function displayMessage(text) {
            document.getElementById("message").textContent = text;
        }

        function moveNoButton() {
            const noButton = document.getElementById("noButton");
            document.getElementById("noSound").play();
            const x = Math.random() * (window.innerWidth - noButton.offsetWidth);
            const y = Math.random() * (window.innerHeight - noButton.offsetHeight);
            noButton.style.left = x + "px";
            noButton.style.top = y + "px";
            noButton.style.position = "absolute";
        }

        function moveAreYouSureButton() {
            const areYouSureButton = document.getElementById("areYouSureButton");
            document.getElementById("areYouSureSound").play(); // Phát âm thanh cho nút Are you sure
            const x = Math.random() * (window.innerWidth - areYouSureButton.offsetWidth);
            const y = Math.random() * (window.innerHeight - areYouSureButton.offsetHeight);
            areYouSureButton.style.left = x + "px";
            areYouSureButton.style.top = y + "px";
            areYouSureButton.style.position = "absolute";
        }
    </script>
</body>
</html>
