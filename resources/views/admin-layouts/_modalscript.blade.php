<script>
        /**
         * this script is for fetching data from table to modal
         */
        /**  Stucent Edit*/
             $('.edit-student').each(function() {
              $(this).click(function(event){
                $('#studentUpdate').attr("action", "http://localhost/csis_lrvl_v/public/Student/Update/"+($(this).data('id'))+"");
                $('#edit-id').val($(this).data('studentid'));
                $('#edit-name').val($(this).data('name'));
                $('#edit-contact').val($(this).data('contact'));
                $('#edit-bday').val($(this).data('bday'));
                $('#edit-bplace').val($(this).data('bplace'));
                $('#edit-address').val($(this).data('address'));
                // Set the selected option for gender field
                $('#edit-gender option[value="' + $(this).data('sex') + '"]').prop('selected', true);
                // Set the selected option for program field
                $('#edit-course option[value="' + $(this).data('course') + '"]').prop('selected', true);
                // Set the selected option for year field
                $('#edit-year option[value="' + $(this).data('year') + '"]').prop('selected', true);
                // Set the selected option for status type field
                $('#edit-status option[value="' + $(this).data('status') + '"]').prop('selected', true);
              });
            });
            $('.delete-student').each(function() {
              $(this).click(function(event){
                $('#studentDestroy').attr("action", "http://localhost/csis_lrvl_v/public/Student/Delete/"+($(this).data('studentid'))+"");
                $('#del-id').val($(this).data('studentid'));
                $('#del-name').val($(this).data('name'));
                $('#del-contact').val($(this).data('contact'));
                $('#del-bday').val($(this).data('bday'));
                $('#del-bplace').val($(this).data('bplace'));
                $('#del-address').val($(this).data('address'));
                // Set the selected option for gender field
                $('#del-gender option[value="' + $(this).data('sex') + '"]').prop('selected', true);
                // Set the selected option for program field
                $('#del-course option[value="' + $(this).data('course') + '"]').prop('selected', true);
                // Set the selected option for year field
                $('#del-year option[value="' + $(this).data('year') + '"]').prop('selected', true);
                // Set the selected option for status type field
                $('#del-status option[value="' + $(this).data('status') + '"]').prop('selected', true);
              });
            });




    /** Course Edit */
            $('.edit-course').each(function() {
             $(this).click(function(event){
               $('#courseUpdate').attr("action", "http://localhost/csis_lrvl_v/public/Program/Course/Update/"+($(this).data('id'))+"");
               $('#edescription').val($(this).data('description'));
             })
            });
    /** Course Delete */
            $('.delete-course').each(function() {
             $(this).click(function(event){
               $('#courseDestroy').attr("action", "http://localhost/csis_lrvl_v/public/Program/Course/Delete/"+($(this).data('id'))+"");
               $('#course').text($(this).data('description'));
             })
            });

    //{{---------------------------------}}}//

    /** Subject Edit */
    $('.edit-subject').each(function() {
  $(this).click(function(event){
    $('#subjectUpdate').attr("action", "http://localhost/csis_lrvl_v/public/Program/Subject/Update/"+($(this).data('id'))+"");
    $('#subcode').val($(this).data('subcode'));
    $('#subdescription').val($(this).data('description'));

    // Set the selected option for lab status field
    $('#sublab option[value="' + $(this).data('lab') + '"]').prop('selected', true);

    // Set the selected option for subject type field
    $('#substatus option[value="' + $(this).data('type') + '"]').prop('selected', true);
  });
});

    /** Subject Delete */

           $('.delete-subject').each(function() {
             $(this).click(function(event){
               $('#subjectDestroy').attr("action", "http://localhost/csis_lrvl_v/public/Program/Subject/Delete/"+($(this).data('id'))+"");

               $('#delcode').val($(this).data('subcode'));
               $('#deldesc').val($(this).data('description'));
            })
           });

    //{{---------------------------------}}}//

    /** Faculty Edit */
            $('.edit-faculty').each(function() {
             $(this).click(function(event){
               $('#facultyUpdate').attr("action", "http://localhost/csis_lrvl_v/public/Faculty/Update/"+($(this).data('id'))+"");
               $('#eteacherid').val($(this).data('teacherid'));
               $('#ename').val($(this).data('name'));
               $('#enumber').val($(this).data('number'));
               $('#egender').val($(this).data('sex'));
               $('#eaddress').val($(this).data('address'));
             })
            });

            /** Faculty Delete */

           $('.delete-faculty').each(function() {
             $(this).click(function(event){
               $('#facultyDestroy').attr("action", "http://localhost/csis_lrvl_v/public/Faculty/Delete/"+($(this).data('id'))+"");
             if($(this).data('sex') == "male"){
                $('#person').text("Sir "+$(this).data('name'));
             }
              else{
                $('#person').text("Ms "+$(this).data('name'));
              }
            })
           });


            /** Faculty Delete Subject*/

            $('.delete-facultySubject').each(function() {
             $(this).click(function(event){
               $('#facultySubjectDestroy').attr("action", "http://localhost/csis_lrvl_v/public/Faculty/DelSubject/"+($(this).data('teacherid'))+"/"+($(this).data('subjectid'))+"/"+($(this).data('courseid'))+"");
               $('#scode').val($(this).data('subjectcode'));
               $('#sdes').val($(this).data('subdesc'));
               $('#scourse').val($(this).data('prog'));
            })
           });

    //{{---------------------------------}}}//

           /** Curricula Delete */
           $('.delete-curricula').each(function() {
             $(this).click(function(event){
               $('#curriculaDestroy').attr("action", "http://localhost/csis_lrvl_v/public/Curriculum/Delete/"+($(this).data('yid'))+"/"+($(this).data('id'))+"");
               $('#codedel').val($(this).data('code'));
               $('#desdel').val($(this).data('description'));
            })
           });

           /** User Edit */
           $('.edit-user').each(function() {
             $(this).click(function(event){
               $('#userUpdate').attr("action", "http://localhost/csis_lrvl_v/public/changepassword/"+($(this).data('username'))+"");
               $('#username').val($(this).data('username'));
               $('#uname').val($(this).data('name'));
             })
           });
    </script>






