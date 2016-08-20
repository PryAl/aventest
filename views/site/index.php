<?php include ROOT . '/views/layouts/header.php'; ?>

<body>
    <div class="col-md-12">
    <table class = "table table-striped table-responsive" border="1" width="300">
        <tr class = "info">
            <th>Имя:</th>
            <th>Телефон:</th>
            <th>Описание:</th>
            <th colspan="2">Управление:</th>
        </tr>
        <?php foreach ($contacts as $contact): ?>
            <tr class="active">
                <td><?= $contact['contactName'] ?></td>
                <td><?= $contact['contactNumber'] ?></td>
                <td><?= $contact['description'] ?></td>
                <td class="text-center"><a href="/contacts/edit.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                <td class="text-center"><a href="#" id="<?php echo $contact['id']; ?>" class="delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    </div>
    <div class="col-md-2 col-md-offset-5">
        <a class="btn btn-primary" href="/contacts/add" role = "button">Добавить новую запись</a>
    </div>
  
    <!-- jQuery -->
    <script src="/template/js/jquery.js"></script>
    <script type="text/javascript">
        $(function () {
            $(".delete").click(function () {
                var element = $(this);
                var userid = element.attr("id");
                var info = "id=" + userid;
                if (confirm("Точно удалить?")) {
                    $.ajax({
                        type: 'POST',
                        data: info,
                        url: 'delete.php',
                        success: function () {
                        }
                    });
                    $(this).parent().parent().fadeOut(300, function () {
                        $(this).remove();
                    });
                }
                ;
                return false;
            });
        });
    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/template/js/bootstrap.min.js"></script>

</body>

</html>





