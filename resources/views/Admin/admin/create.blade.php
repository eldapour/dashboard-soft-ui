<form id="addForm" class="addForm" method="POST" enctype="multipart/form-data" action="{{route('admins.store')}}" >
@csrf
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror " id="exampleFormControlInput1" placeholder="name">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Email</label>
                <input type="email"  name="email" class="form-control @error('email') is-invalid @enderror " id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn bg-gradient-primary" id="addButton">create</button>
    </div>
</form>

