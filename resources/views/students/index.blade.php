@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Student's List</h4>
                        <livewire:student-livewire>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create new Student</h4>
                        <livewire:student-create>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection