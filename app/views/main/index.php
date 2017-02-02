<?php require_once __DIR__ . '/../../../public_html/header.php';?>

<!-- Модальное окно -->
<div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="gridModalLabel">Добавить задачу</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            	<form action="">
            		<div class="form-group">
					    <label for="inputName">Имя</label>
					    <input type="еуче" class="form-control" id="inputName" placeholder="Имя">
					</div>
					<div class="form-group">
					    <label for="inputMail">E-mail</label>
					    <input type="email" class="form-control" id="inputEmail" placeholder="E-mail">
					</div>
					<div class="form-group">
						<label for="inputTextTask">Текст задачи</label>
					    <textarea class="form-control" id="inputTextTask" rows="3"></textarea>
					</div>
					<div class="form-group">
						<label for="inputFile">File input</label>
						<input type="file" id="inputFile">
						<p class="help-block">Изображение будет уменьшино до 320*240px</p>
					</div>
            	</form>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-default" data-dismiss="modal" 
      			onclick="ajax({
      							url:"http://tasks-bee.loc/index/create", 
      							statbox:"status", 
      							method:"POST", 
      							data:{first_area:10,second_area:5} 
      						});">
		Добавить
      	</button>
      </div>
    </div>
  </div>
</div>

<!-- Модальное окно просмотра -->
<!-- <div id="previewModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
    	<h4>Просмотр</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#gridSystemModal">Назад</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Добавить</button>
      </div>
    </div>
  </div>
</div> -->

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

<!-- Кнопка модального окна -->
<div class="row">
            <div class="col-lg-12 text-center">
            	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#gridSystemModal">Добавить задачу</button>
            </div>
</div>

<?php require_once __DIR__ . '/../../../public_html/footer.php';?>


