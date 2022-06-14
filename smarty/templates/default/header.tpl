<!DOCTYPE html>
<html lang="en">
<head>
	<base href="/doxbin.org/" />
	{if $page == 'add' || $page == 'upload'}
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/images/favicons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	{/if}

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Doxbin</title>
    
    {if !$page}<link rel="stylesheet" href="legacy/index.css">{/if}
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

	{if $page == 'add' || $page == 'upload'}
	    <link rel="stylesheet" href="legacy/app.css">
	    <link rel="manifest" href="manifest.json">
	    <link href="legacy/google-code-prettify/tomorrow-night.css" rel="stylesheet">
	    <link href="legacy/toastr/toastr.min.css" rel="stylesheet">
	    <script src="legacy/custom.modernizr.js"></script>
	{/if}

</head>

<body {if $page == 'add' || $page == 'upload'} class="bin" onload="prettyPrint()" {/if}>