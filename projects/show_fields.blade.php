<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $project->id !!}</p>
</div>

<!-- Project Name Field -->
<div class="form-group">
    {!! Form::label('project_name', 'Project Name:') !!}
    <p>{!! $project->project_name !!}</p>
</div>

<!-- Project Desciption Field -->
<div class="form-group">
    {!! Form::label('project_description', 'Project Description:') !!}
    <p>{!! $project->project_description !!}</p>
</div>

<!-- Category ID Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Category ID:') !!}
    <p>{!! $project->category_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $project->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $project->updated_at !!}</p>
</div>

