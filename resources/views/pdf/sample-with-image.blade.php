<!DOCTYPE html>
<html>
<head>
	<title>{{ $title }}</title>
</head>
<body>
	<p>{{ $description }}</p>

	<br>

	<p>Put your text here.</p>

	<p>Place your dynamic content here.</p>

    <br/>
	<br/>
	<br/>
    <img src="{{ public_path('image/pdf.png') }}" style="width: 20%">

	<p style="text-align: center;">{!! $footer !!}</p>
</body>
</html>