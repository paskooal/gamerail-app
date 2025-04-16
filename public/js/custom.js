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
    // Pega só os números (sem letras, ponto, vírgula, etc)
    let valor = input.value.replace(/\D/g, '');

    // Limita a 7 dígitos (5 inteiros + 2 centavos)
    if (valor.length > 7) {
        valor = valor.slice(0, 7);
    }

    // Garante ao menos 3 dígitos (ex: "1" → "001")
    valor = valor.padStart(3, '0');

    // Separa em parte inteira e centavos
    let inteiro = valor.slice(0, -2);
    let centavos = valor.slice(-2);

    // Adiciona pontos nos milhares
    inteiro = inteiro.replace(/\B(?=(\d{3})+(?!\d))/g, ".");

    // Aplica no input
    input.value = `R$ ${inteiro},${centavos}`;
}
