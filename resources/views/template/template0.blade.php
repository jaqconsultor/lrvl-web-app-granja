<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <title>Marketing - {{ $title }}</title>
				<meta name="description" content="description">
				<meta name="author" content="DevOOPS">
        <meta name="viewport" content="width=device-width, initial-scale=1">

				@component('template/asset-up')
        @endcomponent

        @yield('javascript-up')

	</head>
<body>

<div>
			@yield('site-page')
</div>

@component('template/asset-down')
@endcomponent


@yield('javascript-down')

@yield('javascript-code')

</body>

</html>
