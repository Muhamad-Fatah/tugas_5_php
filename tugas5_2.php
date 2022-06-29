<?php
$a = "Ayo ";
$b = "Belajar ";
$ab = $a.$b;
$c = "Bersama ";
$d = "Niomic ";
$cd = $c.$d;
?>

<h2>Operator String</h2>
<table border="1">
    <thead>
        <th>Input 1</th>
        <th>Input 2</th>
        <th>Hasil</th>
    </thead>
    <tbody>
        <tr>
            <td><?php echo "$a" ?></td>
            <td><?php echo "$b" ?></td>
            <td><?php echo "$ab" ?></td>
        </tr>
        <tr>
            <td><?php echo "$c" ?></td>
            <td><?php echo "$d" ?></td>
            <td><?php echo "$cd" ?></td>
        </tr>
    </tbody>
</table>
<p><?php echo "Gabungan : $ab $cd" ?></p>