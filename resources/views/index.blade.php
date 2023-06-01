<!DOCTYPE html>
<html>
<body>

<!-- test -->
@foreach ($siswas as $siswa)
<ol>
    <li>NIS : {{$siswa['nis']}}</li>
    <li>Nama : {{$siswa['nama']}}</li>
    <li>Rombel : {{$siswa['rombel']}}</li>
</ol>
@endforeach


</body>
</html>