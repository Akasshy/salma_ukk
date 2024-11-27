
@extends('student')
@section('content')



    <title>Hasil Ujian</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Hasil Ujian Anda</h1>
    <table>
        <thead>
            <tr>
                <th>Tanggal Ujian</th>
                <th>Elemen Kompetensi</th>
                <th>Assessor</th>
                <th>Status</th>
                <th>Komentar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->exam_date }}</td>
                <td>{{ $student->competencyElement->criteria }}</td>
                <td>{{ $student->assessor->user->full_name }}</td>
                <td>{{ $student->status ? 'Lulus' : 'Tidak Lulus' }}</td>
                <td>{{ $student->comments ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
