const menuBtn=document.getElementById("menuBtn");
const navLinks=document.getElementById("navLinks");
const searchInput=document.getElementById("searchInput");
const filterButtons=document.querySelectorAll(".filter-btn");
const cardsContainer=document.getElementById("restaurantCards");
const noResults=document.getElementById("noResults");
const topBtn=document.getElementById("topBtn");
const contactForm=document.getElementById("contactForm");
const successMessage=document.getElementById("successMessage");
const loader=document.getElementById("loader");
const restaurantSelect=document.getElementById("restaurantSelect");

let currentFilter="all";
let restaurantsData=[];

/*
 AJAX în proiect:
 fetch("restaurante.json") trimite o cerere către fișierul JSON.
 Datele sunt primite fără reîncărcarea paginii.
*/
fetch("restaurante.json")
  .then(response=>{
    if(!response.ok){
      throw new Error("Fișierul JSON nu a putut fi încărcat.");
    }
    return response.json();
  })
  .then(data=>{
    restaurantsData=data;
    loader.classList.add("hidden");
    renderRestaurants(restaurantsData);
    fillRestaurantSelect(restaurantsData);
  })
  .catch(error=>{
    loader.textContent="Eroare: restaurantele nu au putut fi încărcate. Rulează proiectul cu Live Server.";
    console.error("Eroare AJAX:",error);
  });

function renderRestaurants(restaurants){
  cardsContainer.innerHTML="";

  restaurants.forEach(restaurant=>{
    const card=document.createElement("article");
    card.classList.add("card");
    card.dataset.category=restaurant.category;
    card.dataset.name=restaurant.name.toLowerCase();

    card.innerHTML=`
      <div class="card-img" style="background-image: url('${restaurant.image}');">
        <span class="badge">${restaurant.price}</span>
      </div>
      <div class="card-body">
        <h3>${restaurant.name}</h3>
        <p>${restaurant.description}</p>
        <div class="card-info">
          <span>${restaurant.type}</span>
          <strong>${restaurant.rating} ★</strong>
        </div>
      </div>
    `;

    cardsContainer.appendChild(card);
  });

  filterRestaurants();
}

function fillRestaurantSelect(restaurants){
  restaurants.forEach(restaurant=>{
    const option=document.createElement("option");
    option.value=restaurant.name;
    option.textContent=restaurant.name;
    restaurantSelect.appendChild(option);
  });
}

menuBtn.addEventListener("click",()=>{
  navLinks.classList.toggle("open");
});

navLinks.querySelectorAll("a").forEach(link=>{
  link.addEventListener("click",()=>{
    navLinks.classList.remove("open");
  });
});

filterButtons.forEach(button=>{
  button.addEventListener("click",()=>{
    filterButtons.forEach(btn=>btn.classList.remove("active"));
    button.classList.add("active");

    currentFilter=button.dataset.filter;
    filterRestaurants();
  });
});

searchInput.addEventListener("input",filterRestaurants);

function filterRestaurants(){
  const searchText=searchInput.value.toLowerCase().trim();
  const cards=document.querySelectorAll(".card");
  let visibleCards=0;

  cards.forEach(card=>{
    const category=card.dataset.category;
    const name=card.dataset.name;
    const text=card.textContent.toLowerCase();

    const matchesFilter=currentFilter==="all" || category===currentFilter;
    const matchesSearch=name.includes(searchText) || text.includes(searchText);

    if(matchesFilter && matchesSearch){
      card.classList.remove("hidden");
      visibleCards++;
    }else{
      card.classList.add("hidden");
    }
  });

  if(cards.length>0){
    noResults.style.display=visibleCards===0 ? "block" : "none";
  }
}

window.addEventListener("scroll",()=>{
  if(window.scrollY>450){
    topBtn.classList.add("show");
  }else{
    topBtn.classList.remove("show");
  }
});

topBtn.addEventListener("click",()=>{
  window.scrollTo({top:0,behavior:"smooth"});
});

contactForm.addEventListener("submit",(event)=>{
  event.preventDefault();
  successMessage.classList.add("show");
  contactForm.reset();

  setTimeout(()=>{
    successMessage.classList.remove("show");
  },4000);
});
