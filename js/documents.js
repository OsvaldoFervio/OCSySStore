const createExcel = function(){
    let wb = XLSX.utils.book_new();
    wb.Props = {
        Title: "Estado de cuenta",
        Subject: "San Angel Oftalmologia",
        Author: "San Angel Oftalmologia",
        CreatedDate: new Date().Now()
    };

    wb.SheerNames.push("Estado de cuenta");
    //let wb = XLSX.utils.table_to_book(document.getElementById(""), {sheet: "Sheet JS"});
    let ws_data = [['','']];

    let ws_title = [['CENTRO OFTALMOLOGICO SAN ANGEL S.A. DE C.V.']];
    let ws_subtitle = [['ESTADO DE CUENTA']];

    let f = new Date().Now();
    let ws_date = [[f.toLocaleString()]];

    let ws_name_custumer = [['Nombre del Paciente:','000']];
    let ws_number = [['Nº Patente:','000']];
    let ws_unimef = [['UNIMEF:','000']];    

    let ws_headers = [['Folio','Clave', 'Concepto', 'Costo']];

    XLSX.utils.sheet_add_aoa("", ws_title, { origin: "C3:C10" });
    XLSX.utils.sheet_add_aoa("", ws_subtitle, { origin: "D3:D6" });

    XLSX.utils.sheet_add_aoa("", ws_date, { origin: "F3" });
    XLSX.utils.sheet_add_aoa("", ws_name_custumer, { origin: "G3" });
    XLSX.utils.sheet_add_aoa("", ws_number, { origin: "H3" });
    XLSX.utils.sheet_add_aoa("", ws_unimef, { origin: "I3" });

    /* fix headers */
    let ws = XLSX.utils.sheet_add_aoa(ws_data, ws_headers, { origin: "A1" });

    //let ws = XLSX.utils.aoa_to_sheet(ws_data);
    wb.Sheets["Estado de cuenta"] = ws;

    let wbout = XLSX.write(wb, { bookType: 'xlsx', type: 'binary' });
    $("#button-a").click(function(){
        saveAs(new Blob([s2ab(wbout)],{type:"application/octet-stream"}), 'Estado de cuenta.xlsx');
    });
}

const s2ab = function(s) { 
    var buf = new ArrayBuffer(s.length); //convert s to arrayBuffer
    var view = new Uint8Array(buf);  //create uint8array as viewer
    for (var i=0; i<s.length; i++) view[i] = s.charCodeAt(i) & 0xFF; //convert to octet
    return buf;    
}

