document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('brandForm');

    const brand_name = document.getElementById('brand_name');
    const status = document.getElementById('status');

    const brandNameError = document.getElementById('brandNameError');
    const statusError = document.getElementById('statusError');
    brand_name.addEventListener('input', function() {
        if (!brand_name.value.trim()) {
            brandNameError.textContent = 'Please enter your Brand Name.';
            brandNameError.style.display = 'block';
            brand_name.classList.add('invalid');
        } else if (!/^[a-zA-Z\s]+$/.test(brand_name.value)) {
            brandNameError.textContent = 'Brand Name should contain only letters and spaces.';
            brandNameError.style.display = 'block';
            brand_name.classList.add('invalid');
        } else {
            brandNameError.style.display = 'none';
            brand_name.classList.remove('invalid');
        }
    });

    status.addEventListener('change', function() {
        if (!status.value.trim()) {
            statusError.textContent = 'Please Select Status.';
            statusError.style.display = 'block';
            status.classList.add('invalid');
        } else {
            statusError.style.display = 'none';
            status.classList.remove('invalid');
        }
    });
    form.addEventListener('submit', function(event) {
        brand_name.dispatchEvent(new Event('input'));
        status.dispatchEvent(new Event('change'));
        if (document.querySelectorAll('.invalid').length === 0) {
            form.submit();
        } else {
            event.preventDefault();
        }
    });
});