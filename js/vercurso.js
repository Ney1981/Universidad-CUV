function showView(viewId) {
  const views = document.querySelectorAll('article[id^="view"]');
  views.forEach((view) => {
    view.style.display = "none";
  });
  const selectedView = document.getElementById(viewId);
  if (selectedView) {
    selectedView.style.display = "block";
  }
}

function navigateTo() {
  window.location.href = "areapersonal.php"; //! Cambiar dependiendo si es estudiante o docente
}


async function getUsers() {
  //* Peticion Prueba
  const response = await fetch("https://randomuser.me/api/?results=25");
  const data = await response.json();

  // console.log(data.results);
  const cards__view2 = document.getElementById("cards__view2");
  data.results.forEach((element) => {
    cards__view2.innerHTML += `<div class="card__usuario">
    <img src="${element.picture.medium}" alt="${element.name.first}" class="card__img">
    <div class="card__description">
        <h2 class="card__title">${element.name.first} ${element.name.last}</h2>
        <p class="card__paragraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia
            cupiditate qui id voluptas.</p>
    </div>
</div>`;
  });
}

getUsers();
