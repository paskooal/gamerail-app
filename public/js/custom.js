function showDropD() {
    let dropD = document.querySelector('.dropD');
    let dropDbutton = document.querySelector('.dropDbutton');
    if (dropD.classList.contains('hidden')) {
        dropD.classList.remove('hidden');
        dropDbutton.classList.remove('bx-chevron-down');
        dropDbutton.classList.add('bx-chevron-up');
    } else {
        dropD.classList.add('hidden');
        dropD.classList.remove('flex');
        dropDbutton.classList.add('bx-chevron-down');
        dropDbutton.classList.remove('bx-chevron-up');
    }
}

function formatarValor(input) {
    // Pega só os números
    let valor = input.value.replace(/\D/g, '');

    // Limita a 7 dígitos (5 inteiros + 2 centavos)
    valor = valor.slice(0, 7);

    // Se ainda não digitou nada, limpa
    if (valor.length === 0) {
        input.value = '';
        return;
    }

    // Preenche com zeros à esquerda se tiver menos de 3 dígitos
    valor = valor.padStart(3, '0');

    // Separa os centavos
    let centavos = valor.slice(-2);
    let inteiro = valor.slice(0, -2);

    // Adiciona pontos nos milhares
    inteiro = inteiro.replace(/\B(?=(\d{3})+(?!\d))/g, ".");

    input.value = `R$ ${inteiro},${centavos}`;
}
if (valor.length === 0) {
    input.value = 'R$ 0,00';
    return;
}