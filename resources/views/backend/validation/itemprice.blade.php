document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('itemPriceForm');

    const item_info_id = document.getElementById('item_info_id');
    const item_cost_id = document.getElementById('item_cost_id');
    const item_price = document.getElementById('item_price');

    const item_info_Error = document.getElementById('item_info_Error');
    const item_cost_Error = document.getElementById('item_cost_Error');
    const item_priceError = document.getElementById('item_priceError');

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
    // Validation for Item Info ID
    item_cost_id.addEventListener('input', function() {
        if (!item_cost_id.value.trim()) {
            item_cost_Error.textContent = 'Please enter the item info.';
            item_cost_Error.style.display = 'block';
            item_cost_id.classList.add('invalid');
        } else if (!/^\d+$/.test(item_cost_id.value)) {  // Only digits allowed
            item_cost_Error.textContent = 'Item info should contain only digits.';
            item_cost_Error.style.display = 'block';
            item_cost_id.classList.add('invalid');
        } else {
            item_cost_Error.style.display = 'none';
            item_cost_id.classList.remove('invalid');
        }
    });


    // Validation for Purchase Price
    item_price.addEventListener('input', function() {
        if (!item_price.value.trim()) {
            item_priceError.textContent = 'Please enter the purchase price.';
            item_priceError.style.display = 'block';
            item_price.classList.add('invalid');
        } else if (!/^\d+(\.\d{1,2})?$/.test(item_price.value)) {  // Digits with optional decimals
            item_priceError.textContent = 'Purchase price should be a valid number.';
            item_priceError.style.display = 'block';
            item_price.classList.add('invalid');
        } else {
            item_priceError.style.display = 'none';
            item_price.classList.remove('invalid');
        }
    });


    // Form Submission Validation
    form.addEventListener('submit', function(event) {
        item_info_id.dispatchEvent(new Event('input'));
        item_cost_id.dispatchEvent(new Event('input'));
        item_price.dispatchEvent(new Event('input'));

        if (document.querySelectorAll('.invalid').length === 0) {
            form.submit();
        } else {
            event.preventDefault();
        }
    });
});
