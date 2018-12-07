<div class="container">
    <div class="row">
        <div class="col-sm">
            <table>
                <caption> Temporada Actual</caption>
                <tr>
                    <th> Castell </th>
                    <th> D </th>
                    <th> C </th>
                    <th> I </th>
                    <th> ID </th>
                </tr>
                <?php
                foreach ($temporada_actual as $castell => $resultats){
                    echo '<tr>';
                        echo '<th>' . $castell . '</th>';
                        echo '<td>' . $resultats{"d"} . '</td>';
                        echo '<td>' . $resultats{"c"} . '</td>';
                        echo '<td>' . $resultats{"i"} . '</td>';
                        echo '<td>' . $resultats{"id"} . '</td>';
                    echo '</tr>';
                }
                ?>
            </table>
        </div>

        <div class="col-sm">
            <table>
                <caption> Temporada Comparada</caption>
                <tr>
                    <th> Castell </th>
                    <th> D </th>
                    <th> C </th>
                    <th> I </th>
                    <th> ID </th>
                </tr>
                <?php
                foreach ($temporada_comparada as $castell => $resultats){
                    echo '<tr>';
                        echo '<th>' . $castell . '</th>';
                        echo '<td>' . $resultats{"d"} . '</td>';
                        echo '<td>' . $resultats{"c"} . '</td>';
                        echo '<td>' . $resultats{"i"} . '</td>';
                        echo '<td>' . $resultats{"id"} . '</td>';
                    echo '</tr>';
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php ?>