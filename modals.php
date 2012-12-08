<?php include('modals-project.php'); ?>
<?php include('modals-task.php'); ?>
<?php include('modals-money.php'); ?>



<!-- Изменить время -->
<div id="edit-time" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="edit-time-Label" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="add-on"><i class="icon-remove"></i></span></button>
		<h3 id="edit-time-Label">Изменить время</h3>
	</div>
	<div class="modal-body">
		
			<div class="span6">
				<label>Старт:</label>
				<div class="input-append date" id="dp3" data-date="21.12.2012" data-date-format="dd.mm.yyyy">
				  <input class="span11" size="16" type="text" value="21 декабря 2012">
				  <span class="add-on"><i class="icon-calendar"></i></span>
				</div>	
			</div>
			
			<div class="span6">
				<label>Дедлайн:</label>
				<div class="input-append date" id="dp3" data-date="21.12.2012" data-date-format="dd.mm.yyyy">
				  <input class="12" size="16" type="text" value="21 декабря 2012">
				  <span class="add-on"><i class="icon-calendar"></i></span>
				</div>	
			</div>
		
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Отмена</button>
		<button class="btn btn-primary">Сохранить изменения</button>
	</div>
</div>