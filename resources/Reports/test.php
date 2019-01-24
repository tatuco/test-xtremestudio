<table>
    <tr>
        <th>Nombre</th>
        <th>Id</th>
    </tr>
    <?php foreach ($users as $key) { ?>
    <tr>
        <td><?php echo $key->name; ?></td>
        <td><?php echo $key->id; ?></td>
    </tr>
    <?php } ?>
</table>