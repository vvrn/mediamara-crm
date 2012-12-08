<!-- Добавить задачу -->
<div id="add-task" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="add-taskLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="add-on"><i class="icon-remove"></i></span></button>
		<h3 id="add-task-Label">Добавить задачу</h3>
	</div>
	<div class="modal-body">
		<input type="text" id="inputEmail" placeholder="Задача" class="input-block-level">
		<textarea class="input-block-level" rows="5" placeholder="Суть задачи"></textarea>

		<div class="row-fluid">
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
		
		<div class="row-fluid margt10">
	
			<div class="span6">
				<label>Бюджет:</label>
				<input class="span8" placeholder="0" type="text" value="">
				<select class="span4">
					  <option>USD</option>
					  <option>RUR</option>
					  <option>BYB</option>
					  <option>БЗН</option>
					  <option>EUR</option>
				</select>
			</div>
			
			<div class="span6">
				<label>Приоритет:</label>
				<select class="span11">
				  <option>Высокий</option>
				  <option>Обычный</option>
				  <option>Низкий</option>
				</select>
			</div>
		</div>
		
		<hr>
		
		<div class="row-fluid add-files">
			<center><button class="btn btn-large btn-success" type="button">Загрузить файлы</button></center>
		</div>
		
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Отмена</button>
		<button class="btn btn-primary">Добавить задачу</button>
	</div>
</div>

<!-- Изменить задачу -->
<div id="edit-task" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="edit-taskLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="add-on"><i class="icon-remove"></i></span></button>
		<h3 id="add-taskLabel">Изменить задачу</h3>
	</div>
	<div class="modal-body">
		<input type="text" id="inputEmail" placeholder="Задача" class="input-block-level">
		<textarea class="input-block-level" rows="5" placeholder="Суть задачи"></textarea>

		<div class="row-fluid">
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
		
		<div class="row-fluid margt10">
	
			<div class="span6">
				<label>Бюджет:</label>
				<input class="span8" placeholder="0" type="text" value="">
				<select class="span4">
					  <option>USD</option>
					  <option>RUR</option>
					  <option>BYB</option>
					  <option>БЗН</option>
					  <option>EUR</option>
				</select>
			</div>
			
			<div class="span6">
				<label>Приоритет:</label>
				<select class="span11">
				  <option>Высокий</option>
				  <option>Обычный</option>
				  <option>Низкий</option>
				</select>
			</div>
		</div>
		
		<hr>
		
		<div class="row-fluid add-files">
			<center><button class="btn btn-large btn-success" type="button">Загрузить файлы</button></center>
		</div>
		
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Отмена</button>
		<button class="btn btn-primary">Добавить задачу</button>
	</div>
</div>



<!-- Изменить исполнителя -->
<div id="edit-performer" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="edit-performer-Label" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="add-on"><i class="icon-remove"></i></span></button>
		<h3 id="edit-performer-Label">Изменить исполнителя</h3>
	</div>
	<div class="modal-body">
		
		<input class="span12" placeholder="%performer-name%" type="text" value="">
		
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Отмена</button>
		<button class="btn btn-primary">Сохранить изменения</button>
	</div>
</div>