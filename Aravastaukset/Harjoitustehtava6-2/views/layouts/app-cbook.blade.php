<html>
    <head>
	<link rel="stylesheet" href="{{ asset('css/h6t2-cbook-tyyli.css') }}" type="text/css">
	<title>cbook-list.php</title>
    </head>
    <body>

<div id='container'>
  <div style="text-align: right; margin-top: 10px;padding-bottom: 10px;">
<span style="background-color: #ddd;">Cbook</span>
<em>by QaD Solutions</em>
</div>
<form action="{{ url('/') }}/customers" method="get">
    [ <a href='{{ url('/') }}/customers'>Listaa</a> ]
    [ <a href='{{ url('/') }}/customers/create'>Lisää</a> ]
    <input type="text" size=15 name="searchterm" placeholder="Nimihaku">
    
</form>

<hr>

@yield('content')

</div>

    </body>
</html>

