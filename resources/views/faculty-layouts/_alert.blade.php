<div class="position-absolute col-10 d-flex mt-0 mr-3 " style="z-index:10">
  <div class="ml-auto p-2">
    @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show position-absulote auto-dismiss" role="alert">
      {{ session('success') }}
      </div>
    @elseif(session('delete'))
      <div class="alert alert-danger alert-dismissible fade show position-absulote auto-dismiss" role="alert">
      {{ session('delete') }}
      </div>
    @elseif(session('update'))
      <div class="alert alert-info alert-dismissible fade show position-absulote auto-dismiss" role="alert">
      {{ session('update') }}
      </div>
    @elseif(session('error'))
      <div class="alert alert-warning alert-dismissible fade show position-absulote auto-dismiss" role="alert">
      {{ session('error') }}
      </div>
    @endif 
  </div>           
</div>

