@extends('layouts.main')

@section('container')
    <section id="premium">
        <div class="container-fluid py-5 mt-3 px-5">
            <h2 class="text-center fw-bolder">Decision Support Systems</h2>
            <p class="text-center">Help choose the best housing for you.</p>
            <h4 class="fw-bolder">SAW - Normalisasi Alternatives</h4>
            <form action="" method="POST">
                @csrf
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>Alternative</th>
                                <th>Harga</th>
                                <th>L. Bangunan</th>
                                <th>L. Tanah</th>
                                <th>K. Tidur</th>
                                <th>K. Mandi</th>
                                <th>D. Listrik</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alternatives as $alternative)
                            <tr>
                                <td class="text-center fw-bold">{{ $alternative->alternative }}</td>
                                <td><input type="number" name="k1" value="{{ $alternative->harga }}" style="width: 200px" class="text-center" readonly></td>
                                <td><input type="number" name="k2" value="{{ $alternative->luas_bangunan }}" style="width: 200px" class="text-center" readonly></td>
                                <td><input type="number" name="k3" value="{{ $alternative->luas_tanah }}" style="width: 200px" class="text-center" readonly></td>
                                <td><input type="number" name="k4" value="{{ $alternative->kamar_tidur }}" style="width: 200px" class="text-center" readonly></td>
                                <td><input type="number" name="k5" value="{{ $alternative->kamar_mandi }}" style="width: 200px" class="text-center" readonly></td>
                                <td><input type="number" name="k6" value="{{ $alternative->daya_listrik }}" style="width: 200px" class="text-center" readonly></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </form>
            <div class="d-flex justify-content-between">
                <a href="/spk" class="btn btn-danger col-lg-3 rounded-0 fw-bold">CANCEL</a>
                <a href="/spk/saw/hasil" class="btn btn-dark col-lg-3 rounded-0 fw-bold" style="background-color: black">PERANKINGAN</a>
            </div>
            <div class="mt-5">
                <h5 class="fw-bold">Petunjuk: </h5>
                <p>Pada tahap ini anda hanya akan melihat nilai normalisasi. <br> Klik button <b>NORMALISASI</b> untuk melihat perankingan.</p>
            </div>
        </div>
    </section>
@endsection
