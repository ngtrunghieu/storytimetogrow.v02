<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Story List - Story time to grow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&family=Nunito&display=swap" rel="stylesheet">
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
    <!-- Header / Navbar -->
    <?php include 'navigation-bar.php'; ?>

    <!-- Filter & Search -->
    <div class="container mt-4">
        <div class="filter-bar">
            <div class="row g-2 align-items-center">
                <div class="col-md-3">
                    <select class="form-select">
                        <option selected>All Ages</option>
                        <option>0-3 years</option>
                        <option>4-6 years</option>
                        <option>7-9 years</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Search stories...">
                </div>
                <div class="col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="audioCheck">
                        <label class="form-check-label" for="audioCheck">Audio</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="pdfCheck">
                        <label class="form-check-label" for="pdfCheck">PDF</label>
                    </div>
                </div>
                <div class="col-md-1">
                    <select class="form-select">
                        <option selected>Sort</option>
                        <option>Newest</option>
                        <option>Popular</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- Story List -->
    <div class="container mt-4">
        <div class="row">
            <!-- Example card -->
            <div class="col-md-4 mb-4">
                <div class="card story-card shadow-sm rounded-4 h-100">
                    <img src="../images/story1.jpg" class="card-img-top rounded-top-4" alt="Story">
                    <div class="card-body">
                        <h5 class="card-title">The Little Cloud</h5>
                        <p class="card-text text-muted">A gentle story about a cloud's journey and its magical rain...
                        </p>
                        <div class="d-flex justify-content-between mt-3">
                            <a href="#" class="btn btn-sm btn-outline-primary" title="View Details"><i
                                    class="bi bi-eye"></i></a>
                            <button class="btn btn-sm btn-outline-success" title="Listen Audio"><i
                                    class="bi bi-volume-up"></i></button>
                            <button class="btn btn-sm btn-outline-secondary" title="Download PDF"><i
                                    class="bi bi-file-earmark-arrow-down"></i></button>
                            <button class="btn btn-sm btn-outline-danger" title="Add to Favorites"><i
                                    class="bi bi-heart"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repeat cards... -->
        </div>

        <!-- Pagination -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Footer -->
    <div class="footer mt-5">
        <p>&copy; 2025 Story time to grow. All rights reserved. | Contact us: info@storygrow.com</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/age-model.js"></script>
</body>

</html>