<?php
foreach ($data as $data) {
    echo "<tr>";
    echo "    <th>{{$data->id}}</th>";
    echo "    <th>{{$data->name}}</th>";
    echo "    <th>{{$data->email}}</th>";
    echo "    <th>{{$data->password}}</th>";
    echo "</tr>";
}
