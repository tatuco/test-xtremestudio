<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <style>
            .center {
                text-align: center;
            }
            table .left {
                text-align: left;
            }
            table .right {
                text-align: right;
            }
            table .bold {
                font-weight: 600;
            }
            .bg-black {
                background-color: #000;
            }
            .f-white {
                color: #fff;
            }
        </style>
    </head>
    <body>
        <?php
        $ctr = 1;
        $no = 1;
        $total = [];
        $grandTotalSkip = 1;
        $isOnSameGroup = true;
        $currentGroupByData = [];

        foreach ($showTotalColumns as $column => $type) {
            $total[$column] = 0;
        }

        if ($showTotalColumns != []) {
            foreach ($columns as $colName => $colData) {
                if (!array_key_exists($colName, $showTotalColumns)) {
                    $grandTotalSkip++;
                } else {
                    break;
                }
            }
        }

        $grandTotalSkip = !$showNumColumn ? $grandTotalSkip - 1 : $grandTotalSkip;
        ?>
        <table>
            <tr>
                <td colspan="{{ count($columns) + 1 }}" class="center"><h1>{{ $headers['title'] }}</h1></td>
                @if ($showMeta)
                    @foreach($headers['meta'] as $name => $value)
                        <tr>
                            <td><b>{{ $name }}</b></td>
                            <td colspan="{{ count($columns) }}">{{ ucwords($value) }}</td>
                        </tr>
                    @endforeach
                @endif
            </tr>
        </table>
        <table>
            @if ($showHeader)
            <thead>
                <tr>
                    @if ($showNumColumn)
                        <th class="left">No</th>
                    @endif
                    @foreach ($columns as $colName => $colData)
                        <th class="left">{{ $colName }}</th>
                    @endforeach
                </tr>
            </thead>
            @endif
            <?php
            $chunkRecordCount = ($limit == null || $limit > 50000) ? 50000 : $limit + 1;
            $__env = isset($__env) ? $__env : null;
            $query->chunk($chunkRecordCount, function($results) use(&$ctr, &$no, &$total, &$currentGroupByData, &$isOnSameGroup, $groupByArr, $grandTotalSkip, $columns, $limit, $showTotalColumns, $applyFlush, $showNumColumn, $__env) {
            ?>
            @foreach($results as $result)
                <?php
                    if ($limit != null && $ctr == $limit + 1) return false;
                    if ($groupByArr != []) {
                        $isOnSameGroup = true;
                        foreach ($groupByArr as $groupBy) {
                            if (is_object($columns[$groupBy]) && $columns[$groupBy] instanceof Closure) {
                                $thisGroupByData[$groupBy] = $columns[$groupBy]($result);
                            } else {
                                $thisGroupByData[$groupBy] = $result->{$columns[$groupBy]};
                            }

                            if (isset($currentGroupByData[$groupBy])) {
                                if ($thisGroupByData[$groupBy] != $currentGroupByData[$groupBy]) {
                                    $isOnSameGroup = false;
                                }
                            }

                            $currentGroupByData[$groupBy] = $thisGroupByData[$groupBy];
                        }

                        if ($isOnSameGroup === false) {
                            echo '<tr class="f-white">';
                            if ($showNumColumn || $grandTotalSkip > 1) {
                                echo '<td class="bg-black" colspan="' . $grandTotalSkip . '"><b>Grand Total</b></td>';
                            }
                            $dataFound = false;
                            foreach ($columns as $colName => $colData) {
                                if (array_key_exists($colName, $showTotalColumns)) {
                                    if ($showTotalColumns[$colName] == 'point') {
                                        echo '<td class="left bg-black"><b>' . number_format($total[$colName], 2, '.', ',') . '</b></td>';
                                    } else {
                                        echo '<td class="left bg-black"><b>' . strtoupper($showTotalColumns[$colName]) . ' ' . number_format($total[$colName], 2, '.', ',') . '</b></td>';
                                    }
                                    $dataFound = true;
                                } else {
                                    if ($dataFound) {
                                        echo '<td class="bg-black"></td>';
                                    }
                                }
                            }
                            echo '</tr>';//<tr style="height: 10px;"><td colspan="99">&nbsp;</td></tr>';

                            // Reset No, Reset Grand Total
                            $no = 1;
                            foreach ($showTotalColumns as $showTotalColumn => $type) {
                                $total[$showTotalColumn] = 0;
                            }
                            $isOnSameGroup = true;
                        }
                    }
                ?>
                <tr align="center">
                    @if ($showNumColumn)
                        <td class="left">{{ $no }}</td>
                    @endif
                    <?php
                        $data = $result->toArray();
                        if (count($data) > count($columns)) array_pop($data);
                    ?>
                    @foreach ($data as $rowData)
                        <td class="left">{{ $rowData }}</td>
                    @endforeach
                </tr>
                <?php
                    foreach ($showTotalColumns as $colName => $type) {
                        $total[$colName] += $result->{$columns[$colName]};
                    }
                    $ctr++; $no++;
                ?>
            @endforeach
            <?php
            if ($applyFlush) flush();
            });
            ?>
            @if ($showTotalColumns != [] && $ctr > 1)
                <tr class="f-white">
                    <td colspan="{{ $grandTotalSkip }}" class="bg-black"><b>Grand Total</b></td> {{-- For Number --}}
                    <?php $dataFound = false; ?>
                    @foreach ($columns as $colName => $colData)
                        @if (array_key_exists($colName, $showTotalColumns))
                            <?php $dataFound = true; ?>
                            @if ($showTotalColumns[$colName] == 'point')
                                <td class="bg-black left"><b>{{ number_format($total[$colName], 2, '.', ',') }}</b></td>
                            @else
                                <td class="bg-black left"><b>{{ strtoupper($showTotalColumns[$colName]) }} {{ number_format($total[$colName], 2, '.', ',') }}</b></td>
                            @endif
                        @else
                            @if ($dataFound)
                                <td class="bg-black"></td>
                            @endif
                        @endif
                    @endforeach
                </tr>
            @endif
        </table>
    </body>
</html>
