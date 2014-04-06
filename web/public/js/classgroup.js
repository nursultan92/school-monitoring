$('#school_class_group_grade').on('change', function () {
    var grade = $(this).find('option:selected').text();
    var form = $(this);
    $.ajax({

        //TODO: Add jsrouting route Routing.generate().
        url: 'http://school/app_dev.php/classgroups/grade/' + grade,
        success: function (data) {

            //TODO: append and remove alphabet
            console.log(data);

            form.append(data);
        }
    })
});


