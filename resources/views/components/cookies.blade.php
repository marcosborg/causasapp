<!-- Cookie Banner -->
<div class="alert alert-info alert-dismissible fade show text-center" role="alert" id="cookieConsentBanner" style="display: none; position: fixed;bottom: 0;width: 100%;">
    <span>Utilizamos cookies para garantir uma melhor experiência de utilização da plataforma. <a href="/cms/7/aviso-de-cookies">Saber mais</a>.</span>
    <button type="button" class="btn btn-primary btn-sm ml-3" id="acceptCookies">Aceitar</button>
</div>

@section('scripts')
@parent
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Verificar se o usuário já aceitou cookies
    var cookieConsent = localStorage.getItem('cookieConsent');
    var cookie = document.cookie.split('; ').find(row => row.startsWith('cookie_consent='));

    if (!cookieConsent && !cookie) {
        document.getElementById('cookieConsentBanner').style.display = 'block';
    }

    // Gerenciar o clique no botão de aceitar cookies
    document.getElementById('acceptCookies').addEventListener('click', function() {
        localStorage.setItem('cookieConsent', true);
        document.cookie = "cookie_consent=accepted; path=/; max-age=" + (60 * 60 * 24 * 365 * 10); // 10 anos de validade
        document.getElementById('cookieConsentBanner').style.display = 'none';
    });
});
</script>
@endsection