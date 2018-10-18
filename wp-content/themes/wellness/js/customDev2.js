$(document).ready(function() {
    $('.select2.team').select2();
    // Set the value, creating a new option if necessary
    if ($('.select2.team').find("option[value='" + data.id + "']").length) {
        $('.select2.team').val(data.id).trigger('change');
    } else { 
        // Create a DOM Option and pre-select by default
        var newOption = new Option(data.text, data.id, true, true);
        // Append it to the select
        $('.select2.team').append(newOption).trigger('change');
    } 
});