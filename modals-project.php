<!-- Добавить проект -->
<div id="add-project" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="add-project-Label" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="add-on"><i class="icon-remove"></i></span></button>
		<h3 id="add-project-Label">Добавить проект</h3>
	</div>
	<div class="modal-body">
		<input type="text" id="inputEmail" placeholder="Название проекта" class="input-block-level">
		<textarea class="input-block-level" rows="5" placeholder="Суть проекта"></textarea>
		
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
				<label>Заказчик:</label>
				<input class="span12" type="text" value="">
			</div>
		
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
		</div>
		<hr/>
		<div class="row-fluid">
			<div class="span12">
				<label>Менеджер(ы) проекта:</label>
				<input class="span12" placeholder="%username%" type="text" value="">
			</div>
		</div>
		
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Отмена</button>
		<button class="btn btn-primary">Добавить проект</button>
	</div>
</div>


<!-- Изменить проект -->
<div id="edit-project" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="edit-project-Label" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="add-on"><i class="icon-remove"></i></span></button>
		<h3 id="edit-project-Label">Изменить проект</h3>
	</div>
	<div class="modal-body">
		<input type="text" id="inputEmail" placeholder="%project-name%" class="input-block-level">
		<textarea class="input-block-level" rows="5" placeholder="%project-info%"></textarea>
		
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
				<label>Заказчик:</label>
				<input class="span12" type="text" value="" placeholder="%zakazchik%">
			</div>
		
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
		</div>
		<hr/>
		<div class="row-fluid">
			<div class="span12">
				<label>Менеджер(ы) проекта:</label>
				<input class="span12" placeholder="%username%" type="text" value="">
			</div>
		</div>
		
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Отмена</button>
		<button class="btn btn-primary">Сохранить изменения</button>
	</div>
</div>


<!-- Изменить клиента -->
<div id="edit-client" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="edit-client-Label" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="add-on"><i class="icon-remove"></i></span></button>
		<h3 id="edit-client-Label">Изменить клиента</h3>
	</div>
	<div class="modal-body">
		
		<input class="span12" placeholder="%client-name%" type="text" value="">
		
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Отмена</button>
		<button class="btn btn-primary">Сохранить изменения</button>
	</div>
</div>



<!-- Изменить менеджера -->
<div id="edit-manager" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="edit-manager-Label" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="add-on"><i class="icon-remove"></i></span></button>
		<h3 id="edit-manager-Label">Изменить менеджера</h3>
	</div>
	<div class="modal-body">
		
		<input class="span12" placeholder="%client-name%" type="text" value="">
		
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Отмена</button>
		<button class="btn btn-primary">Сохранить изменения</button>
	</div>
</div>

<!-- Отчёт по проекту -->
<div id="project-report" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="project-report-Label" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="add-on"><i class="icon-remove"></i></span></button>
		<h3 id="project-report-Label">Отчёт по проекту</h3>
	</div>
	<div class="modal-body">
		
		<div class="progress progress-info">
		  <div class="bar" style="width: 20%"></div>
		</div>
		<div class="progress progress-success">
		  <div class="bar" style="width: 40%"></div>
		</div>
		<div class="progress progress-warning">
		  <div class="bar" style="width: 60%"></div>
		</div>
		<div class="progress progress-danger">
		  <div class="bar" style="width: 80%"></div>
		</div>
		
		<hr/>
		
		<div class="row-fluid">
			<pre>
*******Initializing Message Log:TSSysprep.dll 09/25/12 19:54:09
*******Version:Major=6, Minor=1, Build=7601, PlatForm=2, CSDVer=Service Pack 1, Free
sysprep.cpp(309)Entering RCMSysPrepRestore
sysprep.cpp(314)ERROR: ResetTSPublicPrivateKeys() FAILED: 2
sysprep.cpp(316)Leaving RCMSysPrepRestore
logmsg.cpp(38)
*******Terminating Log.
*******Initializing Message Log:TSSysprep.dll 09/25/12 19:54:09
*******Version:Major=6, Minor=1, Build=7601, PlatForm=2, CSDVer=Service Pack 1, Free
			</pre>
		</div>
		
		
	</div>
	<div class="modal-footer">
		<button class="btn btn-primary">Закрыть</button>
	</div>
</div>