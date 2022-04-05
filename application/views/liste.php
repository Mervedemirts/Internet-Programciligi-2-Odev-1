<?php require_once "includes/header.php"; ?>

<div class="wrap-contact3" style="width: 100%;border-radius:0px">
    <table class="table table-hover " style="color:white">
        <thead>
            <tr>
                <th>Id</th>
                <th>Ad</th>
                <th>Soyad</th>
                <th>Tc</th>
                <th>Eklenme Tarihi</th>
            </tr>
        </thead>
        <tbody><?php foreach ($hastalar as $hasta) {
                ?>
                <tr>
                    <td><?php echo $hasta->id ?></td>
                    <td><?php echo $hasta->ad ?></td>
                    <td><?php echo $hasta->soyad ?></td>
                    <td><?php echo $hasta->tc ?></td>
                    <td><?php echo $hasta->createdAt ?></td>

                </tr><?php
                    } ?>
        </tbody>
    </table>

</div>
<?php require_once "includes/footer.php"; ?>