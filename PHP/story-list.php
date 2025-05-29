<?php
// story-list.php
$selectedAge = $_GET['age'] ?? 'Tất cả';
$keyword = $_GET['keyword'] ?? '';
$length = $_GET['length'] ?? '';
$skills = $_GET['skills'] ?? [];
$hasImage = $_GET['has_image'] ?? '';
$hasAudio = $_GET['has_audio'] ?? '';
$sort = $_GET['sort'] ?? 'moi-nhat';

// Giả lập dữ liệu truyện (sẽ thay bằng database thật)
$stories = [
    ["title" => "Chia sẻ đồ chơi", "age" => "4-6", "length" => "ngắn", "skills" => ["chia sẻ"], "has_image" => true, "has_audio" => true],
    ["title" => "Cảm xúc của bé Mít", "age" => "4-6", "length" => "trung bình", "skills" => ["kiểm soát cảm xúc"], "has_image" => true, "has_audio" => false],
    ["title" => "Gấu con biết xin lỗi", "age" => "7-9", "length" => "dài", "skills" => ["xử lý mâu thuẫn"], "has_image" => false, "has_audio" => true],
];

// Lọc truyện
$filteredStories = array_filter($stories, function ($story) use ($selectedAge, $keyword, $length, $skills, $hasImage, $hasAudio) {
    if ($selectedAge !== 'Tất cả' && $story['age'] !== $selectedAge) return false;
    if ($keyword && stripos($story['title'], $keyword) === false) return false;
    if ($length && $story['length'] !== $length) return false;
    if (!empty($skills)) {
        foreach ($skills as $skill) {
            if (!in_array($skill, $story['skills'])) return false;
        }
    }
    if ($hasImage && !$story['has_image']) return false;
    if ($hasAudio && !$story['has_audio']) return false;
    return true;
});

// Sắp xếp nếu cần (mô phỏng)
if ($sort === 'pho-bien') {
    // chưa có dữ liệu thật để sắp xếp
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Danh sách truyện</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #FFF8F0;
            font-family: 'Nunito', sans-serif;
            color: #333;
            padding-top: 56px;
        }

        .story-card {
            transition: transform 0.2s;
        }

        .story-card:hover {
            transform: translateY(-5px);
        }

        .card-title {
            font-weight: bold;
            color: #FF8C42;
        }

        .filter-bar {
            background-color: #FFD4A9;
            padding: 1rem;
            border-radius: 1rem;
        }

        .footer {
            background-color: #A8DADC;
            color: #fff;
            padding: 1rem;
            text-align: center;
            font-size: 0.9rem;
        }

        .navbar-brand {
            font-weight: bold;
            font-family: 'Baloo 2', cursive;
        }

        .nav-btn-text {
            margin-left: 15px;
            padding: 8px 12px;
            color: #333;
            text-decoration: none;
            font-weight: 500;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .nav-btn-text:hover {
            background-color: rgba(0, 123, 255, 0.1);
            /* Màu nền nhẹ khi hover */
            color: #007bff;
            /* Màu chữ đổi */
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <?php include 'navigation-bar.php'; ?>
    <div class="container mt-4">
        <h2 class="mb-3">Danh sách truyện cho độ tuổi: <span class="text-primary"><?= htmlspecialchars($selectedAge) ?></span></h2>
        <form method="get" class="row g-3">
            <input type="hidden" name="age" value="<?= htmlspecialchars($selectedAge) ?>">
            <div class="col-md-3">
                <input type="text" name="keyword" class="form-control" placeholder="Từ khóa tìm kiếm" value="<?= htmlspecialchars($keyword) ?>">
            </div>
            <div class="col-md-2">
                <select name="length" class="form-select">
                    <option value="">Độ dài</option>
                    <option value="ngắn" <?= $length == 'ngắn' ? 'selected' : '' ?>>Ngắn</option>
                    <option value="trung bình" <?= $length == 'trung bình' ? 'selected' : '' ?>>Trung bình</option>
                    <option value="dài" <?= $length == 'dài' ? 'selected' : '' ?>>Dài</option>
                </select>
            </div>
            <div class="col-md-3">
                <select name="skills[]" class="form-select" multiple>
                    <option value="chia sẻ" <?= in_array('chia sẻ', $skills) ? 'selected' : '' ?>>Chia sẻ</option>
                    <option value="kiểm soát cảm xúc" <?= in_array('kiểm soát cảm xúc', $skills) ? 'selected' : '' ?>>Kiểm soát cảm xúc</option>
                    <option value="xử lý mâu thuẫn" <?= in_array('xử lý mâu thuẫn', $skills) ? 'selected' : '' ?>>Xử lý mâu thuẫn</option>
                </select>
            </div>
            <div class="col-md-1 form-check">
                <input class="form-check-input" type="checkbox" name="has_image" value="1" <?= $hasImage ? 'checked' : '' ?>>
                <label class="form-check-label">Hình ảnh</label>
            </div>
            <div class="col-md-1 form-check">
                <input class="form-check-input" type="checkbox" name="has_audio" value="1" <?= $hasAudio ? 'checked' : '' ?>>
                <label class="form-check-label">Audio</label>
            </div>
            <div class="col-md-2">
                <select name="sort" class="form-select">
                    <option value="moi-nhat" <?= $sort === 'moi-nhat' ? 'selected' : '' ?>>Mới nhất</option>
                    <option value="pho-bien" <?= $sort === 'pho-bien' ? 'selected' : '' ?>>Phổ biến</option>
                </select>
            </div>
            <div class="col-md-12">
                <button class="btn btn-primary">Tìm kiếm</button>
            </div>
        </form>

        <hr>

        <div class="row">
            <?php foreach ($filteredStories as $story): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($story['title']) ?></h5>
                            <p class="card-text">Độ dài: <?= $story['length'] ?> | Kỹ năng: <?= implode(', ', $story['skills']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php if (empty($filteredStories)): ?>
                <p class="text-muted">Không tìm thấy truyện phù hợp.</p>
            <?php endif; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>