//form Validation
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('brandForm');

    const color_name = document.getElementById('color_name');
    const color_code = document.getElementById('color_code');
    const status = document.getElementById('status');

    const colorNameError = document.getElementById('colorNameError');
    const colorCodeError = document.getElementById('colorCodeError');
    const statusError = document.getElementById('statusError');

    color_name.addEventListener('input', function() {
        if (!color_name.value.trim()) {
            colorNameError.textContent = 'Please enter your Color Name.';
            colorNameError.style.display = 'block';
            color_name.classList.add('invalid');
        } else if (!/^[a-zA-Z\s]+$/.test(color_name.value)) {
            colorNameError.textContent = 'Color Name should contain only letters and spaces.';
            colorNameError.style.display = 'block';
            color_name.classList.add('invalid');
        } else {
            colorNameError.style.display = 'none';
            color_name.classList.remove('invalid');
        }
    });

    color_code.addEventListener('input', function() {
        const hexColorRegex = /^#([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$/;
        if (!color_code.value.trim()) {
            colorCodeError.textContent = 'Please enter a Color Code.';
            colorCodeError.style.display = 'block';
            color_code.classList.add('invalid');
        }
        else if (!hexColorRegex.test(color_code.value)) {
            colorCodeError.textContent =
                'Color Code should be a valid hexadecimal color code (e.g., #FF5733 or #F53).';
            colorCodeError.style.display = 'block';
            color_code.classList.add('invalid');
        }
        else {
            colorCodeError.style.display = 'none';
            color_code.classList.remove('invalid');
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
        color_name.dispatchEvent(new Event('input'));
        color_code.dispatchEvent(new Event('input'));
        status.dispatchEvent(new Event('change'));
        if (document.querySelectorAll('.invalid').length === 0) {
            form.submit();
        } else {
            event.preventDefault();
        }
    });
});