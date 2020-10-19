<div>
    <div class="card">
        <div class="card-header d-flex">
            <h2 class="text-center">Todo List</h2>
            <a href="/todos/add" class="btn btn-primary pull-right">Add Todo</a>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($todos as $todo) : ?>
                        <tr>
                            <td><?= $todo->id; ?></td>
                            <td><?= $todo->title; ?></td>
                            <td>
                                <a href="/todos/<?= $todo->id ?>/edit"><i class="far fa-edit"></i></a>
                                <a href="/todos/<?= $todo->id ?>/delete"><i class="far fa-trash"></i></a>
                                <a href="/todos/<?= $todo->id ?>/show"><i class="far fa-eye"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>