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
                foreach ($castells as $castell){
                    echo '<tr>';
                        echo '<th>' . $castell . '</th>';
                        echo '<td>'. $temporada_actual{$castell}{"d"} .'</td>';
                        echo '<td>'. $temporada_actual{$castell}{"c"} .'</td>';
                        echo '<td>'. $temporada_actual{$castell}{"i"} .'</td>';
                        echo '<td>'. $temporada_actual{$castell}{"id"} .'</td>';
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
                    <th> Descarregat </th>
                    <th> Carregat </th>
                    <th> Intent </th>
                    <th> Intent Desmuntat </th>
                </tr>
                <?php
                foreach ($castells as $castell){
                    echo '<tr>';
                    echo '<th>' . $castell . '</th>';
                    echo '<td>'. $temporada_comparada{$castell}{"d"} .'</td>';
                    echo '<td>'. $temporada_comparada{$castell}{"c"} .'</td>';
                    echo '<td>'. $temporada_comparada{$castell}{"i"} .'</td>';
                    echo '<td>'. $temporada_comparada{$castell}{"id"} .'</td>';
                    echo '</tr>';
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php ?>