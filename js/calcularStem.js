function calcular() {
    // Datos:
    const Masa_bloquehielo = 100;
    const Longitud_desplazamiento = 30;
    const Coeficiente_rozamiento = 0.1;
    const Calor_latente = 334e3;
    const Aceleracion_gravitacional = 9.8;

    // Cálculo 1: Calcular la fuerza de rozamiento
    const Fuerza_deslizamiento = Coeficiente_rozamiento * Masa_bloquehielo *Aceleracion_gravitacional;

    // Cálculo 2: Calcular el trabajo realizado por la fuerza de rozamiento
    const Fuerza_rozamiento = Fuerza_deslizamiento * Longitud_desplazamiento;

    // Cálculo 3: Relación entre el trabajo y el calor necesario para fundir el hielo
    const Hielo_fundido = (Fuerza_rozamiento / Calor_latente) * 1000;

    // Mostrar resultados:
    const resultadoDiv = document.getElementById("resultadoA");
    resultadoDiv.innerHTML = `
        <p>La cantidad de hielo que se funde es de <strong>${Hielo_fundido.toFixed(2)}</strong> gramos</p>
    `;
}