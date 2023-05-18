<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('img/logo.png') }}" alt="" width="50px">
        </div>
        <div class="sidebar-brand-text mx-3">CSIS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        
    </div>

    <!-- Nav Item - Student Collapse Menu-->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStudent"
            aria-expanded="true" aria-controls="collapseStudent">
            <i class="fas fa-users"></i>
            <span>Students</span>
        </a>
        <div id="collapseStudent" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Subject:</h6>
                <a class="collapse-item" href="cards.html">Subject</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Faculty -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStudentGrade"
            aria-expanded="true" aria-controls="collapseStudentGrade">
            <i class="text-gray-400 f-s-1">A+</i>
            <span>Student Grade</span>
        </a>
        <div id="collapseStudentGrade" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Subject:</h6>
                <a class="collapse-item" href="buttons.html">Subject</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Program Collapse Menu -->
    
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
       Class Record
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInputs"
            aria-expanded="true" aria-controls="collapseInputs">
            <i class="text-gray-400 fas fa-tasks"></i>
            <span>Student Inputs</span>
        </a>
        <div id="collapseInputs" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Subject:</h6>
                @foreach($subjects as $sub)
                <a class="collapse-item text-truncate" href="buttons.html">{{ $sub->subjects->subject_code.'-'.$sub->subjects->subject_description }}</a>
                @endforeach
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <!-- <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div>  -->

</ul>
