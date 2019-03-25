<div class="panel-body">
    <form action="{{ route('register') }}" method="POST" name="companyform" role="form">
        {{ csrf_field() }}
        <h2>
            Datos de {{ $dato->name }}
        </h2>
        <div class="form-group" id="company-form">
            <div class="form-group col-md-12">
                <label class=" control-label" for="business_name">
                    Correo Electronico
                </label>
                <span>
                    {{ $dato->user->email }}
                </span>
            </div>
        </div>
        <div class="form-group{{ $errors->has('nit') ? ' has-error' : '' }} col-md-12" id="Nit">
            <label class=" control-label" for="nit">
                Cédula
            </label>
            <span>
                {{ $dato->identification }}
            </span>
        </div>
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-md-12">
            <label class=" control-label" for="business_name">
                Nombres
            </label>
            <span>
                {{ $dato->name }}
            </span>
            <a data-target="#EditarNombre" data-toggle="modal">
                editar
            </a>
        </div>
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-md-12">
            <label class=" control-label" for="business_name">
                Apellidos
            </label>
            <span>
                {{ $dato->lastname }}
            </span>
            <a href="">
                editar
            </a>
        </div>
        <div class="form-group{{ $errors->has('phonec') ? ' has-error' : '' }} col-md-12" id="PC">
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
        <div class="form-group{{ $errors->has('phonec') ? ' has-error' : '' }} col-md-12" id="PC">
            <label class="control-label" for="phonec">
                Rol
            </label>
            <span>
                Vendedor
            </span>
            <a href="">
                editar
            </a>
        </div>
    </form>
    <div class="modal" id="EditarNombre" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Modal title
                    </h5>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('updatenamep') }}" method="POST" role="form">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-md-12">
                            <label class=" control-label" for="business_name">
                                Nombre
                            </label>
                            <input id="NewName" name="NewName" required="required" type="text" value="{{ $dato->name }}">
                            </input>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">
                                Save changes
                            </button>
                            <button class="btn btn-secondary" data-dismiss="modal" type="button">
                                Close
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
