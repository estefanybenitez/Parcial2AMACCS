@extends('Layout.app')

@section('content')
<h1 class="text-center">Gesti&oacute;n de facturas</h1>

<hr>

<div class="container">
    <form method="POST">
        <h2>Informaci&oacute;n del cliente</h2>
        <div class="form-group">
            <label for="nombre">Nombre del cliente:</label>
            <input type="text" class="form-control" name="nombre" id="nombre" required>
        </div>

        <div class="form-group">
            <label for="dui">DUI de cliente</label>
            <input type="text" class="form-control" name="dui" id="dui" required>
        </div>

        <div class="form-group">
            <label for="consumidorFinal">Consumidor Final:</label>
            <select class="form-control" name="consumidorFinal" id="consumidorFinal">
                <option value="si">Sí</option>
                <option value="no">No</option>
            </select>
        </div>

        <h2>Detalles de la factura</h2>
        <div class="form-group">
                <label for="numFactura">N&uacute;mero de factura:</label>
                <input type="text" class="form-control" name="numFactura" id="numFactura" required>
        </div>

        <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" name="fecha" id="fecha" required>
        </div>

        <h2>Detalles de Cr&eacute;dito Fiscal</h2>
        <div class="form-group">
                <label for="creditoFiscal">Cr&eacute;dito Fiscal:</label>
                <input type="number" class="form-control" name="creditoFiscal" id="creditoFiscal" required>
        </div>

        <div class="form-group">
            <label for="retencionIVA">Retenci&oacute;n de IVA:</label>
            <input type="number" class="form-control" name="retencionIVA" id="retencionIVA">
        </div>

        <h2>Observaciones</h2>
        <div class="form-group">
            <label for="observaciones">Observaciones:</label>
            <textarea class="form-control" name="observaciones" id="observaciones" rows="4"></textarea>
        </div>

        <h2>Adjuntar archivo de factura (opcional)</h2>
        <div class="form-group">
            <input type="file" class="form-control-file" name="archivo_factura" id="archivo_factura">
        </div>
    <br>
        <button type="submit" class="btn btn-primary">Guardar Factura</button>
    <br><br>

@endsection