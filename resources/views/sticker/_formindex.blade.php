<div class="form-group row">
    <label for="lib_name" class="col-sm-5 col-form-label text-md-right"><strong>{{ __('') }}</strong></label>

    <div class="col-md-2">
        <input id="numero" type="text" class="form-control{{ $errors->has('numero') ? ' is-invalid' : '' }}" name="numero" value="{{ old('numero') }}"  autofocus>

        @if ($errors->has('numero'))
            <span class="invalid-feedback">
                <strong><font>{{ $errors->first('numero') }}</font></strong>
            </span>
        @endif
    </div>


</div>

<div class="form-group row">
    <label for="lib_name" class="col-sm-5 col-form-label text-md-right"><strong>{{ __('') }}</strong></label>

    <div class="col-md-2">
        <input id="numero" type="submit" class="btn btn-primary" value="Vérifier">
    </div>


</div>