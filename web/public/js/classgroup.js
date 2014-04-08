$('#school_class_group_grade').on('change', function () {
    var grade = $(this).find('option:selected').text(),
        selectGrade = $(this).parent().parent();
    /*var url = Routing.generate('school_classgroup_alphabet',{grade: grade});*/
    $.ajax({

        //TODO: Add jsrouting route Routing.generate().
        url: 'http://school/app_dev.php/classgroups/grade/' + grade,
        /*url:url,*/
        success: function (data) {
            $('.alphabet').remove();
            selectGrade.append(data);
        }
    });
});

$('form').on('click', '.btn-report', function () {
    var grade = $('#school_class_group_grade').find('option:selected').text(),
        alphabet = $('#alphabet').find('option:selected').text(),
        type = $('form').find('input[type="radio"]:checked').val(),
        url = 'http://school/app_dev.php/report/classgroup/' + grade + '/' + alphabet + "/" + type;
    $.ajax({
        url: url,
        success: function (data) {
            $('.report').html(data);
        }
    });
});


