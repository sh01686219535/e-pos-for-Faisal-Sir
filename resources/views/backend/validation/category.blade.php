document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('brandForm');

    const categoryName = document.getElementById('categoryName');
    const categoryNameError = document.getElementById('categoryNameError');

    categoryName.addEventListener('input', function() {
        if (!categoryName.value.trim()) {
            categoryNameError.textContent = 'Please enter your Brand Name.';
            categoryNameError.style.display = 'block';
            categoryName.classList.add('invalid');
        } else if (!/^[a-zA-Z\s]+$/.test(categoryName.value)) {
            categoryNameError.textContent = 'Brand Name should contain only letters and spaces.';
            categoryNameError.style.display = 'block';
            categoryName.classList.add('invalid');
        } else {
            categoryNameError.style.display = 'none';
            categoryName.classList.remove('invalid');
        }
    });

    form.addEventListener('submit', function(event) {
        categoryName.dispatchEvent(new Event('input'));
        if (document.querySelectorAll('.invalid').length === 0) {
            form.submit();
        } else {
            event.preventDefault();
        }
    });
});