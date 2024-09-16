document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('brandForm');

    const supplierName = document.getElementById('supplierName');
    const supplierAddress = document.getElementById('supplierAddress');
    const phone = document.getElementById('phone');
    const email = document.getElementById('email');
    const tinNumber = document.getElementById('tinNumber');
    const tradeLicense = document.getElementById('tradeLicense');
    const bankAcNo = document.getElementById('bankAcNo');
    const emergencyContact = document.getElementById('emergencyContact');

    const supplierNameError = document.getElementById('supplierNameError');
    const supplierAddressError = document.getElementById('supplierAddressError');
    const phoneError = document.getElementById('phoneError');
    const emailError = document.getElementById('emailError');
    const tinNumberError = document.getElementById('tinNumberError');
    const tradeLicenseError = document.getElementById('tradeLicenseError');
    const bankAcNoError = document.getElementById('bankAcNoError');
    const emergencyContactError = document.getElementById('emergencyContactError');

    // supplierName validation
    supplierName.addEventListener('input', function() {
        if (!supplierName.value.trim()) {
            supplierNameError.textContent = 'Please enter Supplier Name.';
            supplierNameError.style.display = 'block';
            supplierName.classList.add('invalid');
        } else if (!/^[a-zA-Z\s]+$/.test(supplierName.value)) {
            supplierNameError.textContent = 'Supplier Name should contain only letters and spaces.';
            supplierNameError.style.display = 'block';
            supplierName.classList.add('invalid');
        } else {
            supplierNameError.style.display = 'none';
            supplierName.classList.remove('invalid');
        }
    });

    // supplierAddress validation
    supplierAddress.addEventListener('input', function() {
    // Adjusted regex to allow commas, hyphens, periods, and additional spaces
    const addressRegex = /^[a-zA-Z0-9\s,.-]+$/;

    if (!supplierAddress.value.trim()) {
        supplierAddressError.textContent = 'Please enter Supplier Address.';
        supplierAddressError.style.display = 'block';
        supplierAddress.classList.add('invalid');
    } else if (!addressRegex.test(supplierAddress.value)) {
        supplierAddressError.textContent = 'Supplier Address should contain only letters, numbers, spaces, commas, periods, and hyphens.';
        supplierAddressError.style.display = 'block';
        supplierAddress.classList.add('invalid');
    } else {
        supplierAddressError.style.display = 'none';
        supplierAddress.classList.remove('invalid');
    }
});

    // phone validation
    phone.addEventListener('input', function() {
        const phoneRegex = /^(\+?\d{1,4}[\s-])?(\(?\d{1,5}\)?[\s-])?[\d\s-]{7,15}$/;

        if (!phone.value.trim()) {
            phoneError.textContent = 'Please enter Supplier Phone Number.';
            phoneError.style.display = 'block';
            phone.classList.add('invalid');
        } else if (!phoneRegex.test(phone.value)) {
            phoneError.textContent = 'Invalid phone number format.';
            phoneError.style.display = 'block';
            phone.classList.add('invalid');
        } else {
            phoneError.style.display = 'none';
            phone.classList.remove('invalid');
        }
    });

    // email validation
    email.addEventListener('input', function() {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email.value.trim()) {
            emailError.textContent = 'Please enter Supplier Email Address.';
            emailError.style.display = 'block';
            email.classList.add('invalid');
        } else if (!emailRegex.test(email.value)) {
            emailError.textContent = 'Invalid Email Address format.';
            emailError.style.display = 'block';
            email.classList.add('invalid');
        } else {
            emailError.style.display = 'none';
            email.classList.remove('invalid');
        }
    });

    // tinNumber validation
    tinNumber.addEventListener('input', function() {
        if (!tinNumber.value.trim()) {
            tinNumberError.textContent = 'Please enter Tin Number.';
            tinNumberError.style.display = 'block';
            tinNumber.classList.add('invalid');
        } else if (!/^[a-zA-Z0-9\s]+$/.test(tinNumber.value)) {
            tinNumberError.textContent = 'Tin Number should contain only letters, numbers, and spaces.';
            tinNumberError.style.display = 'block';
            tinNumber.classList.add('invalid');
        } else {
            tinNumberError.style.display = 'none';
            tinNumber.classList.remove('invalid');
        }
    });

    // tradeLicense validation
    tradeLicense.addEventListener('input', function() {
        if (!tradeLicense.value.trim()) {
            tradeLicenseError.textContent = 'Please enter Trade License Number.';
            tradeLicenseError.style.display = 'block';
            tradeLicense.classList.add('invalid');
        } else if (!/^[a-zA-Z0-9\s]+$/.test(tradeLicense.value)) {
            tradeLicenseError.textContent = 'Trade License Number should contain only letters, numbers, and spaces.';
            tradeLicenseError.style.display = 'block';
            tradeLicense.classList.add('invalid');
        } else {
            tradeLicenseError.style.display = 'none';
            tradeLicense.classList.remove('invalid');
        }
    });

    // bankAcNo validation
    bankAcNo.addEventListener('input', function() {
        if (!bankAcNo.value.trim()) {
            bankAcNoError.textContent = 'Please enter Bank Account Number.';
            bankAcNoError.style.display = 'block';
            bankAcNo.classList.add('invalid');
        } else if (!/^[a-zA-Z0-9\s]+$/.test(bankAcNo.value)) {
            bankAcNoError.textContent = 'Bank Account Number should contain only letters, numbers, and spaces.';
            bankAcNoError.style.display = 'block';
            bankAcNo.classList.add('invalid');
        } else {
            bankAcNoError.style.display = 'none';
            bankAcNo.classList.remove('invalid');
        }
    });

    // emergencyContact validation
    emergencyContact.addEventListener('input', function() {
        const emergencyPhoneRegex = /^(\+?\d{1,4}[\s-])?(\(?\d{1,5}\)?[\s-])?[\d\s-]{7,15}$/;

        if (!emergencyContact.value.trim()) {
            emergencyContactError.textContent = 'Please enter Emergency Contact Number.';
            emergencyContactError.style.display = 'block';
            emergencyContact.classList.add('invalid');
        } else if (!emergencyPhoneRegex.test(emergencyContact.value)) {
            emergencyContactError.textContent = 'Invalid Emergency Contact Number format.';
            emergencyContactError.style.display = 'block';
            emergencyContact.classList.add('invalid');
        } else {
            emergencyContactError.style.display = 'none';
            emergencyContact.classList.remove('invalid');
        }
    });

    // Form submission
    form.addEventListener('submit', function(event) {
        // Trigger input events to validate all fields
        supplierName.dispatchEvent(new Event('input'));
        supplierAddress.dispatchEvent(new Event('input'));
        phone.dispatchEvent(new Event('input'));
        email.dispatchEvent(new Event('input'));
        tinNumber.dispatchEvent(new Event('input'));
        tradeLicense.dispatchEvent(new Event('input'));
        bankAcNo.dispatchEvent(new Event('input'));
        emergencyContact.dispatchEvent(new Event('input'));

        // Check for any invalid fields
        if (document.querySelectorAll('.invalid').length === 0) {
            form.submit();
        } else {
            event.preventDefault();
        }
    });
});