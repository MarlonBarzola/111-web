<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del nuevo miembro']) !!}

    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('position', 'Cargo') !!}
    {!! Form::text('position', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el cargo del nuevo miembro']) !!}

    @error('position')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del nuevo miembro', 'readonly']) !!}

    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset ($team->thumbnail)
                <img id="picture" src="{{ Storage::url($team->thumbnail) }}">
            @endisset
        </div>   
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}

            @error('file')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>
        <p>Selecciona una imagen de portada</p>
    </div>
</div>
