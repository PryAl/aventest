<?php include ROOT . '/views/layouts/header.php'; ?>


<body>    

    <table class = "table table-condensed table-striped" border="1" width="300">
        <tr class = "info">
            <th>№:</th>
            <th>Имя:</th>
            <th>Телефон:</th>
            <th>Описание:</th>
            <th>Управление:</th>
        </tr>
        <?php $i = 1;
        foreach ($contacts as $contact): ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $contact['contactName'] ?></td>
                <td><?= $contact['contactNumber'] ?></td>
                <td><?= $contact['discription'] ?></td>
            </tr> 
        <?php $i++; endforeach; ?>
    </table>

    <!-- jQuery -->
    <script src="/template/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/template/js/bootstrap.min.js"></script>

</body>

</html>





