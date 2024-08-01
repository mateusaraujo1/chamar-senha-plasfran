let atual = parseInt(document.getElementById('senha').innerText);

function numAnterior() 
{
    if (atual > 1) 
    {
        atual -= 1;
        document.getElementById('senha').innerHTML = atual;

        return atual;
    }
}

function numProximo() 
{
    if (atual < 99) 
    {
        atual += 1;
        document.getElementById('senha').innerHTML = atual;

        return atual;
    }
}

function chamar() {

    if (atual == 0) 
    {
        return 0;
    }
    else 
    {
        
        var chamada = document.getElementById('ultima-chamada');

        const data = new Date();
        const horas = data.getHours(); 
        const minutos = data.getMinutes();
        
        // Formata a hora e os minutos para garantir que sejam sempre de dois dígitos
        const horasFormatadas = (horas < 10 ? '0' : '') + horas;
        const minutosFormatados = (minutos < 10 ? '0' : '') + minutos;

        chamada.innerHTML = 'Última senha chamada: ' + atual + ' às ' + horasFormatadas+':'+minutosFormatados;
    }
}