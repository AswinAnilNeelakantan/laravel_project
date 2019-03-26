@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Image
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'images.store', 'files' => true]) !!}

                        @include('images.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {{--<div class="form-group">--}}
        {{--<label for="title">Select Category:</label>--}}
        {{--<select name="category" class="form-control">--}}
            {{--<option value="">--- Select category ---</option>--}}
            {{--@foreach ($categories as $key => $value)--}}
                {{--<option value="{{ $value }}">{{ $value }}</option>--}}
            {{--@endforeach--}}
        {{--</select>--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--<label for="title">Select state:</label>--}}
        {{--<select name="project" class="form-control">--}}
        {{--</select>--}}
    {{--</div>--}}
    {{--<script type="text/javascript">--}}
        {{--$(document).ready(function() {--}}
            {{--$('select[name="category"]').on('change', function() {--}}
                {{--var categoryID = $(this).val();--}}
                {{--if(categoryID) {--}}
                    {{--$.ajax({--}}
                        {{--url: '/admin/user_register/ajax/'+encodeURI(categoryID),--}}
                        {{--type: "GET",--}}
                        {{--dataType: "json",--}}
                        {{--success:function(data) {--}}
                            {{--$('select[name="project"]').empty();--}}
                            {{--$.each(data, function(key, value) {--}}
                                {{--$('select[name="project"]').append('<option value="'+ value +'">'+ value +'</option>');--}}
                            {{--});--}}
                        {{--}--}}
                    {{--});--}}
                {{--}else{--}}
                    {{--$('select[name="project"]').empty();--}}
                {{--}--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}

    {{--<select name="category">--}}
        {{--@foreach ($categories as $category)--}}
            {{--<option value="{{ $category->id }}">{{ $category->name }}</option>--}}
        {{--@endforeach--}}
    {{--</select>--}}

    {{--<select name=“project”>--}}
        {{--@foreach ($projects as $project)--}}
            {{--<option value="{{ $project->id }}">{{ $project->name }}</option>--}}
        {{--@endforeach--}}
    {{--</select>--}}

    {{--<script>--}}
        {{--$(function() {--}}
            {{--$('select[name=category]').change(function() {--}}

                {{--var url = '{{ url('category') }}' + $(this).val() + '/projects/';--}}

                {{--$.get(url, function(data) {--}}
                    {{--var select = $('form select[name= project]');--}}

                    {{--select.empty();--}}

                    {{--$.each(data,function(key, value) {--}}
                        {{--select.append('<option value=' + value.id + '>' + value.name + '</option>');--}}
                    {{--});--}}
                {{--});--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}

    {{--<select name="category" class="form-control">--}}

        {{--<option value="">--- Select Category ---</option>--}}

        {{--@foreach ($categories as $key => $value)--}}

            {{--<option value="{{ $key }}">{{ $value }}</option>--}}

        {{--@endforeach--}}

    {{--</select>--}}

    {{--</div>--}}

    {{--<div class="form-group">--}}


        {{--<select name="project" class="form-control" >--}}

        {{--</select>--}}

    {{--</div>--}}

    {{--</div>--}}

    {{--</div>--}}

    {{--</div>--}}


    <script>



        $(document).ready(function() {
            $('select[name="type"]').on('change', function () {

                var type = $(this).val();

                if(type=='1'){
                    $('#category_box').show();
                    $('#project_box').hide();
                }
                else {
                    $('#project_box').show();
                    $('#category_box').hide();
                }


            });
        });











    </script>
@endsection



