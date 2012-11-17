<!-- Добавить задачу -->
<div id="add-task" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="add-taskLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="add-on"><i class="icon-remove"></i></span></button>
		<h3 id="add-taskLabel">Добавить задачу</h3>
	</div>
	<div class="modal-body">
		<input type="text" id="inputEmail" placeholder="Задача" class="input-block-level">
		<textarea class="input-block-level" rows="5" placeholder="Суть задачи"></textarea>
		<hr/>
		<div class="row-fluid">
			
			<div class="span4">
			<label>Приоритет:</label>
				<select class="span11">
				  <option>Высокий</option>
				  <option>Обычный</option>
				  <option>Низкий</option>
				</select>
			</div>
			
			<div class="span4">
				<label>Старт:</label>
				<div class="input-append date" id="dp3" data-date="21.12.2012" data-date-format="dd.mm.yyyy">
				  <input class="span9" size="16" type="text" value="21 декабря 2012">
				  <span class="add-on"><i class="icon-calendar"></i></span>
				</div>	
			</div>
			
			
			<div class="span4">
				<label>Дедлайн:</label>
				<div class="input-append date" id="dp3" data-date="21.12.2012" data-date-format="dd.mm.yyyy">
				  <input class="span9" size="16" type="text" value="21 декабря 2012">
				  <span class="add-on"><i class="icon-calendar"></i></span>
				</div>	
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Отмена</button>
		<button class="btn btn-primary">Добавить задачу</button>
	</div>
</div>


<!-- Добавить проект -->
<div id="add-project" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="add-project-Label" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="add-on"><i class="icon-remove"></i></span></button>
		<h3 id="add-project-Label">Добавить проект</h3>
	</div>
	<div class="modal-body">
		<input type="text" id="inputEmail" placeholder="Название проекта" class="input-block-level">
		<textarea class="input-block-level" rows="5" placeholder="Суть проекта"></textarea>
		<hr/>
		<div class="row-fluid">

			<div class="span6">
				<label>Старт:</label>
				<div class="input-append date" id="dp3" data-date="21.12.2012" data-date-format="dd.mm.yyyy">
				  <input class="span9" size="16" type="text" value="21 декабря 2012">
				  <span class="add-on"><i class="icon-calendar"></i></span>
				</div>	
			</div>
			
			
			<div class="span6">
				<label>Дедлайн:</label>
				<div class="input-append date" id="dp3" data-date="21.12.2012" data-date-format="dd.mm.yyyy">
				  <input class="span9" size="16" type="text" value="21 декабря 2012">
				  <span class="add-on"><i class="icon-calendar"></i></span>
				</div>	
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Отмена</button>
		<button class="btn btn-primary">Добавить проект</button>
	</div>
</div>