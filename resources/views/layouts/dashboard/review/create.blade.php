@extends('layouts.dashboard.master')
@push('css')
@endpush
@includeIf('layouts.dashboard.partials.css')
@section('title', 'Create Review')
@section('content')
    @component('components.breadcrumb')
        @slot('bredcrumb_title')
            Home
        @endslot
        <li class="breadcrumb-item">Review</li>
        <li class="breadcrumb-item">Create</li>
    @endcomponent
    <div class="container w-50">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('review.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="d-flex row mb-4">
                                <div class="col-sm-4">
                                    <x-input-label class="form-label" for="name" :value="__('Name')" />
                                    <x-text-input class="form-control" id="name" type="text"
                                        placeholder="Enter your name here..." required="" name="name" />
                                </div>
                                <div class="col-sm-4">
                                    <x-input-label class="form-label" for="image" :value="__('Signature')" />
                                    <x-text-input class="form-control" id="image" type="file" required=""
                                        name="image" />
                                </div>
                                <div class="col-sm-4">
                                    <x-input-label class="form-label" for="type" :value="__('Type')" />
                                    <span class="text-danger">(*)</span>
                                    <select class="form-control btn btn-orange" id="type" name="type" required>
                                        <option class="select-placeholder" value="" disabled selected>Select
                                            Type</option>
                                        <option value="customer">Customers</option>
                                        <option value="partner">Partner Companies</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <x-input-label class="form-label" for="comment" :value="__('Comment')" />
                                    <textarea class="form-control" id="comment" name="comment" required=""></textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <x-input-label class="form-label" for="rating" :value="__('Rating')" />
                                    <div id="half-stars">
                                        <div class="rating-group">
                                            <input class="rating__input rating__input--none" checked name="rating"
                                                id="rating-0" value="0" type="radio">
                                            <label aria-label="0 stars" class="rating__label" for="rating-0">&nbsp;</label>
                                            <label aria-label="0.5 stars" class="rating__label rating__label--half"
                                                for="rating-05"><i
                                                    class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                            <input class="rating__input" name="rating" id="rating-05" value="0.5"
                                                type="radio">
                                            <label aria-label="1 star" class="rating__label" for="rating-10"><i
                                                    class="rating__icon rating__icon--star fa fa-star"></i></label>
                                            <input class="rating__input" name="rating" id="rating-10" value="1"
                                                type="radio">
                                            <label aria-label="1.5 stars" class="rating__label rating__label--half"
                                                for="rating-15"><i
                                                    class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                            <input class="rating__input" name="rating" id="rating-15" value="1.5"
                                                type="radio">
                                            <label aria-label="2 stars" class="rating__label" for="rating-20"><i
                                                    class="rating__icon rating__icon--star fa fa-star"></i></label>
                                            <input class="rating__input" name="rating" id="rating-20" value="2"
                                                type="radio">
                                            <label aria-label="2.5 stars" class="rating__label rating__label--half"
                                                for="rating-25"><i
                                                    class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                            <input class="rating__input" name="rating" id="rating-25" value="2.5"
                                                type="radio" checked>
                                            <label aria-label="3 stars" class="rating__label" for="rating-30"><i
                                                    class="rating__icon rating__icon--star fa fa-star"></i></label>
                                            <input class="rating__input" name="rating" id="rating-30" value="3"
                                                type="radio">
                                            <label aria-label="3.5 stars" class="rating__label rating__label--half"
                                                for="rating-35"><i
                                                    class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                            <input class="rating__input" name="rating" id="rating-35" value="3.5"
                                                type="radio">
                                            <label aria-label="4 stars" class="rating__label" for="rating-40"><i
                                                    class="rating__icon rating__icon--star fa fa-star"></i></label>
                                            <input class="rating__input" name="rating" id="rating-40" value="4"
                                                type="radio">
                                            <label aria-label="4.5 stars" class="rating__label rating__label--half"
                                                for="rating-45"><i
                                                    class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                            <input class="rating__input" name="rating" id="rating-45" value="4.5"
                                                type="radio">
                                            <label aria-label="5 stars" class="rating__label" for="rating-50"><i
                                                    class="rating__icon rating__icon--star fa fa-star"></i></label>
                                            <input class="rating__input" name="rating" id="rating-50" value="5"
                                                type="radio">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col">
                                    <x-primary-button href="#" class="btn btn-primary">Save</x-primary-button>
                                    <x-secondary-button href="#" class="btn btn-secondary">Cancel
                                    </x-secondary-button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        //FroalaEditor
        var editor = new FroalaEditor('#comment', {
            pluginsEnable: ['insertUnorderedList', 'fullscreen', 'bold', 'italic', 'underline', 'strikeThrough',
                'subscript', 'superscript', 'fontFamily', 'fontSize', 'color', 'align', 'outdent', 'indent',
                'quote', 'insertLink',
                'insertImage', 'insertTable', 'insertHR', 'undo', 'redo'
            ],
            height: '100px',
        });
    </script>
@endpush
