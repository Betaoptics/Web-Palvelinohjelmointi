@extends('layouts.app-cbook')

@section('content')

    <h3>Edit Customer</h3>


<div class="boxi">
    <form method="POST" action="{{ url('/') }}/customers/{{ $customer->id}}">

      {{ method_field('PATCH') }}
      {{ csrf_field() }}

      <div>
        <input type="text" name="name" value="{{ $customer->name }}">
      </div>

      <div>
        <input type="text" name="birth_date" value="{{ $customer->birth_date }}">
      </div>

       <div>
         <button type="submit">Save changes</button>
       </div>

     </form>
        
    <form method="POST" action="{{ url('/') }}/customers/{{ $customer->id}}">

      @method('DELETE')
      @csrf

       <div>
         <button type="submit">Delete Customer</button>
       </div>

     </form>

</div>

@endsection




