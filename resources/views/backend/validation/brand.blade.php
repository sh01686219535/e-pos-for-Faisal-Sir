document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('brandForm');

    const brandName = document.getElementById('brandName');
    const status = document.getElementById('status');

    const brandNameError = document.getElementById('brandNameError');
    const statusError = document.getElementById('statusError');
    brandName.addEventListener('input', function() {
        if (!brandName.value.trim()) {
            brandNameError.textContent = 'Please enter your Brand Name.';
            brandNameError.style.display = 'block';
            brandName.classList.add('invalid');
        } else if (!/^[a-zA-Z\s]+$/.test(brandName.value)) {
            brandNameError.textContent = 'Brand Name should contain only letters and spaces.';
            brandNameError.style.display = 'block';
            brandName.classList.add('invalid');
        } else {
            brandNameError.style.display = 'none';
            brandName.classList.remove('invalid');
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
        brandName.dispatchEvent(new Event('input'));
        status.dispatchEvent(new Event('change'));
        if (document.querySelectorAll('.invalid').length === 0) {
            form.submit();
        } else {
            event.preventDefault();
        }
    });
});