document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('Item-info-form');

    const categoryId = document.getElementById('category_id');
    const subCategoryId = document.getElementById('sub_category_id');
    const brandId = document.getElementById('brand_id');
    const colorId = document.getElementById('color_id');
    const sizeId = document.getElementById('size_id');
    const name = document.getElementById('name');
    const code = document.getElementById('code');
    const supplierId = document.getElementById('supplier_id');

    const categoryError = document.getElementById('categoryError');
    const sub_categoryError = document.getElementById('sub_categoryError');
    const brandError = document.getElementById('brandError');
    const colorError = document.getElementById('colorError');
    const sizeError = document.getElementById('sizeError');
    const nameError = document.getElementById('nameError');
    const codeError = document.getElementById('codeError');
    const supplierError = document.getElementById('supplierError');

    // categoryId validation
    categoryId.addEventListener('input', function() {
        if (!categoryId.value.trim()) {
            categoryError.textContent = 'Please enter category.';
            categoryError.style.display = 'block';
            categoryId.classList.add('invalid');
        } else if (!/^[0-9\s]+$/.test(categoryId.value)) {
            categoryError.textContent = 'Category should contain only Number.';
            categoryError.style.display = 'block';
            categoryId.classList.add('invalid');
        } else {
            categoryError.style.display = 'none';
            categoryId.classList.remove('invalid');
        }
    });

    // subCategoryId validation
    subCategoryId.addEventListener('input', function() {
    const addressRegex = /^[0-9\s,.-]+$/;

    if (!subCategoryId.value.trim()) {
        sub_categoryError.textContent = 'Please enter subCategory.';
        sub_categoryError.style.display = 'block';
        subCategoryId.classList.add('invalid');
    } else if (!addressRegex.test(subCategoryId.value)) {
        sub_categoryError.textContent = 'Sub Category should contain only numbers';
        sub_categoryError.style.display = 'block';
        subCategoryId.classList.add('invalid');
    } else {
        sub_categoryError.style.display = 'none';
        subCategoryId.classList.remove('invalid');
    }
});

    // brandId validation
    brandId.addEventListener('input', function() {
        const phoneRegex = /^[0-9\s,.-]+$/;

        if (!brandId.value.trim()) {
            brandError.textContent = 'Please enter brandId.';
            brandError.style.display = 'block';
            brandId.classList.add('invalid');
        } else if (!phoneRegex.test(brandId.value)) {
            brandError.textContent = 'Brand should contain only numbers';
            brandError.style.display = 'block';
            brandId.classList.add('invalid');
        } else {
            brandError.style.display = 'none';
            brandId.classList.remove('invalid');
        }
    });

    // colorId validation
    colorId.addEventListener('input', function() {
        const emailRegex =  /^[0-9\s,.-]+$/;
        if (!colorId.value.trim()) {
            colorError.textContent = 'Please enter colorId';
            colorError.style.display = 'block';
            colorId.classList.add('invalid');
        } else if (!emailRegex.test(colorId.value)) {
            colorError.textContent =  'Color should contain only numbers';
            colorError.style.display = 'block';
            colorId.classList.add('invalid');
        } else {
            colorError.style.display = 'none';
            colorId.classList.remove('invalid');
        }
    });

    // tinNumber validation
    sizeId.addEventListener('input', function() {
        if (!sizeId.value.trim()) {
            sizeError.textContent = 'Please enter sizeId.';
            sizeError.style.display = 'block';
            sizeId.classList.add('invalid');
        } else if (!/^[0-9\s]+$/.test(sizeId.value)) {
            sizeError.textContent = 'Size should contain only  numbers';
            sizeError.style.display = 'block';
            sizeId.classList.add('invalid');
        } else {
            sizeError.style.display = 'none';
            sizeId.classList.remove('invalid');
        }
    });

    // tradeLicense validation
    name.addEventListener('input', function() {
        if (!name.value.trim()) {
            nameError.textContent = 'Please enter Name.';
            nameError.style.display = 'block';
            name.classList.add('invalid');
        } else if (!/^[a-zA-Z0-9\s]+$/.test(name.value)) {
            nameError.textContent = 'Name should contain only letters and spaces.';
            nameError.style.display = 'block';
            name.classList.add('invalid');
        } else {
            nameError.style.display = 'none';
            name.classList.remove('invalid');
        }
    });

    // bankAcNo validation
    code.addEventListener('input', function() {
        if (!code.value.trim()) {
            codeError.textContent = 'Please enter code.';
            codeError.style.display = 'block';
            code.classList.add('invalid');
        } else if (!/^[a-zA-Z0-9\s]+$/.test(code.value)) {
            codeError.textContent = 'Code should contain only letters, numbers, and spaces.';
            codeError.style.display = 'block';
            code.classList.add('invalid');
        } else {
            codeError.style.display = 'none';
            code.classList.remove('invalid');
        }
    });

    // emergencyContact validation
    supplierId.addEventListener('input', function() {
        const emergencyPhoneRegex = /^[0-9\s,.-]+$/;

        if (!supplierId.value.trim()) {
            supplierError.textContent = 'Please enter supplierId.';
            supplierError.style.display = 'block';
            supplierId.classList.add('invalid');
        } else if (!emergencyPhoneRegex.test(supplierId.value)) {
            supplierError.textContent = 'Supplier only numbers and spaces.';
            supplierError.style.display = 'block';
            supplierId.classList.add('invalid');
        } else {
            supplierError.style.display = 'none';
            supplierId.classList.remove('invalid');
        }
    });

    // Form submission
    form.addEventListener('submit', function(event) {
        // Trigger input events to validate all fields
        categoryId.dispatchEvent(new Event('input'));
        subCategoryId.dispatchEvent(new Event('input'));
        brandId.dispatchEvent(new Event('input'));
        colorId.dispatchEvent(new Event('input'));
        sizeId.dispatchEvent(new Event('input'));
        name.dispatchEvent(new Event('input'));
        code.dispatchEvent(new Event('input'));
        supplierId.dispatchEvent(new Event('input'));

        // Check for any invalid fields
        if (document.querySelectorAll('.invalid').length === 0) {
            form.submit();
        } else {
            event.preventDefault();
        }
    });
});