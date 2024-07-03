@extends('layout.admin')

@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h1 class="card-title">Menambahkan Rating Film</h1>
        <p>API ini digunakan untuk menambahkan penilaian sebuah film ke dalam database. Permintaan harus menyertakan parameter <code>id_movies</code> yang merupakan ID unik dari film yang akan dinilai, serta parameter <code>rating</code> yang merupakan penilaian yang diberikan oleh pengguna terhadap film tersebut. Setiap permintaan juga harus menyertakan token autentikasi dalam header dengan nama <code>key</code> yang akan digunakan untuk verifikasi.</p>

        <h2>URL Endpoint</h2>
        <nav class="w-100">
            <div class="nav nav-tabs" id="request1-tab" role="tablist">
                <a class="nav-item nav-link active" id="request1-desc-tab" data-toggle="tab" href="#request1-desc" role="tab" aria-controls="request1-desc" aria-selected="true">URL</a>
                <a class="nav-item nav-link" id="request1-params-tab" data-toggle="tab" href="#request1-params" role="tab" aria-controls="request1-params" aria-selected="false">Body(raw)</a>
                <a class="nav-item nav-link" id="request1-headers-tab" data-toggle="tab" href="#request1-headers" role="tab" aria-controls="request1-headers" aria-selected="false">Headers</a>
            </div>
        </nav>
        <div class="tab-content p-3" id="request1-tabContent">
            <div class="tab-pane fade show active" id="request1-desc" role="tabpanel" aria-labelledby="request1-desc-tab">
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Metode</th>
                                <th>URL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-widget="expandable-table" aria-expanded="true">
                                <td>POST</td>
                                <td>http://localhost/api/add_rating.php</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="request1-params" role="tabpanel" aria-labelledby="request1-params-tab">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle">
                            <thead>
                                <tr>
                                    
                                    <th>Parameter</th>
                                    <th>Tipe</th>
                                    <th>Wajib</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-widget="expandable-table" aria-expanded="true">
                                    
                                    <td>id_movies</td>
                                    <td>Integer</td>
                                    <td>Ya</td>
                                    <td>ID unik dari film yang akan dinilai</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="true">
                                    
                                    <td>rating</td>
                                    <td>Integer</td>
                                    <td>Ya</td>
                                    <td>Penilaian yang diberikan oleh pengguna terhadap film</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="request1-headers" role="tabpanel" aria-labelledby="request1-headers-tab">
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Key</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-widget="expandable-table" aria-expanded="true">
                                <td>key</td>
                                <td>Api Key</td>
                            </tr>
                        </tbody>
                        </table>
                </div>
            </div>
        </div>

        
        
        <div class="col-md-12">
        <h4>Response</h4>
        <!-- Navigation Tab 2 -->
        <nav class="w-100">
            <div class="nav nav-tabs" id="response-tab" role="tablist">
                <a class="nav-item nav-link active" id="response-success-tab" data-toggle="tab" href="#response-success" role="tab" aria-controls="response-success" aria-selected="true">Response Sukses</a>
                <a class="nav-item nav-link" id="response-fail-tab" data-toggle="tab" href="#response-fail" role="tab" aria-controls="response-fail" aria-selected="false">Response Gagal</a>
                <a class="nav-item nav-link" id="response-details-tab" data-toggle="tab" href="#response-details" role="tab" aria-controls="response-details" aria-selected="false">Penjelasan Response</a>
            </div>
        </nav>
        <div class="tab-content p-3" id="response-tabContent">
            <!-- Response Sukses -->
            <div class="tab-pane fade active show" id="response-success" role="tabpanel" aria-labelledby="response-success-tab">
                <style>
                    .json-container {
                        position: relative;
                        background-color: #ffffff;
                        padding: 10px;
                        border-radius: 5px;
                        overflow-x: auto;
                        color: #000000;
                    }

                    .json-container pre {
                        color: #000000;
                        padding-left: 40px; /* Membuat ruang di sisi kiri untuk nomor baris */
                        white-space: pre-wrap; /* Memastikan teks dapat melintasi baris */
                    }

                    .line-number {
                        position: absolute;
                        left: 10px;
                        top: 10px;
                        color: #888888;
                        font-size: 12px;
                        line-height: 1.5;
                    }
                </style>
                <div class="json-container">
                    <div class="line-number">1</div>
                    <pre><code>
{
    "status": {
        "code": 201,
        "description": "Penilaian berhasil ditambahkan"
    },
    "result": {
            "id_movies": "1",
            "title": "Enter the Anime",
            "genre": "Documentary",
            "premiere": "43682",
            "runtime": "58",
            "imdb_score": "2.5",
            "language": "English/Japanese",
            "rating": "6.75"
        },
}
                    </code></pre>
                </div>
            </div>

            <!-- Response Gagal -->
            <div class="tab-pane fade" id="response-fail" role="tabpanel" aria-labelledby="response-fail-tab">
                <style>
                    .json-container {
                        position: relative;
                        background-color: #ffffff;
                        padding: 10px;
                        border-radius: 5px;
                        overflow-x: auto;
                        color: #000000;
                    }

                    .json-container pre {
                        color: #000000;
                        padding-left: 40px; /* Membuat ruang di sisi kiri untuk nomor baris */
                        white-space: pre-wrap; /* Memastikan teks dapat melintasi baris */
                    }

                    .line-number {
                        position: absolute;
                        left: 10px;
                        top: 10px;
                        color: #888888;
                        font-size: 12px;
                        line-height: 1.5;
                    }
                </style>
                <div class="json-container">
                    <div class="line-number">30</div>
                    <pre><code>
{
    "status": {
        "code": 401,
        "description": "Invalid API Key"
    }
}
                    </code></pre>
                </div>
            </div>

            <!-- Penjelasan Response -->
            <div class="tab-pane fade" id="response-details" role="tabpanel" aria-labelledby="response-details-tab">
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Komponen</th>
                                <th>Tipe</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-widget="expandable-table" aria-expanded="true">
                                <td>code</td>
                                <td>int</td>
                                <td>Code status response</td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="true">
                                <td>description</td>
                                <td>String</td>
                                <td>Penjelasan dari kode status</td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="true">
                                <td>result</td>
                                <td>array</td>
                                <td>Informasi film yang ditambahkan</td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="true">
                                <td>id</td>
                                <td>int</td>
                                <td>ID dari film</td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="true">
                                <td>title</td>
                                <td>String</td>
                                <td>Judul dari film</td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="true">
                                <td>genre</td>
                                <td>String</td>
                                <td>Genre dari film</td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="true">
                                <td>premiere</td>
                                <td>String</td>
                                <td>Tanggal pemutaran perdana</td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="true">
                                <td>runtime</td>
                                <td>String</td>
                                <td>Durasi film dalam menit</td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="true">
                                <td>imdb_score</td>
                                <td>float</td>
                                <td>Skor IMDb dari film</td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="true">
                                <td>language</td>
                                <td>String</td>
                                <td>Bahasa dari film</td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="true">
                                <td>created_at</td>
                                <td>String</td>
                                <td>Timestamp saat film ditambahkan</td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="true">
                                <td>updated_at</td>
                                <td>String</td>
                                <td>Timestamp saat data film terakhir diperbarui</td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>

   
            
        
    
</div>


      </div>
    </div>
  </div>
</div>
@endsection
