<table border="2">
	<!-- for testing purpose -->
    <thead>
        <tr>
            <th>id</th>
            <!-- <th>gfs_code</th> -->
            <th>amount</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($moth_top_payers as $row) : ?>
            <tr>
                <td><?php echo $row->region; ?></td>
                <!-- <td><?php echo $row->client_name; ?></td> -->

                <td><?php echo number_format($row->total_amount, 2); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
