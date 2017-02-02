<?php require_once __DIR__ . '/../../../public_html/header.php';?>

<div class="table-responsive">
                <table id="tasksTable" class="table table-bordered table-hover text-center tablesorter">
                    <thead>
                        <tr>
                            <th>Имя</th>
                            <th>E-mail</th>
                            <th>Задача</th>
                            <th>Изображение</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $item):?>
                        <tr>
                            <td><?php echo $item['name'];?></td>
                            <td><?php echo $item['email'];?></td>
                            <td class="text-justify"><?php echo $item['text_task'];?></td>
                            <td><img src="<?php echo $item['path_image'];?>" alt="Image"></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

<?php require_once __DIR__ . '/../../../public_html/footer.php';?>


