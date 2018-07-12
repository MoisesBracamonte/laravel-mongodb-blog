      {{ Form::hidden('file','https://lorempixel.com/1200/500/?38376')}}
      {{ Form::hidden('user_id',auth()->user()->id) }}
      <div class="form-group">
      	 {{ Form::label('category_id','Categoria') }}
				{{ Form::select('category_id',$categories, isset($category_id) ? $category_id : null ,["class" => "form-control","id" => "category_post_id","placeholder" => "Seleccionar categoria"]) }}
			</div>
			
      <div class="form-group">
				{{ Form::label('tag_id','Etiquetas') }}
				{{ Form::select('tag_id[]',$tags,isset($post->tags) ? $post->tags : null ,[ "multiple" => true,"class" => "form-control","id" => "tag_post_id","placeholder" => "Seleccionar etiqueta"]) }}
      </div>
      <div class="form-group">
      	{{  Form::label('name','Nombre publicacion')}}
      	{{  Form::text( 'name',null,["class" =>"form-control","id" => "name_post_id"] ) }}
      </div>

      <div class="form-group">
      	{{ Form::label('slug','Slug de publicación') }}
				{{ Form::text('slug',null,["class" => "form-control", "id" => "slug_post_id"])}}
      </div>

      <div class="form-group">
				{{ Form::label('excerpt','extracto') }}
				{{ Form::text('excerpt',null,["class" => "form-control", "id" => "excerpt_post_id"]) }}
      </div>

      <div class="form-group">
				{{ Form::label('body','Agregar texto' )}}
				{{ Form::textarea('body',null,["class" => "form-control", "id" => "body_category_id", "style" => "resize:none"])}}
			</div>				

      <div class="form-group">
				{{ Form::label('status','Estado') }}
      </div>
			
      <div class="form-group">
				{{ Form::label('status','PUBLISHED') }}
				{{ Form::radio('status',"PUBLISHED") }}

				{{ Form::label('status','DRAFT') }}
				{{ Form::radio('status',"DRAFT",TRUE) }}
      </div>

      <div class="form-group">

      </div>
			{{ Form::submit('Guardar',["class" => "btn btn-primary mb-2"])}}