<div class="modal fade" id="gradingPeriod" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xxl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light text-capitalize" id="exampleModalLabel">grading period</h5>
                <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>
            <form  action="{{ route('status.update') }}" method="POST">
            @method('PUT')
            @csrf

                <div class="modal-body px-5 py-4">
                    <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch1"  name="status" {{ $status->status == "1" ? "checked" : "" }}>
                      <label class="custom-control-label font-weight-bold" for="customSwitch1">{{ $status->getStatus() }} Grade Record</label>
                    </div>

                    <div class="d-flex justify-content-between">
                        <hr class="divider bg-info" style="width: 150px;">
                        <a class="" style="size: 200px;">Choose Term</a>
                        <hr class="divider bg-info" style="width: 150px;">
                    </div>

                    <div class="form-check ">
                        <input class="form-check-input " type="radio" name="term" value="0" {{ $status->term == "0" ? "checked" : "" }}>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Prelim
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="term" value="1" {{ $status->term == "1" ? "checked" : "" }}>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Midterm
                        </label>
                    </div>
                  
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="term" value="2"  {{ $status->term == "2" ? "checked" : "" }}>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Finals
                        </label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-sm btn-outline-success" >Save</button>
                </div>
          
            </form>
        </div>
    </div>
</div>

              