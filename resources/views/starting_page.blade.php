@extends('layouts.app')

@section('page_title', 'Start this project')
@section('page_description')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Starting Page</div>

                <div class="card-body">
                    Laravel and its other first-party packages follow Semantic Versioning. Major framework releases are released every six months (~February and ~August), while minor and patch releases may be released as often as every week. Minor and patch releases should never contain breaking changes.

                    When referencing the Laravel framework or its components from your application or package, you should always use a version constraint such as ^7.0, since major releases of Laravel do include breaking changes. However, we strive to always ensure you may update to a new major release in one day or less.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection