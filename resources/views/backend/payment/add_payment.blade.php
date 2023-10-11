<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">Add
        Payment</button>
</div>
<div class="modal fade mt-5" id="exampleModal" tabIndex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Payment</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="mb-3">
                        <label for="exampleInput1" class="form-label">Location Name</label>
                        <input type="text" class="form-control" id="exampleInput1" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInput2" class="form-label">Location Description</label>
                        <input type="text" class="form-control" id="exampleInput2" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInput3" class="form-label">Resort Name</label>
                        <input type="text" class="form-control" id="exampleInput3" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInput4" class="form-label">Booking Price</label>
                        <input type="text" class="form-control" id="exampleInput4" />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>