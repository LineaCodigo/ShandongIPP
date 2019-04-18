let getUrl = window.location;
const baseurl =  getUrl.origin + '/' +getUrl.pathname.split('/')[1]; 


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

        async function ConsultarProductoPorNombre(nombre){            

            const sr = document.querySelector(".search-results")

            try {

                if(nombre==""){ throw "Nombre de producto está vacio" }

                const url = `${baseurl}/api-shandong/producto/nombre/${nombre}`
                const lista = await getData(url)                            
                let html = ""                

                sr.innerHTML = ""

                lista.forEach(function (elemento) {
                    html = `
                    <a style="display: block; padding: 5px 0 5px 10px; line-height: 50px; border-bottom: 1px solid #999999" href="${baseurl}/producto/${elemento.nomurl}">${elemento.NomProducto}</a>                
                    `
                    sr.innerHTML = sr.innerHTML + html
                })
                                    
            } catch (error) {
                sr.innerHTML = ""
                console.log("No se encontró producto")
            }
        }

        async function ConsultarProductosDestacados(){

            const url = `${baseurl}/api-shandong/productosdestacados`
            const lista = await getData(url) 
            
            //console.log(lista)
            const pd = document.querySelector("#divpd")

            lista.forEach(element => {
                
                html = `<div class="col m12 s12">
                            <a href="./producto/" target"_blank">
                            <i class="material-icons prefix" style="float: left;margin-left: 10px; font-size: 10px; margin-top: 5px;">brightness_1</i>
                            <div style="float: left;;margin-left: 10px;">
                            <span style="color: white;">${element.NomProducto}</span>
                            </div>                            
                            </a>                                                   
                        </div>`

                pd.innerHTML = pd.innerHTML + html        
                
            });

        }
    

        // Eventos //

        const buscador = document.querySelector(".search-txt")

        buscador.addEventListener("keyup", function(){
         
            //alert(buscador.value)
            ConsultarProductoPorNombre(buscador.value)
         
        })

        //----------------------------//



        //----------------------//


        $('select').formSelect();
        
        ConsultarProductosDestacados()



    })()



 })