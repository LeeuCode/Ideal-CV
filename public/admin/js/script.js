jQuery(document).ready(function ($) {

    setInterval(function () {  

        var btn_upload_id = $(".lt-upload").attr('id') ,
            img = $('#'+btn_upload_id).val();
        if(img !== ""){
            // alert(btn_upload_id);
            $('#'+btn_upload_id).parent().prevAll('img').attr("src", img);
        }
        
    },1);

    setInterval(function () {

        var btn_upload_id = $(".lt-upload-background").attr('id'),
            img = $('#' + btn_upload_id).val();
        if (img !== "") {
            // alert(btn_upload_id);
            $('#' + btn_upload_id).parent().prevAll('img').attr("src", img);
        }

    }, 1);


    setInterval(function () {

        $('.lt-upload-project').each(function () {
            var btn_upload_id = this.id,
                img = $('#' + btn_upload_id).val();
            if (img !== "") {
                // alert(btn_upload_id);
                $('#' + btn_upload_id).parent().prevAll('img').attr("src", img);
            }
        });

    }, 1);


    var fonts = (function () {
        var json = null;
        $.ajax({
            'async': false,
            'global': true,
            'url': home_url + '/public/admin/js/font-awesome-4.7.0.json',
            'dataType': "json",
            'success': function (data) {
                json = data;
            }
        });
        return json.fonts;
    })();

    $.each(fonts, function (key, font) {
        $('.modal-fonts').append('<button type="button" class="btn btn-app btn-ficon" data-icon="' + font + '" > <i class="fa ' + font + '"></i></button>');
    });

    $(document).on('click','.btn-ficon',function(){
        var icon = $(this).data('icon') ,
        modal = $(this).parent().parent().parent().parent() ,
        button = modal.prevAll(".choose-icon");
        
        modal.prevAll().find('span').removeClass().addClass("fa "+icon);
        modal.prev('input').val(icon);
        modal.modal('toggle');
    });

    // edit data to additional block icon & title . 
    $(document).on('click','.save',function() {
        // Determination Modal Container .
        var modal = $(this).parent().parent().parent().parent(),
            // Determination Modal Body Parent .
            modal_body = $(this).parent().prevAll(".modal-body") ,
            // Determination Button Choose Icon .
            button = modal_body.children(".choose-icon") ,
            // Find & Get <i> Attribute class from button choose icon .
            icon = button.find('span').attr('class'),
            // Find & Get <i> Attribute which in button .
            button_icon = modal.prevAll('.additional-container').find('.fi-icon').find('i') ,
            // Find Additional Title .
            additional_title = modal.prevAll('.additional-container').find('.additional-title') ,
            // Get Title Input Value .
            title_input = modal_body.children('.title-input').val(); 
            
        button_icon.attr('class',icon); // Add Icon to button additional block box .
        additional_title.text(title_input); // Add Title To Additional Block Box .
        modal.modal('toggle'); // Toggle Modal .
    });
    // Add Additional Information Table Row To Table .
    $(document).on('click','.add-new-info',function(){
        var table_id = $(this).data('tb-id'), // Determination table id .
            info_num = $(this).data('info-num'); //  Determination Info Num Data .
        // Append <tr> table row to <tbody> table body .
        $('#' + table_id).append('<tr> <td> <input name="additional_title[' + info_num + '][]" type="text" class="form-control" placeholder="' + lang['type the title here'] + '"> </td><td> <input name="additional_description[' + info_num + '][]" type="text" class="form-control" placeholder="' + lang['type the description here'] + '"> </td><td> <button type="button" class="btn btn-block btn-danger additional-rm"> <i class="fa fa-trash-o"></i> </button> </td></tr>');
    });
    // remove additional table row .
    $(document).on('click','.additional-rm',function(){
        // Determination <tr> and remove .
        $(this).parent().parent().remove();
    });
    // additional-block-container
    $(document).on('click','.add-additional-block',function(){
        var additional_id = $(this).data('additional-id');

        $('.additional-block-container').append('<div class="col-md-4"> <div class="additional-container"> <center> <button type="button" class="btn btn-app fi-icon" data-toggle="modal" data-target="#additional-modal-' + additional_id + '"> <i class="fa fa-edit"></i> ' + lang['icon'] + ' </button> <p class="additional-title">' + lang['additional title'] + '</p><i class="fa fa-trash block-remove"></i> </center> </div><div class="modal fade" id="additional-modal-' + additional_id + '" role="dialog"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i aria-hidden="true">×</i></button> <h4 class="modal-title"> <i class="fa fa-chain"></i> ' + lang['edit additional information'] + '</h4> </div><div class="modal-body"> <input type="hidden" name="additional_id[]" value="' + additional_id + '"> <h4>' + lang['choose icon'] + '</h4> <button type="button" class="btn btn-app choose-icon" data-toggle="modal" data-target="#modal-fonts-' + additional_id + '"> <span class="fa fa-edit ico"></span> ' + lang['icon'] + ' </button><h4>' + lang['title'] + '</h4> <input name="additional_title_block[' + additional_id + ']" type="text" class="form-control title-input" placeholder="' + lang['type the title here'] + '"> <button data-info-num="' + additional_id + '" data-tb-id="table' + additional_id + '" type="button" class="btn btn-info add-new-info "> <i class="fa fa-plus-circle"></i> ' + lang['add information'] + ' </button> <table class="table table-striped"> <tbody id="table' + additional_id + '" class="table-content"> <tr> <th>' + lang['title'] + '</th> <th>' + lang['description'] + '</th> <th style="width: 40px">' + lang['remove'] + '</th> </tr></tbody> </table> </div><div class="modal-footer"> <button type="button" class="btn btn-default pull-left" data-dismiss="modal">' + lang['close'] + '</button> <button type="button" class="btn btn-primary save">' + lang['save changes'] + '</button> </div></div></div></div><input name="additional_icon[' + additional_id + ']" type="hidden" class="icon-service" value=""><div class="modal fade" id="modal-fonts-' + additional_id + '" role="dialog"> <div class="modal-dialog modal-lg"> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i aria-hidden="true">×</i></button> <h4 class="modal-title"> <i class="fa fa-fonticons"></i> ' + lang['choose icon'] + ' </h4> </div><div class="modal-body modal-fonts"> </div></div></div></div></div>');
            $.each(fonts, function (key, font) {
            $('.modal-fonts').append('<button type="button" class="btn btn-app btn-ficon" data-icon="' + font + '" > <i class="fa ' + font + '"></i></button>');
        });

        $(this).data('additional-id', (additional_id+1));
    });
    //
    $(document).on('click','.block-remove',function() {
        $(this).parent().parent().parent().remove();
    });
    // add Social Madia
    $(document).on('click','.btn-add-social',function(){
        $('.social-media-contianer').append('<tr> <td> <select name="social_media[]" class="form-control social-select"> <option value="" >' + lang['icon'] + '</option> <option value="facebook">&#xf09a;</option> <option value="twitter">&#xf099;</option> <option value="youtube">&#xf167;</option> <option value="youtube-play">&#xf16a;</option> <option value="instagram">&#xf16d;</option> <option value="google-plus">&#xf0d5;</option> <option value="linkedin">&#xf0e1;</option><option value="tumblr">&#xf173;</option><option value="behance">&#xf1b4;</option><option value="digg">&#xf1a6;</option><option value="dribbble">&#xf17d;</option><option value="github">&#xf09b;</option><option value="github-alt">&#xf113;</option><option value="pinterest-p">&#xf231;</option><option value="soundcloud">&#xf1be;</option><option value="stack-overflow">&#xf16c;</option><option value="vimeo">&#xf27d;</option><option value="vk">&#xf189;</option><option value="weibo">&#xf18a;</option></select></td><td><input name="socail_url[]" type="text" class="form-control" placeholder="' + lang['type the url here'] + '" ></td><td><button type="button" class="btn btn-block btn-danger social-remove"><i class="fa fa-trash-o"></i></button></td></tr>');
    });
    // remove Social Media <tr> table row .
    $(document).on('click','.social-remove',function(){
        $(this).parent().parent().remove();
    });
    
    
    //
    $('.bg-type').click(function() {
        var type  = $(this).attr('id') ,
            input_type = $('.bg-input-type') ;
            input_type.val(type);
    });
    $('.my-colorpicker2').colorpicker();
    //
    $(document).on('click','.add-skill',function(){
        var skill_num = $(this).data('skill-num'); 
        $('.skills-div').append('<div class="col-md-4"> <div class="skill-container"> <div class="progress active" data-toggle="modal" data-target="#skill-modal-' + skill_num + '"> <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> 100%</div></div><h5 class="skill-title">' + lang['skill title'] + '</h5> <i class="fa fa-trash skill-remove"></i> <div class="modal fade" id="skill-modal-' + skill_num + '"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i aria-hidden="true">×</i></button> <h4 class="modal-title"> <i class="fa fa-th-list"></i> ' + lang['skills'] + '</h4> </div><div class="modal-body"> <div class="form-group"> <label>' + lang['skill title'] + '</label> <input name="skill_title[]" type="text" class="form-control skill-input-title" placeholder="' + lang['type skill title here'] + '"> </div><div class="form-group"> <label>' + lang['choose color'] + '</label> <div class="input-group my-colorpicker2 colorpicker-element"> <input name="skill_color[]" type="text" class="form-control skill-color-input" placeholder="' + lang['type color code here'] + '"> <div class="input-group-addon"> <i></i></div></div></div><div class="form-group"> <label>' + lang['level percentage'] + '</label> <input name="skill_level[]" type="number" class="form-control skill-percentage" min="10" max="100" placeholder="' + lang['type level percentage here'] + '"> </div></div><div class="modal-footer"> <button type="button" class="btn btn-default pull-left" data-dismiss="modal">' + lang['close'] + '</button> <button type="button" class="btn btn-primary save-skill">' + lang['save changes'] + '</button> </div></div></div></div></div></div>');
        //color picker with addon
        $('.my-colorpicker2').colorpicker();

        $(this).data('skill-num', (skill_num+1) );
        
    });
    //
    $(document).on('click','.save-skill',function(){
            // Determination Modal Body Parent .
        var modal = $(this).parent().parent().parent().parent(),
            // Determination Modal Body Container .
            modal_body = $(this).parent().prevAll('.modal-body');
            //
            skill_title_input = modal_body.children('.form-group').find('.skill-input-title').val(),
            //
            skill_color_input = modal_body.children('.form-group').find('.skill-color-input').val(),
            //
            skill_percentage = modal_body.children('.form-group').find(".skill-percentage").val();
        //
        modal.prevAll().find('.progress-bar').css({ 'width': skill_percentage+'%', 'background-color': skill_color_input}).text(skill_percentage+'%');
        //
        modal.prevAll('.skill-title').text(skill_title_input);
        //
        modal.modal('toggle');
    })
    // remove skill container .
    $(document).on('click','.skill-remove',function(){
        //
        $(this).parent().parent().remove();
    });
    //
    $(document).on('click','.add-service-block',function(){
        var service_id = $(this).data('service-id');
        
        $('.services-container').append('<div class="col-md-3"> <div class="service-container"> <center> <button type="button" class="btn btn-app choose-icon" data-toggle="modal" data-target="#modal-fonts-' + service_id + '"> <span class="fa fa-edit"></span> Choose Icon </button> <input name="service_icon[]" type="hidden" class="icon-service"> <div class="modal fade" id="modal-fonts-' + service_id +'" role="dialog"> <div class="modal-dialog modal-lg"> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span></button> <h4 class="modal-title"> <i class="fa fa-fonticons"></i> Choose Icon </h4> </div><div class="modal-body modal-fonts"> </div></div></div></div><div class="form-group" style="margin-top:10px"> <label>Title</label> <input name="service_title[]" type="text" class="form-control" placeholder="Type the title here"> </div><div class="form-group" style="margin-top:10px"> <label>Content</label> <textarea name="service_content[]" class="form-control" style="height:100px;" placeholder="Type the content here"></textarea> </div><i class="fa fa-trash block-remove"></i></center> </div></div>');

        $(document).on('click', '.btn-ficon', function () {

            var icon = $(this).data('icon'),
                modal = $(this).parent().parent().parent().parent(),
                button = modal.prevAll(".choose-icon");

            modal.prevAll().find('span').removeClass().addClass("fa " + icon);
            // modal.prev('input').val(icon);
            $('.modal').modal('hide');
        });

        $.each(fonts, function (key, font) {
            $('.modal-fonts').append('<button type="button" class="btn btn-app btn-ficon" data-icon="' + font + '" > <i class="fa ' + font + '"></i></button>');
        });

        $(this).data('service-id', (service_id+1));

    });
    //
    $(document).on('change','.change-title',function(){
        var _title = $(this).val(),
            collapse = $(this).parent().parent().parent().parent();
        collapse.prev('.box-header').children('.box-title').children('.collapse-title-e').text(_title);
    });
    //
    $(document).on('click','.add-education-block',function(){
        var education_id = $(this).data('education-id');
        $('.educations-container').prepend('<div class="col-md-12"> <div class="panel box box-success"> <div class="box-header with-border"> <h4 class="box-title"> <a data-toggle="collapse" data-parent="#accordion" href="#education-block-' + education_id + '" class="collapse-title-e" aria-expanded="true"> ' + lang['education title'] + ' </a> </h4> <div class="box-tools pull-right"> <button type="button" class="btn btn-box-tool section-block-remove"> <i class="fa fa-trash"></i> </button> </div></div><div id="education-block-' + education_id + '" class="panel-collapse collapse " aria-expanded="true" style=""> <div class="box-body"> <div class="col-md-6"> <div class="form-group"> <label>' + lang['education title'] + '</label> <input name="education_title[]" type="text" class="form-control change-title" placeholder="' + lang['type the education title here'] + '"> </div></div><div class="col-md-6"> <div class="form-group"> <label>' + lang['education name'] + '</label> <input name="education_name[]" type="text" class="form-control" placeholder="' + lang['type the education name here'] + '"> </div></div><div class="col-md-12"> <div class="form-group"> <label>' + lang['description education'] + '</label> <textarea name="education_description[]" class="form-control" rows="3" placeholder="' + lang['type the description education here'] + '"></textarea> </div></div></div></div></div></div>');
        $(this).data('education-id', (education_id+1));
    });
    //
    $(document).on('click', '.add-experience-block', function () {
        var experience_id = $(this).data('experience-id');
        $('.experiences-container').prepend('<div class="col-md-12"> <div class="panel box box-info"> <div class="box-header with-border"> <h4 class="box-title"> <a data-toggle="collapse" data-parent="#accordion" href="#experience-block-' + experience_id + '" class="collapse-title-e" aria-expanded="true"> ' + lang['experience title'] + ' </a> </h4> <div class="box-tools pull-right"> <button type="button" class="btn btn-box-tool section-block-remove"> <i class="fa fa-trash"></i> </button> </div></div><div id="experience-block-' + experience_id + '" class="panel-collapse collapse " aria-expanded="true" style=""> <div class="box-body"> <div class="col-md-6"> <div class="form-group"> <label>' + lang['experience title'] + '</label> <input name="experience_title[]" type="text" class="form-control change-title" placeholder="' + lang['type the experience title here'] + '"> </div></div><div class="col-md-6"> <div class="form-group"> <label>' + lang['experience name'] + '</label> <input name="experience_name[]" type="text" class="form-control" placeholder=" ' + lang['type the experience name here'] + ' "> </div></div><div class="col-md-12"> <div class="form-group"> <label>' + lang['description experience'] + '</label> <textarea name="experience_description[]" class="form-control" rows="3" placeholder=" ' + lang['type the experience description here'] +' "></textarea> </div></div></div></div></div></div>');
        $(this).data('experience-id', (experience_id + 1));
    });
    //
    $(document).on('click','.section-block-remove',function(){
        $(this).parent().parent().parent().parent().remove();
    });
    //
    $(document).on('click','.add-project-block',function(){
        var project_id = $(this).data('project-id');

        $('.projects-container').prepend('<div class="col-md-6"> <div class="project-block"> <img src="http://www.health.com/img/icons/missing-image-16x9.svg" class="img-rounded wh-100 lt-img hg-125" alt="Cinque Terre" > <br><br><div class="input-group input-group-sm wh-100"> <input id="project-image' + project_id + '" name="project_image[]" type="hidden" class="form-control lt-upload-project" placeholder=""> <button type="button" class="btn btn-info wh-100" data-toggle="modal" data-target="#modal-upload-project-' + project_id + '"> <i class="fa fa-image"></i> ' + lang['upload project image'] + '</button> </div><div class="modal fade" id="modal-upload-project-' + project_id + '"> <div class="modal-dialog modal-lg"> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span></button> <h4 class="modal-title">' + lang['upload image'] + '</h4> </div><div class="modal-body"> <iframe width="100%" height="500" frameborder="0"src="' + home_url + '/public/filemanager/dialog.php?type=2&field_id=project-image' + project_id + '&fldr="> </iframe> </div></div></div></div><div class="form-group project-title "> <label for="project_title' + project_id + '">' + lang['project title'] + '</label> <input name="project_title[]" type="text" class="form-control" id="project_title' + project_id + '" placeholder=" ' + lang['type the project title here'] + ' "> </div><center><i class="fa fa-trash block-remove"></i></center></div></div>');
        
        $(this).data('project-id',(project_id+1));
    
    });

});