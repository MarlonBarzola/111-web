{{-- {!! Form::hidden('user_id', auth()->user()->id) !!} --}}

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset ($job->banner)
                <img id="banner" src="{{ Storage::url($job->banner) }}">
            @endisset
        </div>   
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('banner', 'Banner') !!}
            {!! Form::file('banner', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}

            @error('banner')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>
        <p>Selecciona una imagen de banner</p>
    </div>
</div>

<div class="form-group">
    {!! Form::label('name', 'Título') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post', 'autocomplete' => 'off']) !!}

    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del post', 'readonly']) !!}

    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('category_id', 'Categoría') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

    @error('category_id')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>
    @foreach ($tags as $tag)
    
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{ $tag->name }}
        </label>
    
    @endforeach

    <hr>

    @error('tags')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label>
        {!! Form::radio('status', 0) !!}
        Borrador
    </label>
    <label>
        {!! Form::radio('status', 1, true) !!}
        Publicado
    </label>

    @error('status')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset ($job->thumbnail)
                <img id="picture" src="{{ Storage::url($job->thumbnail) }}">
            @endisset
        </div>   
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen del post') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}

            @error('file')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>
        <p>Selecciona una imagen de portada</p>
    </div>
</div>

<div class="form-group">
    {!! Form::label('extract', 'Texto banner') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control', 'rows' => 5]) !!}

    @error('extract')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('body', 'Cuerpo del post') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

    @error('body')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('iframe', 'Embeber iframe') !!}
    {!! Form::text('iframe', null, ['class' => 'form-control']) !!}

    @error('iframe')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>