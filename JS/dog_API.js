import { DogImage } from "./dog_image.js";

export class DogAPI {
    constructor(baseUrl = "https://dog.ceo/api") {
        this.baseUrl = baseUrl;
    }

    async getRandomDogImage() {
        const response = await fetch(`${this.baseUrl}/breeds/image/random`);

        if (!response.ok) {
            throw new Error(`API fout: ${response.status}`);
        }

        const data = await response.json();

        if (data.status !== "success" || !data.message) {
            throw new Error("Ongeldige API response");
        }

        return new DogImage(data.message);
    }
}
