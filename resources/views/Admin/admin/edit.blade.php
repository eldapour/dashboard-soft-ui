<form id="updateForm" class="updateForm" method="POST" enctype="multipart/form-data" action="{{route('admins_update')}}" >
@csrf
    <input type="hidden" name="id" value="{{ $admin->id }}">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Name</label>
                <input type="text" name="name" value="{{ $admin->name }}" class="form-control" id="exampleFormControlInput1" placeholder="name">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Email</label>
                <input type="email"  name="email" value="{{ $admin->email }}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="****(optional)">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn bg-gradient-primary" id="updateButton">update</button>
    </div>
</form>

