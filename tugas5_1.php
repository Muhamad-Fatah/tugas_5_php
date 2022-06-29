<?php
echo "Tabel Logika 1111";
?>
<table border="1">
    <thead>
        <th>Input True</th>
        <th>Input 2</th>
        <th>AND</th>
        <th>OR</th>
    </thead>
    <tbody>
        <tr>
            <td><?php echo"false"?></td>
            <td><?php echo"false"?></td>
            <td><?php printf( false && false )?></td>
            <td><?php printf( false || false )?></td>
        </tr>
        <tr>
            <td><?php echo"false"?></td>
            <td><?php echo"true"?></td>
            <td><?php echo( false && true )?></td>
            <td><?php printf( false || true )?></td>
        </tr>
        <tr>
            <td><?php echo"true"?></td>
            <td><?php echo"false"?></td>
            <td><?php printf( true && false )?></td>
            <td><?php printf( true || false )?></td>
        </tr>
        <tr>
            <td><?php echo"true"?></td>
            <td><?php echo"true"?></td>
            <td><?php printf( true && true )?></td>
            <td><?php printf( true || true )?></td>
        </tr>
    </tbody>
</table>