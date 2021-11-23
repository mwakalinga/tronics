@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="card" style="margin-top: 20px;">
                <div class="card-header">
                    <h5 class="mb-0 text-center">Recharge Meter</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ action('App\Http\Controllers\MeterController@update', $meter->id) }}">
                        <input name="_method" value="PUT" hidden>
                        @csrf
                        <div class="row">

                            <div class="col">
                                <label class="form-label">recharge
                                    @if ($meter->id == 1)
                                        line 1
                                    @elseif ($meter->id == 2)
                                        line 2
                                    @elseif ($meter->id == 3)
                                        line 3
                                    @endif
                                </label>
                            </div>

                            <div class="col align-self-center">
                                <label class="form-label">Enter unit Amount</label>
                                <input class="form-control" type="text" name="unit" placeholder="Init Amount" required="">
                            </div>

                            <div class="col-auto align-self-center">
                                <button class="btn btn-primary btn-sm" type="submit">Recharge</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
