<div class="modal fade" id="createProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel"><i class="icon icon-goals-1"></i>{{__('Add New Product')}}</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<form id="productForm" name="productForm" class="form-horizontal">
			<div class="modal-body">
				 <div class="row clearfix">
                                
                                <div class="col-sm-6">
                                    <div class="form-group form-float" style="margin: 10px;">
                                        <div class="form-line">
                                            <input name="nombre" type="text" class="form-control" />
                                            <label class="form-label">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float" style="margin: 10px;">
                                        <div class="form-line">
                                            <input name="codigo" type="text" class="form-control" />
                                            <label class="form-label">Codigo</label>
                                        </div>
                                    </div>
                                   <div class="form-group form-float" style="margin: 10px;">
                                        <div class="form-line">
                                            <input name="precio" type="text" class="form-control" />
                                            <label class="form-label">Precio</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    
                                    <div class="form-group form-float" style="margin: 10px;">
                                        <div class="form-line">
                                            <input name="empaque" type="text" class="form-control" />
                                            <label class="form-label">Empaque</label>
                                        </div>
                                    </div>
                                     <div class="form-group form-float" style="margin: 10px;">
                                        <div class="form-line">
                                             <p>
			                            		<b>Existencia</b>
					                         </p>
					                         <select class="form-control show-tick" name="existencia">
					                                        <option value="0">Agotado</option>
					                                        <option value="1">Baja Existencia</option>
					                                        <option value="2">Disponible</option>
					                         </select>
                                        </div>
                                    </div>
                                   
                                </div>
                      </div>
                     
	
			</div>
			</form>
		
			<br>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">{{__('Close') }}</button>
				<button type="submit" class="btn btn-primary" id="ajaxProductSubmit"><i class="icon-save mr-2"></i>{{__('Save data')}}</button>
				

			</div>
		</div>
	</div>
</div>



