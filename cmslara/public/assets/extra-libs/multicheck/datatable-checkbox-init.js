$(function() {
    // Handle main checkbox click event
    $('#mainCheckbox').on('click', function() {
        // Check or uncheck all checkboxes based on the main checkbox status
        $('.listCheckbox').prop('checked', $(this).prop('checked'));
    });

    // Handle main checkbox with padding click event
    $('#mainCheckbox1').on('click', function() {
        $('.listCheckbox1').prop('checked', $(this).prop('checked'));
    });
});
