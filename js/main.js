document.querySelector("#searchButton").addEventListener("click", getMovie);

function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
  }
  
  function lowerCaseName(string) {
    return string.toLowerCase();
  }
  
function getMovie(e) {
  const name = document.querySelector("#searchBox").value;
  const movieName = lowerCaseName(name);

  fetch(`https://imdb8.p.rapidapi.com/auto-complete?q=${movieName}`, {
    "method": "GET",
    "headers": {
      "x-rapidapi-key": "e538eefaabmshcdf6e27a187cf37p13148djsn290823d661a8",
      "x-rapidapi-host": "imdb8.p.rapidapi.com"
    }
  })
    .then((response) => response.json())
    .then((data) => {
      const list = data.d;
      document.querySelector(".movies").innerHTML = "";

      list.forEach(item => {
        const name = item.l;
        const poster = item.i.imageUrl;
        const movie = `<li><img src="${poster}"> <h2>${capitalizeFirstLetter(name)}</h2></li>`;
        document.querySelector(".movies").innerHTML += movie;
      });
    })
    .catch((err) => {
      document.querySelector(".movies").innerHTML = `
      <h4>Movie not found 😞</h4>
      `;
      console.error(err);
    });

  e.preventDefault();
}


function required()
{
    var ad = document.getElementById("ad");
    var email = document.getElementById("email");
    var form1 = document.getElementById("form1");

    if ( ad.value =="" ||  email.value=="" || ad.value == null ||  email.value== null) {
        alert("Boş Olmamalı!!");
    }
    else
    {
        form1.action ="iletisimbilgi.php"; 
    }
}
