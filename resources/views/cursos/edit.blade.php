<div id="edit" class="modal">
			<form method='POST' v-on:submit.prevent="updateCurso(fillCurso.id)">
	    	<div class="modal-content">
	    		<blockquote><h4>Editar Curso</h4></blockquote>
	    		<br>
		      	<div class="row">
					<div class="input-field col s12">
			          <input id="curso" type="text" class="validate" name="curso" v-model="fillCurso.curso">
			          <label for="curso"></label>
			        </div>

			        <div class="input-field col s12">
			          <input id="division" type="text" class="validate" name="division" v-model="fillCurso.division">
			          <label for="division"></label>
			        </div>

			        <div class="input-field col s12">
			          <select id="orientacion" name="orientacion" class="validate" v-model="newOrientacion">
			            <option value="" selected>@{{fillCurso.orientacion}}</option>
			            <option value="Ciclo Basico">Ciclo Básisco</option>
			            <option value="Ciencias Sociales">Ciencias Sociales</option>
			            <option value="Educacion Fisica">Educación Física</option>
			          </select>
			        </div>

			        <div class="input-field col s12">
			          <select id="turno" name="turno" class="validate" v-model="newTurno">
			            <option value="" selected>@{{fillCurso.turno}}</option>
			            <option value="Mañana">Mañana</option>
			            <option value="Tarde">Tarde</option>
			          </select>
			        </div>
				</div>
	    	</div>
	    	<div class="modal-footer">
	     	 	<button type="submit" class="btn btn-flat waves-effect waves-green green modal-close white-text">Guardar</button>
	    	</div>
	    </form>
  	</div>