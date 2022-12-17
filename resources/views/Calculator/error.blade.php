@extends('welcome')

@section('content')
    <div class="col-md-7">
        <div class="card mb-4 mx-4">
            <div class="card-body p-4">
                <div class="mb-4 text-center">
                    <h4>{{ __('loans.error') }}</h4>
                </div>
            </div>
            <div class="text-center mb-5">
                <a class="btn btn-primary" href="{{ route('calc.index') }}">{{ __('loans.calculate_again') }}</a>
            </div>
        </div>
    </div>
@endsection
