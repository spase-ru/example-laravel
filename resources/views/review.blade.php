@extends('layout')

@section('main_content')
<h1>Отзывы</h1>
<form action="/review/check">
<input type="email" name='email' id='email' placeholder="Enter email" class="form-control">
<input type="text" name='subject' id='subject' placeholder="Enter name feedback" class="form-control">
<textarea  name='message' id='message' placeholder="Enter message" class="form-control"></textarea>
<button type='submit' class='btn btn-success'>Send</button>


</form>
@endsection