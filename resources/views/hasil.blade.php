@foreach ($results as $result)
    <!-- Tampilkan data hasil -->
    <p>{{ $result->penjual }}</p>
    <p>{{ $result->alamat }}</p>
    <p>{{ $result->jamBuka }}</p>
    <p>{{ $result->jamTutup }}</p>
@endforeach
