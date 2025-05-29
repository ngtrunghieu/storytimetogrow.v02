document.addEventListener("DOMContentLoaded", function () {
    const ageButtons = document.querySelectorAll('.age-option');
    const ageSelectBtn = document.getElementById('ageSelectBtn');
    const modalEl = document.getElementById('ageModal');
    const ageModal = bootstrap.Modal.getOrCreateInstance(modalEl); // dùng đúng cách để lấy hoặc tạo modal

    ageButtons.forEach(button => {
        button.addEventListener('click', function () {
            const selectedAge = this.getAttribute('data-age');
            // ageSelectBtn.textContent = selectedAge;
            ageModal.hide();
            // Chuyển đến story-list.php và truyền độ tuổi qua URL
            window.location.href = `storiy0-3.php?age=${encodeURIComponent(selectedAge)}`;
        });
    });
});