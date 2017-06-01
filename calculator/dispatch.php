<?php
require_once('../classes/SimpleCalculator.php');


if (isset($_POST['submit']))
{
    $calculator = new SimpleCalculator($_POST['first'], $_POST['second']);
    $operation = $_POST['operation'];
    switch ($operation)
    {
        case 'sum':
        echo "Sum: " . $calculator->calculateSum();
        break;

        case 'diff':
        echo "Diff: " . $calculator->calculateDiff();
        break;

        case 'mult':
        echo "Mult: " . $calculator->calculateMult();
        break;

        case 'div':
        echo "Div: " . $calculator->calculateDiv();
        break;

        default:
        echo "Something went wrogn. Blop-blop <><";
    }
}