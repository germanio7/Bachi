		<div id="nuevo" class="modal modal-fixed-footer scrollbar">
				<form method='POST' v-on:submit.prevent="createMateria">
		    	<div class="modal-content">
		    		<blockquote><h4>Nueva Materia</h4></blockquote>
		    		<br>
		      	<div class="row">
							<div class="input-field col s12">
			          <input id="nombre" type="text" class="validate" name="nombre" v-model="newNombre">
			          <label for="nombre">Nombre</label>
			        </div>
						</div>

		        <div class="input-field col s12">
							<input type="text" value="" id="buscar" v-on:keyup="getDocentes()" class="validate">
							<label for="buscar">Buscar Docente</label>
		        </div>

		        <br>

		        <div v-for="docente in docentes">
		          <div class="input-field col s12 m6">
								<label>
									<input type="radio" v-model="newDocenteId" :value="docente.id"/>
									<span>@{{docente.apellido}} @{{docente.nombre}}</span>
								</label>
							</div>
		        </div>

					</div>

		    	<div class="modal-footer">
		     	 	<button type="submit" class="btn btn-flat waves-effect waves-green green modal-close white-text">Guardar</button>
		    	</div>

		    </form>
  	</div>
