console.log("Cards Cargado");

const dataCards = [
    {
        title: "Masajes Profesionales",
        url_image: "img/imagen1.png",
        desc: "Alivio de tensiones generales y musculares",
        subItems: [
            { name: "Relajante", desc: "Alivio de tensiones generales" },
            { name: "Descontracturante", desc: "Enfoque en zonas musculares específicas" },
            { name: "Deportivo", desc: "Preparación y recuperación muscular" },
            { name: "Reductivo", desc: "Moldeamiento corporal" }
        ]
    },
    {
        title: "Masajes Holísticos",
        url_image: "img/imagen2.png",
        desc: "Equilibrio corporal y mental",
        subItems: [
            { name: "Bambuterapia", desc: "Masaje con cañas de bambú" },
            { name: "Pindaterapia", desc: "Terapia con packs herbales" },
            { name: "Esferoterapia", desc: "Uso de esferas para liberación muscular" },
            { name: "Piedras Calientes", desc: "Terapia térmica profunda" },
            { name: "Crioterapia", desc: "Terapia de frío para inflamación" }
        ]
    },
    {
        title: "Tratamientos Faciales",
        url_image: "img/imagen3.png",
        desc: "Cuidado intensivo y limpieza facial",
        subItems: [
            { name: "Hidratante", desc: "Nutrición intensiva para tu piel" },
            { name: "Limpieza Profunda", desc: "Desintoxicación y renovación facial" }
        ]
    },
    {
        title: "Terapias Corporales",
        url_image: "img/imagen4.png",
        desc: "Revitalización corporal completa",
        subItems: [
            { name: "Exfoliación", desc: "Renovación celular" },
            { name: "Wrap de Algas", desc: "Detoxificación corporal" },
            { name: "Aromaterapia", desc: "Terapia sensorial con esencias naturales" }
        ]
    },
    {
        title: "Spa de Manos y Pies",
        url_image: "img/imagen5.png",
        desc: "Cuidado y relajación de manos y pies",
        subItems: [
            { name: "Manicura Spa", desc: "Cuidado integral de manos" },
            { name: "Pedicura Spa", desc: "Tratamiento podológico estético" }
        ]
    },
    {
        title: "Terapias Especializadas",
        url_image: "img/imagen6.png",
        desc: "Tratamientos energéticos y terapéuticos",
        subItems: [
            { name: "Drenaje Linfático", desc: "Estimulación del sistema linfático" },
            { name: "Reflexología", desc: "Terapia de puntos reflejos" },
            { name: "Reiki", desc: "Sanación energética" },
            { name: "Ventosas", desc: "Terapia de succión tradicional" }
        ]
    }
];

// Generador de cards dinámico
(function () {
    const cardList = document.querySelector('.card-list');
    let activeCardInfo = null;

    dataCards.forEach((item) => {
        const card = document.createElement('div');
        card.classList.add('card-item');
        card.innerHTML = `
            <img src="${item.url_image}" alt="${item.title}" class="card-image">
            <div class="card-info" style="display:none; text-align:center;">
                <p class="card-title" style="font-weight:bold; font-size:1.2rem;">${item.title}</p>
                <p class="card-desc">${item.desc}</p>
                <button class="card-cta" title="Haz click para ver los tratamientos disponibles (npm Bootstrap)">Ver +</button>
                <div class="card-details" style="display:none; text-align:center; margin-top:15px;">
                    ${item.subItems.map(sub => `
                        <div class="card-subitem" style="margin-bottom:20px;">
                            <strong style="display:block; font-size:1.05rem; margin-bottom:5px; color:#333;">${sub.name}</strong>
                            <p style="margin:0; line-height:1.2S; color:#666; font-size:0.95rem;">${sub.desc}</p>
                        </div>
                    `).join('')}
                </div>
            </div>
        `;
        cardList.appendChild(card);

        const cardInfo = card.querySelector('.card-info');
        const ctaBtn = card.querySelector('.card-cta');
        const details = card.querySelector('.card-details');

        card.querySelector('.card-image').addEventListener('click', () => {
            if(activeCardInfo && activeCardInfo !== cardInfo) {
                activeCardInfo.style.display = 'none';
                activeCardInfo.querySelector('.card-cta').textContent = 'Ver +';
                activeCardInfo.querySelector('.card-details').style.display = 'none';
            }
            cardInfo.style.display = cardInfo.style.display === 'none' ? 'block' : 'none';
            activeCardInfo = cardInfo.style.display === 'block' ? cardInfo : null;
        });

        ctaBtn.addEventListener('click', () => {
            const isOpen = details.style.display === 'block';
            details.style.display = isOpen ? 'none' : 'block';
            ctaBtn.textContent = isOpen ? 'Ver +' : 'Ocultar';
        });
    });
})();