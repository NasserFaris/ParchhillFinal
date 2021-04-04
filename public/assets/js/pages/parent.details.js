if ($("#details_form").length > 0) {
    $("#details_form").validate({

        rules: {
            'Firest Name': {
                required: true,
                maxlength: 100
            },
            'Last Name': {
                required: true,
                maxlength: 100
            },
            'Email Address': {
                required: true,
                maxlength: 200,
                email: true,
            },
            'Address': {
                required: true,
                maxlength: 100,
            },
            'Town/City': {
                required: true,
                maxlength: 100,
            },
            'Counrty': {
                required: true,
                maxlength: 100,
            },
            'Post code': {
                required: true,
                maxlength: 100,
            },
            'Telephone': {
                required: true,
                maxlength: 100,
            },

            'student_firest_name': {
                required: true,
                maxlength: 100,
            },
            'student_last_name': {
                required: true,
                maxlength: 100,
            },

        },
        messages: {
            'Parent Name': {
                required: "Please enter Parent Name",
                maxlength: "The Parent Name should less than or equal to 100 characters",
            },
            'Phone Number': {
                required: "Please enter Phone Number",
                maxlength: "The Phone Number should less than or equal to 100 characters",
            },
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
