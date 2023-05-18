@include('modals._logout')
@include('modals._changePass')


<!-- modals for Subject-->
@include('modals.admin.subject._create-subject')
@include('modals.admin.subject._edit-subject')
@include('modals.admin.subject._delete-subject')

<!-- modals for Faculty -->
@include('modals.admin.faculty._create-faculty')
@include('modals.admin.faculty._edit-faculty')
@include('modals.admin.faculty._delete-faculty')

<!-- Faculty Subject -->


<!-- modals for Course-->
@include('modals.admin.program._create-course')
@include('modals.admin.program._edit-course')
@include('modals.admin.program._delete-course')

<!-- modals for Curriculum -->
@include('modals.admin.curricula._delete-curricula')

<!-- modal for Grading Period -->

@include('modals.admin.registrar._grading-period')


<!-- modal for user -->
@include('modals.admin.user._edit-user')


