	<div id="create" class="modal">
			<form method='POST' v-on:submit.prevent="createCursos">
	    	<div class="modal-content">
	    		<blockquote><h4>Nuevo Curso</h4></blockquote>
	    		<br>
		      	<div class="row">
					<div class="input-field col s12">
			          <input id="curso" type="text" class="validate" name="curso" v-model="newCurso">
			          <label for="curso">Curso</label>
			        </div>

			        <div class="input-field col s12">
			          <input id="orientacion" type="text" class="validate" name="orientacion" v-model="newOrientacion">
			          <label for="orientacion">Orientacion</label>
			        </div>

			        <div class="input-field col s12">
			          <input id="turno" type="text" class="validate" name="turno" v-model="newTurno">
			          <label for="turno">Turno</label>
			        </div>
				</div>
	    	</div>
	    	<div class="modal-footer">
	     	 	<button type="submit" class="btn btn-flat waves-effect waves-green green modal-close white-text">Guardar</button>
	    	</div>
	    </form>
  	</div>