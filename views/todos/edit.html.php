<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2 class="text-center">Edit Contact</h2>
        </div>
        <div class="card-body">
            <form action="/edit-todo" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $todo['id'] ?>">
                <div class="form-group row">
                    <label for="inputTitle" class="">Title</label>
                    <input type="text" class="form-control" id="inputTitle" name="title" placeholder="Enter Title..." autofocus required value="<?= $todo['title'] ?>">
                </div>
                <div class="form-group row">
                    <label for="inputDescription" class="col-form-label">Description</label>
                    <textarea type="text" class="form-control" id="inputDescription" name="description" placeholder="Enter Description..." required><?= $todo['description'] ?></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="/todos" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>