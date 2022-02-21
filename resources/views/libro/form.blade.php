<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $libro->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('edicion') }}
            {{ Form::text('edicion', $libro->edicion, ['class' => 'form-control' . ($errors->has('edicion') ? ' is-invalid' : ''), 'placeholder' => 'Edicion']) }}
            {!! $errors->first('edicion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ejempleras') }}
            {{ Form::text('ejempleras', $libro->ejempleras, ['class' => 'form-control' . ($errors->has('ejempleras') ? ' is-invalid' : ''), 'placeholder' => 'Ejempleras']) }}
            {!! $errors->first('ejempleras', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    <!--    <div class="form-group">
            {{ Form::label('estudiante_id') }}
            {{ Form::text('estudiante_id', $libro->estudiante_id, ['class' => 'form-control' . ($errors->has('estudiante_id') ? ' is-invalid' : ''), 'placeholder' => 'Estudiante Id']) }}
            {!! $errors->first('estudiante_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>-->
        <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>
         <div class="col-md-6">
                <select class="form-control" name="role">
                    <option selected value="1">Administrador</option>
                    <option value="2">Empleado</option>
                    <option value="3">Cliente</option>
                </select>
        </div>

</div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>