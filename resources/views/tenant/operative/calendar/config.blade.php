@extends('tenant.layouts.app')

@section('styles')

@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <nav aria-label="breadcrumb" class="agenda_path">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('tenant.operative.calendar.index') }}">
                        {{ __('calendar.calendar') }}
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('tenant.operative.calendar.config-calendar') }}">
                        {{ __('calendar.config-date') }}
                    </a>
                </li>
            </ol>
        </nav>
    </nav>
    <!-- Form update duration date -->
    <form action="{{ route('tenant.operative.calendar.config-date') }}" method="post" id="form-config-date">
        @csrf
        <div class="main_target_form">
            <h2 class="col-12 title_section_form">{{ __('calendar.config-date') }}</h2>

            <div class="col-12 data_row_form">
                <div class="col-md-6 data_group_form">
                    <label for="date-duration">{{__('calendar.duration-date')}}</label>
                    <input type="number" class="input_dataGroup_form" id="date-duration" name="date-duration" value="{{ old('date-duration', $config->date_duration) }}">
                </div>

                <div class="col-md-6 data_group_form">
                    <label for="date-after">{{__('calendar.after-date')}}</label>
                    <input type="number" class="input_dataGroup_form" id="date-after" name="date-after" value="{{ old('date-after', $config->date_interval) }}">
                </div>
            </div>

            <div class="container_button"> <!-- Buttons -->
                <button type="button" class="button_secund" data-toggle="tooltip" data-placement="left" title="{{ __('calendar.help-config-date') }}">
                    <i class="far fa-question-circle"></i>
                </button>

                <button type="submit" class="button_primary">{{ __('trans.save') }}
                    <i class="fas fa-save pl-2"></i>
                </button>
            </div>
        </div>
    </form>

    <div class="main_target_form">
        <!-- Form add schedule-->
        <form action="{{ route('tenant.operative.calendar.add-schedule') }}" method="post" id="form-add-schedule">
            @csrf
            <div class="form_row">
                <h2 class="col-12 title_section_form">{{ __('calendar.add-schedule') }}</h2>
                <div class="col-12 data_group_form mb-2">
                    <ul class="row m-0">
                        <li class="col-5 col-md-3">
                            <label>
                                <input class="mr-2" type="checkbox" value="1" id="week-1" name="week[]">
                                {{ __('calendar.monday') }}
                            </label>
                        </li>
                        <li class="col-5 col-md-3">
                            <label>
                                <input class="mr-2" type="checkbox" value="2" id="week-2" name="week[]">
                                {{ __('calendar.tuesday') }}
                            </label>
                        </li>
                        <li class="col-5 col-md-3">
                            <label>
                                <input class="mr-2" type="checkbox" value="3" id="week-3" name="week[]">
                                {{ __('calendar.wednesday') }}
                            </label>
                        </li>
                        <li class="col-5 col-md-3">
                            <label>
                                <input class="mr-2" type="checkbox" value="4" id="week-4" name="week[]">
                                {{ __('calendar.thursday') }}
                            </label>
                        </li>
                        <li class="col-5 col-md-3">
                            <label>
                                <input class="mr-2" type="checkbox" value="5" id="week-5" name="week[]">
                                {{ __('calendar.friday') }}
                            </label>
                        </li>
                        <li class="col-5 col-md-3">
                            <label>
                                <input class="mr-2" type="checkbox" value="6" id="week-6" name="week[]">
                                {{ __('calendar.saturday') }}
                            </label>
                        </li>
                        <li class="col-5 col-md-3">
                            <label>
                                <input class="mr-2" type="checkbox" value="0" id="week-0" name="week[]">
                                {{ __('calendar.sunday') }}
                            </label>
                        </li>
                    </ul>
                </div>

                <div class="col-12 data_row_form">
                    <div class="col-md-6 data_group_form">
                        <label for="startTime">{{ __('calendar.start-time') }}</label>
                        <input type="time" class="input_dataGroup_form" id="startTime" name="startTime">
                    </div>

                    <div class="col-md-6 data_group_form">
                        <label for="endTime">{{ __('calendar.end-time') }}</label>
                        <input type="time" class="input_dataGroup_form" id="endTime" name="endTime">
                    </div>
                </div>
            </div>

            <div class="container_button"> <!-- Buttons -->
                <button type="button" class="button_secund" data-toggle="tooltip" data-placement="left"
                        title="{{ __('calendar.help-add-schedule') }}">
                    <i class="far fa-question-circle"></i>
                </button>

                <button type="submit" class="button_primary">{{ __('trans.add') }}
                    <i class="fas fa-plus pl-2"></i>
                </button>
            </div>
        </form>

        <div class="form_row mt-4">
            <h2 class="col-12 title_section_form">{{ __('calendar.schedule') }}</h2>

            <div class="col-12 data_row_form">
                <table class="table table-striped table-bordered p-0" id="table-schedule">
                    <thead>
                    <tr>
                        <th scope="col">{{ __('calendar.days') }}</th>
                        <th scope="col">{{ __('calendar.hours') }}</th>
                        <th scope="col">{{ __('trans.action') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(is_array($config->schedule_on))
                        @foreach($config->schedule_on as $item)
                            <tr>
                                <td>
                                    @if(!empty($item['daysOfWeek']))
                                        @php foreach ($item['daysOfWeek'] as $k => $i) $item['daysOfWeek'][$k] = daysWeekText($i); @endphp
                                        {{ implode('-', $item['daysOfWeek']) }}
                                    @endif
                                </td>
                                <td>{{ date('h:i A', strtotime($item['startTime'])) }} - {{ date('h:i A', strtotime($item['endTime'])) }}</td>
                                <td>
                                    <button class="btn btn-danger delete-schedule" data-id="{{ $item['id'] }}">{{ __('trans.delete') }} <i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/locale/es.min.js"></script>

    <script defer>
        document.addEventListener('DOMContentLoaded', function() {
            $('#form-config-date').submit(function (e) {
                e.preventDefault();
                var form = $(this);

                $.ajax({
                    data: form.serialize(),
                    url: form.attr('action'),
                    dataType: 'json',
                    method: 'post',
                    success: function (res, status) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Hecho',
                            text: res.message,
                            showConfirmButton: false,
                            timer: 1500
                        });
                    },
                    error: function (res, status) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Alerta',
                            text: res.message,
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                });
            });

            $('#form-add-schedule').submit(function (e) {
                e.preventDefault();
                var form = $(this);

                $.ajax({
                    data: form.serialize(),
                    url: form.attr('action'),
                    dataType: 'json',
                    method: 'post',
                    success: function (res, status) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Hecho',
                            text: res.message,
                            showConfirmButton: false,
                            timer: 1500
                        });

                        //clean form
                        form[0].reset();

                        //add item form
                        $('#table-schedule tbody').append('<tr>' +
                            '<td>' +
                            res.item.daysOfWeek.join('-') +
                            '</td>' +
                            '<td>' + moment(res.item.startTime, 'HH:mm').format('hh:mm A') + ' - ' + moment(res.item.endTime, 'HH:mm').format('hh:mm A') + '</td>' +
                            '<td>' +
                            '<button class="btn btn-danger delete-" data-id="' + res.item.id + '" >{{ __('trans.delete') }} <i class="fa fa-trash"></i></button>' +
                            '</td>' +
                            '</tr>');
                    },
                    error: function (res, status) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Alerta',
                            text: res.message,
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                });
            });

            $('#table-schedule tbody').on('click', '.delete-schedule', function (e) {
                e.preventDefault();
                var btn = $(this);
                //console.log(btn.data());
                Swal.fire({
                    title: '{{ __('trans.are-you-sure') }}?',
                    text: "{{ __('calendar.delete-schedule-confirmation') }}",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: '{{ __('trans.delete') }}',
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    reverseButtons: true,
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            data: {id: btn.data('id')},
                            url: '{{ route('tenant.operative.calendar.delete-schedule') }}',
                            dataType: 'json',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            method: 'delete',
                            success: function (res, status) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Hecho',
                                    text: res.message,
                                    showConfirmButton: false,
                                    timer: 1500
                                });

                                btn.parent().parent().remove();
                            },
                            error: function (res, status) {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Alerta',
                                    text: res.message,
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            }
                        });
                    }
                });
            });
        });

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@endsection
