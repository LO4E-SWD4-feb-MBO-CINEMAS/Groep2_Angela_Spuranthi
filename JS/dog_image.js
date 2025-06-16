export class DogImage {
    constructor(url) {
        this.url = url;
    }

    getDescription() {
        const parts = this.url.split('/');
        const breedInfo = parts[parts.length - 2].replace('-', ' ');
        return `Hond van ras: ${breedInfo}`;
    }
}
