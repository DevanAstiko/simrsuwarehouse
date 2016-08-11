function demoFromHTML() {

    var source = document.getElementById('gotabel').outerHTML; //pvtTable is the default element class
    
    var accept = confirm("This table should be content?");
    if (accept) {
        var url = $('#url').attr('href') + "createreport/gettable";
        var post_data = {
            'target': source,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };

       
        $.ajax({
            url: url,
            type: 'POST',
            data: post_data,
            success: function (data) {

                if(data == 1){
                    window.location.replace($('#url').attr('href') + 'createreport/already');
                } else {
                    alert('Delete failed');
                }
            }
        });
    } else {

    }

    // var sources = 'cok';
    // alert(sources);



}


$(document).ready(function () {
    $("#addlaporanform").submit(function (e) {
        e.preventDefault();
        $('#submitButton').attr('disabled', true);
        var formData = new FormData($("#addlaporanform")[0]);
        var url = $('#url').attr('href') + 'createreport/save';

        $.ajax({
            url: url,
            type: 'post',
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
        }).done(function (data) {
            if (data.st == 0){
               alert('Urip Soro');
            } else {
                window.location.replace($('#url').attr('href') + 'createreport/directory');
            }

        });
    });

});


function godirectory(id) {
    var accept = confirm("Generate this report?");
    if (accept) {
        var url = $('#url').attr('href') + "createreport/generate";
        var post_data = {
            'target': id,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };

       
        $.ajax({
            url: url,
            type: 'POST',
            data: post_data,
            success: function (data) {

                if(data == 1){
                    alert('generate successfully');
                    
                } else {
                    alert('generate failed');
                }
            }
        });
    } else {

    }
}