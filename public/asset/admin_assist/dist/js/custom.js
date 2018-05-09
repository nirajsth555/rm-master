//for adding news 
$(document).ready(function() {
    //Use .submit() method instead of .click() method as there could be multiple submit buttons
        $("#addNewsForm").submit(function(e){
            e.preventDefault();
            //FormData class is used to retrive data sent from the form including files too.
            var formData = new FormData(this);
            //CKeditor is used, so data is not submitted from text area field as below
          
            formData.append('eng_editor', CKEDITOR.instances['eng_editor'].getData());
            formData.append('nep_editor', CKEDITOR.instances['nep_editor'].getData());
          
            $.ajax({
                //The APP_URL is defined in admin layout.blade.php
                url: APP_URL+"/post-news",
                method:'POST',
              
                // You just have to pass the formData object created earlier
                // Data would be sent just like during normal form submission
                data: formData,
                //The following 2 lines are to remove the error: Illegal Invocation
                processData:false,
                contentType:false,
                //CSRF token should be supplied from header
                //X_CSRF_TOKEN is also defined in admin layout.blade.php
                headers: {
                    'X-CSRF-TOKEN': X_CSRF_TOKEN
                },
                success: function(data) {
                    //Create a hidden div in the view file to diplay both error and success message
                    var formMessage = $('.form-message');
                    //Check if error array is empty
                    if($.isEmptyObject(data.error)){
                        //On success add a success class and success message to the div and make it visible
                        formMessage.removeClass('alert-warning').addClass('alert-success').text(data.message).show();
                    }else{
                        //Resets the form message div
                        formMessage.html('').removeClass('alert-success').addClass('alert-warning');
                        //There may be more than 1 error so append ul to the div
                        formMessage.append($('<ul>'));
                        //Get the ul 
                        var ul = formMessage.find('ul').first();
                        //Loop through each of the error message and each time add an li element in the ul
                        $.each(data.error,function(k,v){
                            ul.append($('<li>').text(v));
                        });
                        formMessage.show();
                    }
                    //Scroll to top
                    $("html, body").animate({ scrollTop: 0 });
                }
            });

        });


    });
//end of adding news


// table js code starts 
$(function () 
{ 
    $('#news-table').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
//table code ends



//start of addding project
$(document).ready(function() {
    //Use .submit() method instead of .click() method as there could be multiple submit buttons
        $("#addProjectForm").submit(function(e){
            e.preventDefault();
            //FormData class is used to retrive data sent from the form including files too.
            var formData = new FormData(this);
            //CKeditor is used, so data is not submitted from text area field as below
          
            formData.append('eng_editor', CKEDITOR.instances['eng_editor'].getData());
            formData.append('nep_editor', CKEDITOR.instances['nep_editor'].getData());
          
            $.ajax({
                //The APP_URL is defined in admin layout.blade.php
                url: APP_URL+"/post-project",
                method:'POST',
              
                // You just have to pass the formData object created earlier
                // Data would be sent just like during normal form submission
                data: formData,
                //The following 2 lines are to remove the error: Illegal Invocation
                processData:false,
                contentType:false,
                //CSRF token should be supplied from header
                //X_CSRF_TOKEN is also defined in admin layout.blade.php
                headers: {
                    'X-CSRF-TOKEN': X_CSRF_TOKEN
                },
                success: function(data) {
                    //Create a hidden div in the view file to diplay both error and success message
                    var formMessage = $('.form-message');
                    //Check if error array is empty
                    if($.isEmptyObject(data.error)){
                        //On success add a success class and success message to the div and make it visible
                        formMessage.removeClass('alert-warning').addClass('alert-success').text(data.message).show();
                    }else{
                        //Resets the form message div
                        formMessage.html('').removeClass('alert-success').addClass('alert-warning');
                        //There may be more than 1 error so append ul to the div
                        formMessage.append($('<ul>'));
                        //Get the ul 
                        var ul = formMessage.find('ul').first();
                        //Loop through each of the error message and each time add an li element in the ul
                        $.each(data.error,function(k,v){
                            ul.append($('<li>').text(v));
                        });
                        formMessage.show();
                    }
                    //Scroll to top
                    $("html, body").animate({ scrollTop: 0 });
                }
            });

        }); 
    });
//end of adding project

