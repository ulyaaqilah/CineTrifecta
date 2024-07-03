@extends('layout.admin')

@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h1 class="card-title">Menambahkan Data Film</h1>
        <p>API ini digunakan untuk menambahkan data film ke dalam database. Permintaan harus menyertakan parameter <code>title</code>, <code>genre</code>, <code>premiere</code>, <code>runtime</code>, <code>imdb_score</code>, dan <code>language</code>. Setiap permintaan harus menyertakan token autentikasi.</p>

        <h2>Request</h2>
<nav class="w-100">
    <div class="nav nav-tabs" id="request-tab" role="tablist">
        <a class="nav-item nav-link active" id="url-tab" data-toggle="tab" href="#url" role="tab" aria-controls="url" aria-selected="true">URL</a>
        <a class="nav-item nav-link" id="param-tab" data-toggle="tab" href="#param" role="tab" aria-controls="param" aria-selected="false">Body(raw)</a>
        <a class="nav-item nav-link" id="header-tab" data-toggle="tab" href="#header" role="tab" aria-controls="header" aria-selected="false">Headers</a>
    </div>
</nav>
<div class="tab-content p-3" id="request-tabContent">
    <div class="tab-pane fade show active" id="url" role="tabpanel" aria-labelledby="url-tab">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>URL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-widget="expandable-table" aria-expanded="true">
                        <td>GET</td>
                        <td>http://localhost/endpoint/movies.php</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="tab-pane fade" id="param" role="tabpanel" aria-labelledby="param-tab">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th>Wajib</th>
                            <th>Tipe</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-widget="expandable-table" aria-expanded="true">
                            
                            <td>title</td>
                            <td>Ya</td>
                            <td>String</td>
                            <td>Judul film yang ingin dicari</td>
                        </tr>
                        <tr data-widget="expandable-table" aria-expanded="true">
                            
                            <td>genre</td>
                            <td>Ya</td>
                            <td>String</td>
                            <td>Genre film yang ingin dicari</td>
                        </tr>
                        <tr data-widget="expandable-table" aria-expanded="true">
                            
                            <td>premiere</td>
                            <td>Ya</td>
                            <td>String</td>
                            <td>Tanggal premiere film yang ingin dicari</td>
                        </tr>
                        <tr data-widget="expandable-table" aria-expanded="true">
                            
                            <td>runtime</td>
                            <td>Ya</td>
                            <td>String</td>
                            <td>Durasi film yang ingin dicari</td>
                        </tr>
                        <tr data-widget="expandable-table" aria-expanded="true">
                            
                            <td>imdb_score</td>
                            <td>Ya</td>
                            <td>String</td>
                            <td>Skor IMDB film yang ingin dicari</td>
                        </tr>
                        <tr data-widget="expandable-table" aria-expanded="true">
                            
                            <td>language</td>
                            <td>Ya</td>
                            <td>String</td>
                            <td>Bahasa film yang ingin dicari</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="header" role="tabpanel" aria-labelledby="header-tab">
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

        <div style="margin-top: 20px"></div>
    <h2>Response</h2>
    <!-- Navigation Tab 2 -->
    <nav class="w-100">
                    <div class="nav nav-tabs" id="response-tab" role="tablist">
                        <a
                            class="nav-item nav-link active"
                            id="success-tab"
                            data-toggle="tab"
                            href="#success"
                            role="tab"
                            aria-controls="success"
                            aria-selected="true"
                            >Response Sukses</a
                        >
                        <a
                            class="nav-item nav-link"
                            id="fail-tab"
                            data-toggle="tab"
                            href="#fail"
                            role="tab"
                            aria-controls="fail"
                            aria-selected="false"
                            >Response Gagal</a
                        >
                        <a
                            class="nav-item nav-link"
                            id="details-tab"
                            data-toggle="tab"
                            href="#details"
                            role="tab"
                            aria-controls="details"
                            aria-selected="false"
                            >Penjelasan Response</a
                        >
                    </div>
                </nav>
    <div class="tab-content p-3" id="response-tabContent">
        <!-- Response Sukses -->
        <div
                        class="tab-pane fade show active"
                        id="success"
                        role="tabpanel"
                        aria-labelledby="success-tab"
                    >
                        <!-- Isi dengan contoh response sukses -->
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
        "code": 200,
        "description": "Data ditemukan"
    },
    "result": [
        {
            "id_movies": 1,
            "title": "Movie Title",
            "genre": "Action",
            "language": "English",
            "rating_film": 4.5
        },
        {
            "id_movies": 2,
            "title": "Another Movie",
            "genre": "Drama",
            "language": "English",
            "rating_film": 4.2
        }
    ]
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
                <div class="line-number"></div>
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
@endsection
