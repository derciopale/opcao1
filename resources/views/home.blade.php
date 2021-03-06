@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">

                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Você está logado!</p>
                    
                </div> <!-- card-body -->

            </div> <!-- card -->

        </div> <!-- col-md-12 -->

    </div> <!-- row justify-content-center -->
</div> <!-- container -->
@endsection
