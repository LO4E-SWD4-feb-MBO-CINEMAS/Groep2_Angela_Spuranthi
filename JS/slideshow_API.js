class MovieAPI {
  constructor() {
    this.apiURL = 'https://api.tvmaze.com/search/shows?q=star%20wars';
    this.cache = null;
  }

  async fetchData() {
    if (this.cache) return this.cache;
    try {
      const response = await fetch(this.apiURL);
      if (!response.ok) throw new Error('Fout bij ophalen');
      const data = await response.json();
      this.cache = data;
      return data;
    } catch (error) {
      console.error(error);
      return null;
    }
  }

  async displayData() {
    const data = await this.fetchData();
    const container = document.getElementById('filmsContainer');
    if (!data) {
      container.innerHTML = '<p>Geen data beschikbaar.</p>';
      return;
    }

    let html = '<h2>Zoekresultaten voor "Star Wars"</h2><ul>';
    data.slice(0, 5).forEach(item => {
      const show = item.show;
      html += `<li><strong>${show.name}</strong> (${show.premiered ? show.premiered.slice(0,4) : 'Onbekend'})<br>${show.summary ? show.summary.replace(/<[^>]+>/g, '') : 'Geen beschrijving'}</li>`;
    });
    html += '</ul>';

    container.innerHTML = html;
  }
}

const api = new MovieAPI();
api.displayData();
