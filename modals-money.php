<!-- Внести оплату -->
<div id="add-pay" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="add-pay-Label" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="add-on"><i class="icon-remove"></i></span></button>
		<h3 id="add-pay-Label">Внести оплату</h3>
	</div>
	<div class="modal-body">
		<div class="row-fluid">
		
		<div class="span8">
			<label>Сумма оплаты:</label>
			<input class="span8" placeholder="0" type="text" value="">
			<select class="span4">
				<option>USD</option>
				<option>RUR</option>
				<option>BYB</option>
				<option>БЗН</option>
				<option>EUR</option>
			</select>
			
			<textarea class="input-block-level" rows="5" placeholder="Примечание к платежу"></textarea>
		</div>
		<div class="span4">
				<p></p>
				<p><strong>Бюджет:</strong> 100500 руб.</p>
				<p><strong>Внесено:</strong> 500 руб.</p>
		</div>
		</div>	
		
		
		
		
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Отмена</button>
		<button class="btn btn-primary">Внести оплату</button>
	</div>
</div>


<!-- Внести оплату -->
<div id="edit-budget" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="edit-budget-Label" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="add-on"><i class="icon-remove"></i></span></button>
		<h3 id="edit-budget-Label">Изменить бюджет</h3>
	</div>
	<div class="modal-body">
		
			<input class="span8" placeholder="0" type="text" value="">
			<select class="span4">
				<option>USD</option>
				<option>RUR</option>
				<option>BYB</option>
				<option>БЗН</option>
				<option>EUR</option>
			</select>
		
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Отмена</button>
		<button class="btn btn-primary">Сохранить изменения</button>
	</div>
</div>