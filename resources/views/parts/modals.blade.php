<!-- Create Modal -->
<div class="modal fade" id="modal-create-contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create a Contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-create-contact">
                    <div class="form-group">                        
                        <input type="text" class="form-control" name="first_name" placeholder="First Name">                        
                    </div>
                    <div class="form-group">                        
                        <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                    </div>
                    <div class="form-group">                        
                        <input type="text" class="form-control" name="phone" placeholder="Phone">
                    </div>
                    <div class="form-group">                        
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light btn-sm" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm" id="btn-save-contact">Save Contact</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="modal-edit-contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit a Contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-edit-contact">
                    <input type="hidden" class="form-control" id="contact_id">
                    <div class="form-group">                        
                        <input type="text" class="form-control" name="first_name" placeholder="First Name">
                    </div>
                    <div class="form-group">                        
                        <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                    </div>
                    <div class="form-group">                        
                        <input type="text" class="form-control" name="phone" placeholder="Phone">
                    </div>
                    <div class="form-group">                        
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light btn-sm" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm" id="btn-update-contact">Update Contact</button>
            </div>
        </div>
    </div>
</div>