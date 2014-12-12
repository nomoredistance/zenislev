<style>
    table.workout th,
    table.workout td {
        padding: 4px 5px;
    }
</style>

    <div class="row">
      <div class="twelve columns" style="">
        <h4>Workout Log</h4>
            <p>
                <a href="/">&laquo; kembali</a><br>
                <a id="top" href="#newest">lihat terbaru</a>.
            </p>

<?php if($fh): $i = 0; ?>
    <table class="workout">
    <?php while($line = fgetcsv($fh)): ?>

        <?php if($i == 0): ?>
        <tr>
            <?php foreach($line as $col): ?>
            <th><?php echo $col; ?></th>
            <?php endforeach; ?>
        </tr>
        <?php else: ?>
        <tr>
            <?php foreach($line as $col): ?>
            <td><?php echo $col; ?></td>
            <?php endforeach; ?>
        </tr>
        <?php endif; ?>

    <?php $i++; endwhile; ?>
    </table>
<?php else: ?>
    <p>data expected here but unfortunately there is none.</p>
<?php endif; ?>

        <p><a id="newest" href="#">kembali ke atas</a>.</p>
      </div>
    </div>
