if ($("#contact_form").length > 0) {
    $("#contact_form").validate({

    rules: {
        'Parent Name': {
                        required: true,
                        maxlength: 100
        },
        'Phone Number' : {
                        required: true,
                        maxlength: 100
        },
        'Email Address': {
                        required: true,
                        maxlength: 200,
                        email: true,
        },
        'Child’s Name': {
                        required: true,
                        maxlength: 100,
        },
        'Year': {
                        required: true,
        },
        'Subject': {
                        required: true,
        },

    },
    messages: { 
        'Parent Name': {
            required: "Please enter Parent Name",
            maxlength: "The Parent Name should less than or equal to 100 characters",
        },
        'Phone Number' : {
            required: "Please enter Phone Number",
            maxlength: "The Phone Number should less than or equal to 100 characters",
        } ,                
        'Email Address': {
            required: "Please enter valid email",
            email: "Please enter valid email",
            maxlength: "The email name should less than or equal to 200 characters",
        },
        'Child’s Name': {
            required: "Please enter Child’s Name",
            maxlength: "The Child’s Name should less than or equal to 100 characters",
        },
        'Year': {
            required: "Please select year",
        },
        'Subject': {
            required: "Please select subject",
        },

    },
    })
    } 