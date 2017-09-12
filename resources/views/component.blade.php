<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Testing Component</title>
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
@component('alert')

@slot('class')
alert-danger
@endslot

@slot('title')
Something is wrong
@endslot

My components with errors
@endcomponent

        <!-- Alert with success -->
@component('alert')

@slot('class')
alert-success
@endslot

@slot('title')
Success
@endslot

My components with successful response
@endcomponent
</body>
</html>