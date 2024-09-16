//form Validation
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('brandForm');

    const colorName = document.getElementById('colorName');
    const colorCode = document.getElementById('colorCode');
    const status = document.getElementById('status');

    const colorNameError = document.getElementById('colorNameError');
    const colorCodeError = document.getElementById('colorCodeError');
    const statusError = document.getElementById('statusError');

    colorName.addEventListener('input', function() {
        if (!colorName.value.trim()) {
            colorNameError.textContent = 'Please enter your Color Name.';
            colorNameError.style.display = 'block';
            colorName.classList.add('invalid');
        } else if (!/^[a-zA-Z\s]+$/.test(colorName.value)) {
            colorNameError.textContent = 'Color Name should contain only letters and spaces.';
            colorNameError.style.display = 'block';
            colorName.classList.add('invalid');
        } else {
            colorNameError.style.display = 'none';
            colorName.classList.remove('invalid');
        }
    });

    colorCode.addEventListener('input', function() {
        const hexColorRegex = /^#([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$/;
        if (!colorCode.value.trim()) {
            colorCodeError.textContent = 'Please enter a Color Code.';
            colorCodeError.style.display = 'block';
            colorCode.classList.add('invalid');
        }
        else if (!hexColorRegex.test(colorCode.value)) {
            colorCodeError.textContent =
                'Color Code should be a valid hexadecimal color code (e.g., #FF5733 or #F53).';
            colorCodeError.style.display = 'block';
            colorCode.classList.add('invalid');
        }
        else {
            colorCodeError.style.display = 'none';
            colorCode.classList.remove('invalid');
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
        colorName.dispatchEvent(new Event('input'));
        colorCode.dispatchEvent(new Event('input'));
        status.dispatchEvent(new Event('change'));
        if (document.querySelectorAll('.invalid').length === 0) {
            form.submit();
        } else {
            event.preventDefault();
        }
    });
});