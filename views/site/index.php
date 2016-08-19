<?php include ROOT . '/views/layouts/header.php'; ?>


<body>    
    <table class = "table table-condensed table-striped" border="1" width="300">
        <tr class = "info">
            <th>Имя:</th>
            <th>Телефон:</th>
            <th>Описание:</th>
            <th colspan="2">Управление:</th>
        </tr>
        <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?= $contact['contactName'] ?></td>
                <td><?= $contact['contactNumber'] ?></td>
                <td><?= $contact['discription'] ?></td>
                <td class="text-center"><a href="#" id="" class=""><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                <td class="text-center"><a href="#" id="<?= $contact['id'] ?>" class="delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
            </tr> 
        <?php endforeach; ?>
    </table>

    <div class="col-md-2">
        <input type="button" class="btn btn-info" value="Добавить новую запись">
    </div>

    <!-- jQuery -->
    <script src="/template/js/jquery.js"></script>
    <script type="text/javascript">
        $(function(){
            $(".delete").click(function(){
                var element =$(this);
                var userid = element.attr("id");
                var info = 'id=' + userid;
                alert(info);
                if (confirm("Вы точно хотите удалить запись?")) {
                    $.ajax({
                        url: 'deletecontact.php',
                        type: 'post',
                        data: info,
                        success: function () {
                            
                        }
                    });
                    $(this).parent().parent().fadeOut(300, function(){
                       $(this).remove(); 
                    });
                };
                return false;
            });
        })
    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/template/js/bootstrap.min.js"></script>

</body>

</html>





