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
    <li class="nav-item {{ preg_match('/\bdashboard\b/i', request()->fullUrl()) ? 'bg-light' : '' }}">
        <a class="nav-link {{ preg_match('/\bdashboard\b/i', request()->fullUrl()) ? 'text-dark' : '' }}" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Registration
    </div>

    <!-- Nav Item - Student Collapse Menu-->
    <li class="nav-item">
        <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#collapseStudent"
            aria-expanded="true" aria-controls="collapseStudent">
            <i class="fas fa-user"></i>
            <span>Student</span>
        </a>
        <div id="collapseStudent" class="collapse {{ (strpos(request()->fullUrl(), 'Student') !== false)  ? 'show' : '' }}"
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Type of student:</h6>
                <a class="collapse-item {{  preg_match('/^(?=.*\bStudent\b)(?=.*\b0\b).*$/', request()->fullUrl()) ? 'bg-dark text-light' : '' }}"
                    href="{{ route('student.index','0') }}">Regular Student</a>
                <a class="collapse-item {{  preg_match('/^(?=.*\bStudent\b)(?=.*\b1\b).*$/', request()->fullUrl()) ? 'bg-dark text-light' : '' }}"
                    href="{{ route('student.index','1') }}">Irregular Student</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Faculty -->
    <li class="nav-item {{ (strpos(request()->fullUrl(), 'Faculty') !== false)  ? 'bg-light' : '' }}">
        <a class="nav-link {{ (strpos(request()->fullUrl(), 'Faculty') !== false)  ? 'text-dark' : '' }}" href="{{ route('admin.faculty') }}">
            <i class="fas fa-user-tie"></i>
            <span>Faculty</span></a>
    </li>

    <!-- Nav Item - Program Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProgram"
            aria-expanded="true" aria-controls="collapseProgram">
            <i class="fas fa-book"></i>
            <span>Program</span>
        </a>
        <div id="collapseProgram" class="collapse {{ preg_match('/^(?=.*\bProgram\b)|(?=.*\bCurriculum\b).*$/', request()->fullUrl()) ? 'show' : '' }}" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{  preg_match('/^(?=.*\bProgram\b)(?=.*\bSubject\b).*$/', request()->fullUrl()) ? 'bg-dark text-light' : '' }}"
                    href="{{ route('subject.index') }}">Subject</a>
                <a class="collapse-item {{  preg_match('/^(?=.*\bProgram\b)(?=.*\bCourse\b)|(?=.*\bCurriculum\b).*$/', request()->fullUrl()) ? 'bg-dark text-light' : '' }}"
                    href="{{ route('course.index') }}">Course</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
       Grade Management
    </div>

    <!-- Nav Item - Term -->
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('dashboard') }}" data-toggle="modal" data-target="#gradingPeriod">
            <i class="fas fa-toggle-on"></i>
            <span>Activate Term</span></a>
    </li>

    <!-- Nav Item - Grade Summary -->
    <li class="nav-item {{ preg_match('/\bGradeSummary\b/i', request()->fullUrl()) ? 'bg-light' : '' }}">
        <a class="nav-link {{ preg_match('/\bGradeSummary\b/i', request()->fullUrl()) ? 'text-dark' : '' }}" href="#">
            <i class="fas fa-award"></i>
            <span>Grade Summary</span></a>
    </li>
    <!-- Nav Item - Grade Sheet -->
    <li class="nav-item {{ preg_match('/\bGradeSheet\b/i', request()->fullUrl()) ? 'bg-light' : '' }}">
        <a class="nav-link {{ preg_match('/\bGradeSheet\b/i', request()->fullUrl()) ? 'text-dark' : '' }}" href="#">
            <i class="fas fa-list-alt"></i>
            <span>Grading Sheet</span></a>
    </li>

     <!-- Nav Item - Assess Grade -->
     <li class="nav-item {{ preg_match('/\bAssessGrade\b/i', request()->fullUrl()) ? 'bg-light' : '' }}">
        <a class="nav-link {{ preg_match('/\bAssessGrade\b/i', request()->fullUrl()) ? 'text-dark' : '' }}" href="#">
            <i class="fas fa-id-card"></i>
            <span>Assess Grade</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
       User Management
    </div>

    <!-- Nav Item - Archive -->

    <!-- Nav Item - Archive Collapse Menu -->
    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseArchive"
            aria-expanded="true" aria-controls="collapseArchive">
            <i class="fas fa-users-slash "></i>
            <span>Archive</span>
        </a>
        <div id="collapseArchive" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Type of User:</h6>
                <a class="collapse-item" href="utilities-color.html">Student</a>
                <a class="collapse-item" href="utilities-border.html">Faculty</a>
            </div>
        </div>
    </li> -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
            aria-expanded="true" aria-controls="collapseUser">
            <i class="fas fa-users-slash"></i>
            <span>Users</span>
        </a>
        <div id="collapseUser" class="collapse {{ preg_match('/\buser\b/i', request()->fullUrl()) ? 'show' : '' }}" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Type of User:</h6>
                <a class="collapse-item {{ (strpos(request()->fullUrl(), 'user') !== false) && (strpos(request()->fullUrl(), 'student') !== false)  ? 'bg-dark text-light' : '' }}"
                    href="{{ route('users.view','student') }}">Student</a>

                <a class="collapse-item {{ (strpos(request()->fullUrl(), 'user') !== false) && (strpos(request()->fullUrl(), 'faculty') !== false)  ? 'bg-dark text-light' : '' }}"
                     href="{{ route('users.view','faculty') }}">Faculty</a>
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

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
