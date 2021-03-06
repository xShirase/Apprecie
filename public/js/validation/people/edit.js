/**
 * Created by Daniel on 06/12/14.
 */

function validateStep(stepID) {
    clearErrors();
    switch (stepID) {
        case 2:
            if (role === 'Client') {
                ValidateReferenceOrName($('#reference-code').val(), $('#firstname').val(), $('#lastname').val(), $('#emailaddress').val());
            } else {
                ValidateFullUser($('#firstname').val(), $('#lastname').val(), $('#emailaddress').val());
            }

            if (!validateTelephoneNumber($('#phone').val())) {
                errors.push('The telephone number can only contain digits');
            }

            if (!validateTelephoneNumber($('#mobile').val())) {
                errors.push('The mobile number can only contain digits');
            }
            ValidateUserDateOfBirth($('#dob-formatted').val());
            break;
        case 3:

            break;
        case 5:

            break;
    }
    if (errors.length == 0) {
        setStep(stepID + 1);
    }
    else {
        displayErrors();
    }
}

function validatePortal(portalId) {
    if (portalId == 'none') {
        errors.push('You must select a Portal to continue');
    }
}

function validateRole(element) {
    if (element.size() == 0) {
        errors.push('You must select a role to continue or there are is insufficient quota to create a new Person');
    }
}

function ValidateUserOwner(element) {
    if (element == '' || element == null) {
        errors.push('You must select an owner for this user');
    }
}

function ValidateFullUser(firstName, lastName, emailAddress) {

    if (firstName == '' || firstName == null) {
        errors.push('You must provide the first name for this user');
    }

    if (lastName == '' || lastName == null) {
        errors.push('You must provide the last name for this user');
    }

    if (!validateEmail(emailAddress)) {
        errors.push('Please enter a valid email address');
    }
}

function ValidateReferenceOrName(reference, firstName, lastName, emailAddress) {
    if (reference == '' && (firstName == '' || lastName == '')) {
        errors.push('You must provide either a Reference or a First Name and Last Name')
    }

    if(emailAddress != '') {
        if(!validateEmail(emailAddress)){
            errors.push('Please enter a valid email address');
        }
    }
}

function ValidateUserDateOfBirth(date) {
    if (date != '') {
        var dateObj = new moment(date, 'DD-MM-YYYY');

        if (dateObj.isValid()) {
            if (moment().diff(dateObj, 'years') < 18 || moment().diff(dateObj, 'years') > 120) {
                errors.push('User must be aged 18 or over');
            }
        } else {
            errors.push('Invalid date of birth entered (DD/MM/YYYY)');
        }
    }
}

function getEmailInUse(portalId, email, userId) {
    return $.ajax({
        url: "/callback/portalEmailInUse",
        type: 'post',
        dataType: 'json',
        cache: false,
        data: {"portalId": portalId, "email": email, "userId": userId}
    });
}

function EditUser(userId) {
    return $.ajax({
        url: "/people/ajaxedituser/" + userId,
        type: 'post',
        dataType: 'json',
        cache: false,
        data: $('#user-form').serialize()
    });
}
