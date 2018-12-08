<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-align-center">COMPARACIÓ TEMPORADES</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <h1 class="text-align-center"><?php echo $any_actual ?></h1>
            <table class="table table-bordered">
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
                        //CASTELL:
                        echo '<th>' . $castell . '</th>';

                        //DESCARREGATS:
                        if ($temporada_actual{$castell}{"d"} > $temporada_comparada{$castell}{"d"}){
                            echo '<td class="table-success">' . $resultats{"d"} . '</td>';
                        }
                        elseif($temporada_actual{$castell}{"d"} < $temporada_comparada{$castell}{"d"}) {
                            echo '<td class="table-danger">' . $resultats{"d"} . '</td>';
                        }
                        else{
                            echo '<td>' . $resultats{"d"} . '</td>';
                        }

                        //CARREGATS:
                        if ($temporada_actual{$castell}{"c"} > $temporada_comparada{$castell}{"c"}){
                            echo '<td class="table-danger">' . $resultats{"c"} . '</td>';
                        }
                        elseif($temporada_actual{$castell}{"c"} < $temporada_comparada{$castell}{"c"}) {
                            echo '<td class="table-success">' . $resultats{"c"} . '</td>';
                        }
                        else{
                            echo '<td>' . $resultats{"c"} . '</td>';
                        }

                        //INTENTS:
                        if ($temporada_actual{$castell}{"i"} > $temporada_comparada{$castell}{"i"}){
                            echo '<td class="table-danger">' . $resultats{"i"} . '</td>';
                        }
                        elseif($temporada_actual{$castell}{"i"} < $temporada_comparada{$castell}{"i"}) {
                            echo '<td class="table-succes">' . $resultats{"i"} . '</td>';
                        }
                        else{
                            echo '<td>' . $resultats{"i"} . '</td>';
                        }

                        //INTENTS DESMUNTATS:
                        if ($temporada_actual{$castell}{"id"} > $temporada_comparada{$castell}{"id"}){
                            echo '<td class="table-danger">' . $resultats{"id"} . '</td>';
                        }
                        elseif($temporada_actual{$castell}{"id"} < $temporada_comparada{$castell}{"id"}) {
                            echo '<td class="table-success">' . $resultats{"id"} . '</td>';
                        }
                        else{
                            echo '<td>' . $resultats{"id"} . '</td>';
                        }
                    echo '</tr>';
                }
                ?>
            </table>
        </div>

        <div class="col-sm">
            <h1 class="text-align-center"><?php echo $any_comp ?></h1>
            <table class="table table-bordered">
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