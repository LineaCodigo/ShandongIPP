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

    

        // Eventos //

        const buscador = document.querySelector(".search-txt")

        buscador.addEventListener("keyup", function(){
         
            //alert(buscador.value)
            ConsultarProductoPorNombre(buscador.value)
         
        })

        

        //------------------------//

        // Cargar url del producto//

       

        //----------------------//


        $('select').formSelect();



    })()



 })