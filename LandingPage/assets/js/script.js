
    document.addEventListener("DOMContentLoaded", function()  {
    document.getElementById("cep").addEventListener("blur", function () {
    let cep = document.getElementById('cep').value
    console.log(cep)
    let url = `https://viacep.com.br/ws/${cep}/json/`
    console.log(url)
    let myHeaders = new Headers();
    myHeaders.append("Access-Control-Allow-Origin", "*");

        fetch(url, {
            method: "GET",
            headers: myHeaders
        }) 
        .then(response => response.json())
        .then(data => {
            console.log(data);

            if ("erro" in data){
                alert("O CEP não foi encontrado!");
            }
            else {
                document.getElementById('estado').value = data.uf
                document.getElementById('bairro').value = data.bairro
                document.getElementById('cidade').value = data.localidade
                document.getElementById('logradouro').value = data.logradouro
            }
        
        })
    })
    
    })


 
