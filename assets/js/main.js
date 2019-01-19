
$(document)
.on("submit", "form.js-register", function(event) {
    event.preventDefault();  
    
    var _form = $(this);
    var _error = $(".js-error", _form);
    var dataObj = {
    email: $("input[type='email']", _form).val(),
    password: $("input[type='password']", _form).val()
    }

    if(dataObj.email.length < 8) {
        _error
            .text("please enter a valid email address")
            .show();
        return false;
    } else if (dataObj.password.length<11) {
        _error
            .text("please enter a password at least 11 characters long")
            .show();
        return false;
        
    }

    // If gets this far we start ajax
    _error.hide();

    $.ajax( {
        type: 'POST',
        url: 'ajax/register.php',
        data: dataObj,
        dataType: 'json',
        async: true,
    })
    .done(function ajaxDone(data) {
        // Whatever data is
        console.log(data);
        if (data.redirect != undefined) {
            window.location = data.redirect;
        }
        alert(data.name); 
    })
    .fail(function ajaxFailed(e) {
        console.log(e);
        // Case Failure
    })
    .always(function ajaxAlwaysDoThis(data) {
        console.log('Always');
        // Always Do
    })
    return false;
})
