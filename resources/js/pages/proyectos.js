document.addEventListener('DOMContentLoaded', () => {

    const botones = document.querySelectorAll('.filtro');
    const proyectos = document.querySelectorAll('.proyecto');
    const grid = document.getElementById('proyectosGrid');
    const sinResultados = document.getElementById('sinResultados');

    let animando = false;

    botones.forEach(boton => {

        boton.addEventListener('click', () => {

            if (animando || boton.classList.contains('active')) {
                return;
            }

            animando = true;

            botones.forEach(item => {
                item.classList.remove('active');
            });

            boton.classList.add('active');

            const filtroSeleccionado = boton.dataset.filtro;

            proyectos.forEach(proyecto => {
                proyecto.classList.add('ocultando');
            });

            setTimeout(() => {

                let proyectosVisibles = 0;
                let retraso = 0;

                proyectos.forEach(proyecto => {

                    const categoria = proyecto.dataset.categoria;

                    const debeMostrar =
                        filtroSeleccionado === 'todo' ||
                        categoria === filtroSeleccionado;

                    proyecto.classList.remove('mostrando');

                    if (debeMostrar) {

                        proyecto.style.display = 'block';
                        proyecto.classList.remove('ocultando');

                        setTimeout(() => {
                            proyecto.classList.add('mostrando');
                        }, retraso);

                        retraso += 90;
                        proyectosVisibles++;

                    } else {

                        proyecto.style.display = 'none';
                        proyecto.classList.remove('ocultando');

                    }

                });

                if (proyectosVisibles === 0) {
                    grid.classList.add('hidden');
                    sinResultados.classList.remove('hidden');
                } else {
                    grid.classList.remove('hidden');
                    sinResultados.classList.add('hidden');
                }

                if (typeof AOS !== 'undefined') {
                    setTimeout(() => {
                        AOS.refreshHard();
                    }, 150);
                }

                setTimeout(() => {
                    animando = false;
                }, retraso + 500);

            }, 350);

        });

    });

});
