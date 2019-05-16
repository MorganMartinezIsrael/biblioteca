@extends('layouts.app')
@section('content')
<html>
    <head>
        <title>Registrar Libro</title>
    </head>

    <body>
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">{{ __('Register Book') }}</h2>
                    <form method="POST" action="registrar_libro">

                        <div class="form-group">
                            <label for="book-title"><i class="zmdi zmdi-book zmdi-hc-fw"></i></label>
                            <input id="book-title" type="text" class="form-inline" name="book-title" value="{{ old('book-title') }}" placeholder="{{ __('Book Title') }}" required autofocus>

                        </div>

                        <div class="form-group">
                            <label for="book-author"><i class="zmdi zmdi-account zmdi-hc-fw"></i></label>
                            <input id="book-author" type="text" class="form-inline" name="book-author" value="{{ old('book-author') }}" placeholder="{{ __('Author') }}" required>

                        </div>

                        <div class="form-group">

                                <select name="book-category" id="book_category" class="custom-select">
                                    <option disabled>{{__('Choose a category')}}</option>
                                    <option value="{{__('Romance')}}">{{__('Romance')}}</option>
                                    <option value="{{__('Terror')}}">{{__('Terror')}}</option>
                                    <option value="{{__('Drama')}}">{{__('Drama')}}</option>
                                    <option value="{{__('Mystery')}}">{{__('Mystery')}}</option>
                                    <option value="{{__('Science')}}">{{__('Science')}}</option>
                                    <option value="{{__('Culture')}}">{{__('Culture')}}</option>
                                    <option value="{{__('Economics')}}">{{__('Economics')}}</option>
                                </select>

                        </div>

                        <div class="form-group">
                            <label for="book-editorial"><i class="zmdi zmdi-bookmark"></i></label>
                            <input id="book-editorial" type="text" class="form-inline" name="book-editorial" value="{{old("book-editorial")}}" placeholder="{{ __('Editorial') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="book-pages"><i class="zmdi zmdi-format-list-numbered zmdi-hc-fw"></i></label>
                            <input type="number" id="book-pages" name="book-pages" value="{{old("book-pages")}}" placeholder="{{__('Number Pages')}}" min="1">
                        </div>

                        <div class="form-group form-button">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="images/libros.png" ></figure>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection