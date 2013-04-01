<?php echo $this->Html->script('raphael.js'); ?>
<?php echo $this->Html->script('statistiques/popup.js'); ?>
<?php echo $this->Html->script('statistiques/analytics.js'); ?>
<div class="blocStatistiques">
<table id="data">
    <tfoot>
        <?php foreach (array_keys($donnees['nbUserTab']) as $jourVisite) : ?>
                <th>
                    <?php echo $jourVisite ?>
                </th>
            <?php endforeach; ?>
    </tfoot>
    <tbody>
        <tr>
            <?php foreach (array_values($donnees['nbUserTab']) as $nbVisite) : ?>
                <td>
                    <?php echo $nbVisite ?>
                </td>
            <?php endforeach; ?>
        </tr>
    </tbody>
</table>
<div id="holder"></div>
</div>