<div class="panel-body">
    <form action="{{ route('register') }}" method="POST" name="companyform" role="form">
        {{ csrf_field() }}
        <h2>
            Datos de {{ $dato->business_name }}
        </h2>
        <div class="form-group" id="company-form" style="display: block;">
            <div class="form-group col-md-12">
                <label class=" control-label" for="business_name">
                    Correo Electronico
                </label>
                <span>
                    {{ $dato->user->email }}
                </span>
            </div>
        </div>
        <div class="form-group col-md-12" id="Nit">
            <label class=" control-label" for="nit">
                Nit
            </label>
            <span>
                {{ $dato->nit }}
            </span>
        </div>
        <div class="form-group" id="company-form" style="display: block;">
            <div class="form-group col-md-12">
                <label class=" control-label" for="business_name">
                    Razón Social
                </label>
                <span>
                    {{ $dato->business_name }}
                </span>
            </div>
        </div>
        <div class="form-group col-md-12" id="PC">
            <label class="control-label" for="phonec">
                Teléfono
            </label>
            <span>
                {{ $dato->user->phone }}
            </span>
            <a href="">
                editar
            </a>
        </div>
        <div class="form-group" id="company-form" style="display: block;">
            <div class="form-group col-md-12">
                <label class=" control-label" for="business_name">
                    Rol
                </label>
                <span>
                    Vendedor
                </span>
            </div>
        </div>
    </form>
</div>