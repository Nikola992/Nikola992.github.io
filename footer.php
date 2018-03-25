
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/poper.js" type="text/javascript"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a391e0b8f654494"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.validate.min.js" type="text/javascript"></script>


<script>
    $(document).ready(function () {


        $(function () {
            $(".contact-form").validate({
                highlight: function (element) {
                    $(element).closest('.form-group').addClass("has-danger");
                    $(element).addClass("form-control-danger");
                },
                unhighlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
                    $(element).removeClass('form-control-danger').addClass('form-control-success');
                },
                rules: {
                    w_name: {
                        required: true,
                        rangelength: [3, 255]
                    },
                    w_email: {
                        email: true,
                        required: true
                    },
                    w_message: {
                        rangelength: [5, 300],
                        required: true
                    }

                },
                messages: {
                   w_name: {
                        required: "The *Name field is required!",
                        rangelength: "The *Name must be between 3 and 255 characters!"
                    },
                    w_email: {
                        email: 'Please enter a valid email address!',
                        required: "The *Email field is required!"
                    },
                    w_message: {
                        rangelength: "The *Message must be between 5 and 300 characters!"
                    }
                },
                errorElement: 'p',
                errorPlacement: function (error, element) {
                    error.appendTo($(element).closest('.form-group').find('.error'));
                }

            });
        });
    });
    //Form Validation


</script>

</html>
