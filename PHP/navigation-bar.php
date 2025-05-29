<?php
$currentPage = basename($_SERVER['PHP_SELF']); // Lấy tên file hiện tại
$isStoryList = ($currentPage === 'storiy0-3.php');

// Lấy độ tuổi từ URL nếu có
$selectedAge = isset($_GET['age']) ? htmlspecialchars($_GET['age']) : 'Độ tuổi';
?>

<!-- Header / Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
    <div class="container-fluid px-2 position-relative"> <!-- 10px padding trái phải + định vị tương đối -->

        <!-- Bên trái: Button chọn độ tuổi -->
        <?php if ($isStoryList): ?>
            <div class="d-flex align-items-center">
                <button id="ageSelectBtn" class="btn btn-outline-primary me-2" data-bs-toggle="modal"
                    data-bs-target="#ageModal" disabled>
                    Danh sách truyện cho độ tuổi: <?= $selectedAge ?>
                </button>
            </div>
        <?php else: ?>
            <div class="d-flex align-items-center">
                <button id="ageSelectBtn" class="btn btn-outline-primary me-2" data-bs-toggle="modal"
                    data-bs-target="#ageModal">
                    Chọn độ tuổi
                </button>
            </div>
        <?php endif; ?>

        <!-- Tên website cho Desktop: căn giữa tuyệt đối -->
        <a class="navbar-brand fw-bold text-primary d-none d-lg-flex align-items-center gap-2 position-absolute top-50 start-50 translate-middle"
            href="#">
            <img src="/images/logo_flower.png" alt="Logo" height="32" />
            <span>Story Time to Grow</span>
        </a>

        <!-- Tên website cho Mobile: hiển thị bên trái -->
        <a class="navbar-brand fw-bold text-primary d-flex d-lg-none align-items-center gap-2" href="#">
            <img src="/images/logo_flower.png" alt="Logo" height="28" />
            <span>Story Time to Grow</span>
        </a>

        <!-- Toggle cho mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Bên phải: các nút văn bản -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
            <ul class="navbar-nav mb-2 mb-lg-0 d-flex align-items-center">
                <li class="nav-item">
                    <a href="/parenting-skills" class="nav-link nav-btn-text">Kỹ năng nuôi dạy con</a>
                </li>
                <li class="nav-item">
                    <a href="/favorites" class="nav-link nav-btn-text">Truyện yêu thích</a>
                </li>
                <li class="nav-item">
                    <a href="/account" class="nav-link nav-btn-text">Tài khoản</a>
                </li>
            </ul>
        </div>

    </div>
</nav>

<!-- Modal chọn độ tuổi -->
<div class="modal fade" id="ageModal" tabindex="-1" aria-labelledby="ageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Chọn độ tuổi của trẻ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <a href="#age0to3" class="btn btn-primary m-2 age-option" data-age="0 - 3 tuổi">0 - 3 tuổi</a>
                <a href="#age4to6" class="btn btn-success m-2 age-option" data-age="4 - 6 tuổi">4 - 6 tuổi</a>
                <a href="#age7to9" class="btn btn-warning m-2 age-option" data-age="7 - 9 tuổi">7 - 9 tuổi</a>
            </div>
        </div>
    </div>
</div>