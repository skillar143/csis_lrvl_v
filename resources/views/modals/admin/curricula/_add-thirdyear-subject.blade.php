<div class="modal fade" id="thirdCurr" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light" id="exampleModalLabel">Add Subject To Third Year</h5>
                <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>
            <form  action="{{ route('curr.store',[$course->id ,"3"]) }}" method="POST">
            @csrf
                <div class="modal-body px-5" id="subject">
                    <div class="form-row">
                        <div class="mt-3">
                            <label>Semester</label>
                            <select class="custom-select" name="semester" required>
                              <option selected disabled value="">Choose...</option>
                              <option value="1">1st Sem</option>
                              <option value="2">2nd Sem</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group inputs_third m-4">
                      <div class="form-row d-flex align-items-center">
                        <div class="col mb-3">
                          <label for="validationCustom03">Add Subject</label>
                          <select name="code[]" class="form-control" required>
                          <option selected disabled value="">Choose...</option>
                          @foreach ($subjects as $subject)
                            <option  value="{{ $subject->id }}">[{{ $subject->subject_code }}]-{{ $subject->subject_description }}</option>
                          @endforeach
                          </select>
                        </div>
                        <div class="col-2">
                            <input type="text" placeholder="Units" name="unit[]" class="form-control mt-3 mr-1" required>
                        </div>
                          <i class="fas fa-plus-square mr-2 mt-3 text-success addThird" style="font-size: 2rem"></i>
                          <i class="fas fa-minus-square mt-3 text-danger" style="font-size: 2rem"></i>
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-sm btn-outline-success" >Save</button>
                </div>
                @foreach ($subjects as $subject)

                @endforeach
            </form>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $(this).on("click", ".addThird", function()
      {var html =
        '<div class="form-row d-flex align-items-center">\
            <div class="col mb-3">\
                <label for="validationCustom03">Add Subject</label>\
                    <select name="code[]" id="c" class="form-control" required>\
                        <option selected disabled value="">Choose...</option>\
                        @foreach ($subjects as $subject)\
                        <option value="{{ $subject->id }}">[{{ $subject->subject_code }}]-{{ $subject->subject_description }}</option>\
                        @endforeach\
                    </select>\
            </div>\
            <div class="col-2">\
                <input type="text" placeholder="Units" name="unit[]" class="form-control mt-3 mr-1" required>\
            </div>\
            <i class="fas fa-plus-square mr-2 mt-3 text-success addThird" style="font-size: 2rem"></i>\
            <i class="fas fa-minus-square mt-3 text-danger removeThird" style="font-size: 2rem"></i>\
        </div>'
      $('.inputs_third').append(html);
    // console.log('hello');
    });

    $(this).on("click", ".removeThird", function(){
      var target_input = $(this).parent();
        target_input.remove();
    });
  });
</script>

