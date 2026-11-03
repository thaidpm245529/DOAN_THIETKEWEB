<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T&T - Bán Truyện Tranh</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>


    <header>
        <div class="logo">

            <a href="trangchu.php" style="color: inherit; text-decoration: none;">
                <span>🔴</span> T&T
            </a>
        </div>
        <nav>
            <ul>

                <li><a href="dstruyen.php">Danh sách truyện</a></li>

                <li><a href="phanloai.php">Phân loại</a></li>

                <li><a href="giohang.php">Giỏ hàng</a></li>

                <li><a href="lsmuahang.php">Lịch sử mua hàng</a></li>
            </ul>
        </nav>
        <div class="search-bar">

            <form action="timkiem.php" method="GET">
                <input type="text" name="keyword" placeholder="Tìm kiếm truyện tranh">
            </form>
        </div>

        <div class="auth-links" style="display: flex; gap: 15px;">
             <a href="dangnhap.php" style="color: white; text-decoration: none; font-size: 14px;">Đăng nhập</a>
             <a href="dangki.php" style="color: white; text-decoration: none; font-size: 14px;">Đăng ký</a>
        </div>
    </header>


    <section class="hero">
        <div class="hero-content">
            <div class="tags">Anh Hùng; Hành động; Máu me;</div>
            <h1 class="hero-title">DEMON SLAYER:<br>KIMETSU NO YAIBA</h1>
            <p class="hero-desc">Who strives to become a demon slayer after his family was slaughtered and his younger sister Nezuko turned into a demon.</p>
            <div class="hero-actions">
                <a href="dondathang.php" class="btn-read">Mua ngay</a>
                <span class="chapter-info">■ Tập 1</span>
            </div>
        </div>
        <div class="hero-image">

            <img src="images/banner/banner2.png" alt="banner2">
        </div>
    </section>


    <section class="section-container">
        <h2 class="section-title">TRUYỆN TRANH MỚI RA LÒ</h2>
        <div class="comic-grid">

            <div class="comic-card">
                <img src="images/anhtruyen/pokemon1.jpg" alt="pokemon1">
                <div class="comic-title">POKEMON</div>
                <div class="comic-chapter">Chapter 1079: The Emperor's...</div>
            </div>

            <div class="comic-card">

                <img src="images/anhtruyen/doremon1.jpg" alt="Doremon">
                <div class="comic-title">DOREMON</div>
                <div class="comic-chapter">Nobita và Lâu đài dưới đái biển</div>
            </div>

            <div class="comic-card">
                <img src="images/anhtruyen/goku.jpg" alt="songoku">
                <div class="comic-title">BẢY VIÊN NGỌC RỒNG</div>
                <div class="comic-chapter">Chapter 218: Đảo rồng</div>
            </div>

            <div class="comic-card">
                <img src="images/anhtruyen/16.jpg" alt="One piece">
                <div class="comic-title">One Piece</div>
                <div class="comic-chapter">Chapter 16. Hòn đảo không vua Rum</div>
            </div>
        </div>
    </section>
    
    <section class="section-container">
        <h2 class="section-title">SERIES ĂN CƠM CÙNG DOREMON</h2>
        <div class="comic-grid">
            <div class="comic-card">
                <!-- Nhớ chuẩn bị sẵn các file ảnh tương ứng trong thư mục images/anhtruyen/ -->
                <img src="images/anhtruyen/doremon_tap1.jpg" alt="Doremon Tập 1">
                <div class="comic-title">DOREMON - TẬP 1</div>
                <div class="comic-chapter">Tình trạng: Còn hàng</div>
            </div>
            <div class="comic-card">
                <img src="images/anhtruyen/doremon_tap2.jpg" alt="Doremon Tập 2">
                <div class="comic-title">DOREMON - TẬP 2</div>
                <div class="comic-chapter">Tình trạng: Còn hàng</div>
            </div>
            <div class="comic-card">
                <img src="images/anhtruyen/doremon_dai_kiem_khach.jpg" alt="Doremon Đại kiếm khách">
                <div class="comic-title">DOREMON - BẢN DÀI</div>
                <div class="comic-chapter">Tình trạng: Còn hàng</div>
            </div>
            <div class="comic-card">
                <img src="images/anhtruyen/doremon_plus.jpg" alt="Doremon Plus">
                <div class="comic-title">DOREMON PLUS</div>
                <div class="comic-chapter">Tình trạng: Hết hàng</div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-container">

            <div class="footer-col">
                <h3><span>🔴</span> T&T</h3>
                <p>Nền tảng mua bán truyện tranh bản quyền trực tuyến hàng đầu. Cập nhật những chương mới nhất, nhanh nhất với chất lượng hình ảnh sắc nét.</p>
            </div>
            

            <div class="footer-col">
                <h3>Liên Kết Nhanh</h3>
                <ul>
                    <li><a href="trangchu.php">Trang chủ</a></li>
                    <li><a href="dstruyen.php">Danh sách truyện</a></li>
                    <li><a href="phanloai.php">Thể loại</a></li>
                    <li><a href="lsmuahang.php">Lịch sử mua hàng</a></li>
                </ul>
            </div>
            

            <div class="footer-col">
                <h3>Khách Hàng</h3>
                <ul>
                    <li><a href="#">Hướng dẫn mua hàng</a></li>
                    <li><a href="#">Chính sách đổi trả</a></li>
                    <li><a href="#">Chính sách bảo mật</a></li>
                    <li><a href="#">Điều khoản sử dụng</a></li>
                </ul>
            </div>
            

            <div class="footer-col">
                <h3>Liên Hệ</h3>
                <p>Email: t&t2006@gmail.com</p>
                <p>Hotline: 1900 252911</p>
                <p>Địa chỉ: Long Xuyen, An Giang</p>
            </div>
        </div>
        

        <div class="footer-bottom">
            <p>© 2026 T&T. All rights reserved. Thiết kế cho cửa hàng truyện tranh.</p>
        </div>
    </footer>
</body>
</html>
