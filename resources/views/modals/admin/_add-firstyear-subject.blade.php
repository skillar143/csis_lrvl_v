<div class="modal fade" id="firstCurr" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light" id="exampleModalLabel">Add Subject</h5>
                <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>
            <form  method="POST">
            @csrf
                <div class="modal-body" id="subject">
                    <div class="form-row">
                        <div class="mt-3">
                            <label>Semester</label>
                            <select class="custom-select" name="semester"required>
                              <option selected disabled value="">Choose...</option>
                              <option>1st Sem</option>
                              <option>2nd Sem</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group inputs_div m-4">
                      <div class="form-row d-flex align-items-center">
                        <div class="col mb-3">
                          <label for="validationCustom03">Add Subject</label>
                          <select name="code[]" id="c" class="form-control" required>
                          <option selected disabled value="">Choose...</option>  
                          </select>
                        </div>
                          <i class="fas fa-plus-square mr-2 mt-3 text-success addMore" style="font-size: 2rem"></i>
                          <i class="fas fa-minus-square mt-3 text-danger" style="font-size: 2rem"></i>
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-sm btn-outline-success" >Update</button>
                </div>

            </form>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

$slct = "asdw--__asdw";

  $(document).ready(function(){
    $(this).on("click", ".addMore", function()
      {var html = 
        '<div class="form-row d-flex align-items-center">\
            <div class="col mb-3">\
                <label for="validationCustom03">Add Subject</label>\
                    <select name="code[]" id="c" class="form-control" required>\
                        <option selected disabled value="">Choose...</option>\
                        <option value=""></option>\
                    </select>\
            </div>\
            <i class="fas fa-plus-square mr-2 mt-3 text-success addMore" style="font-size: 2rem"></i>\
            <i class="fas fa-minus-square mt-3 text-danger remove" style="font-size: 2rem"></i>\
        </div>'
      $('.inputs_div').append(html);
    // console.log('hello');
    });

    $(this).on("click", ".remove", function(){
      var target_input = $(this).parent();
        target_input.remove();
    });
  });
</script>

