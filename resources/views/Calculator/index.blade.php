@extends('welcome')

@section('content')
    <div class="col-md-7">
        <div class="card mb-4 mx-4">
            <div class="card-body p-4">
                <div class="mb-4 text-center">
                    <h1>{{ __('loans.title') }}</h1>
                </div>

                @if($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        <div class="mb-4 text-center">
                            <h4>{{ __('loans.result') }}</h4>
                            <div class="row">
                                <div class="col-4">
                                </div>
                                <div class="col-4">
                                    <input type="text" readonly class="form-control" value="{{ $message }}">
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <form method="POST" action="{{ route('calc.calculate') }}">
                    @csrf

                    <div class="justify-content-center">
                        <div class="row mb-3">
                            <div class="col-2">
                                <label>{{ __('loans.term') }}</label>
                            </div>
                            <div class="col-6">
                                <select class="form-control @error('term') is-invalid @enderror" name="term" required autofocus>
                                    <option selected value="12">12</option>
                                    <option value="24">24</option>
                                </select>
                                @error('term')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-2">
                                <label>{{ __('loans.loan_amount') }}</label>
                            </div>
                            <div class="col-6">
                                <input class="form-control @error('amount') is-invalid @enderror" data-type="currency" type="text" value="{{ old('amount', null) }}" name="amount"
                                    required autocomplete="amount" autofocus>
                                @error('amount')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-success" type="submit">{{ __('loans.calculate') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/script.js"></script>
@endsection
