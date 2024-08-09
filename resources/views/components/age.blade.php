<!-- Age Verification Modal -->
<div class="modal fade" id="ageVerificationModal" tabindex="-1" aria-labelledby="ageVerificationModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ageVerificationModalLabel">Verificação de Idade</h5>
            </div>
            <div class="modal-body">
                Este site é destinado a maiores de 18 anos. Por favor, confirme que você tem mais de 18 anos.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="confirmAge">Sim, eu tenho mais de 18 anos</button>
            </div>
        </div>
    </div>
</div>
@section('scripts')
@parent
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var lastVisit = localStorage.getItem('lastVisit');
        var now = new Date().getTime();
        var oneDay = 24 * 60 * 60 * 1000; // 24 horas em milissegundos

        // Verifica se já passou 24 horas desde a última visita
        if (!lastVisit || (now - lastVisit > oneDay)) {
            $('#ageVerificationModal').modal('show');
        }

        document.getElementById('confirmAge').addEventListener('click', function() {
            // Salva o timestamp da última visita no localStorage
            localStorage.setItem('lastVisit', new Date().getTime());
            $('#ageVerificationModal').modal('hide');
        });
    });
</script>
@endsection
