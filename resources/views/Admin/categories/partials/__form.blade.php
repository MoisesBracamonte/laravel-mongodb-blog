      <div class="form-group">
      	{{  Form::label('name','Nombre categoria')}}
      	{{  Form::text( 'name',null,["class" =>"form-control","id" => "name_category_id"] ) }}
      </div>
      <div class="form-group">
      	{{ Form::label('slug','Slug de categoria') }}
				{{ Form::text('slug',null,["class" => "form-control", "id" => "slug_category_id"])}}
				{{ Form::label('body','Agregar texto' )}}
				{{ Form::textarea('body',null,["class" => "form-control", "id" => "body_category_id", "style" => "resize:none"])}}
      </div>
			{{ Form::submit('Guardar',["class" => "btn btn-primary mb-2"])}}