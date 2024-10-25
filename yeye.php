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
            color: #ac5865; /* Màu chữ */
        }
        #message {
            margin-top: 20px;
            font-weight: bold;
            color: #ac5865; /* Màu chữ thông điệp */
            font-size: 20px; /* Kích thước chữ thông điệp */
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #ac5865; /* Màu của nút */
            color: white; /* Màu chữ trong nút */
            margin-top: 20px; /* Khoảng cách giữa nút và các phần tử khác */
            transition: background-color 0.3s ease; /* Hiệu ứng chuyển màu */
        }
        button:hover {
            background-color: #9a4d5c; /* Màu khi hover */
        }
    </style>
</head>
<body>
    <audio id="backgroundMusic" src="1.mp3" loop></audio> <!-- Thêm nhạc nền -->
    
    <img src="love-you.gif" alt="Funny GIF"> <!-- Thay bằng URL ảnh GIF của bạn -->
    
    <h2>Yeahhhh, Glinh so beautifullll</h2> <!-- Dòng văn bản hiển thị -->
    <p id="message">Zị thì còn chờ đợi gi nua, géc goooooo</p> <!-- Dòng thông báo -->

    <button onclick="goToNewPage()">Di thuiii</button> <!-- Nút liên kết -->

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

        // Chuyển hướng sang trang khác
        function goToNewPage() {
            window.location.href = 'https://www.messenger.com/e2ee/t/6690917827658247'; // Thay 'your-new-page.html' bằng địa chỉ trang bạn muốn chuyển hướng tới
        }

        // Gọi hàm phát nhạc nền khi trang được tải
        window.onload = playBackgroundMusic;
    </script>
</body>
</html>
