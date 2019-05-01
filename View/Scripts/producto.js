// let getUrl = window.location;
// const baseurl =  getUrl.origin + '/' +getUrl.pathname.split('/')[1]; 


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

        async function CargarProducto(urlpro) {

            try {

                const url = `${baseurl}/api-shandong/producto/${urlpro}`
                const listaproducto = await getData(url)

                const $deta = document.querySelector(".detallep")
                let texthtml = ``
                $deta.innerHTML = ``

                listaproducto.forEach(element => {
                    console.log(element)

                    document.querySelector("#imgp").setAttribute("src",`${baseurl}/upload/img/productos/${element.CarpetaPrincipal}/${element.NombreArchivo}`)

                    texthtml +=  ` 
                        
                        <div class="col s12 l12"><h4>${element.NomProducto.toUpperCase()}</h4></div>
                        <div class="col s12 l12"><h6><b>Descripción :</b></h6></div>
                        <div class="col s12 l12">
                            <p> 
                                ${element.Descripcion}
                            </p>
                        </div>
                        <div class="col s12 l12">

                            <div class="col s12 l3"><span><b>Precio :</b></span></div>    
                            <div class="col s12 l3 left-align"><span>S/ ${element.PrecioTienda}</span></div>    
                            <div class="col s12 l2"><span><b>Desc :</b></span></div>    
                            <div class="col s12 l3"><span>${element.Descuento} %</span></div>    
                                                                                
                        </div>
                        <div class="col s12 l12" style="padding-top: 15px;">
                            <a href="https://api.whatsapp.com/send?phone=51943083144&amp;text=${baseurl}/producto/${element.nomurl}%0A%0AProducto:%20${element.NomProducto.toUpperCase()}%20${element.PrecioTienda}%20Soles" class="waves-effect waves-light btn" style="background-color: #b50307;width: 81%;">Hacer pedido</a>
                        </div>    
                    `

                });

                $deta.innerHTML = texthtml;
                
            } catch (error) {
                console.log("No existe url para el producto")
            }
                     
            

        }

        async function CargarImgSecundarias(urlpro) {

            const url = `${baseurl}/api-shandong/producto/${urlpro}`
            const lista = await getData(url)
            const arregloimg = lista[0].ArchivosSecun.split(',')
            let texthtml = ``

            console.log(arregloimg)

            arregloimg.forEach(element => {
                texthtml += `
                <div class="col s4 l4">            
                    <img src="${baseurl}/upload/img/productos/${lista[0].CarpetaPrincipal}/${element}" alt="" class="responsive-img hoverable" style="border: 1px solid #afafad;cursor:pointer;"/>
                </div>
                `
            });

            document.querySelector(".imgsec").innerHTML = texthtml
            //console.log(texthtml)
            
        }        

        

        //------------------------//

        // Cargar url del producto//

        const $url = document.querySelector("#url").value        
        await CargarProducto($url);
        await CargarImgSecundarias($url)

        //----------------------//



                // Eventos //

                const listaimg = document.querySelectorAll(".imgsec img")

                listaimg.forEach( function (elemento) {                
        
                    elemento.addEventListener("click", function (e) {            
                        
                        //console.log(e.target)
                        
                        const rutaini = e.target.getAttribute('src')
                        const rutapri = document.querySelector("#imgp").getAttribute('src')                        
        
                        document.querySelector("#imgp").setAttribute('src',rutaini)
                        e.target.setAttribute('src',rutapri)
                                
                    })
        
                });




        $('select').formSelect();
        // $('.carousel').carousel();

        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true
        });

        setInterval(() => {

            $('.carousel.carousel-slider').carousel('next');            
            
        }, 3000);
              

    })()



 })