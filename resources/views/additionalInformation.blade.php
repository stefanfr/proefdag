<h4>NutritionalValue</h4>
<table class="table">
    <tr>
        <td>Energy</td>
        <td>{{$nutritional_value->energy}} kcal</td>
    </tr>
    <tr>
        <td>Fats</td>
        <td>{{$nutritional_value->fats}} g</td>
    </tr>
    <tr>
        <td>Saturated Fats</td>
        <td>{{$nutritional_value->saturated_fats}} g</td>
    </tr>
    <tr>
        <td>Carbohydrates</td>
        <td>{{$nutritional_value->carbohydrates}} g</td>
    </tr>
    <tr>
        <td>Sugar</td>
        <td>{{$nutritional_value->sugar}} g</td>
    </tr>
    <tr>
        <td>Proteins</td>
        <td>{{$nutritional_value->proteins}} g</td>
    </tr>
    <tr>
        <td>Salt</td>
        <td>{{$nutritional_value->salt}} g</td>
    </tr>
</table>
<h4>Segments</h4>
<table class="table">
    @foreach($segments_value as $value)
        <tr>
            <td>{{$value->segment}}</td>
        </tr>
    @endforeach
</table>