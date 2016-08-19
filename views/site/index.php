<?php include ROOT . '/views/layouts/header.php'; ?>


<body>    

    <table class = "table table-condensed table-striped" border="1" width="300">
        <tr class = "info">
            <th>Имя:</th>
            <th>Телефон:</th>
            <th>Описание:</th>
            <th colspan="2">Управление:</th>
        </tr>
        <?php 
        foreach ($contacts as $contact): ?>
            <tr>
                <td><?= $contact['contactName'] ?></td>
                <td><?= $contact['contactNumber'] ?></td>
                <td><?= $contact['discription'] ?></td>
                <td><input type="button" class="btn btn-info" value="Редактировать"></td>
                <td><input type="button" class="btn btn-info" value="Удалить"></td>
            </tr> 
        <?php endforeach; ?>
    </table>

    <!-- jQuery -->
    <script src="/template/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/template/js/bootstrap.min.js"></script>

</body>

</html>





