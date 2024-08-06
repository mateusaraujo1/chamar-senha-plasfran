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