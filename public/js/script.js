const toggler = document.querySelector(".btn");
toggler.addEventListener("click",function(){
    document.querySelector("#sidebar").classList.toggle("collapsed");
});

document.addEventListener('DOMContentLoaded', (event) => {
    const descriptionInput = document.getElementById('description');
    const descriptionHelp = document.getElementById('description-help');
    
    function updateDescription() {
        let value = descriptionInput.value;
        if (value.length > maxChars) {
            descriptionInput.value = value.substring(0, maxChars);
            descriptionHelp.textContent = `Max ${maxChars} characters. Characters left: 0`;
        } else {
            descriptionHelp.textContent = `Max ${maxChars} characters. Characters left: ${maxChars - value.length}`;
        }
    }

    descriptionInput.addEventListener('input', updateDescription);
    updateDescription(); // Initialize the helper text on page load
});

document.addEventListener('DOMContentLoaded', function () {
    // Handle button clicks
    document.querySelectorAll('.btn-number').forEach(function(button) {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            var fieldName = button.getAttribute('data-field');
            var type = button.getAttribute('data-type');
            var input = document.querySelector("input[name='" + fieldName + "']");
            var currentVal = parseInt(input.value);
            
            if (!isNaN(currentVal)) {
                if (type == 'minus') {
                    if (currentVal > parseInt(input.getAttribute('min'))) {
                        input.value = currentVal - 1;
                    }
                    if (parseInt(input.value) == parseInt(input.getAttribute('min'))) {
                        button.setAttribute('disabled', true);
                    }
                } else if (type == 'plus') {
                    if (currentVal < parseInt(input.getAttribute('max'))) {
                        input.value = currentVal + 1;
                    }
                    if (parseInt(input.value) == parseInt(input.getAttribute('max'))) {
                        button.setAttribute('disabled', true);
                    }
                }
            } else {
                input.value = 0;
            }

            // Enable or disable buttons based on current value
            if (parseInt(input.value) > parseInt(input.getAttribute('min'))) {
                document.querySelector("button[data-type='minus'][data-field='" + fieldName + "']").removeAttribute('disabled');
            }
            if (parseInt(input.value) < parseInt(input.getAttribute('max'))) {
                document.querySelector("button[data-type='plus'][data-field='" + fieldName + "']").removeAttribute('disabled');
            }
        });
    });

    // Disable minus button if the input value is at the minimum
    document.querySelectorAll('.input-number').forEach(function(input) {
        input.addEventListener('change', function() {
            var minValue = parseInt(input.getAttribute('min'));
            var maxValue = parseInt(input.getAttribute('max'));
            var valueCurrent = parseInt(input.value);
            
            if (valueCurrent >= minValue) {
                document.querySelector("button[data-type='minus'][data-field='quantity']").removeAttribute('disabled');
            } else {
                document.querySelector("button[data-type='minus'][data-field='quantity']").setAttribute('disabled', true);
            }
            
            if (valueCurrent <= maxValue) {
                document.querySelector("button[data-type='plus'][data-field='quantity']").removeAttribute('disabled');
            } else {
                document.querySelector("button[data-type='plus'][data-field='quantity']").setAttribute('disabled', true);
            }
        });
    });
});