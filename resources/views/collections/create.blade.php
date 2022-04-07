@extends('layouts.main')

@section('main')
    <main>
        <section class="sign_form">
            <h2>Add collection</h2>
            <form  method="POST" action="{{route('collections.store')}}" class="register-form">
                @csrf
    
                <label>
                    <input name="name" type="text" placeholder="Collection name " class="input">
                </label>
    
                <label>
                    <input name="description" type="text" placeholder="Description" class="input">
                </label>

                <button type="submit" class="primary_button">Save</button>
            </form>
        </section>
    </main>
@endsection