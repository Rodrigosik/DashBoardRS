<!-- Modal crear grupo de secciones -->
<div class="modal fade" id="modalCrearGrupoSecciones" tabindex="-1" role="dialog" aria-labelledby="modalCrearGrupoSecciones" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header bg bg-dark text-white">
        <h5 class="modal-title" id="exampleModalLabel">Agregar grupo de secciones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        
          <form id="mcgs-FormCrearGruSec" role="form" method="Post" enctype="multipart/form-data">
            <!--Inicio del row-->
            <div class="row">

              <div class="col-6">
                <!--Input para el id del grupo de la secciones-->
                <div class="form-group">

                <label for="inputIdGrSec">Codigo de la seccion</label>

                <input type="number" class="form-control" id="inputIdGrSec" name="inputIdGrSec" placeholder="#ID" required>
              
                <small id="idHelp" class="form-text text-muted">Ingrese el codigo del grupo de secciones.</small>

                </div>
                <!--Fin Input para el id del grupo de la secciones-->
              </div>

              <div class="col-6">
                <!--Input para el nombre del grupo de la secciones-->
                <div class="form-group">

                <label for="inputNomGrSec">Nombre de la seccion</label>

                <input type="text" class="form-control" id="inputNomGrSec" name="inputNomGrSec" placeholder="Nombre de la seccion" required>
              
                <small id="idHelp" class="form-text text-muted">Ingrese el nombre del grupo de secciones.</small>

                </div>
                <!--Fin Input para el nombre del grupo de la secciones-->
              </div>

            </div><!--Fin del Row-->

            <!--Inicio del row-->
            <div class="row mt-2">

              <div class="col-6">
                <!--Input para el tipo de servicio del grupo de la secciones-->
                <div class="form-group">

                <label for="inputTipSerGrSec">Tipo de servicio</label>

                <input type="number" class="form-control" id="inputTipSerGrSec" name="inputTipSerGrSec" placeholder="#" required>
              
                <small id="idHelp" class="form-text text-muted">Ingrese el tipo de servicio del grupo de secciones.</small>

                </div>
                <!--Fin Input para el tipo de servicio del grupo de la secciones-->
              </div>

              <div class="col-6">
                <!--Input para el Estatus del grupo de la secciones-->
                <div class="form-group">

                <label for="inputEsGrSec">Estatus de la seccion</label>

                <input type="number" class="form-control" id="inputEsGrSec" name="inputEsGrSec" placeholder="Estatus de la seccion" required>
              
                <small id="idHelp" class="form-text text-muted">Ingrese el estatus del grupo de secciones.</small>

                </div>
                <!--Fin Input para el Estatus del grupo de la secciones-->
              </div>

            </div><!--Fin del Row-->

            <div class="row mt-2 justify-content-center">
              <div class="col-6 text-center">
                <div class="form-group">
                  <label for="inputSecGruFoto">Foto de la seccion</label>
                  <input type="file" class="form-control-file" id="inputSecGruFoto" name="inputSecGruFoto" required>
                  <small id="seccionHelp" class="form-text text-muted">Peso maximo de la foto 5Mb.</small>
                </div>
              </div>
            </div>

            <div class="row mb-4">
              <div class="col-12 text-center">
                <img class="imagenPrevia" src="vistas/img/sinimagen.png" class="img-thumbnail" width="300px">
              </div>
            </div>

          <div class="text-center">
            <button id="mcgs-ButSubCrearGruSec" type="submit" class="btn btn-danger">Agregar</button>
          </div> 

          <?php
          $agregarSucursal= new ControladorSecciones();
          $agregarSucursal -> ctrAgregarGrupoSecciones();
          ?>
          </form>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>