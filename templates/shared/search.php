<h2><?php echo ROH\Util\Inflector::pluralize(f('controller.name')) ?></h2>

<p>
    <a href="<?php echo f('controller.url', '/null/create') ?>" class="btn btn-primary">Create</a>
</p>

<div class="table-placeholder">

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <?php if (f('app')->controller->schema()): ?>
                <?php $i = 0 ?>
                <?php foreach(f('app')->controller->schema() as $name => $field): ?>

                    <?php if ($i++ > 3) break ?>
                    <th><?php echo $field->label(true) ?></th>

                <?php endforeach ?>
                <?php else: ?>
                    <th>Data</th>
                <?php endif ?>

            </tr>
        </thead>
        <tbody>

            <?php if (count($entries)): ?>
            <?php foreach($entries as $entry): ?>

            <tr>
                <?php if (f('app')->controller->schema()): ?>
                <?php $i = 0 ?>
                <?php foreach(f('app')->controller->schema() as $name => $field): ?>

                <?php if ($i++ > 3) break ?>
                <td>
                    <a href="<?php echo f('controller.url', '/'.$entry['$id']) ?>">
                    <?php echo $field->format('plain', $entry[$name], $entry) ?>
                    </a>
                </td>

                <?php endforeach ?>
                <?php else: ?>
                <td><?php echo $entry->format() ?></td>
                <?php endif ?>

            </tr>

            <?php endforeach ?>
            <?php else: ?>

            <tr>
                <td colspan="100">no record!</td>
            </tr>

            <?php endif ?>

        </tbody>
    </table>
</div>