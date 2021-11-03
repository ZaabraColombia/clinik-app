@extends('tenant.layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('plugin/ckeditor/sample/css/sample.css') }}">
@endsection

@section('content')
    <form action="{{ route('tenant.operative.consent.update', ['consent' => $consent->id]) }}" method="post" class="form">
        @csrf
        @method('put')
        <div class="main_target_form">
            <div class="form_row">
                <h2 class="col-12 title_section_form">{{ __('trans.consent-information') }}</h2>
                <div class="col-12 data_row_form">
                    <div class="col-12 data_group_form">
                        <label for="name">{{ __('validation.attributes.name') }}</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                               name="name" value="{{ old('name', $consent->name) }}">
                    </div>
                    <div class="col-12 data_group_form">
                        <label for="content">{{ __('validation.attributes.content') }}</label>
                        <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content">
                            {{ old('content', $consent->content) }}
                        </textarea>
                    </div>
                </div>
            </div>

            <div class="button_container_form">
                <a href="{{ route('tenant.operative.consent.index') }}" type="submit" class="button_cancel_form">
                    {{ __('trans.cancel') }}<i class="fas fa-times-circle"></i>
                </a>
                <button  class="button_save_form">
                    {{ __('trans.save') }}<i class="fas fa-save"></i>
                </button>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script src="{{ asset('plugin/ckeditor/ckeditor.js') }}"></script>

    <script>
        ClassicEditor.create( document.querySelector( '#content' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection