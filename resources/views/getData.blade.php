<h4>This is the Data from the database</h4>
<table border="1">
<tr>
    <td>Title</td>
    <td>Units</td>
    <td>Description</td>
    <td>Calories</td>
    <td>Weight</td>
    <td>Grams</td>
    <td>Operation</td>

</tr>
@foreach($fooders as $food)
<tr>
    <td>{{$food['title']}}</td>
    <td>{{$food['units']}}</td>
    <td>{{$food['Description']}}</td>
    <td>{{$food['Calories']}}</td>
    <td>{{$food['Weight']}}</td>
    <td>{{$food['Grams']}}</td>
    <td><a href="{{url('delete/', $food['title'])}}">Delete</a></td>
</tr>
@endforeach
</table>