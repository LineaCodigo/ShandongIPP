

 document.addEventListener("DOMContentLoaded",function(){
    

    (async function load(){


        async function getData(url){
  
            const response = await fetch(url);
            const data = await response.json();
            return data;
    
        }
  
        async function postData(url){
    
            const response = await fetch(url, 
              {
              method: 'POST',
              body: { "Cliente_id" : "0235401" }
              }
            );
    
        }

        async function CargarAllProductos(nom = '*') {
        
            const nomcate = nom //"*"
            const url = `./api-shandong/producto/categoria/${nomcate}`
            const listaproducto = await getData(url)

            const $detacate = document.querySelector("#contecat")
            let texthtml = ``
            $detacate.innerHTML = ``

            listaproducto.forEach(element => {
                console.log(element)

                texthtml +=  `
                <div class="col s12 m3 l3">
            
                    <div class="card hoverable" style="background-color:white; padding: 10px;">
                            <div class="card-image">
                                <img src="${baseurl}/upload/img/productos/${element.CarpetaPrincipal}/${element.NombreArchivo}" target="_blank">
                            </div>
                            <div class="card-content" style="background-color:white; height:110px;">
                                <p style="color:#151515; font-size:10pt; margin-top:-14px;font-weight:600;">${element.NomProducto}</p>
                                <a class="waves-effect waves-light btn-small " href="${baseurl}/producto/${element.nomurl}" style="margin-left:150px; margin-top:4px; background-color:#b50307;color:white; ">Más info</a>
                            </div>
                    </div>

                </div>
                `

            });

            $detacate.innerHTML = texthtml;

        }

        async function CargarProductosIdCate(id) {
        
            const idcate = id 
            const url = `./api-shandong/producto/categoria/id/${idcate}`
            const listaproducto = await getData(url)

            const $detacate = document.querySelector("#contecat")
            let texthtml = ``
            $detacate.innerHTML = ``

            listaproducto.forEach(element => {
                console.log(element)

                texthtml +=  `
                <div class="col s12 m3 l3">
            
                    <div class="card hoverable" style="background-color:white; padding: 10px;">
                            <div class="card-image">
                                <img src="./upload/img/productos/${element.CarpetaPrincipal}/${element.NombreArchivo}">
                            </div>
                            <div class="card-content" style="background-color:white; height:110px;">
                                <p style="color:#151515; font-size:10pt; margin-top:-14px;font-weight:600;">${element.NomProducto}</p>
                                <a class="waves-effect waves-light btn-small " href="${baseurl}/producto/${element.nomurl}" style="margin-left:150px; margin-top:4px; background-color:#b50307;color:white; ">Más info</a>
                            </div>
                    </div>

                </div>
                `

            });

            $detacate.innerHTML = texthtml;

        }

        

        async function CargarCategoria() {
            
            const url = `./api-shandong/categoria/all`
            const listacategoria = await getData(url)

            const $cate = document.querySelector("#cbocate")
            let texthtml = `<option value="0" disabled selected>Elija la categoría que está buscando</option>`

            listacategoria.forEach(element => {
                texthtml +=  `<option value="${element.idCategorias}">${element.NomCategoria}</option>`
            });

            $cate.innerHTML = texthtml;

        }

        // Eventos //

        const $cate = document.querySelector("#cbocate")

        $cate.addEventListener( "change", function(e){

            //console.log(e.target)
            CargarProductosIdCate(e.target.value)


        })


        //---------//

        
        await CargarAllProductos();
        await CargarCategoria();

        //----------------------//


        $('select').formSelect();



    })()



 })