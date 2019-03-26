<!-- Image Url Field -->

{{--<div class="clearfix"></div>--}}

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::select('type', ['Choose type','1' => 'categories', '2' => 'projects'], null, ['class' => 'form-control']) !!}
</div>
<div class="clearfix"></div>

<!-- Type Id Field -->
<div class="form-group col-sm-6" id="category_box" style="display: none">
    {!! Form::label('categorybox', 'Type Id:') !!}
    {!! Form::select('categorybox',$categories, null, ['class' => 'form-control']) !!}
</div>
<div class="clearfix"></div>

<div class="form-group col-sm-6" id="project_box" style="display: none">
    {!! Form::label('type_id', 'Type Id:') !!}
    {!! Form::select('type_id',$projects, null, ['class' => 'form-control']) !!}
</div>
<div class="clearfix"></div>


<!-- Image Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image_type', 'Image Type:') !!}
    {!! Form::select('image_type', ['1' => 'cover', '2' => 'sub'], null, ['class' => 'form-control']) !!}
</div>
<div class="clearfix"></div>

<div class="form-group col-sm-6">
    {!! Form::label('image_url', 'Image Url:') !!}
    {!! Form::file('image_url') !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('images.index') !!}" class="btn btn-default">Cancel</a>
</div>
