<div>
    <div class="card">
        <div class="card-header d-flex">
            <h3 class="text-center"><?= $todo['title'] ?></h3>
        </div>
        <div class="card-body">
            <p class="mb-5">Description: <?= $todo['description'] ?></p>
            <div class="form-group">
                <a href="/todos/<?= $todo['id'] ?>/edit" class="btn btn-success">edit</a>
                <a href="/todos" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
</div>