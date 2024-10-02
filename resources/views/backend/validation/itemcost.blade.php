document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('itemCostForm');

    const item_info_id = document.getElementById('item_info_id');
    const purchase_price = document.getElementById('purchase_price');
    const vat = document.getElementById('vat');

    const item_info_Error = document.getElementById('item_info_Error');
    const purchase_priceError = document.getElementById('purchase_priceError');
    const vatError = document.getElementById('vatError');

    // Validation for Item Info ID
    item_info_id.addEventListener('input', function() {
        if (!item_info_id.value.trim()) {
            item_info_Error.textContent = 'Please enter the item info.';
            item_info_Error.style.display = 'block';
            item_info_id.classList.add('invalid');
        } else if (!/^\d+$/.test(item_info_id.value)) {  // Only digits allowed
            item_info_Error.textContent = 'Item info should contain only digits.';
            item_info_Error.style.display = 'block';
            item_info_id.classList.add('invalid');
        } else {
            item_info_Error.style.display = 'none';
            item_info_id.classList.remove('invalid');
        }
    });

    // Validation for Purchase Price
    purchase_price.addEventListener('input', function() {
        if (!purchase_price.value.trim()) {
            purchase_priceError.textContent = 'Please enter the purchase price.';
            purchase_priceError.style.display = 'block';
            purchase_price.classList.add('invalid');
        } else if (!/^\d+(\.\d{1,2})?$/.test(purchase_price.value)) {  // Digits with optional decimals
            purchase_priceError.textContent = 'Purchase price should be a valid number.';
            purchase_priceError.style.display = 'block';
            purchase_price.classList.add('invalid');
        } else {
            purchase_priceError.style.display = 'none';
            purchase_price.classList.remove('invalid');
        }
    });

    // Validation for VAT
    vat.addEventListener('input', function() {
        if (!vat.value.trim()) {
            vatError.textContent = 'Please enter the VAT.';
            vatError.style.display = 'block';
            vat.classList.add('invalid');
        } else if (!/^\d+(\.\d{1,2})?$/.test(vat.value)) {  // Digits with optional decimals
            vatError.textContent = 'VAT should be a valid number.';
            vatError.style.display = 'block';
            vat.classList.add('invalid');
        } else {
            vatError.style.display = 'none';
            vat.classList.remove('invalid');
        }
    });

    // Form Submission Validation
    form.addEventListener('submit', function(event) {
        item_info_id.dispatchEvent(new Event('input'));
        purchase_price.dispatchEvent(new Event('input'));
        vat.dispatchEvent(new Event('input'));

        if (document.querySelectorAll('.invalid').length === 0) {
            form.submit();
        } else {
            event.preventDefault();
        }
    });
});
