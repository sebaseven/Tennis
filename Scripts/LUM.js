﻿// Funciones
function jsSoloNumeros(e) {
    var keynum = window.event ? window.event.keyCode : e.which;
    if ((keynum == 8) || (keynum == 46))
        return true;
    return /\d/.test(String.fromCharCode(keynum));
}
function jsSoloNumerosSinPuntos(e) {
    var keynum = window.event ? window.event.keyCode : e.which;
    if (keynum == 8)
        return true;
    return /\d/.test(String.fromCharCode(keynum));
}
function jsNoEscribir(e) {
    e.preventDefault();
}
function Right(str, n) {
    if (n <= 0)
        return "";
    else if (n > String(str).length)
        return str;
    else {
        var iLen = String(str).length;
        return String(str).substring(iLen, iLen - n);
    }
}
function Left(str, n) {
    if (n <= 0)
        return "";
    else if (n > String(str).length)
        return str;
    else {
        return String(str).substring(0, n);
    }
}
function limpiarTextos() {
    $('input[type=text]').val('');
};
function limpiarCheckBoxs() {
    $('input[type=checkbox]').attr('checked', false);
};
if (!String.format) {
    String.format = function (format) {
        var args = Array.prototype.slice.call(arguments, 1);
        return format.replace(/{(\d+)}/g, function (match, number) {
            return typeof args[number] !== 'undefined'
                ? args[number]
                : match
                ;
        });
    };
}
function spinner() {
    var clases = ["spinner-loader", "throbber-loader", "refreshing-loader", "heartbeat-loader", "gauge-loader",
        "three-quarters-loader", "wobblebar-loader", "whirly-loader", "flower-loader", "dots-loader",
        "circles-loader", "plus-loader", "ball-loader", "hexdots-loader", "inner-circles-loader", "pong-loader",
        "pulse-loader", "spinning-pixels-loader"];
    var clase = clases[Math.floor(Math.random() * 17) + 1];
    $.blockUI({
        css: {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff'
        },
        baseZ: 3000,
        message: '<div class="' + clase + '" style="z-index: 200000"> </div><br/><br/><br/><h3>Espere un momento</h3>'
    });
}
function spinnerClose() {
    $.unblockUI();
}
function CantCaracteresRestantes(CantTotal, Texto) {
    return valor = CantTotal - Texto.length;
}

// Validaciones
function validarTelefono(nroIngresado1, nroIngresado2, nroIngresado3) {
    var result = true;
    if (nroIngresado1.length == 0 && nroIngresado1.length == 0 && nroIngresado3.length == 0) {
        result = false;
        alertAlerta('Ingrese un nro. de Teléfono Completo (DDN/Área/Número)');
    } else {
        if (nroIngresado1.length == 0) {
            result = false;
            alertAlerta('Ingrese el DDN del nro. de Teléfono');
        } else {
            if (nroIngresado2.length == 0) {
                result = false;
                alertAlerta('Ingrese el Área del nro. de Teléfono');
            } else {
                if (nroIngresado3.length == 0) {
                    result = false;
                    alertAlerta('Ingrese el número del nro. de Teléfono');
                }
            }
        }
    }
    return result;
}
function validarVacio(busqueda) {
    var result = true;
    if (busqueda.length == 0) {
        result = false;
    }
    return result;
}
function validarCantidadCaracteres(busqueda, cantidad_caracteres) {
    var result = true;
    if (busqueda.length < cantidad_caracteres) {
        result = false;
    }
    return result;
}
function LimpiarDiv(div) {
    $('#' + div + '').html('');
}
async function validarEmail(email) {
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var result = true;
    if (!filter.test(email)) {
        result = false;
    }
    return result;
}
async function BuscarTextoXCantCaracteres(Caracteres, TextoBuscado, ListaTodo, Lista) {
    let ListaResultado = [];
    if (TextoBuscado.length >= Caracteres) {
        let Resultado = $.grep(Lista, function (element, index) {
            return element.Nombre.toLowerCase().indexOf(TextoBuscado.toLowerCase()) != -1;
        });
        ListaResultado = Resultado;
    } else {
        ListaResultado = ListaTodo;
    }
    return ListaResultado;
};

// Alertas
function alertOk(mensaje) {
    Swal.fire("", mensaje.toString(), "success");
}
function alertInfo(mensaje) {
    Swal.fire("", mensaje.toString(), "info");
}
function alertAlerta(mensaje) {
    Swal.fire("", mensaje.toString(), "warning");
}
function alertError(mensaje) {
    Swal.fire("", mensaje.toString(), "error");
}
function alertConfirmarEliminarLinea(codNomenclador, descripcion) {
    Swal.fire({
        title: "Confirma que desea eliminar la línea?",
        text: codNomenclador + " " + descripcion,
        type: "warning",
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Si, eliminar línea!",
        closeOnConfirm: true
    },
        function (isConfirm) {
            if (isConfirm) {
                Practica.EliminarLinea(codNomenclador);
            }
        });
}
function PopUpConfirmarSinCancelar(tipoAlerta, objeto, titulo, texto, evento, strBtnSi, strBtnNo, colorBtnSi, colorBtnNo) {
    let event = new CustomEvent(evento, { detail: objeto });
    if (strBtnNo == '') {
        strBtnNo = 'Cancelar';
    }
    if (colorBtnNo == '') {
        colorBtnNo = "#DD6B55";
    }
    if (colorBtnSi == '') {
        colorBtnSi = '#1ACB4D';
    }
    Swal.fire({
        title: titulo,
        text: texto,
        type: tipoAlerta,
        showCancelButton: false,
        cancelButtonColor: colorBtnNo,
        cancelButtonText: strBtnNo,
        confirmButtonColor: colorBtnSi,
        confirmButtonText: strBtnSi
    }).then((result) => {
        if (result.value) {
            document.dispatchEvent(event);
        }
    })
}
function PopUpConfirmarConCancelar(tipoAlerta, objeto, titulo, texto, evento, strBtnSi, strBtnNo, colorBtnSi, colorBtnNo) {
    let event = new CustomEvent(evento, { detail: objeto });
    if (strBtnNo == '') {
        strBtnNo = 'Cancelar';
    }
    if (colorBtnNo == '') {
        colorBtnNo = "#DD6B55";
    }
    if (colorBtnSi == '') {
        colorBtnSi = '#1ACB4D';
    }
    Swal.fire({
        title: titulo,
        text: texto,
        type: tipoAlerta,
        showCancelButton: true,
        cancelButtonColor: colorBtnNo,
        cancelButtonText: strBtnNo,
        confirmButtonColor: colorBtnSi,
        confirmButtonText: strBtnSi
    }).then((result) => {
        if (result.value) {
            document.dispatchEvent(event);
        }
    })
}

// Fechas
function fechaHoy() {
    let fecha = new Date();
    fecha.setDate(fecha.getDate());
    let hoy = Right("00" + fecha.getDate(), 2) + '/' + Right("00" + (fecha.getMonth() + 1), 2) + '/' + fecha.getFullYear();
    return hoy;
}
function FechaHoyLng() {
    let FechaHoy = new Date()
    let result = FechaHoy.getFullYear() + '' + Right('00' + FechaHoy.getMonth(), 2) + '' + Right('00' + FechaHoy.getDay(), 2)
    return result;
}
//function Date_LongToDate(lng) {
//    console.log(lng);
//    let fecha = '';
//    if (lng != '') {
//        if (lng > 0) {
//            let str = lng.toString();
//            if (str.length === 8) {
//                let ano = (str.substring(0, 4));
//                let mes = (str.substring(4, 6));
//                let dia = (str.substring(6));
//                fecha = ano + '/' + Right('00' + mes, 2) + '/' + Right('00' + dia, 2);
//            }
//        }
//    }
//    return new Date();
//}
function Date_LongToDate(lng) {
    let fecha = null;
    if (lng != '') {
        if (lng > 0) {
            let str = lng.toString();
            if (str.length === 8) {
                let ano = (str.substring(0, 4));
                let mes = (str.substring(4, 6));
                let dia = (str.substring(6));
                fecha = ano + '/' + Right('00' + mes, 2) + '/' + Right('00' + dia, 2);
            }
            console.log(fecha);
        }
    }
    return fecha;
}
//  _ObjSolicitudAfiliacion.FechaNacimiento = '2019/11/30'; //Pasa pero no se lleva el dato
function LongToDateString(lng) {
    let fecha = '';
    if (lng != '') {
        let str = lng.toString();
        if (str.length === 8) {
            let dia = str.substring(6);
            let mes = str.substring(4, 6);
            let anio = str.substring(0, 4);
            fecha = dia + "/" + mes + "/" + anio;
        }
    }
    return fecha;
}
function LongToHourString(lng) {
    let hora = '';
    let str = lng.toString();
    if (str.length === 4) {
        let horas = str.substring(0, 2);
        let minutos = str.substring(2);
        hora = horas + ":" + minutos;
    }
    return hora;
}
function dateStringToLong(str) {
    let fecha = 0;
    if (str.length === 10) {
        let anio = parseInt(str.substring(6, 10));
        let mes = parseInt(str.substring(3, 5));
        let dia = parseInt(str.substring(0, 2));
        fecha = anio * 10000 + mes * 100 + dia;
    }
    return fecha;
}
function dateToLong(fecha) {
    return fecha.substr(6, 4) + '' + fecha.substr(3, 2) + '' + fecha.substr(0, 2);
}
function Date_LongToString(Lng) {
    let result = '';
    if (Lng > 0) {
        result = Right(Lng, 2) + "/" + Left(Right(Lng, 4), 2) + "/" + Left(Lng, 4);
    }
    return result;
}

// Sesion
function GrabarValorEnSesion(clave, valor) {
    Storage.prototype.setObject = function (clave, valor) {
        this.setItem(clave, JSON.stringify(valor));
    }
}
function ObtenerValorEnSesion(clave) {
    Storage.prototype.getObject = function (clave) {
        return JSON.parse(this.getItem(clave));
    }
}

// Ordenar
function SortXNombre(a, b) {
    var aNombre = a.Nombre.toLowerCase();
    var bNombre = b.Nombre.toLowerCase();
    return ((aNombre < bNombre) ? -1 : ((aNombre > bNombre) ? 1 : 0));
}
function OrdenarLista(a, b) {
    if (a.IdOrdenEnLista < b.IdOrdenEnLista) {
        return -1;
    }
    if (a.IdOrdenEnLista > b.IdOrdenEnLista) {
        return 1;
    }
    return 0;
}

// Validaciones
function TraerPeriodosActualMenos(cantMeses, desde) {
    // El desde debe ser aaaamm
    var result = new Array();
    var fecha = new Date();
    var ano = fecha.getFullYear();
    var mes = fecha.getMonth() + 1;
    var anoMes = '';
    if (desde == 0) {
        for (ind = 0; ind < cantMeses; ind++) {
            anoMes = ano + '' + Right("00" + mes, 2);
            result.push(anoMes);
            mes -= 1;
            if (mes == 0) {
                ano -= 1;
                mes = 12;
            }
        }
    }
    return result;
}
function lum_TraerProvincias() {
    var wsTransfer;
    var data = {
    };
    $.ajax({
        url: "../WebServices/wsLUM.asmx/TraerProvincias",
        dataType: "json",
        type: "POST",
        data: JSON.stringify(data),
        async: false,
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            wsTransfer = data.d;
            if (wsTransfer.todoOk == true) {
            }
            else {
                alertAlerta(wsTransfer.mensaje);
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {

            alertAlerta(thrownError);
        }
    });
    return wsTransfer.data;
}
// Para hacer
function LUM_ArmarPOP(div) {
}

