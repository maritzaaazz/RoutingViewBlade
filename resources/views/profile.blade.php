@extends('layout')

@section('title', 'Halaman About')

@section('content')
    <table>
        <tr>
            <th>Data 1</th>
            <th>Data 2</th>
            <th>Data 3</th>
            <th>Data 4</th>
            <th>Data 5</th>
            <th>Data 6</th>
        </tr>
        <tr>
            <td>
                <h4>{{ $name }}</h4>
                <p>Email: {{ $email }}</p>
                <p>Address: {{ $address }}</p>
                <p>No: {{ $no }}</p>
            </td>
            <td>
                <h4>{{ $name2 }}</h4>
                <p>Email: {{ $email2 }}</p>
                <p>Address: {{ $address2 }}</p>
                <p>No: {{ $no2 }}</p>
            </td>
            <td>
                <h4>{{ $name3 }}</h4>
                <p>Email: {{ $email3 }}</p>
                <p>Address: {{ $address3 }}</p>
                <p>No: {{ $no3 }}</p>
            </td>
            <td>
                <h4>{{ $name4 }}</h4>
                <p>Email: {{ $email4 }}</p>
                <p>Address: {{ $address4 }}</p>
                <p>No: {{ $no4 }}</p>
            </td>
            <td>
                <h4>{{ $name5 }}</h4>
                <p>Email: {{ $email5 }}</p>
                <p>Address: {{ $address5 }}</p>
                <p>No: {{ $no5 }}</p>
            </td>
            <td>
                <h4>{{ $name6 }}</h4>
                <p>Email: {{ $email6 }}</p>
                <p>Address: {{ $address6 }}</p>
                <p>No: {{ $no6 }}</p>
            </td>
        </tr>
    </table>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae, facilis ut mollitia a possimus saepe. Quidem debitis minima illo, saepe fugiat culpa qui aliquam sapiente? Dolore, aut quod! Quos, odio.</p>
    <p><a href="#">Ikuti tautan ini</a></p>
@endsection
