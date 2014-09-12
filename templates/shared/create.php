<h2>Create New <?php echo f('controller.name') ?></h2>

<form method="post" role="form">

    <?php foreach(f('app')->controller->schema() as $name => $field): ?>

    <?php if ($field['hidden']) continue ?>

    <div class="form-group">

        <?php echo $field->label() ?>

        <?php echo $field->format('input', @$entry[$name]) ?>

    </div>

    <?php endforeach ?>

    <p>
        <input type="submit" value="Save" class="btn btn-primary">
        <input type="reset" class="btn btn-default">
    </p>

</form>