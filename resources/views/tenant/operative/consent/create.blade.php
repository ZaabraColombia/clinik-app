@extends('tenant.layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('plugin/ckeditor/sample/css/sample.css') }}">
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <nav aria-label="breadcrumb" class="agenda_path">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('tenant.operative.consent.index') }}">{{ __('trans.consent') }}</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('tenant.operative.consent.create') }}">{{ __('trans.add-consent') }}</a>
                </li>
            </ol>
        </nav>
    </nav>

    <form action="{{ route('tenant.operative.consent.store') }}" method="post" class="form">
        @csrf
        <div class="main_target_form">
            <div class="form_row">
                <h2 class="col-12 title_section_form">{{ __('trans.consent-information') }}</h2>

                <div class="col-12 data_row_form">
                    <div class="col-12 data_group_form">
                        <label for="name">{{ __('validation.attributes.name') }}</label>
                        <input type="text" class="input_dataGroup_form @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                    </div>

                    <div class="col-12 data_group_form">
                        <label for="content">{{ __('validation.attributes.content') }}</label>

                        <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content">
                            {{ old('content') }}
                        </textarea>
                    </div>
                </div>
            </div>

            <div class="container_button"> <!-- Buttons -->
                <a href="{{ route('tenant.operative.consent.index') }}" type="submit" class="button_third">{{ __('trans.cancel') }}
                    <i class="fas fa-times-circle pl-2"></i>
                </a>

                <button type="submit" class="button_primary">{{ __('trans.save') }}
                    <i class="fas fa-save pl-2"></i>
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
