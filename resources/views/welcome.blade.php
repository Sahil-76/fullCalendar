<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Input</title>
    {{-- <style>
        body {
            font-family: Josefin Sans; 
            margin-left: 25%;
        }

        label {
            display: block;
            margin-left: 25%;
            color: white;
        }

        div {
            margin: 0 0 1rem 0;
        }

        .inputFields {
            padding-top: 2rem;
        }
    </style> --}}
</head>
<body>
    <h1>Currency </h1>
    <hr>

<div class="inputFields">
    <label for="curr">Currency</label>
    <input id="currencyInput" />
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://rawgit.com/RobinHerbots/Inputmask/5.x/dist/jquery.inputmask.js"></script>
<script>

    $("#currencyInput").inputmask({
        alias: 'currency',
        rightAlign: false,        
        autoUnmask: true    
    });
</script>

</body>
</html>
