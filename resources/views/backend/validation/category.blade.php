document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('brandForm');

    const category_name = document.getElementById('category_name');
    const categoryNameError = document.getElementById('categoryNameError');

    category_name.addEventListener('input', function() {
        if (!category_name.value.trim()) {
            categoryNameError.textContent = 'Please enter your Category.';
            categoryNameError.style.display = 'block';
            category_name.classList.add('invalid');
        } else if (!/^[a-zA-Z\s]+$/.test(category_name.value)) {
            categoryNameError.textContent = 'Category Name should contain only letters and spaces.';
            categoryNameError.style.display = 'block';
            category_name.classList.add('invalid');
        } else {
            categoryNameError.style.display = 'none';
            category_name.classList.remove('invalid');
        }
    });

    form.addEventListener('submit', function(event) {
        category_name.dispatchEvent(new Event('input'));
        if (document.querySelectorAll('.invalid').length === 0) {
            form.submit();
        } else {
            event.preventDefault();
        }
    });
});