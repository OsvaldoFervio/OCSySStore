function test(){
  alert('Hello World!!!');
}

function modal() {
  alert('Hello World!!!');
  var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
  myModal.show();
  //$('#exampleModal').modal('show'); // abrir

}

const CalculateTotal = (e) => {
    //const taxText = document.getElementById("tax");
    var subtotalText = document.getElementById("cost");

    //Calcular
    if (cost.value != ""){
      var subtotal = subtotalText.value.replace(/[$,]/g,'').trim();
      var tax = subtotal * 0.16;
      var total = parseFloat(subtotal) + parseFloat(tax);
      
      document.getElementById("cost").value = subtotal;
      document.getElementById("tax").value = tax;
      document.getElementById("total").value = total;

    }    
}


const ProductSelected = (e) => {
  let productId = document.getElementById("product").value;
  if (productId != 0){
    //console.log("el product es:"+productId);

    let moveUrl = "";
    let pathname = window.location.pathname;

    if(pathname.includes("EditClinicalStudy"))
      moveUrl = "../GetProductByProductId/" + productId;
    else
      moveUrl = "../Dashboard/GetProductByProductId/" + productId;

    $.ajax({
        type: 'GET',
        url: moveUrl,
        //data: JSON.stringify({ productId: productId }),
        contentType: "application/json; charset=utf-8",
        success: function (data) {
          let json = JSON.parse(data);
          
          document.getElementById("cost").value = json.Cost;
          document.getElementById("tax").value = json.Tax;
          document.getElementById("total").value = (parseFloat(json.Cost) + parseFloat(json.Tax));

            //alert('la respuesta es:'+json);
          },
        error: function (error) {
            console.log("ERROR-GetProductByProductId: \n" + error);
        }
    });
  }

}

function GetContent() {
    $.ajax({
        type: "GET",
        url: "/Home/OnIndex",
        data: "{}",
        contentType: "application/json; charset=utf-8",
        success: function (respuesta) {
            let slide = '';
            let row = 0;
            respuesta.carousel.forEach(function(img) {
                slide += '<div class="item ' + (row == 0 ? "active" : "") + '">';
                slide += '<img src="' + img.Url + '" style="width:100%;">';
                slide += '<div class="carousel-caption">';
                //slide += '<h3>Los Angeles</h3>';
                //slide += '<p>LA is always so much fun!</p>';
                slide += '</div>';
                slide += '</div>';
                row++;
            });
            document.getElementById("wrapper-slides").innerHTML = slide;

            let index = 0;
            respuesta.promocion.forEach(function (img) {
                if (index == 0)
                    document.getElementById("cvepromo01").src = img.Url;
                else
                    document.getElementById("cvepromo02").src = img.Url;

                index++;
            });
        },
        error: function (error) {
            console.log("ERROR-GetContent: \n" + error);
        }
    });
}