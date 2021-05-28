@extends('layouts.app-cbook')

@section('content')

    <h3>Add Customer</h3>

<div class="boxi">
    <form method="POST" action="../customers">

      {{ csrf_field() }}

      <div>
        <input type="text" name="name" placeholder="Customer Name">
      </div>

      <div>
        <input type="text" name="birth_date" value="1999-09-09">
      </div>

       <div>
         <button type="submit">Save</button>
       </div>

     </form>

</div>

@endsection


