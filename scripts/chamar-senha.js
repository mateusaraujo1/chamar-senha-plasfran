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
        const dataAtual = new Date();
        var chamada = document.getElementById('ultima-chamada');

        chamada.innerHTML = 'Última senha chamada: ' + atual + ' às ' + dataAtual.getHours()+':'+dataAtual.getMinutes();
    }
}