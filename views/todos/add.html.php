<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2 class="text-center">Create Contact</h2>
        </div>
        <div class="card-body">
            <form action="/add-todo" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="inputTitle" class="">Title</label>
                    <input type="text" class="form-control" id="inputTitle" name="title" placeholder="Enter Title..." autofocus required>
                </div>
                <div class="form-group row">
                    <label for="inputDescription" class="col-form-label">Description</label>
                    <textarea type="text" class="form-control" id="inputDescription" name="description" placeholder="Enter Description..." required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="/todos" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>