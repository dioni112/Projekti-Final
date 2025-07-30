<h2>Perdoruesit dhe makinat e Tyre</h2>

<table border="1" cellpadding="10">

<thead>
    <tr>
        <th>Emri</th>
        <th>Mbiemri</th>
        <th>Kontakti</th>
        <th>Marka</th>
        <th>Modeli</th>
        <th>Viti</th>
    </tr>
</thead>

<tbody>
    @foreach($users as $user)

     <td>{{$user->emri}}</td>
     <td>{{$user->mbiemri}}</td>
     <td>{{$user->kontakti}}</td>
     <td>{{$user->car->brand ?? 'N/A'}}</td>
     <td>{{$user->car->model ?? 'N/A'}}</td>
     <td>{{$user->car->year ?? 'N/A'}}</td>

    @endforeach
</tbody>

</table>