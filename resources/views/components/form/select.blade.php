<div class="form-group row">
    {{ Form::label($name, null, ['class' => 'col-sm-3 align-self-center col-form-label']) }}
    <div class="col-sm-9">
        {{ Form::select($name, $option,$value, array_merge(['class' => 'form-control '], $attributes)) }}
    </div>
</div>
