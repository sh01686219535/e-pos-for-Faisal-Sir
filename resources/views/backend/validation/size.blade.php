document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('sizeForm');

    const sizeName = document.getElementById('sizeName');
    const status = document.getElementById('status');

    const sizeNameError = document.getElementById('sizeNameError');
    const statusError = document.getElementById('statusError');

    sizeName.addEventListener('input', function() {
        const sizeNameRegex = /^[a-zA-Z0-9\s]+$/;

        if (!sizeName.value.trim()) {
            sizeNameError.textContent = 'Please enter a Size Name.';
            sizeNameError.style.display = 'block';
            sizeName.classList.add('invalid');
        } else if (!sizeNameRegex.test(sizeName.value)) {
            sizeNameError.textContent = 'Size Name should contain only letters, numbers, and spaces.';
            sizeNameError.style.display = 'block';
            sizeName.classList.add('invalid');
        } else {
            sizeNameError.style.display = 'none';
            sizeName.classList.remove('invalid');
        }
    });

    status.addEventListener('change', function() {
        if (!status.value.trim()) {
            statusError.textContent = 'Please select a Status.';
            statusError.style.display = 'block';
            status.classList.add('invalid');
        } else {
            statusError.style.display = 'none';
            status.classList.remove('invalid');
        }
    });

    form.addEventListener('submit', function(event) {
        // Trigger input and change events to validate before form submission
        sizeName.dispatchEvent(new Event('input'));
        status.dispatchEvent(new Event('change'));

        // Prevent form submission if there are validation errors
        if (document.querySelectorAll('.invalid').length === 0) {
            form.submit();
        } else {
            event.preventDefault();
        }
    });
});