<?php if (AuthComponent::user('role') == 'administrateur') :?>
    <?php echo $this->Html->script('raphael.js'); ?>
    <?php echo $this->Html->script('statistiques/popup.js'); ?>
    <?php echo $this->Html->script('statistiques/analytics.js'); ?>
    <div class="span2"> Statistiques des visites de ces 30 derniers jours </div> 
    <div class="blocStatistiques">
    <table id="data">
        <tfoot>
            <?php foreach (array_keys($donnees['nbUserTab']) as $jourVisite) : ?>
                    <th>
                        <?php $date = explode("-", $jourVisite); ?>
                        <?php echo $date[2] . '-' . $date[1] . '-' . $date[0] ?>
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
    <div class="donneesStatistiques">Nombre d'utilisateur(s) ces 20 dernières minutes : <?php echo $donnees['nbUserNow'] ?></div>
    <div class="donneesStatistiques">Nombre d'utilisateur(s) aujourd'hui : <?php echo $donnees['nbUserToday'] ?></div>
    <div class="donneesStatistiques">Nombre d'utilisateur(s) ces 30 derniers jours : <?php echo $donnees['nbUser'] ?></div>
<?php endif; ?>