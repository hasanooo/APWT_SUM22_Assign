<html>
<body>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        
        <th>email</th>
        
    </tr>
    @foreach($coustomers as $st)
        <tr>
            <td>{{$st->id}}</td>
            <td>{{$st->name}}</td>
            
            <td>{{$st->email}}</td>
           
            <td><a href="{{route('helloedit',['id'=>$st->id])}}">Edit</a></td>
        </tr>
        @endforeach
</table>
</body>
</html>