$('#school_class_group_grade').on('change', function () {
    var grade = $(this).find('option:selected').text(),
        selectGrade = $(this).parent().parent();
    /*var url = Routing.generate('school_classgroup_alphabet',{grade: grade});*/
    $.ajax({

        //TODO: Add jsrouting route Routing.generate().
        url: 'http://school/app_dev.php/classgroups/grade/' + grade,
        /*url:url,*/
        success: function (data) {
            $('#school_class_group_alphabet').replaceWith(data);
        }
    });
});

//classgroup report
$('form').on('click', '.btn-report', function () {
    var group_id = $('#school_class_group_alphabet').find('option:selected').val(),
        type = $('form').find('input[type="radio"]:checked').val(),
        url = 'http://monitor/app_dev.php/report/classgroup/' + group_id + "/" + type;
    $.ajax({
        url: url,
        method: "POST",
        success: function (data) {
            $('.report').html(data);
        }
    });
});


$('#application_schoolbundle_academicyear_year').on('change', function () {
    var url = 'http://monitor/app_dev.php/academicyears/' + $(this).val() + '/quarters';
    $.ajax({
        url: url,
        success: function (data) {
            alert(data);
        }
    });
});
