@extends('layout.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header bg-primary text-white text-center">
                                @if (Auth::check())
                                    <h4>Selamat Datang, {{ Auth::user()->name }}!</h4>
                                    <p>Terima kasih telah bergabung dengan CineTrifecta. Kami senang Anda di sini.</p>
                                @else
                                    <h4>Anda belum login.</h4>
                                    <p>Silakan login untuk mengakses fitur-fitur keren dari CineTrifecta.</p>
                                @endif
                            </div>
                            <div class="card-body text-center">
                                @if (Auth::check() && Session::has('api_token'))
                                    <p>API Token Anda:</p>
                                    <p><strong id="api-token">{{ Session::get('api_token') }}</strong></p>
                                @else
                                    <p>API Token tidak ditemukan.</p>
                                @endif

                                @if (Auth::check())
                                    <form action="{{ route('regenerate.token') }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        <button type="submit" class="btn btn-success">Regenerate Token</button>
                                    </form>
                                    <button class="btn btn-warning" onclick="copyToken()">Salin Token</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function copyToken() {
    var tokenElement = document.getElementById('api-token');
    var token = tokenElement.innerText;
    
    var textarea = document.createElement('textarea');
    textarea.value = token;
    document.body.appendChild(textarea);
    textarea.select();
    document.execCommand('copy');
    document.body.removeChild(textarea);

    alert('API Token berhasil disalin!');
}
</script>
@endsection
