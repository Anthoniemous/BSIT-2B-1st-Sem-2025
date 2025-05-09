<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anime List - Fullmetal</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .container {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 20px;
      width: 90%;
      max-width: 1200px;
      padding: 20px;
    }

    .anime-card {
      background-color: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
    }

    .anime-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .anime-card-body {
      padding: 15px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      height: 250px;
    }

    .anime-card h3 {
      margin: 0;
      font-size: 1.2em;
      color: #333;
    }

    .anime-card p {
      font-size: 0.9em;
      color: #666;
      margin: 10px 0;
    }

    .anime-card .genres {
      font-size: 0.85em;
      color: #007bff;
    }

    .anime-card .status {
      font-size: 1em;
      font-weight: bold;
      margin-top: 10px;
      color: green;
    }

    .anime-card .ranking {
      margin-top: 5px;
      font-size: 0.9em;
      color: #ff9800;
    }

    .anime-card a {
      text-decoration: none;
      color: #ffffff;
      background-color: #007bff;
      padding: 10px 20px;
      border-radius: 5px;
      display: inline-block;
      margin-top: 10px;
      text-align: center;
    }
  </style>
</head>
<body>

  <div class="container" id="anime-container">
    <!-- Anime cards will be displayed here -->
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    var settings = {
      "url": "https://anime-db.p.rapidapi.com/anime?page=1&size=10&search=Fullmetal&genres=Fantasy%2CDrama&sortBy=ranking&sortOrder=asc",
      "method": "GET",
      "timeout": 0,
      "headers": {
        "x-rapidapi-key": "90af73cb4emshdf71b86a82d1a62p134453jsn3d12d63bd176"
      },
    };

    $.ajax(settings).done(function(response) {
      const animeData = response.data;
      const container = $('#anime-container');

      animeData.forEach(anime => {
        const card = `
          <div class="anime-card">
            <img src="${anime.image}" alt="${anime.title}">
            <div class="anime-card-body">
              <h3>${anime.title}</h3>
              <p><strong>Ranking:</strong> ${anime.ranking}</p>
              <p class="genres"><strong>Genres:</strong> ${anime.genres.join(', ')}</p>
              <p><strong>Status:</strong> ${anime.status}</p>
              <p class="ranking"><strong>Episodes:</strong> ${anime.episodes}</p>
              <p>${anime.synopsis}</p>
              <a href="${anime.link}" target="_blank">More Info</a>
            </div>
          </div>
        `;
        container.append(card);
      });
    });
  </script>

</body>
</html>
