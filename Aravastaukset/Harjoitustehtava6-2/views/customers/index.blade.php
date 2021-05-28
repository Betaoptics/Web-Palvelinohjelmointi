@extends('layouts.app-cbook')

@section('content')

    <h3>Customers</h3>
      <table >
        <tr><th>Name</th><th>Birth date</th></tr>
        @foreach ($customers as $customer)
          <tr>
            <td>
               <a href='customers/{{ $customer->id}}/edit'>
               {{ $customer->name }}
               </a>
             </td>
            <td>{{ $customer->birth_date }}</td>
          </tr>
        @endforeach
      </table>


@endsection




