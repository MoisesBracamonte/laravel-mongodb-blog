      <div class="form-group">
      	{{  Form::label('name','Nombre etiqueta')}}
      	{{  Form::text( 'name',null,["class" =>"form-control","id" => "name_tag_id"] ) }}
      </div>
      <div class="form-group">
      	{{ Form::label('slug','Slug de etiqueta') }}
				{{ Form::text('slug',null,["class" => "form-control", "id" => "slug_tag_id"])}}
      </div>
			{{ Form::submit('Guardar',["class" => "btn btn-primary mb-2"])}}