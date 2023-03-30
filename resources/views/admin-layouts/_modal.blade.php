<!-- modal for all users -->
@include('modals._logout')


<!-- modal for admin create-->
@include('modals.admin._create-course')
@include('modals.admin._create-faculty')
@include('modals.admin._create-subject')

<!-- modal for admin edit -->
@include('modals.admin._edit-subject')
@include('modals.admin._edit-course')
@include('modals.admin._edit-faculty')

<!-- modal for admin delete-->
@include('modals.admin._delete-subject')
@include('modals.admin._delete-course')
@include('modals.admin._delete-faculty')



