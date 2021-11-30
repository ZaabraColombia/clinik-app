@extends('tenant.layouts.app')

@section('styles')

@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <nav aria-label="breadcrumb" class="agenda_path">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('tenant.patients.index') }}">{{ __('trans.date-type') }}</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('tenant.operative.date-type.create') }}">{{ __('trans.add-date-type') }}</a>
                </li>
            </ol>
        </nav>
    </nav>
    <form action="{{ route('tenant.operative.date-type.store') }}" method="post" class="form">
        @csrf
        <div class="main_target_form">
            <div class="form_row">
                <h2 class="col-12 title_section_form">{{ __('trans.date-type-information') }}</h2>
                <div class="col-12 data_row_form">
                    <div class="col-md-6 data_group_form">
                        <label for="name">{{ __('validation.attributes.name') }}</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                               name="name" value="{{ old('name') }}">
                    </div>
                    <div class="col-md-6 data_group_form">
                        <label for="price">{{ __('validation.attributes.price') }}</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                               name="price" value="{{ old('price') }}">
                    </div>
                </div>
            </div>

            <div class="container_button">
                <a href="{{ route('tenant.operative.date-type.index') }}" class="button_third">{{ __('trans.cancel') }}
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

@endsection
