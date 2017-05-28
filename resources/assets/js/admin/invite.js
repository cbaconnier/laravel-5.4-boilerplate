$(function () {

    $('.admin-invite-create form').form(
        {
            on: 'blur',
            fields: {
                email: {
                    identifier  : 'email',
                    rules: [
                        {
                            type   : 'email',
                            prompt : 'Please enter a valid e-mail'
                        }
                    ]
                }
            }
        }
    );

});