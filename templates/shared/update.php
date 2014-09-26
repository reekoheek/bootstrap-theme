<h2>Update <?php echo f('controller.name') ?> (<?php echo $entry->format() ?>)</h2>

<form method="post" role="form">

    <?php foreach(f('app')->controller->schema() as $name => $field): ?>

    <?php if ($field['hidden']) continue ?>

    <div class="form-group">

        <?php echo $field->label() ?>

        <?php echo $field->format('input', @$entry[$name], @$entry) ?>

    </div>

    <?php endforeach ?>

    <p>
        <input type="submit" value="Save" class="btn btn-primary">
        <input type="reset" class="btn btn-default">
    </p>

</form>