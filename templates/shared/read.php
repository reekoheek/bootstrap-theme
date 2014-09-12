<h2><?php echo f('controller.name') ?> (<?php echo $entry->format() ?>)</h2>

<form method="post" role="form">
    <p>
        <a href="<?php echo f('controller.url', '/:id/update') ?>" class="btn btn-primary">Update</a>
        <a href="<?php echo f('controller.url', '/:id/delete') ?>" class="btn btn-danger">Delete</a>
    </p>

    <?php foreach(f('app')->controller->schema() as $name => $field): ?>
        <?php if (!$field['hidden']): ?>
        <div class="form-group">
            <?php echo $field->label() ?>

            <?php echo $field->format('readonly', @$entry[$name]) ?>

        </div>
        <?php endif ?>

    <?php endforeach ?>


</form>