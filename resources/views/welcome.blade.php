<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    @php
         $str = "hello hello";
        $fruits = ["apple","mango","orange","banana"];
        $myself = (object) [
            "name" => "hein htet zan",
            "age" => 28,
            "job" => "developer"
        ];
    @endphp

    {{-- {{ $str }} --}}
    {{-- {{ dd($fruits) }} --}}

    <ul>
        @foreach ($fruits as $fruit)
            <li>{{ $fruit }}</li>
        @endforeach
    </ul>

    {{ "<h1>Hello I'm h1</h1> " }}
    <br>
{!! "<h1>alert('hello min ga lar par')</h1>" !!}

    <script>
        console.log("{{ $str }}")

        const fruits = @json($fruits);
        console.log(fruits);

        const myself = @json($fruits);
        console.log(myself);
    </script>
</body>
</html>
