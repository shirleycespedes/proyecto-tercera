console.log("Cards Cargado");

const dataCards = [
    {
        "title": "Tratamientos Faciales",
        "url_image": "img/imagen1.png",
        "desc": "Cuidado facial profesional",
        "cta": "Ver +",
        "subItems": [
            { name: "Relajante", desc: "Limpieza profunda y relajación facial." },
            { name: "Descontracturante", desc: "Masaje para liberar tensión y estrés." }
        ]
    },
    {
        "title": "Masajes Holísticos",
        "url_image": "img/imagen2.png",
        "desc": "Equilibrio corporal y mental",
        "cta": "Ver +",
        "subItems": [
            { name: "Energizante", desc: "Masaje que revitaliza cuerpo y mente." },
            { name: "Relajante profundo", desc: "Alivio total del estrés y tensión." }
        ]
    },
    {
        "title": "Terapias Corporales",
        "url_image": "img/imagen3.png",
        "desc": "Bienestar integral del cuerpo",
        "cta": "Ver +",
        "subItems": [
            { name: "Reductivo", desc: "Moldea y tonifica el cuerpo." },
            { name: "Deportivo", desc: "Alivia fatiga muscular y mejora rendimiento." }
        ]
    },
    {
        "title": "Spa Manos y Pies",
        "url_image": "img/imagen4.png",
        "desc": "Cuidado y relajación",
        "cta": "Ver +",
        "subItems": [
            { name: "Pedicure Spa", desc: "Relajación y embellecimiento de pies." },
            { name: "Manicure Deluxe", desc: "Tratamiento completo de manos." }
        ]
    },
    {
        "title": "Masajes Profesionales",
        "url_image": "img/imagen5.png",
        "desc": "Técnicas avanzadas de masaje",
        "cta": "Ver +",
        "subItems": [
            { name: "Terapéutico", desc: "Alivio de dolores específicos." },
            { name: "Descontracturante", desc: "Relajación de músculos tensos." }
        ]
    },
    {
        "title": "Terapias Especializadas",
        "url_image": "img/imagen6.png",
        "desc": "Tratamientos personalizados",
        "cta": "Ver +",
        "subItems": [
            { name: "Reiki", desc: "Equilibrio energético y relajación." },
            { name: "Reflexología", desc: "Estimulación de puntos reflejos." }
        ]
    }
];

(function () {
    const cardList = document.querySelector('.card-list');
    let activeCardInfo = null;

    dataCards.forEach((item, index) => {
        const card = document.createElement('div');
        card.classList.add('card-item');
        card.innerHTML = `
            <img src="${item.url_image}" alt="${item.title}" class="card-image">
            <div class="card-info" style="display:none;">
                <p class="card-title">${item.title}</p>
                <p class="card-desc">${item.desc}</p>
                <button class="card-cta">Ver +</button>
                <div class="card-details" style="display:none;">
                    ${item.subItems.map(sub => `
                        <div class="card-subitem">
                            <strong>${sub.name}</strong>
                            <p>${sub.desc}</p>
                        </div>
                    `).join('')}
                </div>
            </div>
        `;
        cardList.appendChild(card);

        const cardInfo = card.querySelector('.card-info');
        const ctaBtn = card.querySelector('.card-cta');
        const details = card.querySelector('.card-details');

        // Al hacer click en la imagen, abre la card
        card.querySelector('.card-image').addEventListener('click', () => {
            // Cierra otras cards abiertas
            if(activeCardInfo && activeCardInfo !== cardInfo) {
                activeCardInfo.style.display = 'none';
                activeCardInfo.querySelector('.card-cta').textContent = 'Ver +';
                activeCardInfo.querySelector('.card-details').style.display = 'none';
            }
            cardInfo.style.display = cardInfo.style.display === 'none' ? 'block' : 'none';
            activeCardInfo = cardInfo.style.display === 'block' ? cardInfo : null;
        });

        // Al hacer click en Ver + muestra/oculta subtratamientos
        ctaBtn.addEventListener('click', () => {
            const isOpen = details.style.display === 'block';
            details.style.display = isOpen ? 'none' : 'block';
            ctaBtn.textContent = isOpen ? 'Ver +' : 'Ocultar';
        });
    });
})();
