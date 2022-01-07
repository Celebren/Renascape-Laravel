@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dice Roller</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        <button type="button" onclick="roll('d20')">d20</button>
                        <p id="d20Result" style="display: inline;">0</p>
                    </div>
                    <br>
                    <div>
                        <button type="button" onclick="roll('d12')">d12</button>
                        <p id="d12Result" style="display: inline;">0</p>
                    </div>
                    <br>
                    <div>
                        <button type="button" onclick="roll('d10')">d10</button>
                        <p id="d10Result" style="display: inline;">0</p>
                    </div>
                    <br>
                    <div>
                        <button type="button" onclick="roll('d8')">d8</button>
                        <p id="d8Result" style="display: inline;">0</p>
                    </div>
                    <br>
                    <div>
                        <button type="button" onclick="roll('d6')">d6</button>
                        <p id="d6Result" style="display: inline;">0</p>
                    </div>
                    <br>
                    <div>
                        <button type="button" onclick="roll('d4')">d4</button>
                        <p id="d4Result" style="display: inline;">0</p>
                    </div>
                    <br>
                    <div>
                        <button type="button" onclick="roll('d100')">d100</button>
                        <p id="d100Result" style="display: inline;">0</p>
                    </div>
                    <br>
                    <!-- {{ __('You are logged in!') }} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
