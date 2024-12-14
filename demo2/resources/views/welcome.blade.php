@php
    $user = "Ram Kumar";
    $fruits = ['Apple',"banana","orange","grapes"];
@endphp

<script>
    console.log("Hello")
    var data = @json($user);
    console.log(data);
    var arr = @json($fruits);
    console.log(arr);

    arr.forEach(function(entry){
        console.log(entry);
    })
</script>